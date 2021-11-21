<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

use Faker\Generator as Faker; 

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tagsNames = ['Frontend', 'Backend', 'ML', 'Design', 'Funny', 'Fullstack', 'Challenge'];

        foreach($tagsNames as $name){
            $newTag = new Tag();
            $newTag->name = $name;
            $newTag->color->$faker->hexColor();

            $newTag->save();
        }
    }
}
