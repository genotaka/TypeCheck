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
                'id' => '1',
                'sort_no' => '1',
                'display_sort_no' => '2',
                'type_name' => 'soul_plus',
                'type_caption' => '气滞',
                'contents_title' => '情绪焦虑偏头痛',
                'contents' => '因情绪压力，疲劳等原因致使体内气机循环不畅，痰、湿、瘀阻滞，影响到体内气的流通。表现为失眠、腹胀、易焦虑、面部时时发热、眉棱骨痛、头顶胀痛。',
                'mark_path' => '/img/mark/soul_plus.png',
                'image_path' => '/img/illustration/soul_plus_il.png',
                'food' => '豌豆、茼蒿、洋葱、莴苣、卷心菜、双孢蘑菇、芥菜、榨菜',
                'drink' => '紫苏叶、茉莉花、薄荷、玫瑰果、橙皮',
            ],
            [
                'id' => '2',
                'sort_no' => '2',
                'display_sort_no' => '4',
                'type_name' => 'blood_plus',
                'type_caption' => '血瘀',
                'contents_title' => '痛经',
                'contents' => '因血液运行不顺或气虚引起的血行不畅，导致血液在体内停滞，形成淤血块。表现为痛经、闭经、头部刺痛、面部色斑明显、面部暗沉无光泽、急躁易怒。',
                'mark_path' => '/img/mark/blood_plus.png',
                'image_path' => '/img/illustration/blood_plus_il.png',
                'food' => '芋头、韭菜、青椒、欧芹、纳豆、鲑鱼、鳕鱼、鱿鱼',
                'drink' => '青仁黑豆、药用鼠尾草、木槿、红蔷薇、姜黄、荷叶、番红花',
            ],
            [
                'id' => '3',
                'sort_no' => '3',
                'display_sort_no' => '6',
                'type_name' => 'water_plus',
                'type_caption' => '痰湿',
                'contents_title' => '湿气水肿',
                'contents' => '因脾胃虚弱，运动不足，长期久坐，体内水液运行不畅导致体形肥满。表现为四肢面部浮肿、头面部出油严重、身体沉重、大便不成形。',
                'mark_path' => '/img/mark/water_plus.png',
                'image_path' => '/img/illustration/water_plus_il.png',
                'food' => '葱、萝卜、高菜、笋、金针菇、海苔、蚕豆、柳叶鱼',
                'drink' => '黑乌龙茶、红茶、海带、蒲公英、鱼腥草、绞股蓝、咖啡',
            ],
            [
                'id' => '4',
                'sort_no' => '4',
                'display_sort_no' => '8',
                'type_name' => 'heat_plus',
                'type_caption' => '湿热',
                'contents_title' => '痘痘 痤疮',
                'contents' => '因天气变化使湿与热合并入侵体内，或因饮食不良、脾胃受损、情绪压力等原因所致。表现为身重头痛、口舌生疮、易发痘痘痤疮、汗多且热。',
                'mark_path' => '/img/mark/heat_plus.png',
                'image_path' => '/img/illustration/heat_plus_il.png',
                'food' => '橄榄、豆芽、茄子、黄瓜、花蚬、丽文蛤、裙带菜、海蕴',
                'drink' => '黑乌龙茶、绿茶、大麦、牛蒡、红豆、薏苡仁、苦瓜',
            ],
            [
                'id' => '5',
                'sort_no' => '5',
                'display_sort_no' => '1',
                'type_name' => 'soul_minus',
                'type_caption' => '气虚',
                'contents_title' => '易疲劳 免疫力低',
                'contents' => '因先天元气虚弱，长期脾胃消化不良致使体内脏腑功能失调，气的生成能力不足。表现为易疲劳、免疫力低下、面色萎黄、胸闷、食欲不佳、饭后消化不良、不想言语。',
                'mark_path' => '/img/mark/soul_minus.png',
                'image_path' => '/img/illustration/soul_minus_il.png',
                'food' => '马铃薯、地瓜、玉米、胡萝卜、豆腐、牛肉、鸡肉、章鱼',
                'drink' => '玄米、大豆、百里香、番石榴、药用鼠尾草、玉米、柠檬草',
            ],
            [
                'id' => '6',
                'sort_no' => '6',
                'display_sort_no' => '3',
                'type_name' => 'blood_minus',
                'type_caption' => '血虚',
                'contents_title' => '面色暗沉肌肤粗糙',
                'contents' => '因饮食不调、情绪不畅等原因，使体内各脏腑无力吸取营养，身体失去濡养所致。表现为面色差、肌肤干燥起皮屑、手足麻、易抽筋、月经量少色淡。',
                'mark_path' => '/img/mark/blood_minus.png',
                'image_path' => '/img/illustration/blood_minus_il.png',
                'food' => '菠菜、莲藕、香菇、牛肉、猪肉、羊肉、鸡肉、鸡蛋',
                'drink' => '青仁黑豆、大豆、魁蒿、葡萄干、红枣、黑芝麻、牛奶',
            ],
            [
                'id' => '7',
                'sort_no' => '7',
                'display_sort_no' => '5',
                'type_name' => 'water_minus',
                'type_caption' => '阴虚',
                'contents_title' => '皮肤干燥头发干枯',
                'contents' => '因劳累过度、睡眠不足、精神压力等原因导致体内阴液（液体营养物质）不足，全身失去濡养滋润。表现为心烦失眠、手足心热、头晕耳鸣、口燥咽干、健忘、尿黄便干。',
                'mark_path' => '/img/mark/water_minus.png',
                'image_path' => '/img/illustration/water_minus_il.png',
                'food' => '西葫芦、小菘菜、冬瓜、山药、杏鲍菇、花蛤、扇贝、银耳',
                'drink' => '绿茶、白芝麻、罗汉果、甘草、苹果干、斑叶玉竹、枸杞',
            ],
            [
                'id' => '8',
                'sort_no' => '8',
                'display_sort_no' => '7',
                'type_name' => 'heat_minus',
                'type_caption' => '肾阳虚',
                'contents_title' => '手脚冰冷',
                'contents' => '因先天肾阳虚衰，后天过于劳累或房事过度致使体内的升腾气化能力减弱。表现为畏寒怕冷、神疲乏力、夜尿频繁、易疲劳、腰膝酸痛、下肢水肿、记忆力减退、嗜睡、易脱发。',
                'mark_path' => '/img/mark/heat_minus.png',
                'image_path' => '/img/illustration/heat_minus_il.png',
                'food' => '卷心菜、花椰菜、四季豆、芦笋、南瓜、鲑鱼、牛肉、猪肉',
                'drink' => '普洱、杜仲、生姜、魁蒿、丁香、桂皮、小茴香',
            ],
        ]);
    }
}
