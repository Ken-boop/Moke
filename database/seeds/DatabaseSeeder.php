<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(MokesTableSeeder::class);
        $this->call(FriendsTableSeeder::class);
        $this->call(ParticipantsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(Mokes_tagsTableSeeder::class);
        $this->call(PrivatemokesTableSeeder::class);
    }
}
