<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data')->insert([
            'nama' => 'Muchammad Badrudin',
            'nisn' => '123456',
            'jenis_kelamin' => 'Laki-Laki',
            'kelas_jurusan' => 'XI RPL',
            'alamat' => 'Malang',
        ]);
    }
}
