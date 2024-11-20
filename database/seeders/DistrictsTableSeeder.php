<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            'San Juan Bautista',
            'Masigla',
            'Talisay',
            'Makopa',
            'Magkakaibigan',
            'Magkakapatid',
            'Masagana',
            'Bayanihan',
            'Pagbabago',
            'Tarabidan',
            'Milagrosa',
            'Masipag',
            'Buhanginan',
            'Kapatagan',
            'Pinagpala',
            'Malunggay',
            'Gumamela',
            'Silangan',
            'Kalipay',
            'Pag-asa',
            'Everlasting',
            'Manggibang',
            'Aplaya'
        ];
    
        foreach ($districts as $district) {
            DB::table('districts')->insert([
                'district_name' => $district,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
