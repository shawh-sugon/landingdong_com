@extends('layouts.app')
@section('content')
	<!--轮播图 商务合作 start-->
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
	<!--轮播图 商务合作 end-->

	<!--合作流程 start-->
	<div class="hzlc-box">
		<div class="bt-box">
			<div class="bt-text1">合作流程</div>
			<div class="bt-eng">Cooperation Pprocess</div>
		</div>
		<div class="container">
			<div class="hzlc-content1"><span>加盟流程概述</span></div>
			<div class="hzlc-content2">
				<img src="{{ asset('assets/ldd/images/business/img01.png') }}" class="img-sy"/>
			</div>
		</div>
	</div>
	<!--合作流程 end-->

	<!--加盟操作 start-->
	<div class="jmcz-box">
		<div class="container">
			<div class="hzlc-content1"><span>加盟具体操作</span></div>
			<div class="hzlc-content2">
				<img src="{{ asset('assets/ldd/images/business/img02.png') }}" class="img-sy"/>
			</div>
		</div>
	</div>
	<!--加盟操作 end-->

	<!--商务合作 start-->
	<div class="business-box">
		<div class="bt-box">
			<div class="bt-text1">商务合作</div>
			<div class="bt-eng">Business Cooperation</div>
		</div>
		<div class="index-bus-img">
			<form action="{{ route('web.store') }}" id="business_form" method="post">
				{{ csrf_field() }}
				<img src="{{ asset('assets/ldd/images/business/img03.png') }}" class="img-sy ibi-pc"/>
				<img src="{{ asset('assets/ldd/images/index/img04.jpg') }}" class="img-sy ibi-web"/>
				<div class="business-sub-box">
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
					<button type="submit" class="ibsb-btn">
						提交
					</button>
					<div class="fl-cl"></div>
				</div>
			</form>
		</div>
	</div>
	<!--商务合作 end-->
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
	
	<!--底部 start-->
	@include('layouts._footer')
	<!--底部 end-->
	
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
		$(document).ready(function() {
			$('#bus').css('color','#5c9ce2');
		});
	</script>
@stop