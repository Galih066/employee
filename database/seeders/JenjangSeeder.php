<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenjangs')->insert([
            [
                'name' => 'No Education',
            ],
            [
                'name' => 'SD',
            ],
            [
                'name' => 'SMP',
            ],
            [
                'name' => 'SMA',
            ],
            [
                'name' => 'Diploma II',
            ],
            [
                'name' => 'Diploma III',
            ],
            [
                'name' => 'Diploma VI / Strata I',
            ],
            [
                'name' => 'Strata II',
            ],
            [
                'name' => 'Strata III',
            ],
        ]);
    }
}
