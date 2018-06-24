<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('products')->delete();
        Product::truncate();

        Product::create(['title' => '高質感 A&F~hco~af~男短T~男t 棉T~潮T~T恤~T-SHIRT','pic' =>'https://i.imgur.com/UOToHj9.jpg', 'price' => 390, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 1]);

        Product::create(['title' => 'Curry 金州勇士 30號 GILDAN 同款字體 帽T 連帽T 鋪綿帽T 高級燙印','pic' =>'https://i.imgur.com/9AicMR0.jpg', 'price' => 396, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 2]);

        Product::create(['title' => '【澐瀷館】全館情侶兩件免運A1 情侶裝 親子裝 全家福裝 母子裝情侶衣 大尺碼 男裝 短T恤 衣服 女裝 班服 團體服','pic' =>'https://i.imgur.com/o9NtG0p.jpg', 'price' => 355, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 3]);

        Product::create(['title' => 'T恤 COLLARS【XXH0039】BASIC挑染淨色好搭短TEE (7色) 春吶首發款 漸層染 素面','pic' =>'https://i.imgur.com/ifcb5ZT.jpg', 'price' => 400, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 4]);

        Product::create(['title' => '現貨秒發美版純棉燙印短袖T恤不退色印花 Alan Walker 短袖T 上衣 艾倫沃克 T-shirt 情侶裝','pic' =>'https://i.imgur.com/EMeTLgm.jpg', 'price' => 520, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 5]);

        Product::create(['title' => '潮男情侶，百搭純色落肩寬鬆連帽短袖棉T7色','pic' =>'https://i.imgur.com/4PZ6zRv.jpg', 'price' => 599, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 6]);

        Product::create(['title' => 'EA7 Armani Adidas Y3 短袖 T恤 logo男女款 短T 上衣 長袖 圖案 經典基本 山本耀司','pic' =>'https://i.imgur.com/FEQdCFG.jpg', 'price' => 439, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 7]);

        Product::create(['title' => '三件免運費~美國CHAMPION T425短袖素T 冠軍 袖口刺繡 素T','pic' =>'https://i.imgur.com/zldfWjv.jpg', 'price' => 530, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 8]);

        Product::create(['title' => '純棉 超柔軟 M-5L純色素色多色款高品質舒適透氣圓領T恤短袖上衣','pic' =>'https://i.imgur.com/BMUZmu9.jpg', 'price' => 600, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 9]);

        Product::create(['title' => 'I AM Marshmello 全球百大DJ 短袖T恤 3色 電音舞曲派對EDM','pic' =>'https://i.imgur.com/RTjFskg.jpg', 'price' => 359, 'stock' => 10 ,'cgy_id' => 1, 'sort' => 10]);

        Product::create(['title' => '磁吸式藍芽耳機','pic' =>'https://i.imgur.com/LNZf6wI.jpg', 'price' => 1090, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 11]);

        Product::create(['title' => 'USB快速手機充電線','pic' =>'https://i.imgur.com/DQBaZcK.jpg', 'price' => 209, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 12]);

        Product::create(['title' => '快充行動電源','pic' =>'https://i.imgur.com/CRWVOPB.jpg', 'price' => 490, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 13]);

        Product::create(['title' => '高音質藍芽喇叭','pic' =>'https://i.imgur.com/SlpG0I7.jpg', 'price' => 190, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 14]);

        Product::create(['title' => '128G大容量隨身碟','pic' =>'https://i.imgur.com/tlczmfZ.jpg', 'price' => 890, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 15]);

        Product::create(['title' => '手機指環支架','pic' =>'https://i.imgur.com/fINCLV2.jpg', 'price' => 99, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 16]);

        Product::create(['title' => '無線電競滑鼠','pic' =>'https://i.imgur.com/T4JVg1r.jpg', 'price' => 1190, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 17]);

        Product::create(['title' => '優質自拍神器','pic' =>'https://i.imgur.com/FD0yTx0.jpg', 'price' => 690, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 18]);

        Product::create(['title' => '經典有線鍵盤','pic' =>'https://i.imgur.com/EGJlcNp.jpg', 'price' => 2190, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 19]);

        Product::create(['title' => '藍芽音源接收器','pic' =>'https://i.imgur.com/5G953Z1.png', 'price' => 1090, 'stock' => 10 ,'cgy_id' => 2, 'sort' => 20]);

        Product::create(['title' => '腦力訓練 智慧平衡樹','pic' =>'https://i.imgur.com/L7qJmQk.jpg', 'price' => 200, 'stock' => 10 ,'cgy_id' => 3, 'sort' => 21]);

        Product::create(['title' => 'Minecraft 當個創世神我的世界 黑蜘蛛','pic' =>'https://i.imgur.com/mX0L0cc.jpg', 'price' => 109, 'stock' => 10 ,'cgy_id' => 3, 'sort' => 22]);

        Product::create(['title' => '日本san-x角落生物掛件 牆角生物公仔毛絨吊飾','pic' =>'https://i.imgur.com/mAFXn49.jpg', 'price' => 129, 'stock' => 10 ,'cgy_id' => 3, 'sort' => 23]);

        Product::create(['title' => '益智遊戲 魔術方塊','pic' =>'https://i.imgur.com/wEx0RGe.jpg', 'price' => 80, 'stock' => 10 ,'cgy_id' => 3, 'sort' => 24]);

        Product::create(['title' => '精靈寶可夢布偶系列－等身大蓬鬆伊布','pic' =>'https://i.imgur.com/X2NmsLj.jpg', 'price' => 80, 'stock' => 10 ,'cgy_id' => 3, 'sort' => 25]);

        Product::create(['title' => '鯊魚 65cm 抱枕 鯊魚抱枕','pic' =>'https://i.imgur.com/DHbm3W4.jpg', 'price' => 170, 'stock' => 10 ,'cgy_id' => 3, 'sort' => 26]);

        Product::create(['title' => '寵物雨衣 多種顏色','pic' =>'https://i.imgur.com/bYw0XyB.jpg', 'price' => 199, 'stock' => 10 ,'cgy_id' => 4, 'sort' => 27]);

        Product::create(['title' => '寵物飯碗 多種顏色','pic' =>'https://i.imgur.com/pS1sMSk.jpg', 'price' => 59, 'stock' => 10 ,'cgy_id' => 4, 'sort' => 28]);

        Product::create(['title' => '寵物床 多種顏色','pic' =>'https://i.imgur.com/jXmGLWf.jpg', 'price' => 249, 'stock' => 10 ,'cgy_id' => 4, 'sort' => 29]);

        Product::create(['title' => '柔軟雙人彈簧床','pic' =>'https://i.imgur.com/IBJ0tnx.jpg', 'price' => 5000, 'stock' => 10 ,'cgy_id' => 5,    'sort' => 30]);

        Product::create(['title' => '柔軟單人床','pic' =>'https://i.imgur.com/4vsrYfi.jpg', 'price' => 5000, 'stock' => 10 ,'cgy_id' => 5, 'sort' => 31]);

        Product::create(['title' => '兩色四層收納櫃','pic' =>'https://i.imgur.com/q06kG6u.jpg', 'price' => 790, 'stock' => 10 ,'cgy_id' => 5, 'sort' => 32]);

        Product::create(['title' => '舒適電腦椅','pic' =>'https://i.imgur.com/xZonsF5.jpg', 'price' => 279, 'stock' => 10 ,'cgy_id' => 5, 'sort' => 33]);

        Product::create(['title' => '四門大鞋櫃','pic' =>'https://i.imgur.com/gUJnCYN.jpg', 'price' => 890, 'stock' => 10 ,'cgy_id' => 5, 'sort' => 34]);

        Product::create(['title' => '舒適雙人座沙發','pic' =>'https://i.imgur.com/m7gkX1X.jpg', 'price' => 999, 'stock' => 10 ,'cgy_id' => 5, 'sort' => 35]);

        Product::create(['title' => '時尚單人座沙發','pic' =>'https://i.imgur.com/M8SEqfC.jpg', 'price' => 999, 'stock' => 10 ,'cgy_id' => 5, 'sort' => 36]);

        Product::create(['title' => '優雅大茶几','pic' =>'https://i.imgur.com/isH9k95.jpg', 'price' => 799, 'stock' => 10 ,'cgy_id' => 5, 'sort' => 37]);

        Product::create(['title' => '大容量時尚衣櫥','pic' =>'https://i.imgur.com/NT6Wh6h.jpg', 'price' => 890, 'stock' => 10 ,'cgy_id' => 5, 'sort' => 38]);

        Product::create(['title' => 'SKECHERS 19506 BLCL','pic' =>'https://i.imgur.com/lTzesgj.jpg', 'price' => 1090, 'stock' => 10 ,'cgy_id' => 6,'sort' => 39]);

        Product::create(['title' => 'SKECHERS 19506 HPLH','pic' =>'https://i.imgur.com/0Rw1aA2.jpg', 'price' => 209, 'stock' => 10 ,'cgy_id' => 6, 'sort' => 40]);

        Product::create(['title' => '休閒桌球組','pic' =>'https://i.imgur.com/DtgsbDi.jpg', 'price' => 150, 'stock' => 10 ,'cgy_id' => 6, 'sort' => 41]);

        Product::create(['title' => '近視款泳鏡','pic' =>'https://i.imgur.com/tzKuIxR.jpg', 'price' => 190, 'stock' => 10 ,'cgy_id' => 6,'sort' => 42]);

        Product::create(['title' => '精選羽球組','pic' =>'https://i.imgur.com/Ku1FPL7.jpg', 'price' => 130, 'stock' => 10 ,'cgy_id' => 6, 'sort' => 43]);

        Product::create(['title' => '<書本熊>計算機概論2018探索電腦DISCOVERING','pic' =>'https://i.imgur.com/AHXMK9g.jpg', 'price' => 468, 'stock' => 10 ,'cgy_id' => 7, 'sort' => 44]);

        Product::create(['title' => '<書本熊>警察法規必讀聖經2.2-2018(最新版)警察特考三四等','pic' =>'https://i.imgur.com/G7J5Zbr.jpg', 'price' => 468, 'stock' => 10 ,'cgy_id' => 7, 'sort' => 45]);

        Product::create(['title' => '穩拿文化系列叢書----賽鴿健康與管理','pic' =>'https://i.imgur.com/gRfVbqC.jpg', 'price' => 468, 'stock' => 10 ,'cgy_id' => 7, 'sort' => 46]);

        Product::create(['title' => '東立小說 遊戲人生 9','pic' =>'https://i.imgur.com/HCjiWMH.jpg', 'price' => 468, 'stock' => 10 ,'cgy_id' => 7, 'sort' => 47]);

        Product::create(['title' => '角川 輕小說《歡迎來到實力至上主義的教室 (05)》','pic' =>'https://i.imgur.com/Cp4g8OE.jpg', 'price' => 468, 'stock' => 10 ,'cgy_id' => 7, 'sort' => 48]);

        Product::create(['title' => '東立中文小說 NO GAME NO LIFE 遊戲人生 8','pic' =>'https://i.imgur.com/FugN7rG.jpg', 'price' => 468, 'stock' => 10 ,'cgy_id' => 7, 'sort' => 49]);

        Product::create(['title' => '【水晶肥皂食器洗滌液體補充包800g】006510洗潔精 洗碗精','pic' =>'https://i.imgur.com/I7t4si1.jpg', 'price' => 1090, 'stock' => 10 ,'cgy_id' => 8, 'sort' => 50]);

        Product::create(['title' => '15爪可收納伸縮鐵掃把(落葉掃、草耙子)','pic' =>'https://i.imgur.com/vE2jHp4.jpg', 'price' => 209, 'stock' => 10 ,'cgy_id' => 8, 'sort' => 51]);

        Product::create(['title' => '日本KM.689.掃把收納架 拖把掛鉤 直桿掛夾','pic' =>'https://i.imgur.com/EM6J1p9.jpg', 'price' => 490, 'stock' => 10 ,'cgy_id' => 8, 'sort' => 52]);

        Product::create(['title' => '竹 掃把 ~ 掃具','pic' =>'https://i.imgur.com/dgTukAO.jpg', 'price' => 190, 'stock' => 10 ,'cgy_id' => 8, 'sort' => 53]);

        Product::create(['title' => '免沾手 掃把簸箕套裝組 家用掃地神器 軟毛掃頭髮 掃把','pic' =>'https://i.imgur.com/bv9KWCR.jpg', 'price' => 899, 'stock' => 10 ,'cgy_id' => 8, 'sort' => 54]);

        Product::create(['title' => '金屬脫水籃+金屬桿+4頭 加厚加固 全不銹鋼 拖把','pic' =>'https://i.imgur.com/TuQGRbG.jpg', 'price' => 99, 'stock' => 10 ,'cgy_id' => 8, 'sort' => 55]);

        Product::create(['title' => '滌太太除垢拖把組','pic' =>'https://i.imgur.com/8RYLl6A.jpg', 'price' => 490, 'stock' => 10 ,'cgy_id' => 8, 'sort' => 56]);

        Product::create(['title' => '抗菌洗手乳','pic' =>'https://i.imgur.com/l57xCgZ.jpg', 'price' => 220, 'stock' => 10 ,'cgy_id' => 8, 'sort' => 57]);

    }
}
