<?php

use Illuminate\Database\Seeder;

use App\Models\Stuff;
use Carbon\Carbon;
use Faker\Factory;
class StuffTableSeedee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Stuff::truncate();
        
        $faker = \Faker\Factory::create('zh_TW');
        foreach (range(1,12) as $number) {
            Stuff::create([                

                'name'=>$faker->name,
                'phone'=>$faker->phoneNumber,
                'stu_id'=>$faker->numberBetween(50000000,40000000),
            ]);
        }
    }
}
