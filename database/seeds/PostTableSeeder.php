<?php

use Illuminate\Database\Seeder;
use App\Models\Posts;
use Carbon\Carbon;
use Faker\Factory;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        posts::truncate();
        // $posts = new Posts();
        // $posts ->title = 'test title';
        // $posts ->content = 'text content';
        // $posts ->save();
        $faker = \Faker\Factory::create('zh_TW');
        foreach (range(1,12) as $number) {
            posts::create([                
                'title' => 'title'.$number,
                'content' => 'content'.$number,
                'is_feature' => rand(0,1),
                'created_at' => Carbon::now()->addDays($number),
                'title' => $faker->sentence,
                'content'=>$faker->paragraph,
            ]);
        }
        

    }
}
