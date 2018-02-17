@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <li class="pagination-prev">
                <a class="" href="{{ rewrite_page_url($paginator->previousPageUrl()) }}">
                    <span>Previous</span>
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
                        <li class="active">
                            <span>{{ $page }}</span>
                        </li>
                    @elseif ($page == 1)
                        <li>
                            <a href="{{ rewrite_page_url($url) }}">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @elseif ($page == $paginator->currentPage())
                        <li class="active">
                            <span>{{ $page }}</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ rewrite_page_url($url) }}">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-next">
                <a href="{{ rewrite_page_url($paginator->nextPageUrl()) }}">
                    <span>Next</span>
                </a>
            </li>
        @endif
    </ul>
@endif