<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'name' => 'Not Working',
                'description' => 'Not Working is Lorem ipsum dolor sit amet',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pegawai Negeri Sipil (PNS)',
                'description' => 'Pegawai Negeri Sipil (PNS) is Lorem ipsum dolor sit amet',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pegawai Swasta',
                'description' => 'Pegawai Swasta is Lorem ipsum dolor sit amet',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Wirausaha',
                'description' => 'Wirausaha is Lorem ipsum dolor sit amet',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Others',
                'description' => 'Lorem ipsum dolor sit amet',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
