<!-- resources/views/vendor/pagination/pagination.blade.php -->
@if ($paginator->hasPages())
    <nav>
        <ul class="pagination" style="border-radius: 50%; background-color: black;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true" style="background-color: black; color: white;">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" style="color: white;">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link" style="background-color: black; border-color: black;">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}" style="color: white; background-color: black; border-color: black;">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" style="color: white;">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true" style="background-color: black; color: white;">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
<style>
    /* Example styles */
    .pagination {
        display: flex;
        list-style-type: none;
        padding-left: 0;
        border-radius: 50%; /* Rounded pagination */
    }

    .pagination .page-item {
        /* margin-right: 0.5rem; */
        border: 1px solid white; /* Border color */
    }

    .pagination .page-item .page-link {
        color: white; /* Link color */
        background-color: black; /* Background color */
        border: 1px solid white; /* Border color */
        padding: 0.5rem 1rem; /* Padding */
    }

    .pagination .page-item.active .page-link {
        color: white; /* Active link color */
        background-color: white; /* Active background color */
        border-color: black; /* Border color */
    }

    .pagination .page-item.disabled .page-link {
        color: #6c757d; /* Disabled link color */
        pointer-events: none; /* Disabled pointer events */
        cursor: auto; /* Cursor */
        background-color: #fff; /* Background color */
        border: 1px solid white; /* Border color */
    }
</style>
