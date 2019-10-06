<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'UT_udagawa',
                'email'  => 'masablog@gmail.com',
                'password' => 'masablog',
            ],
            [
                'name' => 'joma',
                'email'  => 'joma@gmail.com',
                'password' => 'jomajoma',
            ],
            [
                'name' => 'lingam',
                'email'  => 'shiva@gmail.com',
                'password' => 'lingamlingam',
            ],
        ];

        foreach ($users as $user) {

            DB::table('users')->insert([
                'name' => $user ['name'],
                'email' => $user ['email'],
                'password' => $user ['password'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
