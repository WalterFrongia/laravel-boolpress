<?php

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Tags;

//importiamo Arr per manipolare array sotto nelle funzioni.
use Illuminate\Support\Arr;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Questa variabile prende il Model Post per fare la relazione con tag model
        $posts = App\Models\Post::all();

        // 
        App\Models\Tag::all()->each(function ($tag) use ($posts) { //each è una funzione di laravel, indica ogni tag(ciascuno)
            $tag->posts()->attach( //posts indica la relazione che avviene nel model
                $posts->random(rand(1, 5))->pluck('id')->toArray()
            ); 
        });

    }
}
