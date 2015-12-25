<!-- videos begin -->
<div class="videos" name="pannel_yuwen">
    <div class="video_row row">
        <div class="videos_content">
            @foreach ($yuwen as $index=>$video)
                <div class="col-xs-6 col-sm-6 col-md-4 video_padding">
                    <div class="video_pic" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);"><img src="{{$video->pic or 'img/img_default.png'}}"/></a>
                    </div>
                    <div class="video_title" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);">{{$video->title}}</a>
                    </div>
                    <div class="video_teacher">
                        <div class="video_teacher_name">讲师：{{$video->name}}</div>
                        {{--<div class="video_teacher_grade">年级：初一</div>--}}
                        <div class="clear"></div>
                    </div>
                </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="videos hide" name="pannel_shuxue">
    <div class="video_row row">
        <div class="videos_content">
            @foreach ($shuxue as $index=>$video)
                <div class="col-xs-6 col-sm-6 col-md-4 video_padding">
                    <div class="video_pic" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);"><img src="{{$video->pic or 'img/img_default.png'}}"/></a>
                    </div>
                    <div class="video_title" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);">{{$video->title}}</a>
                    </div>
                    <div class="video_teacher">
                        <div class="video_teacher_name">讲师：{{$video->name}}</div>
                        {{--<div class="video_teacher_grade">年级：初一</div>--}}
                        <div class="clear"></div>
                    </div>
                </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="videos hide" name="pannel_yingyu">
    <div class="video_row row">
        <div class="videos_content">
            @foreach ($yingyu as $index=>$video)
                <div class="col-xs-6 col-sm-6 col-md-4 video_padding">
                    <div class="video_pic" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);"><img src="{{$video->pic or 'img/img_default.png'}}"/></a>
                    </div>
                    <div class="video_title" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);">{{$video->title}}</a>
                    </div>
                    <div class="video_teacher">
                        <div class="video_teacher_name">讲师：{{$video->name}}</div>
                        {{--<div class="video_teacher_grade">年级：初一</div>--}}
                        <div class="clear"></div>
                    </div>
                </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="videos hide" name="pannel_wuli">
    <div class="video_row row">
        <div class="videos_content">
            @foreach ($wuli as $index=>$video)
                <div class="col-xs-6 col-sm-6 col-md-4 video_padding">
                    <div class="video_pic" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);"><img src="{{$video->pic or 'img/img_default.png'}}"/></a>
                    </div>
                    <div class="video_title" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);">{{$video->title}}</a>
                    </div>
                    <div class="video_teacher">
                        <div class="video_teacher_name">讲师：{{$video->name}}</div>
                        {{--<div class="video_teacher_grade">年级：初一</div>--}}
                        <div class="clear"></div>
                    </div>
                </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="videos hide" name="pannel_huaxue">
    <div class="video_row row">
        <div class="videos_content">
            @foreach ($huaxue as $index=>$video)
                <div class="col-xs-6 col-sm-6 col-md-4 video_padding">
                    <div class="video_pic" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);"><img src="{{$video->pic or 'img/img_default.png'}}"/></a>
                    </div>
                    <div class="video_title" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);">{{$video->title}}</a>
                    </div>
                    <div class="video_teacher">
                        <div class="video_teacher_name">讲师：{{$video->name}}</div>
                        {{--<div class="video_teacher_grade">年级：初一</div>--}}
                        <div class="clear"></div>
                    </div>
                </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="videos hide" name="pannel_dili">
    <div class="video_row row">
        <div class="videos_content">
            @foreach ($dili as $index=>$video)
                <div class="col-xs-6 col-sm-6 col-md-4 video_padding">
                    <div class="video_pic" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);"><img src="{{$video->pic or 'img/img_default.png'}}"/></a>
                    </div>
                    <div class="video_title" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);">{{$video->title}}</a>
                    </div>
                    <div class="video_teacher">
                        <div class="video_teacher_name">讲师：{{$video->name}}</div>
                        {{--<div class="video_teacher_grade">年级：初一</div>--}}
                        <div class="clear"></div>
                    </div>
                </div>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="videos hide" name="pannel_zhengzhi">
    <div class="video_row row">
        <div class="videos_content">
            @foreach ($zhengzhi as $index=>$video)
                <div class="col-xs-6 col-sm-6 col-md-4 video_padding">
                    <div class="video_pic" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);"><img src="{{$video->pic or 'img/img_default.png'}}"/></a>
                    </div>
                    <div class="video_title" videoAddr="{{$video->url}}" picUrl="{{$video->pic}}" videoTitle="{{$video->title}}">
                        <a href="javascript:void(0);">{{$video->title}}</a>
                    </div>
                    <div class="video_teacher">
                        <div class="video_teacher_name">讲师：{{$video->name}}</div>
                        {{--<div class="video_teacher_grade">年级：初一</div>--}}
                        <div class="clear"></div>
                    </div>
                </div>
            @endforeach
            {{--<div class="clear"></div>--}}
        </div>
    </div>
</div>

<!-- videos end -->

<!-- videos begin -->
{{--<div class="videos">--}}
    {{--<div class="video_row">--}}
        {{--<div class="videos_content">--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clear"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="video_row video_blue">--}}
        {{--<div class="videos_content">--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clear"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="video_row">--}}
        {{--<div class="videos_content">--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="video_one">--}}
                {{--<div class="video_pic"><img src=""/></div>--}}
                {{--<div class="video_title">高中语文第一课啥啥啥啥啥啥啥啥啥啥啥啥的</div>--}}
                {{--<div class="video_teacher">--}}
                    {{--<div class="video_teacher_name">讲师：韩老师</div>--}}
                    {{--<div class="video_teacher_grade">年级：初一</div>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clear"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- videos end -->