<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Penawaran - {{ $invoice->invoice_number }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            font-size: 11pt;
            line-height: 1.4;
            color: #000;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            text-align: center;
            border-bottom: 3px solid #166F61;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header .logo {
            max-width: 120px;
            margin-bottom: 5px;
        }

        .header h1 {
            font-size: 16pt;
            font-weight: bold;
            margin: 5px 0;
            color: #166F61;
        }

        .header .address {
            font-size: 9pt;
            margin: 5px 0;
        }

        .header .website {
            color: #166F61;
            font-weight: bold;
        }

        /* Document Info */
        .doc-info {
            text-align: right;
            margin-bottom: 15px;
            font-size: 10pt;
        }

        /* Title */
        .title {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            text-decoration: underline;
            margin: 20px 0;
        }

        /* Client Info */
        .client-info {
            display: table;
            width: 100%;
            margin-bottom: 20px;
            font-size: 10pt;
        }

        .client-info .row {
            display: table-row;
        }

        .client-info .label {
            display: table-cell;
            width: 80px;
            padding: 3px 0;
        }

        .client-info .colon {
            display: table-cell;
            width: 10px;
        }

        .client-info .value {
            display: table-cell;
            font-weight: bold;
        }

        .client-info .right-col {
            display: table-cell;
            width: 250px;
            padding-left: 40px;
        }

        .client-info .right-label {
            display: inline-block;
            width: 90px;
        }

        /* Price Table */
        .price-header {
            background: #f0f0f0;
            padding: 8px;
            font-weight: bold;
            border: 1px solid #000;
            margin-top: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
            font-size: 10pt;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background: #f0f0f0;
            font-weight: bold;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        /* Additional Info */
        .info-box {
            border: 1px solid #000;
            padding: 8px;
            margin: 10px 0;
            font-size: 10pt;
        }

        /* Terms & Conditions */
        .terms {
            margin: 15px 0;
            font-size: 9pt;
        }

        .terms .label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .terms ol, .terms ul {
            margin-left: 20px;
        }

        .terms li {
            margin: 3px 0;
        }

        /* Signature */
        .signature-section {
            margin-top: 40px;
            display: table;
            width: 100%;
        }

        .signature-box {
            display: table-cell;
            width: 48%;
            text-align: center;
        }

        .signature-box.right {
            text-align: right;
            vertical-align: top;
        }

        .signature-line {
            margin-top: 80px;
            border-top: 1px solid #000;
            display: inline-block;
            width: 200px;
        }

        /* Page Break */
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>LEMBAGA PEMERIKSA HALAL</h1>
            <h1>DOA BANGSA</h1>
            <div class="address">
                Jl. RE Martadinata No 60 A Ruko No 4, Kelurahan Kebonjati, Kecamatan Cikole, Kota Sukabumi, Jawa Barat 43112
            </div>
            <div class="website">halaldoabangsa.id</div>
        </div>

        <!-- Document Info -->
        <div class="doc-info">
            Nomor : {{ $invoice->invoice_number }}<br>
            Tanggal : {{ $invoice->invoice_date->format('d F Y') }}
        </div>

        <!-- Title -->
        <div class="title">SURAT PENAWARAN</div>

        <!-- Client Info -->
        <div class="client-info">
            <div class="row">
                <div class="label">Klien</div>
                <div class="colon">:</div>
                <div class="value">{{ $invoice->submission->company_name ?? $invoice->user->name }}</div>
                <div class="right-col">
                    <span class="right-label">Referensi</span> : {{ $invoice->submission->submission_number ?? '-' }}
                </div>
            </div>
            <div class="row">
                <div class="label">Nama</div>
                <div class="colon">:</div>
                <div class="value">{{ $invoice->user->name }}</div>
                <div class="right-col">
                    <span class="right-label">Perihal</span> : Sertifikasi Halal
                </div>
            </div>
            <div class="row">
                <div class="label">Alamat</div>
                <div class="colon">:</div>
                <div class="value">{{ $invoice->submission->company_address ?? '-' }}</div>
                <div class="right-col">
                    <span class="right-label">Jenis Produk</span> : {{ $products_list ?? '-' }}
                </div>
            </div>
        </div>

        <!-- Price Header -->
        <div class="price-header">
            Harga Penawaran per 1 Jenis Pengajuan : Rp. {{ number_format($invoice->total_amount, 0, ',', '.') }}
        </div>

        <!-- Price Table -->
        <table>
            <thead>
                <tr>
                    <th colspan="2">Rincian Biaya Pemeriksaan :<br>Skala Usaha: {{ $invoice->submission->business_scale ?? '-' }}</th>
                    <th>DETAIL</th>
                    <th>HARGA</th>
                    <th>REKENING</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $lineItems = is_string($invoice->line_items) ? json_decode($invoice->line_items, true) : $invoice->line_items;
                @endphp
                @if($lineItems && count($lineItems) > 0)
                    @foreach($lineItems as $index => $item)
                        @if($index == 0)
                            <td rowspan="{{ count($lineItems) + 1 }}"></td>
                            <td rowspan="{{ count($lineItems) + 1 }}"></td>
                        @endif
                        <tr>
                            <td>{{ $index + 1 }}. {{ $item['description'] ?? '' }}</td>
                            <td class="text-right">Rp {{ number_format($item['amount'] ?? 0, 0, ',', '.') }}</td>
                            @if($index == 0)
                                <td rowspan="{{ count($lineItems) + 1 }}">
                                    Pembayaran melalui Rekening<br><br>
                                    Bank: {{ $invoice->bank_name ?? 'BCA' }}<br>
                                    Nama: LPH Doa Bangsa<br>
                                    No: {{ $invoice->bank_account_number ?? '-' }}
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    <tr>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</strong></td>
                    </tr>
                @else
                    <tr>
                        <td colspan="2"></td>
                        <td>1. Biaya audit</td>
                        <td class="text-right">Rp {{ number_format($invoice->subtotal * 0.7, 0, ',', '.') }}</td>
                        <td rowspan="3">
                            Pembayaran melalui Rekening<br><br>
                            Bank: {{ $invoice->bank_name ?? 'BCA' }}<br>
                            Nama: LPH Doa Bangsa<br>
                            No: {{ $invoice->bank_account_number ?? '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>2. Biaya operasional LPH</td>
                        <td class="text-right">Rp {{ number_format($invoice->subtotal * 0.3, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</strong></td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- BPJPH Fee -->
        <div class="info-box">
            <strong>Biaya Pendaftaran BPJPH + Komisi Fatwa = Rp. {{ number_format($bpjph_fee ?? 0, 0, ',', '.') }}</strong>
        </div>

        <div class="info-box">
            Jumlah biaya adalah untuk 1 Kategori
        </div>

        <!-- Terms & Conditions -->
        <div class="terms">
            <div class="label">Ketentuan Penawaran:</div>
            <ol>
                <li>Harga Biaya Audit Halal Lembaga Pemeriksa Halal <strong>Sudah</strong> termasuk PPN 11% dan PPH 2% (LPH Doa Bangsa adalah Lembaga Non PKP, sehingga pihak LPH tidak bisa mengeluarkan bukti pemotongan Pajak karena pajak dikenakan oleh BPJPH).</li>
                <li>Harga <strong>sudah</strong> termasuk biaya <strong>akomodasi auditor</strong>.</li>
                <li>Harga <strong>sudah</strong> termasuk biaya <strong>transportasi auditor</strong>.</li>
                <li>Harga <strong>sudah</strong> termasuk biaya yang dibayarkan melalui BPJPH (Pendaftaran ke BPJPH).</li>
                <li>Harga <strong>tidak</strong> termasuk biaya Pendampingan.</li>
                <li>Harga <strong>tidak</strong> termasuk biaya Uji Lab (bila diperlukan)</li>
                <li>Pembayaran dilakukan 100% saat penawaran disetujui</li>
                <li>Apabila terjadi ketidaksesuaian data jumlah produk, bahan, tempat usaha & data lainnya yang Disampaikan dari pemberi kerja maka akan ada penyesuaian biaya pekerjaan</li>
                <li>Biaya yang sudah dibayarkan tidak dapat dikembalikan.</li>
            </ol>
        </div>

        <div class="terms">
            <div class="label">Lingkup Kerja:</div>
            <ol>
                <li>Pemeriksaan kelengkapan dokumen (Pra Pemeriksaan)</li>
                <li>Pemeriksaan Halal oleh LPH DOA BANGSA dan Komisi Fatwa</li>
                <li>Pembuatan laporan hasil audit (Pasca pemeriksaan)</li>
                <li>Penyampaian hasil audit ke Komisi Fatwa MUI</li>
            </ol>
        </div>

        <div class="terms">
            <table style="border: none;">
                <tr style="border: none;">
                    <td style="border: none; width: 150px;">Rincian Hari Kerja</td>
                    <td style="border: none; width: 10px;">:</td>
                    <td style="border: none;">15 Hari</td>
                </tr>
                <tr style="border: none;">
                    <td style="border: none;">Produk</td>
                    <td style="border: none;">:</td>
                    <td style="border: none;">{{ $products_list ?? '-' }}</td>
                </tr>
                <tr style="border: none;">
                    <td style="border: none;">Fasilitas</td>
                    <td style="border: none;">:</td>
                    <td style="border: none;">{{ $invoice->submission->facilities ?? '-' }}</td>
                </tr>
                <tr style="border: none;">
                    <td style="border: none;">Skala Usaha</td>
                    <td style="border: none;">:</td>
                    <td style="border: none;">{{ $invoice->submission->business_scale ?? '-' }}</td>
                </tr>
            </table>
        </div>

        <!-- Page Break -->
        <div class="page-break"></div>

        <!-- Page 2 Header -->
        <div class="header">
            <h1>LEMBAGA PEMERIKSA HALAL</h1>
            <h1>DOA BANGSA</h1>
            <div class="address">
                Jl. RE Martadinata No 60 A Ruko No 4, Kelurahan Kebonjati, Kecamatan Cikole, Kota Sukabumi, Jawa Barat 43112
            </div>
            <div class="website">halaldoabangsa.id</div>
        </div>

        <div class="terms">
            <table style="border: none;">
                <tr style="border: none;">
                    <td style="border: none; width: 200px;">Waktu terbit sertifikat halal</td>
                    <td style="border: none; width: 10px;">:</td>
                    <td style="border: none;">7 hari kerja setelah dokumen dinyatakan lengkap dan tidak ada temuan Validitas</td>
                </tr>
                <tr style="border: none;">
                    <td style="border: none;">Validitas penawaran</td>
                    <td style="border: none;">:</td>
                    <td style="border: none;">1 (Satu) minggu sejak diterbitkannya surat penawaran harga ini.</td>
                </tr>
            </table>
        </div>

        <div style="margin: 20px 0; font-size: 10pt;">
            Jika setuju dengan penawaran di atas, mohon menandatangani kolom persetujuan dan dikirim kembali melalui e-mail
            (<a href="mailto:lphdoabangsa@gmail.com">lphdoabangsa@gmail.com</a>) atau hubungi whatsapp contact centre (0822-842-8716).
        </div>

        <div style="margin: 20px 0; font-size: 10pt;">
            Dokumen ini sah sebagai <strong>Konfirmasi Order</strong>, apabila telah ditandatangani kedua belah pihak.
        </div>

        <!-- Signatures -->
        <div class="signature-section">
            <div class="signature-box">
                <div><strong>LPH DOA BANGSA</strong></div>
                <div style="margin-top: 10px; margin-bottom: 60px;">Ttd & cap</div>
                <div style="margin-top: 80px; padding-top: 5px;">
                    <strong>Entus Wahidin Abdul Quddus</strong><br>
                    <strong>Kepala LPH DOA BANGSA</strong>
                </div>
            </div>
            <div class="signature-box right">
                <div style="text-align: center;">
                    Saya setuju dengan penawaran harga diatas<br><br>
                    ______/______/____________<br>
                    (tempat) (tanggal) (bulan) (tahun)
                </div>
                <div style="margin-top: 120px; text-align: right;">
                    _______________________________<br>
                    (nama)<br>
                    (jabatan)
                </div>
            </div>
        </div>
    </div>
</body>
</html>
