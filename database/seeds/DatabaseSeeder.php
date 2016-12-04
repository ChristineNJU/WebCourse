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
//         $this->call(PageTableSeeder::class);
//         $this->call(SportsTableSeeder::class);
//         $this->call(SleepsTableSeeder::class);
         $this->call(HealthsTableSeeder::class);
    }
}
