<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            ['id' => 1, 'title' => 'Andaman & Nicobar Islands', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'title' => 'Andhra Pradesh', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'title' => 'Arunachal Pradesh', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'title' => 'Assam', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'title' => 'Bihar', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'title' => 'Chandigarh', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 7, 'title' => 'Chhattisgarh', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 8, 'title' => 'Dadra & Nagar Haveli', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 9, 'title' => 'Daman & Diu', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 10, 'title' => 'Delhi', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 11, 'title' => 'Goa', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 12, 'title' => 'Gujarat', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 13, 'title' => 'Haryana', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 14, 'title' => 'Himachal Pradesh', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 15, 'title' => 'Jammu & Kashmir', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 16, 'title' => 'Jharkhand', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 17, 'title' => 'Karnataka', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 18, 'title' => 'Kerala', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 19, 'title' => 'Lakshadweep', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 20, 'title' => 'Madhya Pradesh', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 21, 'title' => 'Maharashtra', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 22, 'title' => 'Manipur', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 23, 'title' => 'Meghalaya', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 24, 'title' => 'Mizoram', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 25, 'title' => 'Nagaland', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 26, 'title' => 'Odisha', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 27, 'title' => 'Puducherry', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 28, 'title' => 'Punjab', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 29, 'title' => 'Rajasthan', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 30, 'title' => 'Sikkim', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 31, 'title' => 'Tamil Nadu', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 32, 'title' => 'Tripura', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 33, 'title' => 'Uttar Pradesh', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 34, 'title' => 'Uttarakhand', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 35, 'title' => 'West Bengal', 'status' => 'Active', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
