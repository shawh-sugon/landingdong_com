@extends('layouts.app')
@section('content')
    <!--<h1>新闻</h1>-->
<!--轮播内容区域 start-->
<style>
	.input-error {
		border: 1px solid red;
	}
	@media (min-width : 1024px) {
		.index-lb2-web{
			display:none;
		}
		.index-lb2-pc{
			display:block;
		}
		.join-us-web{
			display:none;
		}
		.join-us-pc{
			display:block;
		}
		.footer-cont-web{
			display:none;
		}
		.footer-cont-pc{
			display:block;
		}
	}
	@media (max-width : 1024px) {
		.index-lb2-pc{
			display:none;
		}
		.index-lb2-web{
			display:block;
		}
		.join-us-pc{
			display:none;
		}
		.join-us-web{
			display:block;
		}
		.footer-cont-pc{
			display:none;
		}
		.footer-cont-web{
			display:block;
		}
	}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('assets/dd/css/swiper.min.css')}}">
<div class="swiper-container swiper-container-v swiper-container-vertical">
	<div class="swiper-wrapper">
		<!--首页第一栏图片轮播 start-->
		<div class="swiper-slide">
			<div class="swiper-container swiper-container-h swiper-container-horizontal">
				<div class="swiper-wrapper">
					<div class="swiper-slide index-lb1-box">
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination swiper-pagination-h swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
			</div>
		</div>
		<!--首页第一栏图片轮播 end-->
		<!--首页第二栏图片轮播 start-->
		<div class="swiper-slide index-lb2-box" style="position: relative;">
			<div class="container index-lb2-pc">
				<div class="col-md-4 ib2-left" style="position: absolute;">
					<img src="{{asset('assets/dd/images/index02.png')}}"  class="img-sy"/>
				</div>
				<div class="col-md-8 ib2-right" style="position: absolute;">
					<div>轻松创业  加速转型</div>
					<div>五大保障  九项帮扶</div>
				</div>
			</div>
			<style>
				.index-lb2-web-img{
					position: absolute;
					width: 50%;
					bottom: 0;
				}
				.ilb2-web-text1{
					letter-spacing: 6px;
    					font-size: 2.3rem;
				}
				.ilb2-web-text2{
					color: #ff9600;
    					letter-spacing: 2px;
    					padding-top: 1rem;
    					font-size: 1.6rem;
				}
			</style>
			<div class="container index-lb2-web">
				<div class="index-lb2-web-img">
					<img src="{{asset('assets/dd/images/index02.png')}}"  class="img-sy"/>
				</div>
				<div style="margin-top: -2rem;">
					<div class="ilb2-web-text1">轻松创业  加速转型</div>
					<div class="ilb2-web-text2">五大保障  九项帮扶</div>
				</div>
			</div>
		</div>
		<!--首页第二栏图片轮播 end-->
		<!--首页第三栏图片轮播 start-->
		<div class="swiper-slide index-lb3-box">
			<div class="container ib3-cont">
				<div style="font-size: 2.3rem;">创综合到家服务领导品牌</div>
				<div style="font-size: 1.7rem;">建立互相赋能的服务生态圈</div>
			</div>
		</div>
		<!--首页第三栏图片轮播 end-->
		<!--首页第三栏图片轮播 start-->
            <div class="swiper-slide" style="background: #efefef;overflow-y: auto;">
            		<!--合作品牌 start-->
     			<div class="index-box4" style="height: 100%;">
     				<div class="container ib4-pc">
     					<div class="ib-title" style="padding-top: 13rem;font-size: 2.3rem;">合作品牌</div>
     					<div class="row" style="padding: 0 5rem;">
							@foreach($partner_brands as $brand)
								<div class="col-md-3 col-xs-6 style5">
									<img src="{{ asset('storage/' . $brand->logo) }}" class="img-sy"/>
								</div>
							@endforeach
     					</div>
     				</div>
			     	<div class="container ib4-web">
			     		<div class="ib-title-web" style="padding-top: 10rem;font-size: 2.3rem;">合作品牌</div>
			     		<div class="row" style="padding: 0 2rem;">
							@foreach($partner_brands as $brand)
								<div class="col-md-3 col-xs-6 style5-web">
									<img src="{{ asset('storage/' . $brand->logo) }}" class="img-sy"/>
								</div>
							@endforeach
			     		</div>
			     	</div>
     			</div>     
    				<!--合作品牌 end-->
            </div>
            <!--首页第三栏图片轮播 end-->
            <!--首页第四栏图片轮播 start-->
            <div class="swiper-slide" style="background: #EFEFEF;overflow-y: auto;">
            		<!--加入我们 start-->
            		<style>
            			.ib5-input-pc{
            				padding: 1rem 1rem 1rem 2rem;
    						font-size: 1.6rem;
    						height: 55px;
    						margin-bottom: 5px;
            			}
            		</style>
			    <div class="index-box5 join-us-pc">
					<form class="join-us-form" action="{{ route('web.test.store') }}" method="post">
						{{ csrf_field() }}
			     	<div class="container">
			     		<div style="position: relative;">
			     			<div style="width: 40%;margin: 0 auto;margin-top: 4rem;">
			     				<img src="{{asset('assets/dd/images/moon.png')}}" class="img-sy"/>
			     			</div>
			     			<div class="index-join-us" style="top:9rem;">
			     				<div class="ib5-title" style="font-size: 2.5rem;">加入我们</div>
			     				<div style="opacity: .6;font-size: 1.5rem;margin-top: 1vw;line-height: 24px;">如果你和我们一样，热爱生活，热爱服务业；在到家服务领域中辛勤耕耘，在传统经营转型</br>中寻觅方向，在拥抱未来变化中期待能量，诚信正直且脚踏实地做事，就让我们共同携手，走向美好未来！</div>
						     		<div class="ib5-input-box">
						     			<div class="ib5-ib-box" style="width: 33%;">
						     				<div class="ib5-ib-mb1"><input placeholder="您的名字" name="name" class="three ib5-input-style ib5-input-pc"/></div>
						     				<div class="ib5-ib-mb1"><input placeholder="联系方式" name="phone" class="three ib5-input-style ib5-input-pc"/></div>
						     				<div class="ib5-ib-mb1" style="position: relative;"><input placeholder="所在区域" name="address" class="three ib5-input-style ib5-input-pc"/>
						     					<span style="position: absolute;top: 15px;right: 1.5rem;">
						     						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" t="1550121472935" class="icon" style="" viewBox="0 0 1035 1024" version="1.1" p-id="2797" width="15.859375" height="15"><defs><style type="text/css"/></defs><path d="M89.381404 425.533207l409.988615-409.988615 408.045541 409.988615zM907.41556 594.580645l-409.988615 409.988615-408.045541-409.988615z" p-id="2798" fill="#dbdbdb"/></svg>
						     					</span>
						     				</div>
						     				<div class="ib5-info-btn">提交</div>
						     			</div>
						     		</div>
			     				</div>
			     			</div>
			     	</div>
					</form>
			     </div>
			    <!--加入我们 end-->
			    <style>
			    		.ju-input-web{
			    			padding: 1rem;
    						font-size: 1.5rem;
    						height: 3rem;
    						margin-bottom: 5px;
			    		}
			    </style>
			    <div class="index-box5 join-us-web">
			     	<div>
			     		<div style="width: 80%;margin: 0 auto;margin-top: 3rem;">
			     			<img src="{{asset('assets/dd/images/moon.png')}}" class="img-sy"/>
			     		</div>
			     	</div>
			     	<div class="index-join-us" style="top: 4rem;">
			     		<div class="ib5-title" style="font-size: 2.3rem;padding-top: 5rem;">加入我们</div>
			     		<div style="opacity: .6;font-size: 1.5rem;padding: 1rem;line-height: 2rem;">如果你和我们一样，热爱生活，热爱服务业；在到家服务领域中辛勤耕耘，在传统经营转型</br>中寻觅方向，在拥抱未来变化中期待能量，诚信正直且脚踏实地做事，就让我们共同携手，走向美好未来！</div>
			     		<div class="ib5-input-box" style="padding: 1rem 0;">
			     			<div class="ib5-ib-box" style="width: 70%;">
			     				<div class="ib5-ib-mb1"><input placeholder="您的名字" name="name" class="three ib5-input-style ju-input-web"/></div>
			     				<div class="ib5-ib-mb1"><input placeholder="联系方式" name="phone" class="three ib5-input-style ju-input-web"/></div>
			     				<div class="ib5-ib-mb1" style="position: relative;"><input placeholder="所在区域" name="address" class="three ib5-input-style ju-input-web"/>
			     					<span style="position: absolute;right: .5rem;top: .5rem;">
			     						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" t="1550121472935" class="icon" style="" viewBox="0 0 1035 1024" version="1.1" p-id="2797" width="13.859375" height="13"><defs><style type="text/css"/></defs><path d="M89.381404 425.533207l409.988615-409.988615 408.045541 409.988615zM907.41556 594.580645l-409.988615 409.988615-408.045541-409.988615z" p-id="2798" fill="#dbdbdb"/></svg>
			     					</span>
			     				</div>
			     				<div class="ib5-info-btn" style="font-size: 1.5rem;">提交</div>
			     			</div>
			     		</div>
			     	</div>
			     </div>
			     <!--加入我们 end-->
            </div>
            <!--首页第四栏图片轮播 end-->
            <!--视频新闻轮播 start-->
            <style>
            	.in-list a{
            		color: #333333;
            	}
            	@media (min-width:1024px) {
            		.index-new-wp{
            			padding-top: 3rem;
            		}
            		.in-box-wp{
            			margin: 5rem 0 2rem 0;
            		}
            		.index-new-title{
    		color: #ff9a3d;font-size: 2.5rem;
    		padding:1rem 0rem 2rem 0;
    	}
            	}
            	@media (max-width:1024px) {
            		.index-new-wp{
            			padding-top: 1rem;
            		}
            		.in-box-wp{
            			margin: 8rem 0 1.1rem 0;
            		}
            		.int-wp{
            			font-size: 2rem;
            		}
            		.ilist-wp{
            			font-size: 1.5rem;
            		}
            		.ilist-wp li{
            			white-space: nowrap;
            			text-overflow: ellipsis;
            			overflow: hidden;
            		}
            		.index-new-title{
    		color: #ff9a3d;font-size: 2.3rem;
    		padding:1rem 0rem 1rem 0;
    	}
            	}
            </style>
            <div class="swiper-slide" style="background: #EFEFEF;text-align:left;">
				<div>
					<div class="in-box-wp">
						<img src="{{asset('assets/dd/images/index04.jpg')}}" class="img-sy"/>
					</div>
					<!--企业新闻 start-->
					<div class="index-box7 index-new-wp">
						<div class="container">
							<div class="col-md-6">
								<img src="{{asset('assets/dd/images/index05.jpg')}}" class="img-sy"/>
							</div>
							<div class="col-md-6" style="padding-left: 1.5rem;">
								<div class="index-new-title int-wp">新闻</div>
								<div class="in-list ilist-wp">
									<ul>
										@foreach($news as $new)
											<a>
												<li>
													<span class="in-blue">[企业新闻]</span>
													<span>{{ $new->title }}</span>
												</li>
											</a>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--企业新闻 end-->
				</div>
			</div>
            <!--视频新闻轮播 end-->
			<!--底部轮播 start-->
			<style>
            		.ft-title2{
            			padding: 9rem 0 1rem 0;
            			font-size: 2.3rem;
            		}
            		.ft-title-small{
            			padding-bottom: .5rem;
            			font-size:1.5rem;
            			color: #909090;
            		}
            		.ewm-box{
            			width: 8%;
            			margin: 0 auto;
            			margin-top: .5rem;
            		}
            	</style>
            <div class="swiper-slide" style="position: relative;font-size: 1.5rem;">
            		<div style="height: 100%;width: 100%;" class="footer-cont-pc">
            			<div style="height: 58%;background: #FFFFFF;">
            				<div class="index-pl-box" style="padding-top:13rem;">
							<div class="index-pl-title">评价</div>
							<div class="container" style="margin-top: 2rem;">
								@foreach($comments as $comment)
									<div class="col-md-6">
										<div class="pl-list-data">
											<div class="col-md-5">
												<div class="col-md-3" style="padding-left: 0;padding-right: 0;">
													<div class="pl-headimg-box">
														<img src="{{ asset('storage/' . $comment->avatar) }}" class="img-sy"/>
													</div>
												</div>
												<div class="col-md-9 pl-info">
													<div>{{ $comment->nick_name }}</div>
													<div>{{ $comment->created_at->format('Y年m月d日') }}</div>
												</div>
											</div>
											<div class="col-md-7 pl-data-content">
												{{ $comment->content }}
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						<!--评论 end-->
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
            		<!--手机端底部-->
            		<style>
            			.index-fpj-web-img{
            				width: 20%;float: left;padding: .5rem;
            			}
            			.index-fpj-web-cont{
            				width: 80%;float: left;padding: .5rem;
            			}
            			.ifpj-name{
            				text-align: left;font-size: 1.4rem;
            			}
            			.ifpj-cont{
            				text-align: left;font-size: 1.3rem;color: #ff9a3d;padding: .2rem 0;
            			}
            			.ifpj-time{
            				text-align: right;font-size: 1.2rem;color:#909090;
            			}
            		</style>
            		<div style="height: 100%;width: 100%;overflow-y: auto;" class="footer-cont-web">
            			<div style="background: #FFFFFF;">
            				<div class="index-pl-box" style="padding-top:7rem;">
							<div class="index-pl-title" style="font-size: 2rem;">评价</div>
							<div class="container" style="margin-top: 1rem;">
								<div class="col-md-6">
									<div style="background: #F5F5F5;margin-bottom: 1rem;">
										<div style="width: 100%;">
											<div class="index-fpj-web-img">
												<img src="{{asset('assets/dd/images/pj_hi.jpg')}}" class="img-sy"/>
											</div>
											<div class="index-fpj-web-cont">
												<div class="ifpj-name">小猪佩奇</div>
												<div class="ifpj-cont">
													非常好的服务体验，点个赞。
												</div>
												<div class="ifpj-time">2019年1月10号</div>
											</div>
											<div style="clear: both;"></div>
										</div>
										
									</div>
								</div>
								<div class="col-md-6">
									<div style="background: #F5F5F5;margin-bottom: 1rem;">
										<div style="width: 100%;">
											<div class="index-fpj-web-img">
												<img src="{{asset('assets/dd/images/pj_hi.jpg')}}" class="img-sy"/>
											</div>
											<div class="index-fpj-web-cont">
												<div class="ifpj-name">小猪佩奇</div>
												<div class="ifpj-cont">
													非常好的服务体验，点个赞。
												</div>
												<div class="ifpj-time">2019年1月10号</div>
											</div>
											<div style="clear: both;"></div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<!--评论 end-->
            			</div>
            			<div style="background: #e3e3e3;position: absolute;bottom: 0;width: 100%;">
            				<footer class="footer-box" style="padding: 1rem 0;">
							<div class="container" style="padding: 0 .5rem;">
								<div class="col-xs-9" style="text-align: left;padding-left: 8px;padding-right: 8px;">
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
										<!--<div>
											<span class="kf-btn">联系客服</span>
										</div>-->
									</div>
								</div>
							</div>
							<!--<div class="footer-bottom">
								<div class="container fbc">
									<div>青岛市红岛高新区火炬路100号盘谷空间C幢</div>
									<div>版权所有 ©landingdong.com</div>
								</div>
							</div>-->
						</footer>
            			</div>
            		</div>
            </div>
            	<!--底部轮播 end-->
	</div>
