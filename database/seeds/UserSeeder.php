<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(\App\StudyProgram::all() as $program) {
            factory(App\User::class, 10)->create(['school_id' => \App\School::inRandomOrder()->take(1)->first()->id, 'study_program_id' => $program->id]);
        }

        foreach(App\User::all() as $user) {
            $user->courses()->save(Course::inRandomOrder()->first());
        }
    }
}
