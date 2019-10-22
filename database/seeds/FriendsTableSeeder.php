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
                'status'    => '2',
            ],
            [
                'applicant_id' => '2',
                'approver_id'  => '3',
                'status'       => '1',
            ],
            [
                'applicant_id' => '1',
                'approver_id'  => '3',
                'status'       => '0',
            ],
        ];

        foreach ($friends as $friend) {

            DB::table('friends')->insert([
                'approver_id' => $friend['approver_id'],
                'applicant_id' => $friend['applicant_id'],
                'status'       => $friend['status'],
            ]);
        }

    }
}
