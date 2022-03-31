<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nisn' => '07980074',
            'nama' => 'Dandy',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => 'RPL',
            'notelepon' => '087967854980',
            'alamat' => 'Malang'
        ]);
    }
}
