@extends('layouts.app')
@section('content')
    <!--轮播图 商学院 start-->
    <div class="swiper-container swiper-container-horizontal">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $banner->image_url) }}" class="img-sy" />
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
    </div>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true
        });
    </script>
    <!--轮播图 商学院 end-->

    <!--新闻 start-->
    <div class="news-box">
        <div class="container">
            <div class="bt-box">
                <div class="bt-text1">新闻详情</div>
                <div class="bt-eng">News Detail</div>
            </div>
            <div class="news-content">
                {!! $new->content !!}
                <div class="fl-cl"></div>
            </div>
        </div>
    </div>
    <!--新闻 end-->
    @include('layouts._footer')
@stop

@section('customer-js')
    <script>
        $(document).ready(function() {
            $('#new').css('color','#5c9ce2');
        });
    </script>
@stop