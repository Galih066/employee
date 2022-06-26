<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'              => 'Jane Doe',
                'email'             => 'janedoe@mail.com',
                'role'              => 'ADMIN',
                'email_verified_at' => Carbon::now(),
                'password'          => Hash::make('user123'),
                'remember_token'    => Str::random(16),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Michael Schumacer',
                'email'             => 'michael@mail.com',
                'role'              => 'EMPLOYEE',
                'email_verified_at' => Carbon::now(),
                'password'          => Hash::make('user123'),
                'remember_token'    => Str::random(16),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Renatta Bliss',
                'email'             => 'renatta@mail.com',
                'role'              => 'EMPLOYEE',
                'email_verified_at' => Carbon::now(),
                'password'          => Hash::make('user123'),
                'remember_token'    => Str::random(16),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ]);
    }
}
