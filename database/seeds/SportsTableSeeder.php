<?php
/**
 * Created by PhpStorm.
 * User: yqq
 * Date: 2016.11.29
 * Time: 12:09
 */

use Illuminate\Database\Seeder;
use App\Sports;

class SportsTableSeeder extends Seeder {

    public function run()
    {
//        DB::table('sports')->delete();
        $date= date_create("2016-11-23");
        $diff1Day = new DateInterval('P1D');

        for ($i = 0; $i < 10; $i++) {

            $sports = '';
            $miles = 0;
            for($j = 0;$j < 24;$j++){
                $temp = rand(10,3000);
                $miles = $miles." ".$temp;
                $sports = $sports + $temp + ';';
            }
            $time = rand(0,600)/100;
            $k = (int)($time*3489/7+28);

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