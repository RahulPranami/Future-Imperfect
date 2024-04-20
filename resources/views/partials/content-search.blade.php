<article @php(post_class('post'))>
    <header>
        <div class="title">
            <h2>
                <a href="{{ get_permalink() }}">
                    {!! $title !!}
                </a>
            </h2>
            {{-- <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p> --}}
        </div>

        @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
        {{-- @include('partials.entry-meta') --}}
    </header>

    @if (has_post_thumbnail())
        <a href="{{ get_permalink() }}" class="image featured">
            {!! the_post_thumbnail('large') !!}
        </a>
    @endif

    @php(the_excerpt())

    <footer>
        <ul class="actions">
            <li><a href="{{ get_permalink() }}" class="button large">Continue Reading</a></li>
        </ul>

        @includeWhen(get_post_type() === 'post', 'partials.stats-meta')
        {{-- @include('partials.stats-meta') --}}
    </footer>
</article>
