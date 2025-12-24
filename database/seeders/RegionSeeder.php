<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            // Provinsi Jawa Barat
            [
                'name' => 'Jawa Barat',
                'code' => 'JABAR',
                'type' => 'province',
                'parent_id' => null,
            ],
        ];

        foreach ($regions as $region) {
            $province = Region::create($region);

            // Kota/Kabupaten di Jawa Barat (sample)
            if ($region['code'] === 'JABAR') {
                $cities = [
                    ['name' => 'Kota Bandung', 'code' => 'BDNG', 'type' => 'city'],
                    ['name' => 'Kota Bogor', 'code' => 'BGR', 'type' => 'city'],
                    ['name' => 'Kota Sukabumi', 'code' => 'SKB-CITY', 'type' => 'city'],
                    ['name' => 'Kota Cirebon', 'code' => 'CRB', 'type' => 'city'],
                    ['name' => 'Kota Bekasi', 'code' => 'BKS', 'type' => 'city'],
                    ['name' => 'Kota Depok', 'code' => 'DPK', 'type' => 'city'],
                    ['name' => 'Kota Cimahi', 'code' => 'CMH', 'type' => 'city'],
                    ['name' => 'Kota Tasikmalaya', 'code' => 'TSK', 'type' => 'city'],
                    ['name' => 'Kota Banjar', 'code' => 'BJR', 'type' => 'city'],

                    ['name' => 'Kabupaten Bandung', 'code' => 'BDNG-KAB', 'type' => 'regency'],
                    ['name' => 'Kabupaten Bandung Barat', 'code' => 'KBB', 'type' => 'regency'],
                    ['name' => 'Kabupaten Bogor', 'code' => 'BGR-KAB', 'type' => 'regency'],
                    ['name' => 'Kabupaten Sukabumi', 'code' => 'SKB-KAB', 'type' => 'regency'],
                    ['name' => 'Kabupaten Cianjur', 'code' => 'CJR', 'type' => 'regency'],
                    ['name' => 'Kabupaten Bekasi', 'code' => 'BKS-KAB', 'type' => 'regency'],
                    ['name' => 'Kabupaten Karawang', 'code' => 'KRW', 'type' => 'regency'],
                    ['name' => 'Kabupaten Purwakarta', 'code' => 'PWK', 'type' => 'regency'],
                    ['name' => 'Kabupaten Subang', 'code' => 'SBG', 'type' => 'regency'],
                    ['name' => 'Kabupaten Cirebon', 'code' => 'CRB-KAB', 'type' => 'regency'],
                    ['name' => 'Kabupaten Indramayu', 'code' => 'IMY', 'type' => 'regency'],
                    ['name' => 'Kabupaten Majalengka', 'code' => 'MJL', 'type' => 'regency'],
                    ['name' => 'Kabupaten Kuningan', 'code' => 'KNG', 'type' => 'regency'],
                    ['name' => 'Kabupaten Sumedang', 'code' => 'SMD', 'type' => 'regency'],
                    ['name' => 'Kabupaten Garut', 'code' => 'GRT', 'type' => 'regency'],
                    ['name' => 'Kabupaten Tasikmalaya', 'code' => 'TSK-KAB', 'type' => 'regency'],
                    ['name' => 'Kabupaten Ciamis', 'code' => 'CMS', 'type' => 'regency'],
                    ['name' => 'Kabupaten Pangandaran', 'code' => 'PNG', 'type' => 'regency'],
                ];

                foreach ($cities as $city) {
                    Region::create([
                        'name' => $city['name'],
                        'code' => $city['code'],
                        'type' => $city['type'],
                        'parent_id' => $province->id,
                        'is_active' => true,
                    ]);
                }
            }
        }

        // Provinsi lainnya (sample)
        $otherProvinces = [
            ['name' => 'DKI Jakarta', 'code' => 'DKI', 'type' => 'province'],
            ['name' => 'Jawa Tengah', 'code' => 'JATENG', 'type' => 'province'],
            ['name' => 'Jawa Timur', 'code' => 'JATIM', 'type' => 'province'],
            ['name' => 'Banten', 'code' => 'BTN', 'type' => 'province'],
            ['name' => 'DI Yogyakarta', 'code' => 'DIY', 'type' => 'province'],
        ];

        foreach ($otherProvinces as $province) {
            Region::create([
                'name' => $province['name'],
                'code' => $province['code'],
                'type' => $province['type'],
                'parent_id' => null,
                'is_active' => true,
            ]);
        }
    }
}
