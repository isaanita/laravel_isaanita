<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RumahSakit;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RumahSakit::create([
            'nama' => 'RS Hasan Sadikin',
            'alamat' => 'Bandung',
            'email' => 'hassad@example.com',
            'telepon' => '022-12345'
        ]);

        RumahSakit::create([
            'nama' => 'RS Karyadi',
            'alamat' => 'Semarang',
            'email' => 'karyadi@example.com',
            'telepon' => '024-67890'
        ]);
    }
}
