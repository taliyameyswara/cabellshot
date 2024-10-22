<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Futsal',
                'description' => 'Nikmati setiap momen pertandingan futsal Anda dengan dokumentasi profesional! Tim Cobell Shot siap menangkap aksi seru dan kebersamaan di lapangan, memberikan Anda kenangan yang akan selalu diingat.',
                'price' => 350000.00,
                'image' => '',
            ],
            [
                'name' => 'Mini Soccer',
                'description' => 'Abadikan keseruan permainan mini soccer! Dari sorotan pemain hingga momen keceriaan, kami siap memberikan hasil foto yang memukau dan menggambarkan semangat tim Anda.',
                'price' => 350000.00,
                'image' => '',
            ],
            [
                'name' => 'Pre Wedding',
                'description' => 'Mulailah perjalanan cinta Anda dengan sesi pre-wedding yang tak terlupakan! Cobell Shot akan menangkap momen-momen manis dan intim yang mencerminkan cinta Anda sebelum hari besar. Dengan lokasi yang indah dan konsep kreatif, foto pre-wedding Anda akan menjadi kenangan yang tak terlupakan.',
                'price' => 650000.00,
                'image' => '',
            ],
            [
                'name' => 'Wedding',
                'description' => 'Hari pernikahan adalah momen yang paling berharga dalam hidup. Tim kami akan memastikan setiap detil, dari upacara hingga resepsi, diabadikan dengan sempurna.',
                'price' => 999000.00,
                'image' => '',
            ],
            [
                'name' => 'Birthday',
                'description' => 'Rayakan hari istimewa Anda dengan dokumentasi profesional! Kami akan mengabadikan setiap senyuman, tawa, dan momen bahagia dalam pesta ulang tahun Anda, sehingga Anda dapat mengenang hari tersebut selamanya.',
                'price' => 500000.00,
                'image' => '',
            ],
            [
                'name' => 'Wisuda',
                'description' => 'Hari wisuda adalah pencapaian besar yang layak dirayakan! Biarkan kami mengabadikan momen berharga saat Anda menerima gelar dan berbagi kebahagiaan dengan keluarga dan teman-teman. Foto-foto ini akan menjadi kenangan yang tak ternilai.',
                'price' => 650000.00,
                'image' => '',
            ],
        ]);
    }
}
