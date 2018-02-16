@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <li class="pagination-itm pagination-prev">
                <a class="pagination-nav" href="{{ rewrite_page_url($paginator->previousPageUrl()) }}">
                    <span class="pagination-nav-wrp">
                        <span class="pagination-ico">
                            <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#left-arrow"></use>
                            </svg>
                        </span>
                        <span class="pagination-lbl">Previous</span>
                    </span>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == 1 AND $page == $paginator->currentPage())
                        <li class="pagination-itm itm-page current">
                            <span class="pagination-lnk current">
                                <span>{{ $page }}</span>
                            </span>
                        </li>
                    @elseif ($page == 1)
                        <li class="pagination-itm itm-page">
                            <a class="pagination-lnk" href="{{ rewrite_page_url($url) }}">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @elseif ($page == $paginator->currentPage())
                        <li class="pagination-itm itm-page current">
                            <span class="pagination-lnk current">
                                <span>{{ $page }}</span>
                            </span>
                        </li>
                    @else
                        <li class="pagination-itm itm-page">
                            <a class="pagination-lnk" href="{{ rewrite_page_url($url) }}">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-itm pagination-next">
                <a class="pagination-nav" href="{{ rewrite_page_url($paginator->nextPageUrl()) }}">
                    <span class="pagination-nav-wrp">
                        <span class="pagination-lbl">Next</span>
                        <span class="pagination-ico">
                            <svg viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#right-arrow"></use>
                            </svg>
                        </span>
                    </span>
                </a>
            </li>
        @endif
    </ul>
@endif