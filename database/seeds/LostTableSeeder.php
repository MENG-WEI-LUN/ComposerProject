<?php

use Illuminate\Database\Seeder;

use App\Models\Lost;
use Carbon\Carbon;
use Faker\Factory;

class LostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Lost::truncate();
        
        $faker = \Faker\Factory::create('zh_TW');
        foreach (range(1,12) as $number) {
            Lost::create([                

                'name'=>$faker->name,
                'picture'=>$faker->userName .".png",
                'date'=>$faker->dateTimeThisMonth($max = 'now'),
                'status'=>$faker->boolean,
            ]);
        }
    }
}
