<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyPageController extends Controller
{
    //
    public function index(){
        $checkResultVal = DB::table('type_check_results')->where('user_id',Auth::id())->whereNull('deleted_at')->orderBy('created_at','asc')->get();

        // タイプデータを取得
        $typeVal = DB::table('type_masters')->whereNull('deleted_at')->orderBy('created_at','asc')->get();

        return view('mypage.index', ['check_result' => $checkResultVal, 'type_data' => $typeVal]);
    }
}
