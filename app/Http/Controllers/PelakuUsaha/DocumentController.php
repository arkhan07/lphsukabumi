<?php

namespace App\Http\Controllers\PelakuUsaha;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the user's documents.
     */
    public function index()
    {
        $user = auth()->user();

        // Get all documents from user's submissions
        $documents = Document::whereHas('submission', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
        ->with(['submission', 'uploader'])
        ->where('is_latest_version', true)
        ->orderBy('created_at', 'desc')
        ->paginate(15);

        return view('pelaku-usaha.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new document.
     */
    public function create()
    {
        $user = auth()->user();

        // Get user's submissions
        $submissions = $user->submissions()->get();

        // Document types with categories
        $documentTypes = [
            'Perusahaan' => [
                'company_profile' => 'Profil Perusahaan',
                'business_permit' => 'Izin Usaha',
                'nib' => 'NIB',
                'npwp' => 'NPWP',
            ],
            'Produk' => [
                'product_specification' => 'Spesifikasi Produk',
                'process_flow' => 'Alur Proses Produksi',
                'facility_layout' => 'Layout Fasilitas',
                'product_photo' => 'Foto Produk',
            ],
            'Material' => [
                'halal_certificate_material' => 'Sertifikat Halal Material',
                'halal_certificate_supplier' => 'Sertifikat Halal Supplier',
                'ingredient_list' => 'Daftar Bahan Baku',
                'material_safety_data_sheet' => 'MSDS',
            ],
            'Sertifikasi' => [
                'haccp_certificate' => 'Sertifikat HACCP',
                'gmp_certificate' => 'Sertifikat GMP',
                'iso_certificate' => 'Sertifikat ISO',
                'lab_test_result' => 'Hasil Uji Lab',
            ],
            'Lainnya' => [
                'contract' => 'Kontrak',
                'agreement' => 'Perjanjian',
                'statement_letter' => 'Surat Pernyataan',
                'other' => 'Lainnya',
            ],
        ];

        return view('pelaku-usaha.documents.create', compact('submissions', 'documentTypes'));
    }

    /**
     * Store a newly created document in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'submission_id' => 'required|exists:submissions,id',
            'document_type' => 'required|string',
            'document_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'document_file' => 'required|file|max:10240', // 10MB max
            'valid_from' => 'nullable|date',
            'valid_until' => 'nullable|date|after:valid_from',
        ]);

        // Verify user owns this submission
        $submission = auth()->user()->submissions()->findOrFail($request->submission_id);

        // Handle file upload
        $file = $request->file('document_file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('documents', $fileName, 'public');

        // Determine document category
        $category = $this->getCategoryFromType($request->document_type);

        // Create document
        Document::create([
            'submission_id' => $submission->id,
            'uploaded_by' => auth()->id(),
            'document_type' => $request->document_type,
            'document_category' => $category,
            'document_name' => $request->document_name,
            'description' => $request->description,
            'file_path' => $filePath,
            'file_name' => $fileName,
            'file_extension' => $file->getClientOriginalExtension(),
            'file_size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'status' => 'uploaded',
            'valid_from' => $request->valid_from,
            'valid_until' => $request->valid_until,
        ]);

        return redirect()->route('pelaku_usaha.documents.index')
            ->with('success', 'Dokumen berhasil diunggah');
    }

    /**
     * Display the specified document.
     */
    public function show(Document $document)
    {
        // Ensure user owns this document through their submission
        if ($document->submission->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $document->load(['submission', 'uploader', 'reviewer']);

        return view('pelaku-usaha.documents.show', compact('document'));
    }

    /**
     * Download the specified document.
     */
    public function download(Document $document)
    {
        // Ensure user owns this document through their submission
        if ($document->submission->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Increment download count
        $document->increment('download_count');

        return Storage::disk('public')->download($document->file_path, $document->file_name);
    }

    /**
     * Remove the specified document from storage.
     */
    public function destroy(Document $document)
    {
        // Ensure user owns this document through their submission
        if ($document->submission->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // Delete file from storage
        Storage::disk('public')->delete($document->file_path);

        // Delete document record
        $document->delete();

        return redirect()->route('pelaku_usaha.documents.index')
            ->with('success', 'Dokumen berhasil dihapus');
    }

    /**
     * Get category from document type.
     */
    private function getCategoryFromType(string $type): string
    {
        $categoryMap = [
            'company_profile' => 'company',
            'business_permit' => 'company',
            'nib' => 'company',
            'npwp' => 'company',
            'product_specification' => 'product',
            'process_flow' => 'product',
            'facility_layout' => 'product',
            'product_photo' => 'product',
            'halal_certificate_material' => 'material',
            'halal_certificate_supplier' => 'material',
            'ingredient_list' => 'material',
            'material_safety_data_sheet' => 'material',
            'haccp_certificate' => 'product',
            'gmp_certificate' => 'product',
            'iso_certificate' => 'product',
            'lab_test_result' => 'product',
            'contract' => 'general',
            'agreement' => 'general',
            'statement_letter' => 'general',
            'other' => 'general',
        ];

        return $categoryMap[$type] ?? 'general';
    }
}
