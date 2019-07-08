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
        $this->call(SchoolSeeder::class);
        $this->call(StudyProgramSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(CollectionSeeder::class);
    }
}
