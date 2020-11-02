<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <20; $i++) {
            $newComic = new Comic;

            $newComic-> title = ;
            $newComic-> original_title = ;
            $newComic-> author = ;
            $newComic->
            $newComic->
            $newComic->
            $newComic->
            $newComic->
            $newComic->
            $newComic->
            $newComic->

            $newComic->save();
        }
    }
}
