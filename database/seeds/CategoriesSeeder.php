<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesName = ['HTML', 'CSS', 'JS', 'PHP', 'MySQL', 'VueJS'. 'Laravel'];

        foreach($categoriesName as $name){
            $category = new Category();
            $category->name = $name;
            $category->save();
        }
    }
}
