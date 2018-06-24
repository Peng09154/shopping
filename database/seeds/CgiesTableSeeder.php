<?php

use Illuminate\Database\Seeder;
use App\Cgy;

class CgiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('cgies')->delete();

        Cgy::truncate();
        
        
        Cgy::create(['title' => '服裝', 'pic'=>'https://i.imgur.com/u7skUiN.jpg' , 'sort' => 1]);
        Cgy::create(['title' => '3C周邊商品', 'pic'=>'https://i.imgur.com/rbG7hDX.jpg','sort' => 2]);
        Cgy::create(['title' => '玩具','pic'=>'https://i.imgur.com/V6XwE5K.jpg' ,'sort' => 3]);
        Cgy::create(['title' => '寵物用品','pic'=>'https://i.imgur.com/pS1sMSk.jpg', 'sort' => 4]);
        Cgy::create(['title' => '居家生活','pic'=>'https://i.imgur.com/m7gkX1X.jpg', 'sort' => 5]);
        Cgy::create(['title' => '運動用品','pic'=>'https://i.imgur.com/pdr3Xwi.jpg', 'sort' => 6]);
        Cgy::create(['title' => '書籍','pic'=>'https://i.imgur.com/aG5OVps.jpg', 'sort' => 7]);
        Cgy::create(['title' => '日常用品','pic'=>'https://i.imgur.com/JqawTkg.jpg', 'sort' => 8]);
    }
}
