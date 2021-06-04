<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        DB::table('ref_roles')->insert(array(
            array(
              'id'=> 1,
              'role_name' => 'ADMIN',
            ),
            array(
              'id'=> 2,
              'role_name' => 'COOR',
            ),
            array(
                'id'=> 3,
                'role_name' => 'TC',
            ),
        ));

        DB::table('users')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Admin',
                    'email' => 'admin@mail.com',
                    'phone_number' => '0123456789',
                    'password' => Hash::make('12345678'),
                    'role_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'name' => 'Coordinator',
                    'email' => 'coordinator@mail.com',
                    'phone_number' => '0123456789',
                    'password' => Hash::make('12345678'),
                    'role_id' => 2,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'name' => 'TC',
                    'email' => 'tc@mail.com',
                    'phone_number' => '0123456789',
                    'password' => Hash::make('12345678'),
                    'role_id' => 3,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );

    }
}
