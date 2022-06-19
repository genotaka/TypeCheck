<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyPageController extends Controller
{
    //
    public function index(){

        // 自分の診断結果を取得
        $checkResultTypeVal = DB::table('type_check_results')->where('user_id',Auth::id())->whereNull('deleted_at')->orderBy('created_at','asc')->get();
        $checkResultBodyVal = DB::table('body_check_results')->where('user_id',Auth::id())->whereNull('deleted_at')->orderBy('created_at','asc')->get();

        // タイプデータを取得
        $typeVal = DB::table('type_masters')->whereNull('deleted_at')->orderBy('created_at','asc')->get();

        // 体型データを取得
        $bodyVal = DB::table('body_masters')->whereNull('deleted_at')->orderBy('created_at','asc')->get();

        // 商品データ、動画データを取得
        $itemVal = DB::table('items')->whereNull('deleted_at')->orderBy('created_at','asc')->get();
        $movieVal = DB::table('movies')->whereNull('deleted_at')->orderBy('created_at','asc')->get();

        return view('mypage.index', ['type_result' => $checkResultTypeVal, 'body_result' => $checkResultBodyVal, 'type_data' => $typeVal, 'body_data' => $bodyVal, 'items' => $itemVal, 'movies' => $movieVal]);
    }
}
