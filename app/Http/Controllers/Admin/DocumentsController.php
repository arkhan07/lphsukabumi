<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    /**
     * Display a listing of documents
     */
    public function index(Request $request)
    {
        $query = Document::with(['submission', 'uploader', 'reviewer']);

        // Filter by document type
        if ($request->filled('document_type')) {
            $query->where('document_type', $request->document_type);
        }

        // Filter by document category
        if ($request->filled('document_category')) {
            $query->where('document_category', $request->document_category);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('document_name', 'like', "%{$search}%")
                  ->orWhere('file_name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $documents = $query->latest()->paginate(15);

        // Statistics
        $stats = [
            'total' => Document::count(),
            'uploaded' => Document::where('status', 'uploaded')->count(),
            'pending' => Document::where('status', 'pending_review')->count(),
            'approved' => Document::where('status', 'approved')->count(),
            'rejected' => Document::where('status', 'rejected')->count(),
            'revision' => Document::where('status', 'revision_required')->count(),
        ];

        return view('admin.documents.index', compact('documents', 'stats'));
    }

    /**
     * Show upload form
     */
    public function create()
    {
        $submissions = Submission::whereIn('status', ['submitted', 'screening', 'verification'])->get();

        return view('admin.documents.upload', compact('submissions'));
    }

    /**
     * Store a newly uploaded document
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'document_type' => 'required|string',
            'document_name' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:10240',
            'description' => 'nullable|string',
            'is_required' => 'nullable|boolean',
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('documents', $fileName, 'public');

                $validated['file_name'] = $fileName;
                $validated['file_path'] = $filePath;
                $validated['file_size'] = $file->getSize();
                $validated['mime_type'] = $file->getMimeType();
            }

            $validated['uploaded_by'] = auth()->id();
            $validated['status'] = 'pending_review';
            $validated['is_required'] = $validated['is_required'] ?? false;
            $validated['version'] = 1;
            $validated['is_latest_version'] = true;
            $validated['document_category'] = 'general';
            $validated['file_extension'] = $file->getClientOriginalExtension();

            $document = Document::create($validated);

            DB::commit();

            return redirect()->route('admin.documents.index')
                           ->with('success', 'Dokumen berhasil diupload');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal mengupload dokumen: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified document
     */
    public function show(Document $document)
    {
        $document->load(['submission', 'uploader', 'reviewer', 'parentDocument', 'childDocuments']);

        return view('admin.documents.show', compact('document'));
    }

    /**
     * Show edit form for document
     */
    public function edit(Document $document)
    {
        $submissions = Submission::whereIn('status', ['submitted', 'screening', 'verification'])->get();

        return view('admin.documents.edit', compact('document', 'submissions'));
    }

    /**
     * Update document metadata
     */
    public function update(Request $request, Document $document)
    {
        $validated = $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'document_type' => 'required|string',
            'document_category' => 'required|string',
            'document_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_required' => 'nullable|boolean',
            'valid_from' => 'nullable|date',
            'valid_until' => 'nullable|date|after_or_equal:valid_from',
            'is_public' => 'nullable|boolean',
            'tags' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:10240',
        ]);

        DB::beginTransaction();
        try {
            // Handle file replacement if new file uploaded
            if ($request->hasFile('file')) {
                // Delete old file
                if (Storage::disk('public')->exists($document->file_path)) {
                    Storage::disk('public')->delete($document->file_path);
                }

                // Upload new file
                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('documents', $fileName, 'public');

                $validated['file_name'] = $fileName;
                $validated['file_path'] = $filePath;
                $validated['file_size'] = $file->getSize();
                $validated['mime_type'] = $file->getMimeType();
                $validated['file_extension'] = $file->getClientOriginalExtension();

                // Increment version if file changed
                $validated['version'] = $document->version + 1;
            }

            $validated['is_required'] = $validated['is_required'] ?? false;
            $validated['is_public'] = $validated['is_public'] ?? false;

            $document->update($validated);

            DB::commit();

            return redirect()->route('admin.documents.show', $document)
                           ->with('success', 'Dokumen berhasil diperbarui');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal memperbarui dokumen: ' . $e->getMessage());
        }
    }

    /**
     * Download document
     */
    public function download(Document $document)
    {
        if (!Storage::disk('public')->exists($document->file_path)) {
            return back()->with('error', 'File tidak ditemukan');
        }

        // Increment download count
        $document->increment('download_count');

        return Storage::disk('public')->download($document->file_path, $document->file_name);
    }

    /**
     * Show verification form
     */
    public function verify(Document $document)
    {
        return view('admin.documents.verify', compact('document'));
    }

    /**
     * Approve document
     */
    public function approve(Request $request, Document $document)
    {
        $validated = $request->validate([
            'review_notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $document->update([
                'status' => 'approved',
                'reviewed_by' => auth()->id(),
                'reviewed_at' => now(),
                'review_notes' => $validated['review_notes'] ?? null,
            ]);

            // Update submission document completion if needed
            $this->updateSubmissionDocumentStatus($document->submission_id);

            DB::commit();

            return back()->with('success', 'Dokumen berhasil disetujui');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menyetujui dokumen: ' . $e->getMessage());
        }
    }

    /**
     * Reject document
     */
    public function reject(Request $request, Document $document)
    {
        $validated = $request->validate([
            'review_notes' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $document->update([
                'status' => 'rejected',
                'reviewed_by' => auth()->id(),
                'reviewed_at' => now(),
                'review_notes' => $validated['review_notes'],
            ]);

            // Update submission document completion if needed
            $this->updateSubmissionDocumentStatus($document->submission_id);

            DB::commit();

            return back()->with('success', 'Dokumen berhasil ditolak');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menolak dokumen: ' . $e->getMessage());
        }
    }

    /**
     * Request revision for document
     */
    public function requestRevision(Request $request, Document $document)
    {
        $validated = $request->validate([
            'review_notes' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $document->update([
                'status' => 'revision_required',
                'reviewed_by' => auth()->id(),
                'reviewed_at' => now(),
                'review_notes' => $validated['review_notes'],
            ]);

            // Update submission document completion if needed
            $this->updateSubmissionDocumentStatus($document->submission_id);

            DB::commit();

            return back()->with('success', 'Revisi dokumen berhasil diminta');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal meminta revisi dokumen: ' . $e->getMessage());
        }
    }

    /**
     * Delete document
     */
    public function destroy(Document $document)
    {
        DB::beginTransaction();
        try {
            // Delete file from storage
            if (Storage::disk('public')->exists($document->file_path)) {
                Storage::disk('public')->delete($document->file_path);
            }

            $submissionId = $document->submission_id;
            $document->delete();

            // Update submission document status
            $this->updateSubmissionDocumentStatus($submissionId);

            DB::commit();

            return redirect()->route('admin.documents.index')
                           ->with('success', 'Dokumen berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menghapus dokumen: ' . $e->getMessage());
        }
    }

    /**
     * Update submission document completion status
     */
    private function updateSubmissionDocumentStatus($submissionId)
    {
        $submission = Submission::find($submissionId);
        if ($submission) {
            $totalRequired = Document::where('submission_id', $submissionId)
                ->where('is_required', true)
                ->count();

            $approvedRequired = Document::where('submission_id', $submissionId)
                ->where('is_required', true)
                ->where('status', 'approved')
                ->count();

            $totalDocuments = Document::where('submission_id', $submissionId)->count();
            $approvedDocuments = Document::where('submission_id', $submissionId)
                ->where('status', 'approved')
                ->count();

            $submission->documents_completed = ($totalRequired > 0 && $totalRequired === $approvedRequired);
            $submission->completeness_percentage = $totalDocuments > 0
                ? round(($approvedDocuments / $totalDocuments) * 100)
                : 0;
            $submission->save();
        }
    }
}
