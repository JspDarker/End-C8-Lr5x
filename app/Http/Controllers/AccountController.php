<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function loginAjax(Request $request)
    {

        if($request->ajax()) {
            $sql = DB::table('users')->select('email')->where('email',$request->email)->first();
            return count($sql)== 0 ? response('Account unValid, Email not exists!') : '';
        }
    }
}
