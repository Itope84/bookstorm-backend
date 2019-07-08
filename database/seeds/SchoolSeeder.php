<?php

use App\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = [
            "Obafemi Awolowo University, Ile Ife", "FUNAAB, Akure", "The Polytechnic Ibadan", "University Of Ibadan", "FUTA, Akure", "Unilag, Lagos", "University of Ilorin, Ilorin", "Lagos State University", "Covenant University", "Ekiti STate University", "Uniben"
        ];

        foreach($schools as $school)
        {
            School::create(['name' => $school]);
        }
    }
}
