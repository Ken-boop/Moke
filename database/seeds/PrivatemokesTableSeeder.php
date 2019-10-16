<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class PrivatemokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $privatemokes = [
            [
                'viewer_id' => '1',
                'organizer_id'  => '2',
                'moke_id' => '1',
            ],
            [
                'viewer_id' => '3',
                'organizer_id'  => '2',
                'moke_id' => '1',
            ],
            [
                'viewer_id' => '4',
                'organizer_id'  => '1',
                'moke_id' => '2',
            ],
        ];

        foreach ($privatemokes as $privatemoke) {

            DB::table('pri$privatemokes')->insert([
                'viewer_id' => $privatemoke['viewer_id'],
                'organizer_id' => $privatemoke['organizer_id'],
                'moke_id' => $privatemoke['moke_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
