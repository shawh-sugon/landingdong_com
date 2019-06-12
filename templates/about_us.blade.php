@extends('layouts.app')
@section('content')
	<!--轮播图 关于我们 start-->
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
	<!--轮播图 关于我们 end-->

	<!--企业介绍 start-->
	<div class="company-js-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">企业介绍</div>
				<div class="bt-eng">About us</div>
			</div>
			<div class="cjs-content">
				蓝叮咚-以让天下没有难做的服务为使命，链接人与服务为宗旨，线上线下融合为途径，通过网络信息技术应用，匹配行业一流资源，让居家服务产业信息化，集约化，规范化，品牌化，为千万家庭提供优质可信赖的到家服务；通过输出品牌管理，信息系统，供应链，标准化赋能中小家政服务公司及服务人员，终结游击队，建立生态圈，解决百万就业；实现专业到家服务，信赖信息平台，优质商品销售的互联互通，为千万家庭提供更健康，更环保，更便利，更舒适的品质生活体验。
			</div>
		</div>
	</div>
	<!--企业介绍 end-->

	<!--发展历程 start-->
	<div class="delp-box-ab">
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
		function change_text(obj){
			$(".time-box a").removeClass('tb-active');
			$(obj).addClass('tb-active');
			var content = $(obj).context.innerHTML;
			if(content=="2009年"){
				$('.time-content span').html("家电设备清洗行业拓荒者");
				$('.dsj1').css('left','20%');
			}else if(content=="2012年"){
				$('.time-content span').html("启动嵌入式家电专业清洗");
				$('.dsj1').css('left','30%');
			}else if(content=="2014年"){
				$('.time-content span').html("启动大型商用设备清洁保养业务");
				$('.dsj1').css('left','39%');
			}else if(content=="2016年"){
				$('.time-content span').html("介入高端精品保洁业务");
				$('.dsj1').css('left','49%');
			}else if(content=="2017年"){
				$('.time-content span').html("推出综合清洁业务品牌洗当家");
				$('.dsj1').css('left','58.5%');
			}else if(content=="2018年"){
				$('.time-content span').html("启动“服务+网络+商品”新模式");
				$('.dsj1').css('left','68%');
			}else if(content=="2019年"){
				$('.time-content span').html("发布新品牌蓝叮咚");
				$('.dsj1').css('left','78%');
			}
		}
	</script>
	<!--发展历程 end-->

	<!--愿景 start-->
	<div class="container">
		<div class="abqy-item1" >
			<div class="nei-box1">
				<div class="abqi-bt">定位</div>
				<div class="abqi-img">
					<img src="{{ asset('assets/ldd/images/about_us/text01.png') }}" class="img-sy" />
				</div>
				<div class="fl-cl"></div>
				<div class="abqi-text">
					让千百万到家服务</br>小微企业活的更好
				</div>
				<div class="abqi-img2">
					<img src="{{ asset('assets/ldd/images/about_us/ab_icon01.png') }}" class="img-sy" />
				</div>
			</div>
		</div>
		<div class="abqy-item2">
			<div class="nei-box1">
				<div class="abqi-bt">愿景</div>
				<div class="abqi-img-2">
					<img src="{{ asset('assets/ldd/images/about_us/text02.png') }}" class="img-sy" />
				</div>
				<div class="fl-cl"></div>
				<div class="abqi-text">
					创综合到家服务领导品牌</br>建立互相赋能的大服务业生态圈
				</div>
				<div class="abqi-img2">
					<img src="{{ asset('assets/ldd/images/about_us/ab_icon02.png') }}" class="img-sy" />
				</div>
			</div>
		</div>
		<div class="abqy-item3">
			<div class="nei-box1">
				<div class="abqi-bt">价值观</div>
				<div class="abqi-img-3">
					<img src="{{ asset('assets/ldd/images/about_us/text03.png') }}" class="img-sy" />
				</div>
				<div class="fl-cl"></div>
				<div class="abqi-text2">
					客户至上 团队合作</br>诚信正直 拥抱变化</br>久久为功 追求卓越
				</div>
				<div class="abqi-img2">
					<img src="{{ asset('assets/ldd/images/about_us/ab_icon03.png') }}" class="img-sy" />
				</div>
			</div>
		</div>
		<div class="fl-cl"></div>
	</div>
	<!--愿景 end-->

	<!--团队风采 start-->
	<div class="ser-pro-al">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">团队风采</div>
				<div class="bt-eng">Team Demeanor</div>
			</div>
			<!--轮播图 团队风采 start-->
			<div class="swiper-container swiper-container-horizontal swiper-container-al">
				<div class="swiper-wrapper">
					@foreach($team_demeanors as $team_demeanor)
						<div class="swiper-slide">
							<img src="{{ asset('storage/' . $team_demeanor->photo_url) }}" class="img-sy" />
						</div>
					@endforeach
				</div>
				<div style="height: 70px;"></div>
				<!-- Add Pagination -->
				<div class="swiper-pagination-al swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
			</div>

			<!--轮播图 团队风采 end-->
		</div>
	</div>
	<!--团队风采 end-->
	@include('layouts._footer')
@stop

@section('customer-js')
	<script>
		var swiper = new Swiper('.swiper-container-al', {
			pagination: '.swiper-pagination-al',
			paginationClickable: true
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#ab').css('color','#5c9ce2');
		});
	</script>
@stop