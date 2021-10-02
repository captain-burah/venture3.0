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
        $this->call(UsersTableSeeder::class);
        $this->call(LecturersTableSeeder::class);
        $this->call(AcademicsTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(QuizzesTableSeeder::class);
        $this->call(AssignmentsTableSeeder::class);
        $this->call(SubmissionsTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(ChannelsTableSeeder::class);
        $this->call(DiscussionsTableSeeder::class);
        $this->call(DiscussionRepliesTableSeeder::class);
    }
}
