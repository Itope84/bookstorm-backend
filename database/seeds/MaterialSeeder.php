<?php

use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = ["Electromagnetism -Introduction",
        "Introduction to Compilers",
        "statistics",
        "complex numbers",
        "Thermodynamics",
        "Criminal law",
        "Taxation - Dr Bamidele",
        "Government Policies",
        "Dispensing for dummies",
        "Critical factiors affecting building structure",
        "The alimentary canal",
        "Solved questions on Quadratic functions",
        "Past questions on solid state physics",
        "Graphical user interface in the 21st century",
        "Atomic Structure, 1st semester",
        "Introduction to Java",
        "Xrays",
        "Transition Metals, 2nd semester",
        "Philosophy of Education",
        "The national policy on education",
        "PHY 405 tutorial set 6",
        "CSC 221 Assignments"];

        foreach($materials as $material) {
            factory(App\Material::class, 1)->create(['title' => $material]);
        };
    }
}
