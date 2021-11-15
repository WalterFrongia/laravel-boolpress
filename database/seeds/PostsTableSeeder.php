<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

use Faker\Generator as Faker; 

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newPost = new Post();
            $newPost->title = $faker->text(5);
            $newPost->url_img = $faker->imageUrl(500, 600);
            $newPost->text = $faker->paragraph();
            $newPost->publcation_date = $faker->date('Y_m_d');

            $newPost->save();
        }
    }
}
