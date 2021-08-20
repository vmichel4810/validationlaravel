<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert(

            [
                [
                    'name'=>"Hergé",
                    'birth_year'=>1907,
                    'nationality'=>"Belge",
                ],
                [
                    'name'=>"Zep",
                    'birth_year'=>1967,
                    'nationality'=>"Suisse",
                ],
                [
                    'name'=>"Peyo",
                    'birth_year'=>1928,
                    'nationality'=>"Belge",
                ],

            ]
        );
    }
}
