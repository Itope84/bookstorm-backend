<?php

use App\StudyProgram;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            "Physics", "Chemistry", "Botany", "Zoology", "Microobiology", "Biochemistry", "Mathematics", "Statistics", "Computer Science", "Computer Engineering", "Economics", "Aviation", "Pharmacy", "Law", "Nursing", "Civil Engineering", "Chemical Engineering", "Electrical Engineering/Robotics", "Geology", "English", "Literature", "Linguistics", "Dramatic Arts", "Psychology", "International Relations", "Food Science", "Education", "Food Technology", "Agricultural Science", "Mechanical Engineering"
        ];

        foreach($programs as $program) {
            StudyProgram::create(['name' => $program]);
        }
    }
}
