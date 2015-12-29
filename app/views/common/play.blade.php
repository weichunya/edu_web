<div id="playModel" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- player begin -->
            <div class="row" style="position:relative;">
                <div class="banner">
                    <span class="banner-title" id="banner-title">[高清]</span>&nbsp;&nbsp;
                    {{--<span class="banner-quality">[高清]</span>--}}
                </div>
                <video id="banner-video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" poster="">
                    <source src="http://vjs.zencdn.net/v/oceans.mp4" id="videoUrl"/>

                    {{--@foreach($videoList as $value)--}}
                        {{--@if (strcmp($value->type,'m3u8') == 0) <source src="{{ $value->url }}" />--}}
                        {{--@else <source src="{{ $value->url }}" type="video/{{ $value->type }}" />--}}
                        {{--@endif--}}
                    {{--@endforeach--}}

                    <track kind="captions" src="js/video-js/demo.captions.vtt" srclang="en" label="English"/><!-- Tracks need an ending tag thanks to IE9 -->
                    <track kind="subtitles" src="js/video-js/demo.captions.vtt" srclang="en" label="English"/><!-- Tracks need an ending tag thanks to IE9 -->
                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                </video>
            </div>
            <!-- player end -->
        </div>
    </div>
</div>