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

	<!--蔚蓝计划 start-->
	<div class="company-js-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">蔚蓝计划</div>
				<div class="bt-eng">Azure Plan</div>
			</div>
			<div class="wl-content">
				<span>"</span>&nbsp;&nbsp;以培养百万优质到家服务工程师和卓越服务业经理人为使命，</br>
				让天下没有难做的服务，为千万家庭提供更健康环保，更舒适便利的品质生活！<span>"</span>
			</div>
		</div>
	</div>
	<!--蔚蓝计划 end-->

	<!--职业经理 start-->
	<div class="zyjl-box">
		<div class="bt-box">
			<div class="bt-text1">职业经理</div>
			<div class="bt-eng">Professional Manager</div>
		</div>
		<div class="zyjl-content">
			<div class="zyjlc-left">
				<img src="{{ asset('assets/ldd/images/school/img01.jpg') }}" class="img-sy"/>
			</div>
			<div class="zyjlc-right">
				<div class="zyjlr-content">
					<span>"</span>&nbsp;在到家服务业领域，培养具备运营能力的优秀职业经理人，提高整个行业的运营水平•	<span>"</span>
				</div>
			</div>
		</div>
	</div>
	<!--职业经理 end-->

	<!--服务明星 start-->
	<div class="zyjl-box1">
		<div class="bt-box">
			<div class="bt-text1">服务明星</div>
			<div class="bt-eng">Service Star</div>
		</div>
		<div class="zyjl-content">
			<div class="zyjlc-right">
				<div class="zyjlr-content1">
					<span>"</span>&nbsp;在专业清洁环保领域，通过技术规范/施工规范/礼仪规范/理论培训/实践培训等一系列的专业训练，塑造服务明星，提高用户体验。<span>"</span>
				</div>
			</div>
			<div class="zyjlc-left">
				<img src="{{ asset('assets/ldd/images/school/img02.jpg') }}" class="img-sy"/>
			</div>
		</div>
	</div>
	<!--服务明星 end-->

	<!--底部 start-->
	@include('layouts._footer')
	<!--底部 end-->

@stop

@section('customer-js')
	<script>
		$(document).ready(function() {
			$('#sch').css('color','#5c9ce2');
		});
	</script>
@stop