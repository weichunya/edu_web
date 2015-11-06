<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller {
    public function getIndex() {
        return view('index.index');
    }

    public function getPhone(Request $request) {
        $tel = $request->input('tel');
    }
}