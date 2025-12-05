<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Balita;
use App\Models\IbuHamil;
use App\Models\PemeriksaanBalita;
use App\Models\PemeriksaanIbuHamil;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ====== USER DEFAULT ======
        $admin = User::create([
            'nama' => 'Admin Posyandu',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123'),
            'role' => Role::ADMIN,
        ]);

        $kader = User::create([
            'nama' => 'Kader Posyandu',
            'email' => 'kader@gmail.com',
            'password' => bcrypt('password123'),
            'role' => Role::KADER,
        ]);

        // ============================
        // ====== DATA BALITA =========
        // ============================

        $balitaList = Balita::factory(10)->create();

        foreach ($balitaList as $balita) {
            // Setiap balita diperiksa 1–3 kali
            PemeriksaanBalita::factory(rand(1, 3))->create([
                'balita_id' => $balita->id,
                'diperiksa_oleh' => $kader->id, // kader pemeriksa
            ]);
        }

        // ===============================
        // ====== DATA IBU HAMIL =========
        // ===============================

        $ibuHamilList = IbuHamil::factory(5)->create();

        foreach ($ibuHamilList as $ibu) {
            // Setiap ibu hamil diperiksa 1–3 kali
            PemeriksaanIbuHamil::factory(rand(1, 3))->create([
                'ibu_hamil_id' => $ibu->id,
                'diperiksa_oleh' => $kader->id, // kader pemeriksa
            ]);
        }
    }
}
