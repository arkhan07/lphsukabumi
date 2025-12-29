<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Halal Certification Services
    |--------------------------------------------------------------------------
    |
    | This array defines the mapping of halal certification service types
    | to their respective product categories. Used in submission forms for
    | dependent dropdown selections.
    |
    */

    'halal_services' => [
        'Jasa Pendistribusian' => [
            'Jasa pendistribusian',
        ],
        'Makanan' => [
            'Susu dan analognya',
            'Lemak, minyak dan emulsi minyak',
            'Es untuk dimakan (edible ice) termasuk sherbet dan sorbet',
            'Buah dan sayur dengan pengolahan dan penambahan bahan tambahan pangan',
            'Kembang gula/permen dan cokelat',
            'Serealia dan produk serealia turunan dari biji serealia, akar dan umbi, kacang-kacangan dan empulur dengan pengolahan dan penambahan bahan tambahan pangan',
            'Produk bakeri',
            'Daging dan produk olahan daging',
            'Ikan dan produk perikanan termasuk moluska, krustase, dan ekinodermata dengan pengolahan dan penambahan bahan tambahan pangan',
            'Telur olahan dan produk-produk telur hasil olahan',
            'Gula dan pemanis termasuk madu',
            'Garam, rempah, sup, saus, salad, serta produk protein',
            'Pangan olahan untuk keperluan gizi khusus',
            'Makanan ringan siap santap',
            'Pangan siap saji',
            'Penyediaan makanan dan minuman dengan pengolahan',
            'Bahan tambahan pangan',
            'Kelompok bahan lainnya',
        ],
        'Minuman' => [
            'Minuman dengan pengolahan',
            'Kelompok bahan minuman',
        ],
        'Obat' => [
            'Obat tradisional',
            'Suplemen kesehatan',
            'Obat kuasi',
            'Obat bebas',
            'Obat bebas terbatas',
            'Obat keras (dikecualikan narkotika dan psikotropika)',
            'Bahan obat',
        ],
        'Kosmetik' => [
            'Kosmetika',
        ],
        'Produk Kimiawi' => [
            'Kelompok bahan penolong',
            'Bahan kimiawi lainnya',
        ],
        'Produk Biologi' => [
            'Produk biologi',
        ],
        'Produk Rekayasa Genetik' => [
            'Produk rekayasa genetik',
        ],
        'Barang Gunaan' => [
            'Sandang',
            'Penutup kepala',
            'Aksesoris',
            'Perbekalan kesehatan rumah tangga',
            'Peralatan rumah tangga',
            'Perlengkapan peribadatan bagi umat Islam',
            'Kemasan produk',
            'Alat tulis dan perlengkapan kantor',
            'Alat kesehatan',
            'Bahan penyusun barang gunaan',
        ],
        'Jasa Penyembelihan' => [
            'Jasa penyembelihan',
        ],
        'Jasa Pengolahan' => [
            'Jasa pengolahan',
        ],
        'Jasa Penyimpanan' => [
            'Jasa penyimpanan',
        ],
        'Jasa Pengemasan' => [
            'Jasa pengemasan',
        ],
        'Jasa Penjualan' => [
            'Jasa penjualan tanpa proses pengolahan atau memasak',
        ],
        'Jasa Penyajian' => [
            'Jasa penyajian tanpa proses pengolahan atau memasak',
        ],
    ],

];
