@extends('layouts.app')
@section('content')
    <!--广告图 二级页面1 start-->
    <div>
        <img src="{{ asset('assets/ldd/images/second4/banner.jpg') }}" class="img-sy"/>
    </div>
    <!--广告图 二级页面1 end-->

    <!--广告语 start-->
    <div class="gg-text">
        到家服务人才的摇篮
    </div>
    <!--广告语 end-->

    <!--到家服务 start-->
    <div class="ser-second1-box">
        <div class="container" style="padding: 0 6%;">
            <div class="col-md-6 col-xs-6 sd1-img1">
                <img src="{{ asset('assets/ldd/images/second4/img2-1.jpg') }}" class="img-sy"/>
            </div>
            <div class="col-md-6 col-xs-6 sd1-img1">
                <img src="{{ asset('assets/ldd/images/second4/img2-2.jpg') }}" class="img-sy"/>
            </div>
            <div class="col-md-6 col-xs-6 sd1-img1">
                <img src="{{ asset('assets/ldd/images/second4/img2-3.jpg') }}" class="img-sy"/>
            </div>
            <div class="col-md-6 col-xs-6 sd1-img1">
                <img src="{{ asset('assets/ldd/images/second4/img2-4.jpg') }}" class="img-sy"/>
            </div>
        </div>
    </div>
    <!--到家服务 end-->

    <!--内容2 start-->
    <div class="pd-model-box1">
        <div class="container pdmc2">
            <div>
                <img src="{{ asset('assets/ldd/images/second4/img3.jpg') }}" class="img-sy"/>
            </div>
            <div>
                以培养百万优质到家服务工程师和卓越服务业经理人为使命，
            </div>
            <div>
                让天下没有难做的服务，为千万家庭提供更健康环保，更舒适便利的品质生活！
            </div>
        </div>
    </div>
    <!--内容2 end-->


    <!--宣传语 start-->
    @include('layouts._ggy')
    <!--宣传语 end-->

    <div style="height: 90px;"></div>
    <!--底部 start-->
    @include('layouts._footer')
    <!--底部 end-->
    <script>
		$(document).ready(function() {
			$('#sch').css('color','#5c9ce2');
		});
	</script>
@stop