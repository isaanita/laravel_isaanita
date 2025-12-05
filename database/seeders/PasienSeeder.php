<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Andi',
            'alamat' => 'Jl. Merdeka No.1',
            'telepon' => '081234567890',
            'rumah_sakit_id' => 1
        ]);

        Pasien::create([
            'nama' => 'Budi',
            'alamat' => 'Jl. Sudirman No.2',
            'telepon' => '089876543210',
            'rumah_sakit_id' => 2
        ]);
    }
}
