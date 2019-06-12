@extends('layouts.app')
@section('content')
    <style>
        .fwfw-lb1-box{
            background-image:url({{asset('assets/dd/images/fwfw_bg1.jpg')}});
            /*background-image:url('../../../assets/dd/images/fn_bg1.jpg');*/
            background-size: cover;
            background-repeat:no-repeat;
            background-position:center center;
        }
        .fwfw-lb4-box{
            background-image:url({{asset('assets/dd/images/fwfw_bg2.jpg')}});
            /*background-image:url('../../../assets/dd/images/fn_bg2.jpg');*/
            background-size: cover;
            background-repeat:no-repeat;
            background-position:center center;
        }
        @media (min-width : 1024px) {
            .fwfw-lb1-web{
                display:none;
            }
            .fwfw-lb1-pc{
                display:block;
            }
        }
        @media (max-width : 1024px) {
            .fwfw-lb1-pc{
                display:none;
            }
            .fwfw-lb1-web{
                display:block;
            }
        }
    </style>
    <!--轮播内容区域 start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dd/css/swiper.min.css')}}">
    <div class="swiper-container swiper-container-v swiper-container-vertical">
        <div class="swiper-wrapper">
            <style>
                .hz-lb1-big-title{
                    padding-bottom: .6rem;
                    font-size: 2.5rem;
                    color: #FFFFFF;
                }
                .fwfw-lb1-content-box{
                    text-align: left;margin-left: -10%;margin-top: -10%;
                }
                .hz-lb1-big-title-web{
                    padding-bottom: .6rem;
                    font-size: 1.8rem;
                    color: #FFFFFF;
                }
                .fwfw-lb1-content-box-web{
                    text-align: left;margin-left: 0%;margin-top: -10%;
                }
            </style>
            <!--首页第一栏图片轮播 start-->
            <div class="swiper-slide fwfw-lb1-box">
                <div class="swiper-container swiper-container-h swiper-container-horizontal" style="background: none;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background: none;">
                            <div class="fwfw-lb1-content-box fwfw-lb1-pc">
                                <div class="hz-lb1-big-title">清洁服务一站式解决方案</div>
                                <div class="hz-lb1-big-title">家用电器、商用电器清洁</div>
                                <div class="hz-lb1-big-title">让你体验专业、便捷、干净、舒适的到家服务</div>
                            </div>
                            <!--移动端-->
                            <div class="fwfw-lb1-content-box-web fwfw-lb1-web">
                                <div class="hz-lb1-big-title-web">清洁服务一站式解决方案</div>
                                <div class="hz-lb1-big-title-web">家用电器、商用电器清洁</div>
                                <div class="hz-lb1-big-title-web">让你体验专业、便捷、干净、舒适的到家服务</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--首页第一栏图片轮播 end-->
            <style>
                .ff-style-title{
                    font-size: 1.5rem;
                    padding: 1rem;
                }
                @media (min-width: 1024px) {
                    .hib2-title{
                        font-size: 2.5rem;
                        padding: 14rem 0 6rem 0;
                    }
                    .ff-style-item{
                        border-bottom: .7rem solid #ffae00;
                    }
                }
                @media (max-width: 1024px) {
                    .hib2-title{
                        font-size: 2.3rem;
                        padding: 10rem 0 6rem 0;
                    }
                    .ff-style-item{
                        border-bottom: .4rem solid #ffae00;
                    }
                }
            </style>
            <!--首页第二栏图片轮播 start-->
            <div class="swiper-slide" style="position: relative;overflow-y: auto;">
                <div class="container" style="height: 100%;">
                    <div class="hib2-title">服务类型</div>
                    <div>
                        @foreach($service_types as $type)
                            <div class="col-md-6">
                                <div class="ff-style-item">
                                    <img src="{{asset('storage/' . $type->cover)}}" class="img-sy"/>
                                </div>
                                <div class="ff-style-title">{{ $type->name }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--首页第二栏图片轮播 end-->
            <style>
                .ff-pl-item{
                    border-top: 2px solid #EFEFEF;
                    border-left: 2px solid #EFEFEF;
                    border-right: 2px solid #EFEFEF;
                    border-bottom: .2rem solid #ffae00;
                }
                .ff-pl-item-title{
                    font-size: 1.5rem;
                    padding: 1rem;
                }
                @media (min-width: 1024px) {
                    .ff-pl-title{
                        font-size: 2.5rem;
                        padding: 14rem 0 1rem 0;
                    }
                    .ff-pl-small-title{
                        color: #ffae00;
                        font-size: 1.8rem;
                        margin-bottom: 7rem;
                    }
                }
                @media (max-width: 1024px) {
                    .ff-pl-title{
                        font-size: 2.3rem;
                        padding: 8rem 0 1rem 0;
                    }
                    .ff-pl-small-title{
                        color: #ffae00;
                        font-size: 1.6rem;
                        margin-bottom: 3rem;
                    }
                }
            </style>
            <!--首页第三栏图片轮播 start-->
            <div class="swiper-slide" style="background: #FFFFFF;overflow-y: auto;">
                <div class="container" style="height: 100%;">
                    <div class="ff-pl-title">品类</div>
                    <div class="ff-pl-small-title">专业家电清洗养护</div>
                    <div>
                        @foreach($categories as $category)
                            <div class="col-md-4">
                                <div class="ff-pl-item">
                                    <img src="{{ asset('storage/' . $category->cover) }}" class="img-sy"/>
                                </div>
                                <div class="ff-pl-item-title">{{ $category->name }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--首页第三栏图片轮播 end-->
            <style>
                .fgfw-lb4-content-box{
                    text-align: center;margin-top: -25%;
                }
                @media (min-width: 1024px) {
                    .fgfw-lb4-big-title{
                        padding-bottom: 2rem;
                        font-size: 2.5rem;
                        color: #FFFFFF;
                    }
                    .fgfw-lb4-small-title{
                        font-size: 1.7rem;
                        color: #FFFFFF;
                        line-height: 2.3rem;
                    }
                }
                @media (max-width: 1024px) {
                    .fgfw-lb4-big-title{
                        padding-bottom: 2rem;
                        font-size: 2.3rem;
                        color: #FFFFFF;
                    }
                    .fgfw-lb4-small-title{
                        font-size: 1.7rem;
                        color: #efefef;
                        line-height: 2.3rem;
                    }
                }
            </style>
            <!--首页第四栏图片轮播 start-->
            <div class="swiper-slide fwfw-lb4-box">
                <div class="fgfw-lb4-content-box">
                    <div class="fgfw-lb4-big-title">覆盖范围</div>
                    <div class="fgfw-lb4-small-title" style="padding-left: 1rem;padding-right: 1rem;">服务目前覆盖山东、青岛、西安、郑州、成都、广州、杭州、北京、沈阳</br>未来我们将陆续开通更多城市服务</div>
                </div>
            </div>
            <!--首页第五栏图片轮播 end-->
            <style>
                .fwys-lb5-list{
                    text-align: center;
                    padding-top: 4rem;
                }
                .fwys-lb5-list ul li div:first-of-type{
                    font-size: 1.5rem;
                    padding: 2rem 0;
                    color: #ffb400;
                }
                .fwys-lb5-list ul li div:last-of-type{
                    font-size: 1.5rem;
                    color: #888888;
                }
                .fwys-lb5-content-box{
                    text-align: center;margin-top: 5%;
                }
                @media (min-width : 1024px) {
                    .fwys-pc{
                        display: block;
                    }
                    .fwys-web{
                        display: none;
                    }
                    .fwys-lb5-big-title{
                        padding-bottom: 2rem;
                        font-size: 2.5rem;
                    }
                }
                @media (max-width : 1024px) {
                    .fwys-web{
                        display: block;
                    }
                    .fwys-pc{
                        display: none;
                    }
                    .fwys-lb5-big-title{
                        padding-bottom: 2rem;
                        font-size: 2.3rem;
                    }
                }
                .fwys-web ul li div:first-of-type{
                    padding: 1rem 0;
                }
                .fwys-web ul li div:last-of-type{
                    padding-bottom: 1rem;
                }
            </style>
            <!--首页第五栏图片轮播 start-->
            <div class="swiper-slide" style="background: #FFFFFF;overflow-y: auto;">
                <div class="fwys-lb5-content-box fwys-pc">
                    <div class="fwys-lb5-big-title">服务优势</div>
                    <div class="fwys-lb5-list">
                        <ul>
                            <li>
                                <div>更便捷</div>
                                <div>为您提供一键下单，最快24小时上门的专业服务，7*14小时客服在线服务；</div>
                            </li>
                            <li>
                                <div>更全面</div>
                                <div>为您提供家电家居保养、安装、维修等一站式家居综合服务；</div>
                            </li>
                            <li>
                                <div>更透明</div>
                                <div>为您提供全国统一收费标准，高性价比定价，明码实价绝不加价；</div>
                            </li>
                            <li>
                                <div>更放心</div>
                                <div>为您提供2万名实名认证的专业工程师团队，最长1年售后品质保障。</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--移动端的-->
                <div class="fwys-lb5-content-box fwys-web" style="margin-top: 20%;">
                    <div class="fwys-lb5-big-title">服务优势</div>
                    <div class="fwys-lb5-list" style="padding: 0 1rem 0 1rem;">
                        <ul>
                            <li>
                                <div>更便捷</div>
                                <div>为您提供一键下单，最快24小时上门的专业服务</br>7*14小时客服在线服务；</div>
                            </li>
                            <li>
                                <div>更全面</div>
                                <div>为您提供家电家居保养、安装、维修等</br>一站式家居综合服务；</div>
                            </li>
                            <li>
                                <div>更透明</div>
                                <div>为您提供全国统一收费标准，高性价比定价</br>明码实价绝不加价；</div>
                            </li>
                            <li>
                                <div>更放心</div>
                                <div>为您提供2万名实名认证的专业工程师团队</br>最长1年售后品质保障。</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--首页第五栏图片轮播 end-->
            <style>
                .yhbz-lb6-list{
                    text-align: center;
                    padding-top: 4rem;
                    margin-top: -2rem;
                }

                .yhbz-lb6-content-box{
                    text-align: center;margin-top: 5%;
                }
                .yhbz-item-box{
                    margin: 3rem;
                    padding: 1rem;
                }
                .yhbz-item-text1{
                    margin-top: -3rem;
                    font-size: 1.7rem;
                }
                .yhbz-item-text2{
                    font-size: 1.5rem;
                }
                @media (min-width : 1024px) {
                    .yhbz-pc{
                        display: block;
                    }
                    .yhbz-web{
                        display: none;
                    }
                    .yhbz-lb6-big-title{
                        padding-bottom: 2rem;
                        font-size: 2.5rem;
                    }
                }
                @media (max-width : 1024px) {
                    .yhbz-web{
                        display: block;
                    }
                    .yhbz-pc{
                        display: none;
                    }
                    .yhbz-lb6-big-title{
                        padding-bottom: 2rem;
                        font-size: 2.3rem;
                    }
                }
            </style>
            <!--首页第六栏图片轮播 start-->
            <div class="swiper-slide" style="background: #FFFFFF;overflow-y: auto;">
                <div class="yhbz-lb6-content-box yhbz-pc">
                    <div class="yhbz-lb6-big-title yhbz-bt-wp">用户保障</div>
                    <div class="container">
                        <div class="yhbz-lb6-list">
                            <div class="col-md-4">
                                <div class="yhbz-item-box">
                                    <img src="{{asset('assets/dd/images/fd_icon1.png')}}" class="img-sy"/>
                                </div>
                                <div class="yhbz-item-text1">专职客服</div>
                                <div class="yhbz-item-text2">7*14小时客服在线服务</div>
                            </div>
                            <div class="col-md-4">
                                <div class="yhbz-item-box">
                                    <img src="{{asset('assets/dd/images/fd_icon2.png')}}" class="img-sy"/>
                                </div>
                                <div class="yhbz-item-text1">免费质保</div>
                                <div class="yhbz-item-text2">提供最高1年的服务免费质保</div>
                            </div>
                            <div class="col-md-4">
                                <div class="yhbz-item-box">
                                    <img src="{{asset('assets/dd/images/fd_icon3.png')}}" class="img-sy"/>
                                </div>
                                <div class="yhbz-item-text1">保险理赔</div>
                                <div class="yhbz-item-text2">损失最高赔付8万元</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--移动端-->
                <div class="yhbz-lb6-content-box yhbz-web">
                    <div class="yhbz-lb6-big-title">用户保障</div>
                    <div class="container">
                        <div class="yhbz-lb6-list">
                            <div class="col-xs-4">
                                <div>
                                    <img src="{{asset('assets/dd/images/fd_icon1.png')}}" class="img-sy"/>
                                </div>
                                <div class="yhbz-item-text1" style="margin-top: 0;font-size: 1.4rem;padding: .5rem 0;">专职客服</div>
                                <div class="yhbz-item-text2" style="font-size: 1.2rem;">7*14小时客服在线服务</div>
                            </div>
                            <div class="col-xs-4">
                                <div>
                                    <img src="{{asset('assets/dd/images/fd_icon2.png')}}" class="img-sy"/>
                                </div>
                                <div class="yhbz-item-text1" style="margin-top: 0;font-size: 1.4rem;padding: .5rem 0;">免费质保</div>
                                <div class="yhbz-item-text2" style="font-size: 1.2rem;">提供最高1年的服务免费质保</div>
                            </div>
                            <div class="col-xs-4">
                                <div>
                                    <img src="{{asset('assets/dd/images/fd_icon3.png')}}" class="img-sy"/>
                                </div>
                                <div class="yhbz-item-text1" style="margin-top: 0;font-size: 1.4rem;padding: .5rem 0;">保险理赔</div>
                                <div class="yhbz-item-text2" style="font-size: 1.2rem;">损失最高赔付8万元</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--首页第六栏图片轮播 end-->
            <!--用户评价部分 start-->
            <style>
                .yhpl-lb6-big-title{
                    padding-bottom: 2rem;
                    font-size: 2.5rem;
                }

                @media (min-width : 1024px) {
                    .yhpl-lb6-big-title{
                        padding-bottom: 2rem;
                        font-size: 2.5rem;
                    }
                    .yhpl-lb6-list{
                        text-align: center;
                        padding-top: 4rem;
                        margin-top: -2rem;
                    }
                }
                @media (max-width : 1024px) {
                    .yhpl-lb6-big-title{
                        padding-bottom: 2rem;
                        font-size: 2.5rem;
                        padding-top: 170%;
                    }
                    .yhpl-lb6-list{
                        text-align: center;
                        padding-top:2rem;
                        margin-top: -2rem;
                    }
                }
                .yhpl-lb6-content-box{
                    text-align: center;margin-top:5%;
                }
                .yhpl-text{
                    padding: 2rem 1rem;
                    line-height: 2rem;
                    font-size: 1.6rem;
                    text-align: left;
                }
                .yhpl-user{
                    padding: 1rem;
                    color: #909090;
                    font-size: 1.4rem;
                    text-align: left;
                }
                .yhpl-user span:last-of-type{
                    float: right;
                }
                @media (max-width: 1024px ) {
                    .yhpl-wp{
                        background: #FFFFFF;
                        margin-bottom: 1rem;
                    }
                    .yhpl-text-wp{
                        font-size: 1.5rem;
                        color: #666666;
                    }
                    .yhpl-user-wp{
                        padding-top: 0;
                    }
                    .yhpl-bt-wp{
                        font-size: 2.3rem;
                    }
                }
            </style>
            <div class="swiper-slide" style="background: #FFFFFF;overflow-y: auto;">
                <div class="yhpl-lb6-content-box">
                    <div class="yhpl-lb6-big-title yhpl-bt-wp">用户评价</div>
                    <div class="container">
                        <div class="yhpl-lb6-list">
                            <div class="col-md-4 yhpl-wp">
                                <div class="yhpl-img">
                                    <img src="{{asset('assets/dd/images/fd_img1.jpg')}}" class="img-sy"/>
                                </div>
                                <div class="yhpl-text yhpl-text-wp">
                                    更便捷 为您提供一键下单，最快24小时上门的专业服务，7*14小时客服在线服更便捷 为您提供一键下单，最快24小时上门的专业服务，7*14小时客服在线服
                                </div>
                                <div class="yhpl-user yhpl-user-wp">
                                    <span>来自：蓝叮咚</span>
                                    <span>08/08/2016</span>
                                </div>
                            </div>
                            <div class="col-md-4 yhpl-wp">
                                <div class="yhpl-img">
                                    <img src="{{asset('assets/dd/images/fd_img1.jpg')}}" class="img-sy"/>
                                </div>
                                <div class="yhpl-text yhpl-text-wp">
                                    更便捷 为您提供一键下单，最快24小时上门的专业服务，7*14小时客服在线服更便捷 为您提供一键下单，最快24小时上门的专业服务，7*14小时客服在线服
                                </div>
                                <div class="yhpl-user yhpl-user-wp">
                                    <span>来自：蓝叮咚</span>
                                    <span>08/08/2016</span>
                                </div>
                            </div>
                            <div class="col-md-4 yhpl-wp">
                                <div class="yhpl-img">
                                    <img src="{{asset('assets/dd/images/fd_img1.jpg')}}" class="img-sy"/>
                                </div>
                                <div class="yhpl-text yhpl-text-wp">
                                    更便捷 为您提供一键下单，最快24小时上门的专业服务，7*14小时客服在线服更便捷 为您提供一键下单，最快24小时上门的专业服务，7*14小时客服在线服
                                </div>
                                <div class="yhpl-user yhpl-user-wp">
                                    <span>来自：蓝叮咚</span>
                                    <span>08/08/2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--用户评价部分 end-->
            <style>
                .ft-title2{
                    padding: 10vw 0 1rem 0;
                    font-size: 2.5rem;
                }
                .ft-title-small{
                    padding-bottom: .5rem;
                    font-size:1.5rem;
                    color: #909090;
                }
                .ewm-box{
                    width: 11%;
                    margin: 0 auto;
                    margin-top: .5rem;
                }
                @media (min-width : 1024px) {
                    .footer-cont-web{
                        display:none;
                    }
                    .footer-cont-pc{
                        display:block;
                    }
                }
                @media (max-width : 1024px) {
                    .footer-cont-pc{
                        display:none;
                    }
                    .footer-cont-web{
                        display:block;
                    }
                }
                .ft-title2-web{
                    padding: 14rem 0 2rem 0;
                    font-size: 2.3rem;
                }
                .ft-title-small-web{
                    padding-bottom: .5rem;
                    font-size:1.5rem;
                    color: #909090;
                }
                .ewm-box-web{
                    width: 20%;
                    margin: 0 auto;
                    margin-top: 1rem;
                }
            </style>
            <!--底部轮播 start-->
            <div class="swiper-slide" style="position: relative;font-size: 1.5rem;">
                <div style="height: 100%;width: 100%;" class="footer-cont-pc">
                    <div style="height: 58%;background: #FFFFFF;">
                        <div class="container">
                            <div class="ft-title2">联系我们</div>
                            <div class="ft-title-small">青岛蓝叮咚信息科技有限公司</div>
                            <div class="ft-title-small">青岛市红岛高新区火炬路100号盘谷空间C幢</div>
                            <div class="ft-title-small">www.landingdong.com</div>
                            <div class="ft-title-small">info@landingdong.com</div>
                            <div class="ft-title-small">400 1800 707</div>
                            <div>
                                <div class="ewm-box">
                                    <img src="{{asset('assets/dd/images/ewm.png')}}" class="img-sy"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 42%;background: #e3e3e3;">
                        <footer class="footer-box">
                            <div class="container">
                                <div class="col-md-9">
                                    <div style="opacity: .2;text-align: left;">网站导航</div>
                                    <div class="footer-nav-box" style="text-align: left;">
                                        <div class="col-md-2">
                                            <div class="footer-nav-title">蓝叮咚赋能</div>
                                            <ul>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.funeng').'#hytd'}}">行业痛点</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.funeng').'#jjfa'}}">解决方案</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="footer-nav-title">服务范围</div>
                                            <ul>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.service')}}">清洁</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.service')}}">环保</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.service')}}">家政</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.service')}}">安装</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.service')}}">维修</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="footer-nav-title">蓝叮咚合伙人</div>
                                            <ul>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.cooperation')}}">项目介绍</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.cooperation').'#xmys'}}">项目优势</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.cooperation').'#hzpp'}}">合作品牌</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.cooperation').'#jrwm'}}">加入我们</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="footer-nav-title">蓝叮咚商学院</div>
                                            <ul>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.school').'#jjrpx'}}">经理人培训</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.school')}}">工程师培训</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.school')}}">蔚蓝计划</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="footer-nav-title">新闻</div>
                                            <ul>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.news')}}">企业新闻</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.news')}}">市场咨询</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="footer-nav-title">关于蓝叮咚</div>
                                            <ul>
                                                <li><a style="color: #828282;" href="{{route('web.about_us').'#qyjs'}}">企业介绍</a></li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.about_us').'#fzlc'}}">发展历程</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.about_us').'#whln'}}">文化理念</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.about_us').'#lddr'}}">蓝叮咚人</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.about_us').'#rczp'}}">人才招聘</a>
                                                </li>
                                                <li>
                                                    <a style="color: #828282;" href="{{route('web.about_us').'#lxwm'}}">联系我们</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div style="text-align: center;">
                                        <div class="kf-img">
                                            <img src="{{asset('assets/dd/images/kf_logo.png')}}" class="img-sy"/>
                                        </div>
                                        <div style="padding:1rem 0">400-180-0707</div>
                                        <div>
                                            <span class="kf-btn">联系客服</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-bottom">
                                <div class="container fbc">
                                    <div>青岛市红岛高新区火炬路100号盘谷空间C幢</div>
                                    <div>版权所有 ©landingdong.com</div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <!--移动端底部-->
                <div style="height: 100%;width: 100%;" class="footer-cont-web">
                    <div style="background: #FFFFFF;">
                        <div class="container">
                            <div class="ft-title2-web">联系我们</div>
                            <div class="ft-title-small-web">青岛蓝叮咚信息科技有限公司</div>
                            <div class="ft-title-small-web">青岛市红岛高新区火炬路100号盘谷空间C幢</div>
                            <div class="ft-title-small-web">www.landingdong.com</div>
                            <div class="ft-title-small-web">info@landingdong.com</div>
                            <div class="ft-title-small-web">400 1800 707</div>
                            <div>
                                <div class="ewm-box-web">
                                    <img src="{{asset('assets/dd/images/ewm.png')}}" class="img-sy"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background: #e3e3e3;position: absolute;bottom: 0;width: 100%;">
                        <footer class="footer-box" style="padding: 1rem 0;">
                            <div class="container" style="padding: 0 .5rem;">
                                <div class="col-xs-9" style="text-align: left;padding-right: 0;">
                                    <div class="fbc" style="margin-top: 1rem;">
                                        <div>青岛市红岛高新区火炬路100号盘谷空间C幢</div>
                                        <div>版权所有 ©landingdong.com</div>
                                    </div>
                                </div>
                                <div class="col-xs-3" style="padding: 0;">
                                    <div style="text-align: center;">
                                        <div class="kf-img" style="padding: 0 1rem;">
                                            <img src="{{asset('assets/dd/images/kf_logo.png')}}" class="img-sy"/>
                                        </div>
                                        <div style="padding:1rem 0;font-size: 1rem;">400-180-0707</div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <!--移动端底部结束-->
            </div>
            <!--底部轮播 end-->
        </div>
        <!-- Add Pagination -->
    </div>
    <script type="text/javascript" src="{{asset('assets/dd/js/swiper.min.js')}}"></script>
    <script>
        $("#ffww").addClass('active');
        var swiperH = new Swiper('.swiper-container-h', {
            pagination: '.swiper-pagination-h',
            paginationClickable: true,
            spaceBetween: 0
        });
        var swiperV = new Swiper('.swiper-container-v', {
//      pagination: '.swiper-pagination-v',
            paginationClickable: true,
            direction: 'vertical',
            spaceBetween: 0,
            mousewheelControl: true,
            mousewheelReleaseOnEdges : true,
            touchReleaseOnEdges:true
        });
        var startScroll, touchStart, touchCurrent;
        swiperV.slides.on('touchstart', function (e) {
            startScroll = this.scrollTop;
            touchStart = e.targetTouches[0].pageY;
        }, true);
        swiperV.slides.on('touchmove', function (e) {
            touchCurrent = e.targetTouches[0].pageY;
            var touchesDiff = touchCurrent - touchStart;
            var slide = this;
            var onlyScrolling =
                ( slide.scrollHeight > slide.offsetHeight ) &&
                (
                    ( touchesDiff < 0 && startScroll === 0 ) ||
                    ( touchesDiff > 0 && startScroll === ( slide.scrollHeight - slide.offsetHeight ) ) ||
                    ( startScroll > 0 && startScroll < ( slide.scrollHeight - slide.offsetHeight ) )
                );
            if (onlyScrolling) {
                e.stopPropagation();
            }
        }, true);
    </script>
@stop