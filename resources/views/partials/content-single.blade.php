<article @php(post_class('h-entry post'))>
    <header>
        <div class="title">
            <h2>{!! $title !!}</h2>
            {{-- <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p> --}}
        </div>

        @include('partials.entry-meta')
    </header>

    @if (has_post_thumbnail())
        <span class="image featured">
            {!! the_post_thumbnail('full') !!}
        </span>
    @endif

    @php(the_content())

    <footer>
        @include('partials.stats-meta')
    </footer>

    <!-- Pagination -->
    <ul class="actions pagination">
        @foreach ($navigation as $item)
            <li> {!! $item !!} </li>
        @endforeach
    </ul>

    <hr />

    @php(comments_template())
</article>
