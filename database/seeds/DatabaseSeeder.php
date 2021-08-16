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
        
        $this->call(LecturersTableSeeder::class);
        $this->call(AcademicsTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(QuizzesTableSeeder::class);
    }
}
