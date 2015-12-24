<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>91优看-在线教育</title>
    <link href="/css/common.css" rel="stylesheet" type="text/css">
    <!--Required libraries-->
    <script src="js/jquery-v1.10.2.min.js" type="text/javascript"></script>
    <script src="js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
    <!--Include flickerplate-->
    <link href="css/flickerplate.css"  type="text/css" rel="stylesheet">
    <script src="js/flickerplate.min.js" type="text/javascript"></script>
    <!--Execute flickerplate-->
    <script>
    $(document).ready(function(){
        $('.flicker-example').flicker();
    });
    </script>
    <script src="js/edu.js" type="text/javascript"></script>
</head>

<body>
<div id="top"></div>
<header>
    <div>
        <a href="#"><div id="head_3" class="item">合作案例</div></a>
        <a href="#"><div id="head_2" class="item">业务介绍</div></a>
        <a href="#"><div id="head_1" class="item active">视频展示</div></a>
    </div>
</header>

@include('common.carousel')
@include('common.nav')