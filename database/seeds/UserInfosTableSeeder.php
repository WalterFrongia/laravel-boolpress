<?php

use Illuminate\Database\Seeder;
use App\Models\Userinfo;
use App\User;

//importiamo Arr per manipolare array sotto nelle funzioni.
use Illuminate\Support\Arr;

use Faker\Generator as Faker; 


class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $user_ids = User::pluck('id')->toArray();
        for($i=0; $i<10; $i++){
            $newInfo = new Userinfo();
            $newInfo->address = $faker->text(5);
            $newInfo->phone = $faker->randomNumber(9, true);
            $newInfo->country = $faker->word();
            
            //prende un numero random tra i numeri dell'array 
            $newInfo->user_id = Arr::random($user_ids);
            $newInfo->save();
        }
    }
}
