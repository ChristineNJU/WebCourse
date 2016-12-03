<?php
/**
 * Created by PhpStorm.
 * User: yqq
 * Date: 2016.11.29
 * Time: 12:09
 */

use Illuminate\Database\Seeder;
use App\Sleep;

class SportsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('sleeps')->delete();
        $date= date_create("2016-11-23");
        $diff1Day = new DateInterval('P1D');

        for ($i = 0; $i < 10; $i++) {

            Sports::create([
                'date'    => $date,
                'userid'    => '1',
                'sport'    => $sports,
                'miles' => $miles,
                'time' => $time,
                'k' => $k,
            ]);
            date_add($date,$diff1Day);
        }
    }

}