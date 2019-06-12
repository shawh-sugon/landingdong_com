@if ($paginator->hasPages())
    <div class="container" style="text-align: right;font-size: 1.5rem;">
        {{--Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}">
                <span style="color: #999999;">上一页</span>
            </a>
        @endif
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span style="color: #fea700;padding-right: 1rem;">{{ $page }}</span>
                        @else
                        <a href="{{ $url }}">
                            <span style="color: #999999;padding-right: 1rem;">{{ $page }}</span>
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">
                <span style="color: #999999;">下一页</span>
            </a>
        @endif
    </div>
    {{--<ul class="pagination" role="navigation">--}}
         {{--Previous Page Link --}}
        {{--@if ($paginator->onFirstPage())--}}
            {{--<li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
                {{--<span aria-hidden="true">&lsaquo;</span>--}}
            {{--</li>--}}
        {{--@else--}}
            {{--<li>--}}
                {{--<a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
            {{--</li>--}}
        {{--@endif--}}

        {{-- Pagination Elements --}}
        {{--@foreach ($elements as $element)--}}
            {{-- "Three Dots" Separator --}}
            {{--@if (is_string($element))--}}
                {{--<li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>--}}
            {{--@endif--}}

            {{-- Array Of Links --}}
            {{--@if (is_array($element))--}}
                {{--@foreach ($element as $page => $url)--}}
                    {{--@if ($page == $paginator->currentPage())--}}
                        {{--<li class="active" aria-current="page" style="color: #fea700;"><span>{{ $page }}</span></li>--}}
                    {{--@else--}}
                        {{--<li style="color: #999999;"><a href="{{ $url }}">{{ $page }}</a></li>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--@endforeach--}}

        {{-- Next Page Link --}}
        {{--@if ($paginator->hasMorePages())--}}
            {{--<li>--}}
                {{--<a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
            {{--</li>--}}
        {{--@else--}}
            {{--<li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
                {{--<span aria-hidden="true">&rsaquo;</span>--}}
            {{--</li>--}}
        {{--@endif--}}
    {{--</ul>--}}
@endif
