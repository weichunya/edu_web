<?php
/**
 * Created by PhpStorm.
 * User: guoshijie
 * Date: 15/10/29
 * Time: 下午3:43
 */

namespace Laravel\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VideoModel extends Model {

    public function __construct(){
        $this->init();
    }

    private function init(){
        $this->nowDateTime = date('Y-m-d H:i:s');
    }

    public function getVideos($array){
//        $res = DB::select('
//            SELECT a.question_id,a.title,d.name,c.url,b.store_info pic
//            FROM sh_video_base a
//            inner join sh_video_pic b on a.id = b.sh_video_base_id
//            inner join sh_video_detail c on a.id = c.sh_video_base_id
//            inner join sh_lecture d on a.sh_lecture_id= d.id
//            where a.question_id in(1450694776689 ,1450698058588 ,1450698151036 ,1450698238375 ,1450698308194 ,1450698745548 ,1450701286938 ,1450701397131);
//        ');

        $table = DB::table('video_base AS a');
        $table->select(DB::raw("
            a.question_id,
            a.title,
            d.name,
            c.url,
            b.store_info pic
		"))
            ->leftJoin('video_pic AS b' ,DB::raw('a.id'),'=',DB::raw('b.sh_video_base_id'))
            ->leftJoin('video_detail AS c' ,DB::raw('a.id'),'=',DB::raw('c.sh_video_base_id'))
            ->leftJoin('lecture AS d' ,DB::raw('a.sh_lecture_id'),'=',DB::raw('d.id'))
            ->whereIn(DB::raw('a.question_id'), $array);
        $res = $table->get();

//        debug($res);
        return $res;
    }


}

