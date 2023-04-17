<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Wahid Adi Nugroho',
            'email' => 'c030321054@mahasiswa.poliban.ac.id',
            'password' => Hash::make('tugasweb3'),
        ]);
    }
}
