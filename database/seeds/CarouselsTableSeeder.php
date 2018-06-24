<?php

use Illuminate\Database\Seeder;
use App\Carousel;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('carousels')->delete();
    	Carousel::truncate();

    	Carousel::create(['pic'=>'https://i.imgur.com/DHbm3W4.jpg' ,'name'=>'鯊魚 65cm 抱枕 鯊魚抱枕', 'sort' => 1]);
    	Carousel::create(['pic'=>'https://i.imgur.com/Anm6mX3.jpg' ,'name'=>'寶可夢怪獸球模型', 'sort' => 2]);
    	Carousel::create(['pic'=>'https://i.imgur.com/T4JVg1r.jpg' ,'name'=>'無線電競滑鼠', 'sort' => 3]);
    }
}
