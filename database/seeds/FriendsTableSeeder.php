<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $friends = [
            [
                'applicant_id' => '1',
                'approver_id'  => '2',
            ],
            [
                'applicant_id' => '2',
                'approver_id'  => '3',
            ],
            [
                'applicant_id' => '1',
                'approver_id'  => '3',
            ],
        ];

        foreach ($friends as $friend) {

            DB::table('friends')->insert([
                'approver_id' => $friend['approver_id'],
                'applicant_id' => $friend['applicant_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
