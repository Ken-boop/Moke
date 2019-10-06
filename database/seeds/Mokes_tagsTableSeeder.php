<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Mokes_tagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $moke_tags = [
            [
                'tag_id' => '1',
                'moke_id'  => '1',
            ],
            [
                'tag_id' => '2',
                'moke_id'  => '3',
            ],
            [
                'tag_id' => '3',
                'moke_id'  => '3',
            ],
        ];

        foreach ($moke_tags as $moke_tag) {

            DB::table('mokes_tags')->insert([
                'moke_id' => $moke_tag['moke_id'],
                'tag_id' => $moke_tag['tag_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
