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
				<div class="bt-text1">新闻</div>
				<div class="bt-eng">News</div>
			</div>
			<div class="news-content">
				@foreach($news as $new)
					<div class="news-item">
						<div>
							<img src="{{ asset('storage/' . $new->cover) }}" class="img-sy"/>
						</div>
						<div class="ni-content">
							<div class="ni-bt">{{ $new->title }}</div>
							<div class="ni-time">{{ $new->created_at->format('Y年m月d日') }}</div>
							<div class="ni-text">
								{{ str_limit($new->intro, 100) }}
								<a href="{{ route('web.news.detail', ['id' => $new->id]) }}">点击查看</a>
							</div>
						</div>
					</div>
				@endforeach
				<div class="fl-cl">
					<div class="center-block" style="text-align: center">
						{{ $news->links() }}
					</div>
				</div>
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