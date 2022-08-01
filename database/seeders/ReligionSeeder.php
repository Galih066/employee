<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religion')->insert([
            [
                'name' => 'Islam',
            ],
            [
                'name' => 'Protestan',
            ],
            [
                'name' => 'Katolik',
            ],
            [
                'name' => 'Hindu',
            ],
            [
                'name' => 'Buddha',
            ],
            [
                'name' => 'Khonghucu',
            ],
        ]);
    }
}
