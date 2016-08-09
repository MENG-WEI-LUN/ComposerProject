<?php

use Illuminate\Database\Seeder;

use App\Models\Signed;
use Carbon\Carbon;
use Faker\Factory;
class SignedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Signed::truncate();
        
        $faker = \Faker\Factory::create('zh_TW');
        foreach (range(1,12) as $number) {
            Signed::create([                

                'name'=>$faker->name,
                'title'=>$faker->sentence,
                'day'=>$faker->numberBetween(1,7)."天",
                'teacher'=>"江季翰",
            ]);
        }
    }
}
