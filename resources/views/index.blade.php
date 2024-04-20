@extends('layouts.app')

@section('content')
    @if (!is_front_page() && !is_home())
        @include('partials.page-header')
    @endif

    @if (!have_posts())
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endif

    @while (have_posts())
        @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile

    <!-- Pagination -->
    <ul class="actions pagination">
        @foreach ($navigation as $item)
            <li> {!! $item !!} </li>
        @endforeach
    </ul>
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
