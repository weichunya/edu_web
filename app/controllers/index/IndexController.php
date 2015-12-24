<?php
namespace Laravel\Controller\Index;

use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\Libraries\Sms;

class IndexController extends Controller {

    public function getIndex() {
        return Response::view('index');
    }

}