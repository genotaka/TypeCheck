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
                'description' => '梨体型（皮下脂肪肥满）',
                'image_path' => '/img/illustration/xxx.png',
                'contents' => '脂肪分解が難しく、皮下脂肪の蓄積が多く、お尻や太ももを中心に脂肪が蓄積しやすく、重心が比較的安定しているようです。このグループの人々は、高脂肪の摂取量を減らし、下半身の運動を増やして筋肉を増やし、脂肪を燃焼させることができます。',
            ],
            [
                'sort_no' => '2',
                'body_name' => 'apple',
                'description' => 'リンゴ体型（皮下脂肪肥满）',
                'image_path' => '/img/illustration/xxx.png',
                'contents' => 'ブドウ糖代謝の低下、血流の低下、体内の代謝物の排出不能、過剰な脂肪の蓄積、腰や腹部の脂肪の蓄積のしやすさ、腰痛のしやすさ。このグループの人々は、砂糖とアルコールの摂取量を減らし、低GI食品を摂取する必要があります。',
            ],
            [
                'sort_no' => '3',
                'body_name' => 'peanuts',
                'description' => 'ピーナッツ体型（水分型肥满）',
                'image_path' => '/img/illustration/xxx.png',
                'contents' => '水分が体内に溜まりやすく、顔、上肢、下肢が腫れやすく、筋肉の成長が遅く、体内の新陳代謝が低いです。このグループの人々は、体が水分を過剰に蓄えるのを避けるために、高塩分や辛い食べ物をあまり食べません。',
            ],
            [
                'sort_no' => '4',
                'body_name' => 'pineapple',
                'description' => 'パイナップル体型（混合型肥满）',
                'image_path' => '/img/illustration/xxx.png',
                'contents' => '多くの場合、夜更かし、基礎代謝の低下、不規則な食事と休息は体脂肪の蓄積を容易にします。そのような人々は生命の法則に注意を払い、夜更かしを減らすべきです。',
            ],
        ]);
    }
}
