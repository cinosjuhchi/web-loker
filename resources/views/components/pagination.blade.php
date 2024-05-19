@props(['paginator'])

<nav aria-label="Page navigation example">
    <ul class="inline-flex -space-x-px text-sm">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <span>&laquo;</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($paginator->onEachSide(1) as $page => $url)
            @if (is_int($page))
                <li>
                    <a href="{{ $url }}">{{ $page }}</a>
                </li>
            @else
                <li>
                    <span>{{ $page }}</span>
                </li>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
            </li>
        @else
            <li class="disabled">
                <span>&raquo;</span>
            </li>
        @endif
    </ul>
</nav>
