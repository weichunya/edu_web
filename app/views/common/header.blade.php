<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>91优看-在线教育</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/flickerplate.css"  type="text/css" rel="stylesheet">
    {{--<link href="css/video-js.css"  type="text/css" rel="stylesheet">--}}

    <link href="css/common.css" rel="stylesheet" type="text/css">
    {{--<link href="css/carousel-my.css" rel="stylesheet" type="text/css">--}}
    <script src="js/jquery-v1.10.2.min.js" type="text/javascript"></script>
    <script src="js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
    <script src="js/flickerplate.min.js" type="text/javascript"></script>
    {{--<script src="js/bootstrap.min.js" type="text/javascript"></script>--}}
    <script src="js/bootstrap.js" type="text/javascript"></script>

    <script src="//vjs.zencdn.net/ie8/1.1.1/videojs-ie8.min.js"></script>
    {{--<link href="//example.com/path/to/video-js.min.css" rel="stylesheet">--}}
    {{--<script src="//example.com/path/to/video.min.js"></script>--}}
    {{--<script>--}}
        {{--videojs.options.flash.swf = "http://example.com/path/to/video-js.swf"--}}
    {{--</script>--}}


    <link href="js/video-js/video-js.css"  type="text/css" rel="stylesheet">
    <script src="js/video-js/video.js" type="text/javascript"></script>
    <script src="js/edu.js" type="text/javascript"></script>
    <script>videojs.options.flash.swf = "js/video-js/video-js.swf";</script>
</head>

<body>

<header>
    <div class="row">
        <a href="#"><div id="head_1" class="col-xs-4 col-sm-4 col-md-1 col-md-offset-8 itemmy active">视频展示</div></a>
        <a href="#program"><div id="head_2" class="col-xs-4 col-sm-4 col-md-1 itemmy">业务介绍</div></a>
        <a href="#elephant"><div id="head_3" class="col-xs-4 col-sm-4 col-md-1 itemmy">合作案例</div></a>
    </div>
</header>

{{--@include('common.carousel')--}}
@include('common.carouselBootstrap')
@include('common.nav')
