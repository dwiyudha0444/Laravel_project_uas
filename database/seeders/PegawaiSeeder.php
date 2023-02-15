<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=100;$i++){
            DB::table('pegawai')->insert(
            [
                'name' => uniqid('nama_'),
                'gender'=>Arr::random(['L','P']),
                'alamat' => uniqid('alamat_'),
                'email' => uniqid('email_'),
                'foto' => uniqid('foto_'),
                'created_at' =>new \DateTime,
                'updated_at' =>null,
            ]);
            }

    }
}