<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            "NIM" => "152011513016",
            "nama" => "Farah Salsabila",
            "gender" => "P",
            "alamat" => "Surabaya",
            "hp" => "081457378273",
            "email" => "farahmumtaz12@gmail.com",
            "password" => Hash::make("mahasiswa123"),
            "tahun_masuk" => "2020-09-07",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

    }
}
