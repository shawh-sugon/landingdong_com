@extends('layouts.app')
@section('content')
	<!--轮播图 服务范围 start-->
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
	<!--轮播图 服务范围 end-->

	<!--电器清洁 start-->
	<div class="ser-wash-box">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">居家服务</div>
				<div class="bt-eng">Electrical Cleaning</div>
			</div>
			<div class="swb-content">
				<div class="swbc-left">居家服务</div>
				<div class="swbc-right">
					<a href="{{ route('web.second1') }}">
					<img src="{{ asset('assets/ldd/images/service/img01.jpg') }}" class="img-sy swb-img" />
					<div class="swbc-icon">
						<div><img src="{{ asset('assets/ldd/images/service/more.png') }}" class="img-sy"/></div>
					</div>
					</a>
				</div>
			</div>
			<!--<div class="swb-content2">
				<div class="swbc2-item">
					<div class="swbc2i-bt">必要性</div>
					<div class="swbc2i-ul">
						<ul>
							<li>1.杀菌消毒护健康</li>
							<li>2.清除残留尘污</li>
							<li>3.延长家电寿命</li>
							<li>4.更加节能环保</li>
						</ul>
					</div>
				</div>
				<div class="swbc2-item2">
					<div class="swbc2i-bt">大市场</div>
					<div class="swbc2i-ul">
						<ul>
							<li>数十万亿存量家电市场，</li>
							<li>定期清洁的需求意识越</li>
							<li>来越强，迫切需要专业</li>
							<li>服务。</li>
						</ul>
					</div>
				</div>
				<div class="swbc2-item3">
					<div class="swbc2i-bt">品类多</div>
					<div class="swbc2i-ul">
						<ul>
							<li>家用空调，抽油烟机，</li>
							<li>电热水器，洗衣机，</li>
							<li>集成灶，嵌入高端电器等</li>
						</ul>
					</div>
				</div>
				<div class="swbc2-item">
					<div class="swbc2i-bt">行业短板</div>
					<div class="swbc2i-ul">
						<ul>
							<li>无标准，无规范，质量</li>
							<li>无保障，游击队施工，</li>
							<li>用户体验不佳。</li>
						</ul>
					</div>
				</div>
				<div class="swbc2-item4">
					<div class="swbc2i-bt">综合优势</div>
					<div class="swbc2i-ul">
						<ul>
							<li>自主研发专业的清洗设备，国际一流蓝天使认证的清洁药剂，系统的</li>
							<li>理论与实践培训，可靠的获单支持；信息系统管理用户数据，实现一</li>
							<li>次优质服务，成就终身用户。</li>
						</ul>
					</div>
				</div>
			</div>-->
			<div class="sab-content1">
				<div class="sabc-item1">
					<div class="nei-box3">
						<div class="sabci-bt">项目定位</div>
						<div class="sabci-text">创综合到家服务第一品牌，优质到家服务提供商</div>
					</div>
				</div>
				<div class="sabc-item2">
					<div class="nei-box3">
						<div class="sabci-bt">经营模式</div>
						<div class="sabci-text">“精品到家服务+关联商品销售+信息网络平台”新模式</div>
					</div>
				</div>
				<div class="sabc-item1">
					<div class="nei-box3">
						<div class="sabci-bt">用户价值</div>
						<div class="sabci-text">让居家服务专业化、规范化、职业化、智能化、品牌化。</div>
					</div>
				</div>
				<div class="sabc-item2">
					<div class="nei-box3">
						<div class="sabci-bt">合作优势</div>
						<div class="sabci-text">商学院培训/专业设备/技术方案/信息系统管理/清洁行业从业资格证/运营管理/订单派送/37项行业资质/218项标准规范</div>
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>
		</div>
	</div>
	<!--电器清洁 end-->

	<!--空气治理 start-->
	<div class="ser-air-box">
		<div class="bt-box">
			<div class="bt-text1">空气治理</div>
			<div class="bt-eng">Air Control</div>
		</div>
		<!--<div>
			<a href="{{ route('web.second3') }}">
				<img  src="{{ asset('assets/ldd/images/service/img02.jpg') }}" class="img-sy" />
			</a>
		</div>-->
		<div class="container">
			<div class="swb-content">
				<div class="swbc-left">空气治理</div>
				<div class="swbc-right">
					<a href="{{ route('web.second3') }}">
						<img  src="{{ asset('assets/ldd/images/service/img02.jpg') }}" class="img-sy swb-img" />
						<div class="swbc-icon">
						<div><img src="{{ asset('assets/ldd/images/service/more.png') }}" class="img-sy"/></div>
					</div>
					</a>
				</div>
			</div>
			<div class="sab-content1">
				<div class="sabc-item1">
					<div class="nei-box3">
						<div class="sabci-bt">解决方案</div>
						<div class="sabci-text">精准检测，在线监控，全程治理，健康增益</div>
					</div>
				</div>
				<div class="sabc-item2">
					<div class="nei-box3">
						<div class="sabci-bt">先进技术</div>
						<div class="sabci-text">天然萃取进口原液，无需光照催化治理，清洁空气健康环境</div>
					</div>
				</div>
				<div class="sabc-item1">
					<div class="nei-box3">
						<div class="sabci-bt">用户价值</div>
						<div class="sabci-text">健康治理  远离甲醛  畅享健康空气</div>
					</div>
				</div>
				<div class="sabc-item2">
					<div class="nei-box3">
						<div class="sabci-bt">合作优势</div>
						<div class="sabci-text">权威检测 进口药剂 全程治理 负离子健康增益</div>
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>
			<!--<div class="sab-content2">
				<div class="sabc2-bt">综合优势</div>
				<div>
					<div class="sabc2-item sabc2-bg1">
						<div class="sabc2-img">
							<img src="{{ asset('assets/ldd/images/service/icon01.png') }}" class="img-sy" />
						</div>
						<div class="sabc2-btn">检测力量</div>
						<div class="sabc2-text">
							联合同济大学博士，国家建筑质量检测中心教授工程师研发全新一代含负离子指标的空气检测仪软件与硬件，提供权威检测。
						</div>
					</div>
					<div class="sabc2-item sabc2-bg2">
						<div class="sabc2-img">
							<img src="{{ asset('assets/ldd/images/service/icon02.png') }}" class="img-sy" />
						</div>
						<div class="sabc2-btn">业务模式</div>
						<div class="sabc2-text">
							首创行业内硬件检测，软件管理，数据可视化，效果可追溯，“一次治理，两季检测（南方夏秋，北方夏冬），三年跟踪”业务模式。
						</div>
					</div>
					<div class="sabc2-item sabc2-bg1">
						<div class="sabc2-img">
							<img src="{{ asset('assets/ldd/images/service/icon03.png') }}" class="img-sy" />
						</div>
						<div class="sabc2-btn">技术来源</div>
						<div class="sabc2-text">
							来自日本神奈川国家实验室甲醛降解之父石丸章教授40年潜心研究新一代甲醛分解技术，天然绿色提取，无需光照，无伴生有害物质，日本皇宫使用的治理产品。
						</div>
					</div>
					<div class="sabc2-item sabc2-bg2">
						<div class="sabc2-img">
							<img src="{{ asset('assets/ldd/images/service/icon04.png') }}" class="img-sy" />
						</div>
						<div class="sabc2-btn">增益方案</div>
						<div class="sabc2-text">
							链接国际一流的负离子学术研究能力，全系列增加室内负离子含量的健康增益供应链解决方案。
						</div>
					</div>
					<div class="fl-cl"></div>
				</div>
			</div>-->
		</div>
	</div>
	<!--空气治理 end-->

	<!--商用设备 start-->
	<div class="ser-sy-box">
		<div class="bt-box">
			<div class="bt-text1">商用服务</div>
			<div class="bt-eng">Commercial Equipment</div>
		</div>
		<!--<div>
			<a href="{{ route('web.second2') }}">
			<img src="{{ asset('assets/ldd/images/service/img03.jpg') }}" class="img-sy" />
			</a>
		</div>-->
		<div class="container">
			<div class="swb-content">
				<div class="swbc-left">商用服务</div>
				<div class="swbc-right">
					<a href="{{ route('web.second2') }}">
						<img  src="{{ asset('assets/ldd/images/service/img03.jpg') }}" class="img-sy swb-img" />
						<div class="swbc-icon">
						<div><img src="{{ asset('assets/ldd/images/service/more.png') }}" class="img-sy"/></div>
					</div>
					</a>
				</div>
			</div>
			<div class="sab-content1">
				<div class="sabc-item1">
					<div class="nei-box3">
						<div class="sabci-bt">项目定位</div>
						<div class="sabci-text">商业设备系统清洁维保一站式贴心服务管家</div>
					</div>
				</div>
				<div class="sabc-item2">
					<div class="nei-box3">
						<div class="sabci-bt">技术支持</div>
						<div class="sabci-text">从图纸审查到清洁后检测报告全流程技术力量</div>
					</div>
				</div>
				<div class="sabc-item1">
					<div class="nei-box3">
						<div class="sabci-bt">用户价值</div>
						<div class="sabci-text">为配置风系统水系统中央空调楼宇、大型烟机方提供专业/高效/优质/放心的维保清洁服务</div>
					</div>
				</div>
				<div class="sabc-item2">
					<div class="nei-box3">
						<div class="sabci-bt">合作优势</div>
						<div class="sabci-text">技术方案 招投标方案 清洗设备 关键药剂 37项行业资质 专业施工 现场管理 检测报告</div>
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>
			<!--<div class="ssyb-content1">
				<div class="ssybc-bt">机会点</div>
				<div class="ssybc-text1">
					<span>"</span>&nbsp;巨大的存量市场，公共事业单位，写字楼，学校，医院，酒店，工厂等 各类安装大型中央空调设备的单位都存在持续性清洗/消毒/维护服务需求。
					<span>"</span>
				</div>
			</div>-->
			<!--<div class="ssyb-content2">
				<div class="ssybc2-item1">
					<div class="ssybc2-bt">综合优势</div>
					<div class="ssybc2-img">
						<img src="{{ asset('assets/ldd/images/service/ic01.png') }}" class="img-sy" />
					</div>
					<div class="ssybc2-text">
						项目案例，全国八百多家大 中小型公共场所及楼宇的中 央空调通风系统，水系统清 洗消毒，维护，改造工程经 验。
					</div>
				</div>
				<div class="ssybc2-item2">
					<div class="ssybc2-bt">施工资质</div>
					<div class="ssybc2-img">
						<img src="{{ asset('assets/ldd/images/service/ic02.png') }}" class="img-sy" />
					</div>
					<div class="ssybc2-text">
						具备涉及大型中央空调安全 作业/清洁/消毒/检测全套 资质，可承接各种级别中 央空调维保项目。
					</div>
				</div>
				<div class="ssybc2-item3">
					<div class="ssybc2-bt">全程帮助</div>
					<div class="ssybc2-img">
						<img src="{{ asset('assets/ldd/images/service/ic03.png') }}" class="img-sy" />
					</div>
					<div class="ssybc2-text">
						针对合作伙伴，提供包括设 备/技术/施工等全流程的培 训及支持方案，实现低成本 投入轻松做项目。
					</div>
				</div>
				<div class="fl-cl"></div>
			</div>-->
			<!--<div class="ssyb-content3">
				<div class="ssybc3-left">
					家政服务 .<span>近期上线</span>
				</div>
				<div class="ssybc3-right">
					安装售后 .<span>近期上线</span>
				</div>
			</div>-->
		</div>
	</div>
	<!--商用设备 end-->

	<!--项目案例 start-->
	<div class="ser-pro-al">
		<div class="container">
			<div class="bt-box">
				<div class="bt-text1">项目案例</div>
				<div class="bt-eng">Project Case</div>
			</div>
			<!--轮播图 项目案例 start-->
			<div class="swiper-container swiper-container-horizontal swiper-container-al">
				<div class="swiper-wrapper">
					@foreach($project_cases as $project_case)
						<div class="swiper-slide">
							<img src="{{ asset('storage/' . $project_case->photo_url) }}" class="img-sy" />
						</div>
					@endforeach
				</div>
				<div style="height: 70px;"></div>
				<!-- Add Pagination -->
				<div class="swiper-pagination-al swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
			</div>
			<script>
				var swiper = new Swiper('.swiper-container-al', {
					pagination: '.swiper-pagination-al',
					paginationClickable: true
				});
			</script>
			<!--轮播图 项目案例 end-->
		</div>
	</div>
	<!--项目案例 end-->

	@include('layouts._footer')
@stop

@section('customer-js')
	<script>
		$(document).ready(function() {
			$('#ser').css('color','#5c9ce2');
		});
	</script>
@stop