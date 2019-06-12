@extends('layouts.app')
@section('content')
	<!--轮播图 项目优势 start-->
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
	<!--轮播图 项目优势 end-->

	<!--市场分析 start-->
	<div class="market-know-box">
		<div class="bt-box">
			<div class="bt-text1">市场分析</div>
			<div class="bt-eng">Market Analysis</div>
		</div>
		<div class="container">
			<div class="mkb-content">
				<img src="{{ asset('assets/ldd/images/goods/img01.png') }}" class="img-sy mkb-img" />
				<div class="mkbc-content">
					<div class="mkbcc-left">
						<img src="{{ asset('assets/ldd/images/goods/icon01.png') }}" class="img-sy" />
					</div>
					<div class="mkbcc-right">
						<div>国民经济发展到人均8000-10000美金，服务业发展就会进入新的阶段。--来源《恒大研究院》</div>
						<div>2013年中国家政市场规模达9600亿元，2014年市场规模达11300亿元，而2015年中国家政市场规模就达到13500亿元，按照最近几年中国家政行业发展速度，中国家政市场年产值在2017年左右就能达到2万亿规模，市值超过10亿美金的公司屈指可数。 --来源《中国商务部2016年家政服务行业发展报告》</div>
					</div>
					<div class="fl-cl"></div>
				</div>
			</div>
		</div>
	</div>
	<!--市场分析 end-->

	<!--市场特点 start-->
	<div class="container">
		<div class="market-point-box">
			<div class="mpb-item">
				<div class="mpbi-left1">
					<img src="{{ asset('assets/ldd/images/goods/i01.png') }}" class="img-sy" />
				</div>
				<div class="mpbi-right">
					<div class="mpbi-bt-box">
						<div class="mpb-bt-text1">行业痛点</div>
						<div class="mpb-bt-eng">Industry Pain Spot</div>
					</div>
					<div class="mpbir-content1">
						“找服务很容易，找专业的可信赖的优质服务很难。”
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>
			<div class="mpb-item">
				<div class="mpbi-left2">
					<img src="{{ asset('assets/ldd/images/goods/i02.png') }}" class="img-sy" />
				</div>
				<div class="mpbi-right">
					<div class="mpbi-bt-box">
						<div class="mpb-bt-text1">行业现状</div>
						<div class="mpb-bt-eng">Industry Status</div>
					</div>
					<div class="mpbir-content2">
						规范化不够，如何能统一服务品质，统一操作流程，提升用户体验。</br>
						信息化不够，互联网+服务发展迅速，服务与网络可以进一步融合。</br>
						集约化不够，行业大多属于“小散弱”，具有引领能力的优质服务企业少。
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>
			<div class="mpb-item2">
				<div class="mpbi-left2">
					<img src="{{ asset('assets/ldd/images/goods/i03.png') }}" class="img-sy" />
				</div>
				<div class="mpbi-right">
					<div class="mpbi-bt-box">
						<div class="mpb-bt-text1">从业群体</div>
						<div class="mpb-bt-eng">Practitioners Group</div>
					</div>
					<div class="mpbir-content3">
						服务人员：没方向，没资金，没技术，没规范</br>
						小微公司：缺品牌，缺系统，缺供应，缺工人，缺管理，缺标准，缺订单，缺帮扶
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>
		</div>
	</div>
	<!--市场特点 end-->

	<!--赋能图片 start-->
	<div>
		<img src="{{ asset('assets/ldd/images/goods/img02.png') }}" class="img-sy" />
	</div>
	<!--赋能图片 end-->

	<!--价值呈现 start-->
	<div class="company-js-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">价值呈现</div>
				<div class="bt-eng">Value Presentation</div>
			</div>
			<div class="jzcx-content">
				<span>"</span>&nbsp;&nbsp;轻松创业，顺利转型，加速发展；让合作伙伴活下去，活的好，活的久。<span>"</span>
			</div>
		</div>
	</div>
	<!--价值呈现 end-->

	<!--解决方案 start-->
	<div class="del-with-pb-box">

		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">解决方案</div>
				<div class="bt-eng">Solution</div>
			</div>
			<div>
				<div class="dwb-item1">
					<div class="nei-box2">
						<div class="dwbi-bt">品牌共享</div>
						<div class="dwbi-content">
							结合新时代的用户习惯，全方位整合营销，覆盖央视访谈，卫视广告，网络媒体等，综合物料大礼包支持；
						</div>
					</div>
				</div>
				<div class="dwb-item2">
					<div class="nei-box2">
						<div class="dwbi-bt">系统共享</div>
						<div class="dwbi-content">
							统一用户端营销，统一后台管理，同用户建立高粘度；用信息化规范各项服务细节，确保用户服务体验；
						</div>
					</div>
				</div>
				<div class="dwb-item3">
					<div class="nei-box2">
						<div class="dwbi-bt">服务标准</div>
						<div class="dwbi-content">
							9大类一级标准，36项二级标准，超过200项具体服务规范细节，辅助信息化，实现标准化规范作业；
						</div>
					</div>
				</div>
				<div class="dwb-item1">
					<div class="nei-box2">
						<div class="dwbi-bt">供应资源</div>
						<div class="dwbi-content">
							行业一流供应商，新技术操作设备，世界知名品牌清洁剂，权威机构认证资质，让效率更高，质量更好；
						</div>
					</div>
				</div>
				<div class="dwb-item2">
					<div class="nei-box2">
						<div class="dwbi-bt">订单支持</div>
						<div class="dwbi-content">
							专业获客团队，承接知名品牌连锁机构企业等持续订单，网络渠道订单，支援生态圈层内合作企业；
						</div>
					</div>
				</div>
				<div class="dwb-item3">
					<div class="nei-box2">
						<div class="dwbi-bt">经营帮扶</div>
						<div class="dwbi-content">
							各大区直营公司客户经理小分队，提供从前期考察到后续获单全流程经营帮扶，解决合作伙伴后顾之忧。
						</div>
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>
		</div>
	</div>
	<!--解决方案 end-->

	<!--合作品牌 start-->
	<div class="goods-hz-box">
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

	<!--底部 start-->
	@include('layouts._footer')
	<!--底部 end-->
@stop

@section('customer-js')
	<script>
		$(document).ready(function() {
			$('#xmys').css('color','#5c9ce2');
		});
	</script>
@stop
