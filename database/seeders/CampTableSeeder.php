<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\camp;


class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila-Belajar',
                'slug' => 'gila-belajar',
                'price' => 200,
                'created_at' => date('Y-m-d H:i:s' ,  time()),
                'updated_at' => date('Y-m-d H:i:s' ,  time()),
            ],
            [
                'title' => 'Baru-Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s' ,  time()),
                'updated_at' => date('Y-m-d H:i:s' ,  time()),
            ],
        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
