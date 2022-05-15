<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodyCheckMaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('body_check_masters')->insert([
            [
                'question' => 'お尻と太ももは比較的肉厚ですか？',
                'sort_no' => '1',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => 'よくお菓子を食べますか？（週に3回以上）',
                'sort_no' => '2',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => 'にきびや吹き出物が発生しやすいですか？',
                'sort_no' => '3',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '身体を動かすことが少ないですか？（週に3回未満）',
                'sort_no' => '4',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '顔にむくみを感じますか？',
                'sort_no' => '5',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '便がゆるい・下痢気味ですか？',
                'sort_no' => '6',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '不安やイライラを感じますか？（直近1ヶ月）',
                'sort_no' => '7',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '毎日長時間座っていますか？',
                'sort_no' => '8',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '腰周りや下腹部の脂肪が目立ちますか？',
                'sort_no' => '9',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '運動をしていないのに暑くて汗をかきやすいことがよくありますか？',
                'sort_no' => '10',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '1日あたり1000cc（約2カップ）未満の水を飲みますか？',
                'sort_no' => '11',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '食事の時間は不規則ですか？',
                'sort_no' => '12',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '手足は比較的細いですか？',
                'sort_no' => '13',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '高塩分保存食品を頻繁に摂取しますか？ （週に3回以上）',
                'sort_no' => '14',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '頭と顔が油っぽくなりがちですか？',
                'sort_no' => '15',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '夜更かしになりがちですか？',
                'sort_no' => '16',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '高カロリーの食べ物をよく食べますか？',
                'sort_no' => '17',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '上半身に比べて下半身のほうが太っていたり大きかったりしますか？',
                'sort_no' => '18',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '体のだるさや疲れやすさなどありますか？ （直近1ヶ月）',
                'sort_no' => '19',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '脂肪分の多い食べ物を頻繁に食べますか？（週に3回以上）',
                'sort_no' => '20',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
        ]);
    }
}
