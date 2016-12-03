<?php
/**
 * Created by PhpStorm.
 * User: yqq
 * Date: 2016.11.29
 * Time: 12:09
 */

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pages')->delete();

        for ($i=0; $i < 10; $i++) {
            Page::create([
                'title'   => 'Title '.$i,
                'slug'    => 'first-page',
                'body'    => 'Body '.$i,
                'user_id' => 1,
            ]);
        }
    }

}