</div>
<script type="text/javascript" src="{{asset('assets/dd/js/swiper.min.js')}}"></script>
<script>
//	function(){
		$("#index").addClass('active');
//	}
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
	<script type="text/javascript">
		$(function () {
			var is_submit = false
			var nameObj = $("input[name='name']")
			var phoneObj = $("input[name='phone']")
			var addressObj = $("input[name='address']")
			$('.ib5-info-btn').on('click', function () {
				if(nameObj.val().length <= 0) {
					nameObj.parent().addClass('input-error')
					is_submit = false
				} else {
					nameObj.parent().removeClass('input-error')
					is_submit = true
				}
				if(phoneObj.val().length <= 0) {
					phoneObj.parent().addClass('input-error')
					is_submit = false
				} else {
					phoneObj.parent().removeClass('input-error')
					is_submit = true
				}
				if(addressObj.val().length <= 0) {
					addressObj.parent().addClass('input-error')
					is_submit = false
				} else {
					addressObj.parent().removeClass('input-error')
					is_submit = true
				}
			})
			
			// 监听输入框的输入状态
			nameObj.bind('input propertychange', function (event) {
				if(nameObj.val().length <= 0) {
					nameObj.parent().addClass('input-error')
					is_submit = false
				} else {
					nameObj.parent().removeClass('input-error')
					is_submit = true
				}
			})
			phoneObj.bind('input propertychange', function (event) {
				if(phoneObj.val().length <= 0) {
					phoneObj.parent().addClass('input-error')
					is_submit = false
				} else {
					phoneObj.parent().removeClass('input-error')
					is_submit = true
				}
			})
			addressObj.bind('input propertychange', function (event) {
				if(addressObj.val().length <= 0) {
					addressObj.parent().addClass('input-error')
					is_submit = false
				} else {
					addressObj.parent().removeClass('input-error')
					is_submit = true
				}
			})
		})
	</script>
@stop
