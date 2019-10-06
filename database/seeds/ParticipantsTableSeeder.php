<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $participants = [
            [
                'user_id' => '2',
                'moke_id'  => '3',
            ],
            [
                'user_id' => '3',
                'moke_id'  => '3',
            ],
            [
                'user_id' => '2',
                'moke_id'  => '2',
            ],
        ];

        foreach ($participants as $participant) {

                DB::table('participants')->insert([
                'moke_id' => $participant['moke_id'],
                'user_id' => $participant['user_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
