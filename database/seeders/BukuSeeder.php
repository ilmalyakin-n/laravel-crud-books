<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            [
                'judul' => 'The Great Gatsby',
                'pengarang' => 'F. Scott Fitzgerald',
                'tahun_terbit' => 1925,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'To Kill a Mockingbird',
                'pengarang' => 'Harper Lee',
                'tahun_terbit' => 1960,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('buku')->insert($buku);
    }
}
