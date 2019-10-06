<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mokes = [
            [
                'moke_name' => 'マサブログ記事作成',
                'moke_detail'  => '就活についての知識がある方のみ',
                'organizer_id' => '2',
                'due_date' => '2019-10-6 11:00:00',
                'end_date' => '2019-10-6 16:00:00',
                'address' => 'Shibuya, Tokyo, Japan',
            ],
            [
                'moke_name' => 'ゆうととスカイプ',
                'moke_detail'  => '都に戻りし久松の便りは如何にぞや',
                'organizer_id' => '1',
                'due_date' => '2019-10-4 19:45:00',
                'end_date' => '2019-10-4 20:30:00',
                'address' => 'Cebu City, Cebu, Phillipine / Shibuya, Tokyo, Japan',
            ],
            [
                'moke_name' => '土曜定例',
                'moke_detail'  => 'ウィークデーの取りこぼしを。',
                'organizer_id' => '1',
                'due_date' => '2019-10-5 09:00:00',
                'end_date' => '2019-10-5 13:00:00',
                'address' => 'Cebu City, Cebu, Phillipine',
            ],
        ];

        foreach ($mokes as $moke) {

            DB::table('mokes')->insert([
                'moke_name' => $moke['moke_name'],
                'moke_detail' => $moke['moke_detail'],
                'organizer_id' => $moke['organizer_id'],
                'due_date' => $moke['due_date'],
                'end_date' => $moke['end_date'],
                'address' => $moke['address'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
