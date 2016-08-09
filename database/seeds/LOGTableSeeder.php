<?php

use Illuminate\Database\Seeder;
use App\Models\LOG;
use Carbon\Carbon;
use Faker\Factory;

class LOGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        LOG::truncate();
        
        $faker = \Faker\Factory::create('zh_TW');
        foreach (range(1,12) as $number) {
            LOG::create([                

                'IP' => $faker->ipv4,
                'Login'=>$faker->dateTimeThisDecade($max = 'now'),
                'Logout'=>$faker->dateTimeThisMonth($max = 'now'),
                'Account'=>$faker->numberBetween(50000000,40000000),
            ]);
        }
    }
}
