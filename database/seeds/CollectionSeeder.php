<?php

use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(\App\User::all() as $user) {
            factory(App\Collection::class, rand(3, 5))->create(['user_id' => $user->id]);
        }
    }
}
