<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notifications = [
            [
                'recipient_id' => '2',
                'sender_id'  => '3',
                //'type'  => '0',
                //'comment'  => '登録お願いします。',
    
            ],
            [
                'recipient_id' => '1',
                'sender_id'  => '2',
                //'type'  => '1',
                //'comment'  => '登録お願いしますb。',
    
            ],
            [
                'recipient_id' => '3',
                'sender_id'  => '1',
                //'type'  => '2',
                //'comment'  => '登録お願いしますa。',
    
            ],
        ];

        foreach ($notifications as $notification) {
        //要確認する
            DB::table('notifications')->insert([
                'recipient_id' => $notification['recipient_id'],
                'sender_id' => $notification['sender_id'],
                //'type' => $notification['type'],
                //'comment' => $notification['comment'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

