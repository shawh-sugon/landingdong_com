@extends('layouts.app')
@section('content')
	<!--轮播图 首页 start-->
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
	<!--轮播图 首页 end-->

	<!--企业文化 start-->
	<div class="qy-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">企业文化</div>
				<div class="bt-eng">Corporate Culture</div>
			</div>
			<div>
				<div class="qy-item1">
					<div class="nei-box">
						<div class="qi-bt">定位</div>
						<div class="qi-img">
							<img src="{{ asset('assets/ldd/images/index/text01.png') }}" class="img-sy" />
						</div>
						<div class="qi-text">
							让千百万到家服务</br>小微企业活的更好
						</div>
						<div class="qi-img2">
							<img src="{{ asset('assets/ldd/images/index/icon01.png') }}" class="img-sy" />
						</div>
					</div>
				</div>
				<div class="qy-item2">
					<div class="nei-box">
						<div class="qi-bt">愿景</div>
						<div class="qi-img-2">
							<img src="{{ asset('assets/ldd/images/index/text02.png') }}" class="img-sy" />
						</div>
						<div class="qi-text">
							创综合到家服务领导品牌</br>建立互相赋能的大服务业生态圈
						</div>
						<div class="qi-img2">
							<img src="{{ asset('assets/ldd/images/index/icon02.png') }}" class="img-sy" />
						</div>
					</div>
				</div>
				<div class="qy-item3">
					<div class="nei-box">
						<div class="qi-bt">价值观</div>
						<div class="qi-img-3">
							<img src="{{ asset('assets/ldd/images/index/text03.png') }}" class="img-sy" />
						</div>
						<div class="qi-text2">
							客户至上 团队合作</br>诚信正直 拥抱变化</br>久久为功 追求卓越
						</div>
						<div class="qi-img2">
							<img src="{{ asset('assets/ldd/images/index/icon03.png') }}" class="img-sy" />
						</div>
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>
		</div>
	</div>
	<!--企业文化 end-->

	<!--关于我们 start-->
	<div class="index-ab-box">
		<div class="container">
			<div class="iab-img">
				<div class="video-pc">
					<video id="videoPlay1" style="width: 100%;height: auto;" src="{{ asset('assets/ldd/video/video.mp4') }}" poster="{{ asset('assets/ldd/images/index/index_ab.jpg') }}"  x-webkit-airplay="true" webkit-playsinline="true">
						<source src="{{ asset('assets/ldd/video/video.mp4') }}" type="video/mp4">
					</video>
				</div>
				<div class="video-web">
					<video id="videoPlay1" style="width: 100%;height: auto;" src="{{ asset('assets/ldd/video/video.mp4') }}" poster="{{ asset('assets/ldd/images/index/index_ab.jpg') }}" controls="controls" x-webkit-airplay="true" webkit-playsinline="true">
						<source src="{{ asset('assets/ldd/video/video.mp4') }}" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="iab-content">
				<div class="iab-bt-box">
					<div>关于我们</div>
					<div>About us</div>
				</div>
				<div class="iab-text">
					蓝叮咚-以让天下没有难做的服务为使命，链接人与服务为宗旨，线上线下融合为途径，通过网络信息技术应用，匹配行业一流资源，让居家服务产业信息化，集约化，规范化，品牌化，为千万家庭提供优质可信赖的到家服务；通过输出品牌管理，信息系统，供应链，标准化赋能中小家政服务公司及服务人员，终结游击队，建立生态圈，解决百万就业；实现专业到家服务，信赖信息平台，优质商品销售的互联互通，为千万家庭提供更健康，更环保，更便利，更舒适的品质生活体验。
				</div>
			</div>
			<div class="fl-cl"></div>
		</div>
	</div>
	<script>
		var video1 = document.getElementById("videoPlay1");
		video1.onclick = function() {
			if(video1.paused) {
				video1.play();
			} else {
				video1.pause();
			}
		}
	</script>
	<!--关于我们 end-->

	<!--发展历程 start-->
	<div class="delp-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">发展历程</div>
				<div class="bt-eng">Development History</div>
			</div>
			<div class="time-box">
				<a onclick="change_text(this);">2009年</a>
				<a onclick="change_text(this);">2012年</a>
				<a onclick="change_text(this);">2014年</a>
				<a onclick="change_text(this);" class="tb-active">2016年</a>
				<a onclick="change_text(this);">2017年</a>
				<a onclick="change_text(this);">2018年</a>
				<a onclick="change_text(this);">2019年</a>
			</div>
			<div class="time-content">
				<span>介入高端精品保洁业务</span>
				<div class="dsj1"></div>
			</div>
		</div>
	</div>
	<script>
		function change_text(obj) {
			$(".time-box a").removeClass('tb-active');
			$(obj).addClass('tb-active');
			var content = $(obj).context.innerHTML;
			if(content == "2009年") {
				$('.time-content span').html("家电设备清洗行业拓荒者");
				$('.dsj1').css('left', '20%');
			} else if(content == "2012年") {
				$('.time-content span').html("启动嵌入式家电专业清洗");
				$('.dsj1').css('left', '30%');
			} else if(content == "2014年") {
				$('.time-content span').html("启动大型商用设备清洁保养业务");
				$('.dsj1').css('left', '39%');
			} else if(content == "2016年") {
				$('.time-content span').html("介入高端精品保洁业务");
				$('.dsj1').css('left', '49%');
			} else if(content == "2017年") {
				$('.time-content span').html("推出综合清洁业务品牌洗当家");
				$('.dsj1').css('left', '58.5%');
			} else if(content == "2018年") {
				$('.time-content span').html("启动“服务+网络+商品”新模式");
				$('.dsj1').css('left', '68%');
			} else if(content == "2019年") {
				$('.time-content span').html("发布新品牌蓝叮咚");
				$('.dsj1').css('left', '78%');
			}
		}
	</script>
	<!--发展历程 end-->

	<!--项目优势 start-->
	<div class="index-ys-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">项目优势</div>
				<div class="bt-eng">Item Advantage</div>
			</div>
			<div class="iys-content">
				<div class="iys-item1">
					<div class="iys-bt1">
						<div>市场分析</div>
						<div>Market Analysis</div>
					</div>
					<div class="iys-text-box">
						<div>国民经济发展到人均8000-10000美金，服务业发展就会进入新的阶段--来源《恒大研究院》</div>
						<div>2013年中国家政市场规模达9600亿元，2014年市场规模达11300亿元，而2015年中国家政市场规模就达到13500亿元，按照最近几年中国家政行业发展速度，中国家政市场年产值在2017年左右就能达到2万亿规模，市值超过10亿美金的公司屈指可数。--来源《中国商务部2016年家政服务行业发展报告》</div>
					</div>
				</div>
				<div class="iys-item2">
					<div class="iys-i2-box">
						<div class="iys-bt2">
							<div>叮咚赋能</div>
							<div>Endow with Accredit</div>
						</div>
						<div>
							<img src="{{ asset('assets/ldd/images/index/line.png') }}" class="img-sy" />
						</div>
						<div class="iys-text-box2">
							<div><span>价值呈现：</span>轻松创业，顺利转型，加速发展；让合作伙伴活下去，活的好，活的久。</div>
							<div><span>解决方案：</span>品牌共享，结合新时代的用户习惯，全方位整合营销，覆盖央视访谈，卫视广告，网络媒体等，综合物料大礼包支持；</div>
							<div><span>系统共享：</span>用信息化规范各项服务细节，确保用户服务体验；</div>
							<div><span>服务标准：</span>超过200项具体服务规范细节，辅助信息化，实现标准化规范作业；</div>
							<div><span>供应资源：</span>权威机构认证资质，让效率更高，质量更好；</div>
							<div><span>订单支持：</span>支援生态圈层内合作企业；</div>
							<div><span>经营帮扶：</span>提供从前期考察到后续获单全流程经营帮扶，解决合作伙伴后顾之忧。</div>
						</div>
					</div>
				</div>
				<div class="iys-item3">
					<div class="iys-bt1">
						<div>行业痛点</div>
						<div>Pain Spot</div>
					</div>
					<div class="iys-text-box3">
						<div><span>用户抱怨：</span>找服务很容易，找专业的可信赖的优质服务很难。</div>
						<div><span>行业现状：</span>规范化不够，如何能统一服务品质，统一操作流程，提升用户体验。信息化不够，互联网+服务发展迅速，服务与网络可以进一步融合。集约化不够，行业大多属于“小散弱”，具有引领能力的优质服务企业少。</div>
						<div><span>从业群体：</span>收益弱。</div>
						<div><span>服务人员：</span>没方向，没资金，没技术，没规范</div>
						<div><span>小微公司：</span>支援生态圈层内合作企业；缺品牌，缺系统，缺供应，缺工人，缺管理，缺标准，缺订单，缺帮扶。</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--项目优势 end-->

	<!--合作品牌 start-->
	<div class="index-hz-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">合作品牌</div>
				<div class="bt-eng">Cooperative Brand</div>
			</div>
			<div class="ihz-content">
				@foreach($partner_brands as $partner_brand)
					<div class="ihz-item">
						<img src="{{ asset('storage/' . $partner_brand->logo) }}" class="img-sy" />
					</div>
				@endforeach
				<div class="fl-cl"></div>
			</div>
		</div>
	</div>
	<!--合作品牌 end-->

	<!--首页图片 start-->
	<div>
		<img src="{{ asset('assets/ldd/images/index/img02.jpg') }}" class="img-sy" />
	</div>
	<!--首页图片 end-->

	<!--服务范围 start-->
	<div class="index-ser-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">服务范围</div>
				<div class="bt-eng">Scope of Service</div>
			</div>
			<!--电脑端样式-->
			<div class="iser-content iserc-pc">
				<div class="iser-item colol1"><a style="color: #FFFFFF;" href="{{ route('web.second1') }}">电器清洁</a></div>
				<div class="iser-item">
					<img src="{{ asset('assets/ldd/images/index/index_fw1.jpg') }}" class="img-sy" />
					<div class="zc1"></div>
				</div>
				<div class="iser-item colol2"><a style="color: #FFFFFF;" href="{{ route('web.second2') }}">空气治理</a></div>
				<div class="iser-item">
					<img src="{{ asset('assets/ldd/images/index/index_fw2.jpg') }}" class="img-sy" />
					<div class="zc2"></div>
				</div>
				<div class="iser-item colol3"><a style="color: #FFFFFF;" href="{{ route('web.second3') }}">商用服务</a></div>
			</div>
			<div class="iser-content iserc-pc">
				<div class="iser-item">
					<img src="{{ asset('assets/ldd/images/index/index_fw3.jpg') }}" class="img-sy" />
					<div class="zc3"></div>
				</div>
				<div class="iser-item colol4"><a style="color: #FFFFFF;" href="{{ route('web.second1') }}">家政服务</a></div>
				<div class="iser-item colol5">安装售后</div>
				<div class="iser-item">
					<img src="{{ asset('assets/ldd/images/index/index_fw4.jpg') }}" class="img-sy" />
					<div class="zc4"></div>
				</div>
				<div class="iser-item colol6">项目案例</div>
			</div>
			<!--电脑端样式-->
			<!--手机端样式-->
			<div class="iser-content iserc-web">
				<div class="iser-item colol1">电器清洁</div>
				<div class="iser-item">
					<img src="{{ asset('assets/ldd/images/index/index_fw1.jpg') }}" class="img-sy" />
				</div>

			</div>
			<div class="iser-content iserc-web">
				<div class="iser-item colol2">空气治理</div>
				<div class="iser-item">
					<img src="{{ asset('assets/ldd/images/index/index_fw2.jpg') }}" class="img-sy" />
				</div>
			</div>
			<div class="iser-content iserc-web">
				<div class="iser-item colol3">商用设备</div>
				<div class="iser-item">
					<img src="{{ asset('assets/ldd/images/index/index_fw3.jpg') }}" class="img-sy" />
				</div>
			</div>
			<div class="iser-content2 iserc-web">
				<div class="iser-item2 colol4">家政服务</div>
				<div class="iser-item2 colol5">安装售后</div>
				<div class="fl-cl"></div>
			</div>
			<div class="iser-content iserc-web">
				<div class="iser-item">
					<img src="{{ asset('assets/ldd/images/index/index_fw4.jpg') }}" class="img-sy" />
				</div>
				<div class="iser-item colol6">项目案例</div>
			</div>
			<!--手机端样式-->
		</div>
	</div>
	<!--服务范围 end-->

	<!--商务合作 start-->
	<form action="{{ route('web.store') }}" id="business_form" method="post">
	<div class="index-bus-box">
		<div class="bt-box">
			<div class="bt-text1">商务合作</div>
			<div class="bt-eng">Business Cooperation</div>
		</div>
		<div class="index-bus-img">
			<img src="{{ asset('assets/ldd/images/index/img03.jpg') }}" class="img-sy ibi-pc" />
			<img src="{{ asset('assets/ldd/images/index/img04.jpg') }}" class="img-sy ibi-web" />
			<div class="ibus-sub-box">
				{{ csrf_field() }}
				<div class="ibsb-text">
					如果你和我们一样，热爱生活，热爱服务业；在到家服务领域中辛勤耕耘，在传统经营转型中寻觅方向，在拥抱未来变化中期待能量，诚信正直且脚踏实地做事，就让我们共同携手，走向美好未来！
				</div>
				<div class="ibsb-input-box">
					<div>
						<input name="name" placeholder="您的名字"/>
					</div>
					<div>
						<input name="phone" placeholder="联系方式"/>
					</div>
					<div>
						<input name="address" placeholder="所在区域"/>
						<span id="select_address">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" t="1550121472935" class="icon" style="" viewBox="0 0 1035 1024" version="1.1" p-id="2797" width="15.859375" height="15"><defs><style type="text/css"/></defs><path d="M89.381404 425.533207l409.988615-409.988615 408.045541 409.988615zM907.41556 594.580645l-409.988615 409.988615-408.045541-409.988615z" p-id="2798" fill="#dbdbdb"/></svg>
						</span>
					</div>
				</div>
				<button type="submit" id="submit_button" class="ibsb-btn">
					提交
				</button>
				<div class="fl-cl"></div>
			</div>
		</div>
	</div>
	</form>
	<!--商务合作 end-->

	<!--其他区域 start-->
	<div class="index-other-box">
		<div class="container">
			<div class="iob-item">
				<div class="iobi-bt">
					新闻<span>News</span>
				</div>
				<div class="iobi-img">
					<img src="{{ asset('assets/ldd/images/index/new01.jpg') }}" class="img-sy" />
				</div>
				<div class="index-new-list">
					<ul>
						@foreach($news as $new)
							<li>
								<a href="{{ route('web.news.detail', ['id' => $new->id]) }}">
									<span>[企业新闻]</span>{{ $new->title }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="iob-item2">
				<div class="iobi-bt">
					办公<span>Office</span>
				</div>
				<div class="iobi-img iobi-map">
					<img src="{{ asset('assets/ldd/images/index/bg01.jpg') }}" class="img-sy" />
				</div>
				<div class="iobi-content">
					<div>
							<span>
								<svg viewBox="0 0 1024 1024" version="1.1" p-id="2923" width="88" height="88"><path d="M511.999699 0C279.130052 0 90.35264 189.861647 90.35264 424.176941c0 117.097412 47.224471 223.111529 123.482353 299.91153L511.999699 1024l298.164706-299.911529A424.116706 424.116706 0 0 0 933.646758 424.176941C933.646758 189.861647 744.869346 0 511.999699 0z m0 612.592941a187.934118 187.934118 0 0 1-187.452235-188.53647A187.873882 187.873882 0 0 1 511.999699 235.640471a187.934118 187.934118 0 0 1 187.452235 188.53647A187.873882 187.873882 0 0 1 511.999699 612.653176z" p-id="2924" fill="#ff9a3d"/></svg>
							</span>
					</div>
					<div class="map-cl1">
						<div class="iobi-text1">总部地址：中国.青岛</div>
						<div class="iobi-text2">高新区火炬路100号盘谷空间c幢</div>
					</div>
					<div class="map-cl2">
						<div class="iobi-text1">华东分公司地址：中国.浙江</div>
						<div class="iobi-text2">杭州萧山区农业大厦1栋2609室</div>
					</div>
				</div>
			</div>
			<div class="iob-item3">
				<div class="iobi-bt">
					联系<span>Contact Us</span>
				</div>
				<div class="iobi-img">
					<img src="{{ asset('assets/ldd/images/index/lx01.jpg') }}" class="img-sy" />
				</div>
				<div class="iobi-content2">
					<div class="iobic2-text1">敬请关注官方微信公众号</div>
					<div class="iobic2-text2">
						<div class="index-lx1">
								<span>
									<svg viewBox="0 0 1024 1024" version="1.1" p-id="4346" width="58" height="58"><path d="M512.894881 209.974245c-161.590282 0-292.574498 130.996496-292.574498 292.575522 0 79.141478 31.454386 150.822031 82.425268 203.514113 23.189142 20.87033 48.467875 39.283702 76.295664 53.749158 15.129582 7.828292 31.821753 15.749706 49.317219 22.912849 26.770713 8.012488 55.149041 12.421914 84.536348 12.421914 161.590282 0 292.575522-131.006729 292.575522-292.598035C805.470403 340.970742 674.486186 209.974245 512.894881 209.974245zM512.894881 751.250012c-137.321552 0-248.699222-111.354134-248.699222-248.699222 0-137.357368 111.37767-248.677732 248.699222-248.677732 137.368624 0 248.701269 111.320365 248.701269 248.677732C761.59615 639.894855 650.264529 751.250012 512.894881 751.250012z" p-id="4347" fill="#bebebe"/><path d="M353.463776 561.533137c165.769464 139.986241 318.887794 0 318.887794 0s0 144.807037-159.455665 144.807037C353.463776 706.340173 353.463776 561.533137 353.463776 561.533137z" p-id="4348" fill="#bebebe"/><path d="M512.894881 119.145587c-180.003654 0-331.008856 124.028804-372.268562 291.324018 0 0-103.272062 16.33606-98.702999 120.205733 4.569062 103.84716 113.489774 110.183472 113.489774 110.183472 1.307785 3.329838 24.198122-3.237741 32.419364-4.6366-16.96744-41.190121-26.40437-86.329181-26.40437-133.671419 0-194.112999 157.366074-351.467817 351.46577-351.467817 194.124256 0 351.445304 157.354817 351.445304 351.467817 0 154.884556-100.149954 286.307771-239.21829 333.098447-8.977465 3.053546-18.413372-1.00898-18.413372-1.00898s-23.556509-4.409426-53.105498 3.948939c-14.556531 4.155646-20.801768 19.677155-19.928888 33.267685 1.079588 16.186657 7.230682 27.826765 24.15412 30.399357 21.789259 3.421936 52.760644 7.30129 64.470337-16.003486 3.168156-6.337335 6.613628-18.069541 14.052041-20.594037 107.472733-36.528961 193.503109-119.43723 234.278791-224.845954 0 0 108.324124-12.673647 111.51684-112.547309 3.191692-99.839893-96.890724-117.53081-96.890724-117.53081C844.091002 243.312538 692.992679 119.145587 512.894881 119.145587z" p-id="4349" fill="#bebebe"/></svg>
								</span>
							<span>联系客服</span>
						</div>
						<div class="index-lx-btn">
							400-180-0707
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--其他区域 end-->

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="select_address_dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">选择你所在的区域</h4>
				</div>
				<div class="modal-body">
					<div data-toggle="distpicker">
						<select id="province"></select>
						<select id="city"></select>
						<select id="district"></select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="selected_button">选好了</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!--首页底部 start-->
	<div class="index-footer">
		<div>优质到家服务提供商</div>
		<div><a style="color: #5A5A5A;" href="http://beian.miit.gov.cn">鲁ICP备19015066号-1</a> 版权所有 ©landingdong.com</div>
	</div>
	<!--首页底部 end-->
@stop

@section('customer-js')
	<script src="{{ asset('vendor/address/js/distpicker.data.js') }}"></script>
	<script src="{{ asset('vendor/address/js/distpicker.js') }}"></script>
	<script src="{{ asset('js/welcome.js') }}?r={{ time() }}"></script>
	@if (session('status'))
		<script>
			$(document).ready(function() {
				alert('{{ session('status') }}')
			});
		</script>
	@endif
	<script>
		var swiper = new Swiper('.swiper-container', {
			pagination: '.swiper-pagination',
			paginationClickable: true,
			autoplay: 4000,
			loop: true,
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#index').css('color', '#5c9ce2');
		});
	</script>
	<script>
		$('.map-cl1').mouseover(function() {
			$('.iobi-map img').attr('src', '{{ asset('assets/ldd/images/index/bg01.jpg') }}');
		})
		$('.map-cl2').mouseover(function() {
			$('.iobi-map img').attr('src', '{{ asset('assets/ldd/images/index/bg02.jpg') }}');
		})
	</script>
@stop
