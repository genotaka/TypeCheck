<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     function run()
    {
        DB::table('items')->insert([
            [
                'type_id' => '1',
                'body_id' => '1',
                'item_name' => 'soul_plus_tab',
                'description' => '気プラス商品名',
                'price' => 0,
                'img_path' => '/img/magicbox/soul_plus_tab.png',
                'url' => '',
            ],
            [
                'type_id' => '2',
                'body_id' => '2',
                'item_name' => 'blood_plus_tab',
                'description' => '血プラス商品名',
                'price' => 0,
                'img_path' => '/img/magicbox/blood_plus_tab.png',
                'url' => '',
            ],
            [
                'type_id' => '3',
                'body_id' => '3',
                'item_name' => 'water_plus_tab',
                'description' => '水プラス商品名',
                'price' => 0,
                'img_path' => '/img/magicbox/water_plus_tab.png',
                'url' => '',
            ],
            [
                'type_id' => '4',
                'body_id' => '4',
                'item_name' => 'heat_plus_tab',
                'description' => '熱プラス商品名',
                'price' => 0,
                'img_path' => '/img/magicbox/heat_plus_tab.png',
                'url' => '',
            ],
            [
                'type_id' => '5',
                'body_id' => '',
                'item_name' => 'soul_minus_tab',
                'description' => '気マイナス商品名',
                'price' => 0,
                'img_path' => '/img/magicbox/soul_minus_tab.png',
                'url' => '',
            ],
            [
                'type_id' => '6',
                'body_id' => '',
                'item_name' => 'blood_minus_tab',
                'description' => '血マイナス商品名',
                'price' => 0,
                'img_path' => '/img/magicbox/blood_minus_tab.png',
                'url' => '',
            ],
            [
                'type_id' => '7',
                'body_id' => '',
                'item_name' => 'water_minus_tab',
                'description' => '水マイナス商品名',
                'price' => 0,
                'img_path' => '/img/magicbox/water_minus_tab.png',
                'url' => '',
            ],
            [
                'type_id' => '8',
                'body_id' => '',
                'item_name' => 'heat_minus_tab',
                'description' => '熱マイナス商品名',
                'price' => 0,
                'img_path' => '/img/magicbox/heat_minus_tab.png',
                'url' => '',
            ],
        ]);
    }
}
