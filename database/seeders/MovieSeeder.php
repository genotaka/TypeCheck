<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'type_id' => '1',
                'body_id' => '',
                'movie_name' => 'soul_plus',
                'description' => '気プラスムービー',
                'movie_path' => '/movie/soul_plus.mp4',
                'poster_path' => '/img/poster/soul_plus.png',
                'length' => '0min00sec',
            ],
            [
                'type_id' => '2',
                'body_id' => '',
                'movie_name' => 'blood_plus',
                'description' => '血プラスムービー',
                'movie_path' => '/movie/blood_plus.mp4',
                'poster_path' => '/img/poster/blood_plus.png',
                'length' => '0min00sec',
            ],
            [
                'type_id' => '3',
                'body_id' => '',
                'movie_name' => 'water_plus',
                'description' => '水プラスムービー',
                'movie_path' => '/movie/water_plus.mp4',
                'poster_path' => '/img/poster/water_plus.png',
                'length' => '0min00sec',
            ],
            [
                'type_id' => '4',
                'body_id' => '',
                'movie_name' => 'heat_plus',
                'description' => '熱プラスムービー',
                'movie_path' => '/movie/heat_plus.mp4',
                'poster_path' => '/img/poster/heat_plus.png',
                'length' => '0min00sec',
            ],
            [
                'type_id' => '5',
                'body_id' => '',
                'movie_name' => 'soul_minus',
                'description' => '気マイナスムービー',
                'movie_path' => '/movie/soul_minus.mp4',
                'poster_path' => '/img/poster/soul_minus.png',
                'length' => '0min00sec',
            ],
            [
                'type_id' => '6',
                'body_id' => '',
                'movie_name' => 'blood_minus',
                'description' => '血マイナスムービー',
                'movie_path' => '/movie/blood_minus.mp4',
                'poster_path' => '/img/poster/blood_minus.png',
                'length' => '0min00sec',
            ],
            [
                'type_id' => '7',
                'body_id' => '',
                'movie_name' => 'water_minus',
                'description' => '水マイナスムービー',
                'movie_path' => '/movie/water_minus.mp4',
                'poster_path' => '/img/poster/water_minus.png',
                'length' => '0min00sec',
            ],
            [
                'type_id' => '8',
                'body_id' => '',
                'movie_name' => 'heat_minus',
                'description' => '熱マイナスムービー',
                'movie_path' => '/movie/heat_minus.mp4',
                'poster_path' => '/img/poster/heat_minus.png',
                'length' => '0min00sec',
            ],
        ]);
    }
}
