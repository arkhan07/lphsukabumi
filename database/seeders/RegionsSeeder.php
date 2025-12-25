<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    public function run()
    {
        $regions = [
            ['name' => 'Jawa Barat', 'code' => 'JB', 'type' => 'province', 'parent_id' => null, 'is_active' => true],
            ['name' => 'Sukabumi', 'code' => 'SKB', 'type' => 'city', 'parent_id' => 1, 'is_active' => true],
            ['name' => 'Bogor', 'code' => 'BGR', 'type' => 'city', 'parent_id' => 1, 'is_active' => true],
            ['name' => 'Bandung', 'code' => 'BDG', 'type' => 'city', 'parent_id' => 1, 'is_active' => true],
            ['name' => 'Bekasi', 'code' => 'BKS', 'type' => 'city', 'parent_id' => 1, 'is_active' => true],
            ['name' => 'Depok', 'code' => 'DPK', 'type' => 'city', 'parent_id' => 1, 'is_active' => true],
            ['name' => 'Cirebon', 'code' => 'CRB', 'type' => 'city', 'parent_id' => 1, 'is_active' => true],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
