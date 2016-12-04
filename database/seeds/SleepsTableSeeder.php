<?php
/**
 * Created by PhpStorm.
 * User: yqq
 * Date: 2016.11.29
 * Time: 12:09
 */

use Illuminate\Database\Seeder;
use App\Sleeps;

class SleepsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('Sleeps')->delete();
        $date= date_create("2016-07-01");
        $diff1Day = new DateInterval('P1D');


        for ($i = 0; $i < 150; $i++) {
            $m1 = rand(0,60);
            $begin = '23'.":".rand(0,59);
            $end = rand(6,7).":".rand(0,59);
            $timeTotal = rand(6,8)."h".rand(0,59)."m";
            $timeValid = rand(4,7)."h".rand(0,59)."m";
            $rate = rand(20,80)/100;

            $values = '';
            for($j = 0;$j < 50;$j++){
                $temp = rand(2,100);
                $values = $values.$temp.':';
            }

            Sleeps::create([
                'date'    => $date,
                'userid'    => '1',
                'begin' => $begin,
                'end' => $end,
                'timeTotal' => $timeTotal,
                'timeValid' => $timeValid,
                'values' => $values,
                'rate' => $rate,
            ]);

            date_add($date,$diff1Day);
        }
    }

}