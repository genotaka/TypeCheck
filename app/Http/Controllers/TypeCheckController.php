<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TypeCheckController extends Controller
{
    //
    public function index(){
        return view('check.type.index');
    }

    public function check(){

        $qList = DB::table('type_check_masters')->whereNull('deleted_at')->orderBy('sort_no','asc')->get();

        return view('check.type.start', ['question' => $qList]);
    }

    public function submit(Request $request){

        // 現在日時のインスタンス生成（データ登録用）
        $datetime = new Carbon('now', 'Asia/Tokyo');

        // POSTリクエストをコレクションに変換
        $check_result = collect($request->all());

        // データが'yes'のデータだけにフィルタしてIDをDBの検索条件にセットできるように加工
        $filtered = $check_result->filter(function ($value) {
            return $value == 'yes';
        })->keys()->toArray();

        // DBから該当の質問を抽出
        $result_db = DB::table('type_check_masters')->whereIn('id',$filtered)->whereNull('deleted_at')->get();

        // 最大値を計算するため各カラムを集計して別の配列に格納
        $temp_array = [
            'soul_plus' => $result_db->sum('soul_plus'),
            'soul_minus' => $result_db->sum('soul_minus'),
            'blood_plus' => $result_db->sum('blood_plus'),
            'blood_minus' => $result_db->sum('blood_minus'),
            'water_plus' => $result_db->sum('water_plus'),
            'water_minus' => $result_db->sum('water_minus'),
            'heat_plus' => $result_db->sum('heat_plus'),
            'heat_minus' => $result_db->sum('heat_minus')
        ];

        $max_val = collect($temp_array)->max();

        foreach ($temp_array as $arr_row_key => $arr_row_val){
            if ($arr_row_val == $max_val){
                $new_array[] = $arr_row_key;
            }
        };

        // 結果が複数ある場合はパイプでつないでstringに変換
        $type_string = implode('|',$new_array);

        // 登録に必要なデータを配列にセット
        $registration = [
            'user_id' => Auth::id(),
            'soul_plus' => $temp_array['soul_plus'],
            'soul_minus' => $temp_array['soul_minus'],
            'blood_plus' => $temp_array['blood_plus'],
            'blood_minus' => $temp_array['blood_minus'],
            'water_plus' => $temp_array['water_plus'],
            'water_minus' => $temp_array['water_minus'],
            'heat_plus' => $temp_array['heat_plus'],
            'heat_minus' => $temp_array['heat_minus'],
            'type_result' => $type_string,
            'created_at' => $datetime,
            'updated_at' => $datetime
        ];

        DB::table('type_check_results')->insert($registration);

        // 登録が完了したらセッションの値を削除する（POSTデータだけ）
        Session::forget('check_result');


        return view('check.type.result');
    }
}
