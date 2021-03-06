<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1,10) as $index){
            Post::create([
                'title'=> $faker->name,
                'description'=> $faker->name,
                'content'=> $faker->name,
                'cate_id'=> rand(1,5),
            ]);
        }
    }
}
