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
        DB::table('body_masters')->insert([
            [
                'id' => '1',
                'sort_no' => '1',
                'display_sort_no' => '1',
                'body_name' => 'pear',
                'description' => '梨型（内脏脂肪肥满）',
                'feature_contents' => '体质特征为：皮下脂肪堆积较多且脂肪容易堆积在臀部、大腿和小腹位置，俗称“大象腿”和“小肚腩”。',
                'cause_contents' => '基因UCP1存在异常，脂肪分解缓慢，运动量不足，长期坐着或坐姿不良，下半身寒气多，血流不畅，使多余的脂肪堆积于身体导致的肥胖类型。',
                'improvement_contents' => '这类人群可减少糖油脂摄入，改善坐姿，减少或不吃冷饮，温暖身体，另可多加练习下肢运动，增加肌肉燃烧脂肪。',
                'mark_path' => '/img/mark/pear.png',
                'image_path' => '/img/illustration/pear.png',
                'food' => '山药、洋葱、鸡蛋、鸡肉、蘑菇、海藻、豆腐、鸡胸肉',
                'drink' => '乌龙茶、陈皮、山楂、生姜、明日叶',
            ],
            [
                'id' => '2',
                'sort_no' => '2',
                'display_sort_no' => '2',
                'body_name' => 'apple',
                'description' => '苹果型（内脏脂肪型肥胖）',
                'feature_contents' => '体质特征：多余脂肪堆积在腰腹部与内脏之间，且容易腰疼，便秘、俗称“大肚腩”。',
                'cause_contents' => '基因β 3AR存在异常，糖代谢能力差，消化不良，血流不畅导致的肥胖类型。',
                'improvement_contents' => '这类人群应减少糖分、酒精摄入，摄入低GI食物，增加核心力量，经常练习收腹，促进血液循环。',
                'mark_path' => '/img/mark/apple.png',
                'image_path' => '/img/illustration/apple.png',
                'food' => '冻豆腐、荞麦、纳豆、豆芽、卷心菜、西兰花、鸡肉、羊肉、裙带菜、鲭鱼、鳗鱼',
                'drink' => '决明子、柠檬、菊花、枸杞、荷叶、普洱',
            ],
            [
                'id' => '3',
                'sort_no' => '3',
                'display_sort_no' => '3',
                'body_name' => 'peanuts',
                'description' => '花生型（水肿型肥胖）',
                'feature_contents' => '体质特征为：脸大腿粗，倒不是肉多结实，主要是面部、上肢和下肢易水肿。俗称大饼脸，金鱼眼。',
                'cause_contents' => '基因SERP I NG1存在异常，体内酸碱易失衡，代谢低下，水分排泄不畅，湿气过重导致的肥胖类型。',
                'improvement_contents' => '这类人群少食高盐过辛辣食物避免身体储存过多的水分，勤泡脚，祛湿改善体质。',
                'mark_path' => '/img/mark/peanuts.png',
                'image_path' => '/img/illustration/peanuts.png',
                'food' => '菠菜、茄子、牛油果、鸡胸肉、坚果、海藻、胡椒、鳗鱼、秋刀鱼',
                'drink' => '红茶、薏苡仁、玉米须、绿茶、咖啡',
            ],
            [
                'id' => '4',
                'sort_no' => '4',
                'display_sort_no' => '4',
                'body_name' => 'pineapple',
                'description' => '菠萝型（混合型肥胖）',
                'feature_contents' => '特征表现为：全身肥胖，胖得快，瘦得也快。减肥效果明显，但容易反弹。',
                'cause_contents' => '基因FTO存在异常，身体代谢虽正常，因喜欢暴饮暴食，食欲增加，又缺乏运动导致的肥胖类型。',
                'improvement_contents' => '这类人群适当注意控制热量摄入，平衡饮食，增加消耗。',
                'mark_path' => '/img/mark/pineapple.png',
                'image_path' => '/img/illustration/pineapple.png',
                'food' => '黄豆、小松菜、豆腐、鹰嘴豆、莲藕、姬菇、虾、鸡胸肉、牛腿肉、鲑鱼、鲽鱼',
                'drink' => '菊花、苦丁茶、金银花、迷迭香、杜仲',
            ],
        ]);
    }
}
