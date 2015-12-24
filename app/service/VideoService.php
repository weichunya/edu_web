<?php

namespace Laravel\Service;
use Illuminate\Support\Facades\Session;
use Laravel\Model\VideoModel;


class VideoService {

    private $videoM;

    private $yuwen = array(1450694776689 ,1450698058588 ,1450698151036 ,1450698238375 ,1450698308194 ,1450698745548 ,1450701286938 ,1450701397131);
    private $shuxue = array(1450687381074,1450687505058,1450687589215,1450691747354);
    private $yingyu = array(1450693038924,1450693106496,1450693167376,1450693236200,1450693307323,1450693370832,1450693430309,1450693624655,1450693782416,1450693868275,1450693997377,1450694331977,1450694432127,1450694534691,1450694620032);
    private $wuli = array(1450692735510,1450692830497,1450692939986);
    private $huaxue = array(1450687268731);
    private $dili = array(1450682743806,1450685685923,1450685884206,1450686751556,1450687061377,1450695983989);
    private $zhengzhi = array(1450695336588,1450696070056,1450696114169,1450696160048);

    /**
     * 七牛域名
     */
    const QiNiu_EduOnline_Domain = 'http://7xkw28.com1.z0.glb.clouddn.com/';

    public function __construct() {
        $this->nowTime = date('Y-m-d H:i:s');
        $this->videoM = new VideoModel();
    }

    public function getVideos($course){
        $list = $this->videoM->getVideos($this->$course);
        foreach($list as $item){
            $item->pic = self::QiNiu_EduOnline_Domain.$item->pic;
        }
        return $list;
    }
}