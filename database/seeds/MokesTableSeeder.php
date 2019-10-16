<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Phaza\LaravelPostgis\Geometries\Point;

class MokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $mokes = [
            [
                'moke_name' => 'マサブログ記事作成',
                'moke_detail'  => '就活についての知識がある方のみ',
                'organizer_id' => '2',
                'due_date' => '2019-10-6 11:00:00',
                'end_date' => '2019-10-6 16:00:00',
                'address' => 'Shibuya, Tokyo, Japan',
                'publication_range' => "2",
                'lat' => 51.5,
                'lng' => -0.09,
            ],
            [
                'moke_name' => 'ゆうととスカイプ',
                'moke_detail'  => '都に戻りし久松の便りは如何にぞや',
                'organizer_id' => '1',
                'due_date' => '2019-10-4 19:45:00',
                'end_date' => '2019-10-4 20:30:00',
                'address' => 'Cebu City, Cebu, Phillipine / Shibuya, Tokyo, Japan',
                'publication_range' => "1",
                'lat' => 51.49, 
                'lng' => -0.095,
            ],
            [
                'moke_name' => '土曜定例',
                'moke_detail'  => 'ウィークデーの取りこぼしを。',
                'organizer_id' => '1',
                'due_date' => '2019-10-5 09:00:00',
                'end_date' => '2019-10-5 13:00:00',
                'address' => 'Cebu City, Cebu, Phillipine',
                'publication_range' => "0",
                'lat' => 51.498,
                'lng' => -0.092,
            ],
        ];

        foreach ($mokes as $moke) {

            // new Point($moke['lat'], $moke['lng'])
            DB::table('mokes')->insert([
                'moke_name' => $moke['moke_name'],
                'moke_detail' => $moke['moke_detail'],
                'organizer_id' => $moke['organizer_id'],
                'due_date' => $moke['due_date'],
                'end_date' => $moke['end_date'],
                'address' => $moke['address'],
                'publication_range' => $moke['publication_range'],
                'lat' => $moke['lat'],
                'lng' => $moke['lng'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
