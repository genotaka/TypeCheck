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
                'question' => '臀部、大腿部位相对肉较多？',
                'sort_no' => '1',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '经常吃甜食？ （每周多于3次）',
                'sort_no' => '2',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '容易起痘痘、痤疮？',
                'sort_no' => '3',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '运动量较少？（每周少于3次）',
                'sort_no' => '4',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '面部下肢容易浮肿？',
                'sort_no' => '5',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '大便不成形？',
                'sort_no' => '6',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '情绪容易焦虑、暴躁？（近一个月）',
                'sort_no' => '7',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '每天坐的时间较长？',
                'sort_no' => '8',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '腰间赘肉突出、小腹明显？',
                'sort_no' => '9',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '正常状态时经常感觉身体发热并容易出汗？',
                'sort_no' => '10',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '每天饮水量少于1000cc（约2杯）？',
                'sort_no' => '11',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '饮食不规律？',
                'sort_no' => '12',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '四肢相对较细？',
                'sort_no' => '13',
                'pear' => '0',
                'apple' => '1',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '经常摄入高盐、腌制类食物？ （每周多于3次）',
                'sort_no' => '14',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '头面部易出油？',
                'sort_no' => '15',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '经常熬夜？',
                'sort_no' => '16',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '经常吃高热量食物？',
                'sort_no' => '17',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '1',
            ],
            [
                'question' => '上身不胖、脸不大？',
                'sort_no' => '18',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
            [
                'question' => '身体感觉沉重并容易疲劳？（近一个月）',
                'sort_no' => '19',
                'pear' => '0',
                'apple' => '0',
                'peanuts' => '1',
                'pineapple' => '0',
            ],
            [
                'question' => '经常吃油脂类食物？（每周多于3次）',
                'sort_no' => '20',
                'pear' => '1',
                'apple' => '0',
                'peanuts' => '0',
                'pineapple' => '0',
            ],
        ]);
    }
}
