<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LOGTableSeeder::class);
        $this->call(StuffTableSeedee::class);
        $this->call(LostTableSeeder::class);
        $this->call(SignedTableSeeder::class);
        
    }
}
