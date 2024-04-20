@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <article class="post">
            <x-alert type="warning">
                {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
            </x-alert>

            {!! get_search_form(false) !!}
        </article>
    @endif
@endsection
