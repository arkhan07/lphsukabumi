@if ($paginator->hasPages())
<nav>
    <ul
        class="pagination flex justify-center items-center font-poppins font-medium text-darkgreen w-fit p-2 rounded-lg mx-auto custom-pagination mt-10">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link px-3 py-1">&lsaquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link px-3 py-1" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="Previous">&lsaquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @for ($page = 1; $page <= $paginator->lastPage(); $page++)
            <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                <a class="page-link px-3 py-1" href="{{ $paginator->url($page) }}">{{ $page }}</a>
            </li>
        @endfor

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link px-3 py-1" href="{{ $paginator->nextPageUrl() }}" rel="next"
                    aria-label="Next">&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link px-3 py-1" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif

    </ul>
</nav>
@endif
