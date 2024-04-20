@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <article class="post">
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>

            {!! get_search_form(false) !!}
        </article>
    @endif

    @while (have_posts())
        @php(the_post())
        @include('partials.content-search')
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
