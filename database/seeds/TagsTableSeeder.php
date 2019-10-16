<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = [
            [
                'tag' => 'マサブログ',
            ],
            [
                'tag' => 'プログラミング',
            ],
            [
                'tag' => 'スカイプ',
            ],
        ];

        foreach ($tags as $tag) {

            DB::table('tags')->insert([
                'tag_name' => $tag['tag'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
