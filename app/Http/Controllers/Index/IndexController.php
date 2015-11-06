<?php

namespace App\Http\Controllers\Index;

use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller {
    public function getIndex() {
        $download_url = DB::table('app_version')->orderBy('update_time', 'desc')->value('url');
        return view('index.index')->with('download_url', $download_url);
    }

    public function postIndex(Request $request) {
        if (!$request->has('tel')) return response()->json(array('code' => '-1', 'msg' => 'missing parameters'));
        $tel = $request->input('tel');
        $tel_pattern = "/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/i";
        if (!preg_match($tel_pattern, $tel)) return response()->json(array('code' => '0', 'msg' => 'invalid number'));
        else return response()->json(array('code' => '1', 'msg' => $tel));
    }
}