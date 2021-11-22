<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

//importiamo Arr per manipolare array sotto nelle funzioni.
use Illuminate\Support\Arr;

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
        //creata variabile che contiene array di "id" che sono nella tabella category
        $category_ids = Category::pluck('id')->toArray();

        for($i=0; $i<10; $i++){
            $newPost = new Post();
            $newPost->title = $faker->text(5);
            $newPost->url_img = $faker->imageUrl(500, 600);
            $newPost->text = $faker->paragraph();
            $newPost->publication_date = $faker->date('Y_m_d');
            
            //prende un numero random tra i numeri dell'array 
            $newPost->category_id = Arr::random($category_ids);
            $newPost->save();
        }
    }
}
