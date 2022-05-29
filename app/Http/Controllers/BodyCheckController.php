<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BodyCheckController extends Controller
{
    public function check(){
        $qList = DB::table('body_check_masters')->orderBy('sort_no','asc')->get();

        return view('check.body.start', ['question' => $qList]);
    }

    public function submit(Request $request){
        // 現在日時のインスタンス生成（データ登録用） TODO: タイムゾーンは中国のモノに修正したほうがよろしいかと。
        $datetime = new Carbon('now', 'Asia/Tokyo');

        // POSTリクエストをコレクションに変換
        $check_result = collect($request->all());

        // データが'yes'のデータだけにフィルタしてIDをDBの検索条件にセットできるように加工
        $filtered = $check_result->filter(function ($value) {
            return $value == 'yes';
        })->keys()->toArray();

        // DBから該当の質問を抽出
        $result_db = DB::table('body_check_masters')->whereIn('id',$filtered)->whereNull('deleted_at')->get();

        // 最大値を計算するため各カラムを集計して別の配列に格納
        $temp_array = [
            'pear' => $result_db->sum('pear'),
            'apple' => $result_db->sum('apple'),
            'peanuts' => $result_db->sum('peanuts'),
            'pineapple' => $result_db->sum('pineapple'),
        ];

        // 計算結果のMAX値を取得（計算用）
        $max_val = collect($temp_array)->max();

        // カウントアップ用
        $i = 0;

        // MAXのカラムデータを抽出する
        foreach ($temp_array as $arr_row_key => $arr_row_val){
            if ($arr_row_val == $max_val && $i < 3){
                $new_array[] = $arr_row_key;
                $i++;
            }
        };

        // 結果が複数ある場合はパイプでつないでstringに変換
        $body_string = implode('|',$new_array);

        // 登録に必要なデータを配列にセット
        $registration = [
            'user_id' => Auth::id(),
            'pear' => $temp_array['pear'],
            'apple' => $temp_array['apple'],
            'peanuts' => $temp_array['peanuts'],
            'pineapple' => $temp_array['pineapple'],
            'body_result' => $body_string,
            'created_at' => $datetime,
            'updated_at' => $datetime
        ];

        // データ登録実行
        DB::table('body_check_results')->insert($registration);

        // 登録が完了したらセッションの値を削除する（POSTデータだけ）
        Session::forget('check_result');

        return redirect('mypage');
    }
}
