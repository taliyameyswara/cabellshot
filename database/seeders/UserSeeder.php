<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {

        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'phone_number' => '124124134',
                'email' => 'admin@admin.admin',
                'password' => Hash::make('admin@admin.admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'Anvi',
                'phone_number' => '9879878979',
                'email' => 'anvi@gmail.com',
                'password' => Hash::make('your_password_here'), // Ganti dengan password yang diinginkan
                'role' => 'user', // Menandakan sebagai pengguna biasa
            ],
            [
                'name' => 'hkjhkj',
                'phone_number' => '4579878687',
                'email' => 'rewrewre@yutuy',
                'password' => Hash::make('your_password_here'), // Ganti dengan password yang diinginkan
                'role' => 'user',
            ],
            [

                'name' => 'Reetu Singh',
                'phone_number' => '5465465464',
                'email' => 'reetu@gmail.com',
                'password' => Hash::make('your_password_here'),
                'role' => 'user',
            ],
            [
                'name' => 'John Doe',
                'phone_number' => '1234569879',
                'email' => 'John@gmail.com',
                'password' => Hash::make('your_password_here'),
                'role' => 'user',
            ],
            [
                'name' => 'Azka Zaviar',
                'phone_number' => '1236985211',
                'email' => 'azka@gmail.com',
                'password' => Hash::make('your_password_here'),
                'role' => 'user',
            ],
        ]);
    }
}
