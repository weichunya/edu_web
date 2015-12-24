<?php
namespace Laravel\Controller\Index;

use ApiController;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use App\Libraries\Sms;
use Laravel\Model\VideoModel;
use Laravel\Service\VideoService;

class IndexController extends ApiController {

    private $videoService;

    public function __construct(){
        parent::__construct();
        $this->videoService = new VideoService();
    }

    public function getIndex() {
        $yuwen = $this->videoService->getVideos("yuwen");
        $shuxue = $this->videoService->getVideos("shuxue");
        $yingyu = $this->videoService->getVideos("yingyu");
        $wuli = $this->videoService->getVideos("wuli");
        $huaxue = $this->videoService->getVideos("huaxue");
        $dili = $this->videoService->getVideos("dili");
        $zhengzhi = $this->videoService->getVideos("zhengzhi");
        $data = array();
        $data[ 'yuwen' ] = $yuwen;
        $data[ 'shuxue' ] = $shuxue;
        $data[ 'yingyu' ] = $yingyu;
        $data[ 'wuli' ] = $wuli;
        $data[ 'huaxue' ] = $huaxue;
        $data[ 'dili' ] = $dili;
        $data[ 'zhengzhi' ] = $zhengzhi;
        Log::info($data);
//        debug($data);
        return Response::view('index', $data);
    }

}