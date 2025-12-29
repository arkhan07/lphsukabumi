<?php

namespace App\Http\Controllers\PelakuUsaha;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\SubmissionBranch;
use App\Models\Product;
use App\Models\Region;
use App\Models\BusinessType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubmissionController extends Controller
{
    /**
     * Show the form for creating a new submission.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $regions = Region::orderBy('name')->get();
        $businessTypes = BusinessType::orderBy('name')->get();

        return view('pelaku-usaha.submissions.create', compact('regions', 'businessTypes'));
    }

    /**
     * Store a newly created submission in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Section A: Identitas Pelaku Usaha
            'owner_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'company_phone' => 'required|string|max:20',
            'company_email' => 'required|email|max:255',
            'npwp' => 'nullable|string|max:20',
            'nib' => 'nullable|string|max:20',
            'business_scale' => 'required|in:Mikro,Kecil,Menengah,Besar',

            // Section B: Informasi Usaha dan Layanan
            'region_id' => 'required|exists:regions,id',
            'business_type_id' => 'required|exists:business_types,id',
            'service_type' => 'required|string|max:255',
            'product_type' => 'required|string|max:255',
            'product_count' => 'required|integer|min:1',
            'production_site_count' => 'required|integer|min:1',
            'branch_count' => 'required|integer|min:0',

            // Section C: Alamat
            'company_address' => 'required|string',
            'production_location' => 'nullable|string',
            'branches' => 'nullable|array',
            'branches.*' => 'nullable|string',

            // Section D: Penyelia Halal dan Referensi
            'has_halal_supervisor' => 'required|boolean',
            'referral_source' => 'nullable|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            // Generate submission number
            $submissionNumber = $this->generateSubmissionNumber();

            // Create the submission
            $submission = Submission::create([
                'submission_number' => $submissionNumber,
                'user_id' => auth()->id(),
                'owner_name' => $validated['owner_name'],
                'company_name' => $validated['company_name'],
                'company_phone' => $validated['company_phone'],
                'company_email' => $validated['company_email'],
                'company_address' => $validated['company_address'],
                'region_id' => $validated['region_id'],
                'business_type_id' => $validated['business_type_id'],
                'business_scale' => $validated['business_scale'],
                'service_type' => $validated['service_type'],
                'product_type' => $validated['product_type'],
                'product_count' => $validated['product_count'],
                'production_site_count' => $validated['production_site_count'],
                'branch_count' => $validated['branch_count'],
                'npwp' => $validated['npwp'] ?? null,
                'nib' => $validated['nib'] ?? null,
                'production_location' => $validated['production_location'] ?? null,
                'has_halal_supervisor' => $validated['has_halal_supervisor'],
                'referral_source' => $validated['referral_source'] ?? null,
                'status' => 'draft',
                'submission_date' => now(),
                'profile_completed' => true,
            ]);

            // Create branches if any
            if (!empty($validated['branches'])) {
                foreach ($validated['branches'] as $branchAddress) {
                    if (!empty(trim($branchAddress))) {
                        SubmissionBranch::create([
                            'submission_id' => $submission->id,
                            'branch_address' => $branchAddress,
                        ]);
                    }
                }
            }

            // Auto-create products based on product_count
            $this->createProducts($submission, $validated['product_count'], $validated['product_type']);

            DB::commit();

            return redirect()
                ->route('pelaku_usaha.dashboard')
                ->with('success', 'Permohonan sertifikasi berhasil dibuat dengan nomor: ' . $submissionNumber);

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Terjadi kesalahan saat menyimpan permohonan: ' . $e->getMessage()]);
        }
    }

    /**
     * Generate unique submission number
     *
     * @return string
     */
    private function generateSubmissionNumber()
    {
        $year = date('Y');
        $month = date('m');

        // Format: LPH-YYYYMM-XXXXX
        $prefix = 'LPH-' . $year . $month . '-';

        // Get last submission number for this month
        $lastSubmission = Submission::where('submission_number', 'like', $prefix . '%')
            ->orderBy('submission_number', 'desc')
            ->first();

        if ($lastSubmission) {
            // Extract the sequence number and increment
            $lastSequence = (int) substr($lastSubmission->submission_number, -5);
            $newSequence = $lastSequence + 1;
        } else {
            $newSequence = 1;
        }

        return $prefix . str_pad($newSequence, 5, '0', STR_PAD_LEFT);
    }

    /**
     * Auto-create products for the submission
     *
     * @param  \App\Models\Submission  $submission
     * @param  int  $productCount
     * @param  string  $productType
     * @return void
     */
    private function createProducts(Submission $submission, int $productCount, string $productType)
    {
        for ($i = 1; $i <= $productCount; $i++) {
            Product::create([
                'submission_id' => $submission->id,
                'product_name' => $productType . ' ' . $i,
                'description' => 'Produk otomatis dari permohonan',
                'is_active' => true,
            ]);
        }
    }
}
