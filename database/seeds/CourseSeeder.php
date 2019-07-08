<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(\App\School::all() as $school)
        {
            factory(App\Course::class, 100)->create(['school_id' => $school->id]);
        }
    }
}
