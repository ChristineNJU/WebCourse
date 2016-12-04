<?php

use Illuminate\Database\Seeder;
use App\healths

class HealthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('healths')->delete();

        healths::create([
            'date'    => '2016-12-04',
            'userid'    => '1',
            'miles' => 338.4,
            'sleep' => '33%',
            'point' => 74.4,
            'milesWeek' => 5.4,
            'sleepWeek' => '46%',
            'pointWeek' => 77.8,
        ]);

    }
}
