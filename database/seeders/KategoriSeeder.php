<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $KategoriData = [
            ['kategori' => 'Laptop'],
            ['kategori' => 'Smartphone'],
            ['kategori' => 'Tablet'],
            ['kategori' => 'VR'],

            // Add more entries as needed
        ];

        Kategori::insert($KategoriData);
    }
}
