<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodyMaterSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_masters')->insert([
            [
                'sort_no' => '1',
                'body_name' => 'pear',
                'description' => '梨型（皮下脂肪肥满）',
                'image_path' => '/img/illustration/pear.png',
                'contents' => '脂肪分解不易，皮下脂肪堆积较多，以臀部和大腿为中心，脂肪极易堆积，看起来重心比较稳。这类人群可减少高油脂摄入，多加练习下肢运动，增加肌肉燃烧脂肪。',
            ],
            [
                'sort_no' => '2',
                'body_name' => 'apple',
                'description' => '苹果型（皮下脂肪肥满）',
                'image_path' => '/img/illustration/apple.png',
                'contents' => '糖代谢较差，血流不畅，体内代谢物无法排出，多余脂肪堆积，腰腹部脂肪极易堆积，容易腰疼。这类人群应减少糖分、酒精摄入，摄入低GI食物。',
            ],
            [
                'sort_no' => '3',
                'body_name' => 'peanuts',
                'description' => '花生型（水分型肥满）',
                'image_path' => '/img/illustration/peanuts.png',
                'contents' => '体内水分容易堆积，面部、上肢和下肢易浮肿，肌肉生长缓慢，体内代谢低下。这类人群少食高盐过辛辣食物，避免身体储存过多的水分。',
            ],
            [
                'sort_no' => '4',
                'body_name' => 'pineapple',
                'description' => '菠萝型（混合型肥满）',
                'image_path' => '/img/illustration/pineapple.png',
                'contents' => '经常熬夜、基础代谢差，饮食作息不规律导致全身脂肪容易堆积。这类人群应注意生活规律，减少熬夜。',
            ],
        ]);
    }
}
