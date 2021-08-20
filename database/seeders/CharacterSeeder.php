<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('characters')->insert(

            [
                [
                    'name'=>"Tintin",
                    'creation_year'=>1929,
                    'bd_name'=>"Les aventures de Tintin",
                    'designer_id'=>1,
                ],
                [
                    'name'=>"Titeuf",
                    'creation_year'=>2001,
                    'bd_name'=>"Titeuf",
                    'designer_id'=>2,
                ],
                [
                    'name'=>"Capitaine Haddock",
                    'creation_year'=>1941,
                    'bd_name'=>"Les aventures de tintin",
                    'designer_id'=>1,
                ],
                [
                    'name'=>"Grand Stroumph",
                    'creation_year'=>1958,
                    'bd_name'=>"Les Stroumph",
                    'designer_id'=>3,
                ],
            ]
        );
    }
}
