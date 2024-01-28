
//in AppServiceProvider

@php
if (!Request::is('dashboard*')) {       // in has special page to show paginate

    Paginator::defaultView('client.includes.pagination');
    Paginator::defaultSimpleView('client.includes.pagination');
}
@endphp


========= in file pagination ========

  @if ($paginator->hasPages())
    <div class="tm-pagination mt-50">
        <ul>
            @if (!$paginator->onFirstPage())
                <li><a href="{{ $paginator->previousPageUrl() }}"><i class="ion-chevron-left"></i></a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><span>...</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="is-active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}"><i class="ion-chevron-right"></i></a></li>
            @endif
        </ul>
    </div>
@endif



// for show paginate

{{ $articles->withQueryString()->links() }}
