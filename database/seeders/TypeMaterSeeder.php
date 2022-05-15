<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeMaterSeeder extends Seeder
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
                'type_name' => 'soul_plus',
                'type_caption' => '気の滞りタイプ',
                'mark_path' => '/img/mark/soul_plus.png',
                'description' => 'あなたの症状は気の滞りタイプです。',
                'image_path' => '/img/illustration/soul_plus_il.png',
                'contents' => '気の巡りが悪く、部分的に気が過剰にたまった状態。ストレスや抑うつ感、心配ごとが原因なのでリラックスを意識しましょう。',
                'food' => 'エンドウ豆・春菊・玉ねぎ・レタス・キャベツ・マッシュルーム・からし菜・ザーサイ',
                'drink' => 'シソの葉・ジャスミン・ペパーミント・ローズヒップ・オレンジピール',
            ],
            [
                'sort_no' => '2',
                'type_name' => 'blood_plus',
                'type_caption' => '血の滞りタイプ',
                'mark_path' => '/img/mark/blood_plus.png',
                'description' => 'あなたの症状は血の滞りタイプです。',
                'image_path' => '/img/illustration/blood_plus_il.png',
                'contents' => '血の巡りを導く気が不足しているか滞っており、血の巡りの悪い冷えや月経痛が表れやすいのでストレス解消を心がけて。',
                'food' => '里芋・ニラ・シシトウ・パセリ・納豆・鮭・鱈・イカ',
                'drink' => '青仁烏豆(黒豆)・セージ・ハイビスカス・ローズレッド・ウコン・蓮の葉・サフラン',
            ],
            [
                'sort_no' => '3',
                'type_name' => 'water_plus',
                'type_caption' => '水分過剰タイプ',
                'mark_path' => '/img/mark/water_plus.png',
                'description' => 'あなたの症状は水分過剰タイプです。',
                'image_path' => '/img/illustration/water_plus_il.png',
                'contents' => '気の不足により水分の巡りが悪く、体内に水分が過剰に蓄積。水太りの傾向があります。水分を取りすぎず適度に運動しましょう。',
                'food' => 'ネギ・大根・高菜・タケノコ・エノキタケ・海苔・空豆・ししゃも',
                'drink' => '黒烏龍茶・紅茶・昆布・タンポポ・ドクダミ・アマチャヅル・コーヒー',
            ],
            [
                'sort_no' => '4',
                'type_name' => 'heat_plus',
                'type_caption' => '熱過剰タイプ',
                'mark_path' => '/img/mark/heat_plus.png',
                'description' => 'あなたの症状は熱過剰タイプです。',
                'image_path' => '/img/illustration/heat_plus_il.png',
                'contents' => '水分の滞りが熱を帯びてドロドロしたものが体内に蓄積 。甘いものや辛いもの、脂っこいものは控えましょう。',
                'food' => 'オリーブ・もやし・ナス・キュウリ・しじみ・ハマグリ・ワカメ・モズク',
                'drink' => '黒烏龍茶・緑茶(煎茶)・大麦・ゴボウ・小豆・はと麦・ゴーヤ',
            ],
            [
                'sort_no' => '5',
                'type_name' => 'soul_minus',
                'type_caption' => '気不足タイプ',
                'mark_path' => '/img/mark/soul_minus.png',
                'description' => 'あなたの症状は気不足タイプです。',
                'image_path' => '/img/illustration/soul_minus_il.png',
                'contents' => '胃腸の働きが弱っていて気を作り出す力が少なく、活力不足。食べすぎや冷たいものの摂りすぎは、胃腸に負担がかかるので注意を。',
                'food' => 'ジャガイモ・サツマイモ・とうもろこし・にんじん・豆腐・牛肉・鶏肉・タコ',
                'drink' => '玄米・大豆・タイム・グァバ・セージ・とうもろこし・レモングラス',
            ],
            [
                'sort_no' => '6',
                'type_name' => 'blood_minus',
                'type_caption' => '血不足タイプ',
                'mark_path' => '/img/mark/blood_minus.png',
                'description' => 'あなたの症状は血不足タイプです。',
                'image_path' => '/img/illustration/blood_minus_il.png',
                'contents' => '水分が足りないために熱がこもり、体内が乾燥ぎみに。過労や睡眠不足、ストレスなどが原因なのでこれらの解消をこころがけて。',
                'food' => 'ほうれん草・蓮根・椎茸・牛肉・豚肉・羊肉・鶏肉・卵',
                'drink' => '青仁烏豆(黒豆)・大豆・よもぎ・干しぶどう・なつめ・黒ごま・牛乳',
            ],
            [
                'sort_no' => '7',
                'type_name' => 'water_minus',
                'type_caption' => '水不足タイプ',
                'mark_path' => '/img/mark/water_minus.png',
                'description' => 'あなたの症状は水不足タイプです。',
                'image_path' => '/img/illustration/water_minus_il.png',
                'contents' => '水分が足りないために熱がこもり、体内が乾燥ぎみに。過労や睡眠不足、ストレスなどが原因なのでこれらの解消を心がけて。',
                'food' => 'ズッキーニ・小松菜・冬瓜・山芋・エリンギ・アサリ・ホタテ・白きくらげ',
                'drink' => '緑茶・白ごま・ラカンカ・リコリス(甘草)・アップルフルーツ・ナルコユリ・クコ',
            ],
            [
                'sort_no' => '8',
                'type_name' => 'heat_minus',
                'type_caption' => '熱不足タイプ',
                'mark_path' => '/img/mark/heat_minus.png',
                'description' => 'あなたの症状は熱不足タイプです。',
                'image_path' => '/img/illustration/heat_minus_il.png',
                'contents' => '温める力が弱いために身体が冷えてリンパ液などの巡りが悪く、むくみがち。身体を温めて十分に休息をとろう。',
                'food' => 'キャベツ・カリフラワー・インゲン豆・アスパラ・かぼちゃ・鮭・牛肉・豚肉',
                'drink' => 'プーアール・杜仲・生姜・よもぎ・クローブ・シナモン・フェンネル(小茴香)',
            ],
        ]);
    }
}
