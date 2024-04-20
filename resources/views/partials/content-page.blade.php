<article class="post">
    <header>
        <div class="title">
            <h2>{!! $title !!}</h2>
            {{-- <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p> --}}
        </div>

        {{-- <div class="meta">
            <time class="published" datetime="2015-11-01">November 1, 2015</time>
            <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg"
                    alt="" /></a>
        </div> --}}
    </header>
    {{-- <span class="image featured"><img src="images/pic01.jpg" alt="" /></span> --}}

    @if (has_post_thumbnail())
        <span class="image featured">
            {!! the_post_thumbnail('full') !!}
        </span>
    @endif


    @php(the_content())

    {{-- <footer>
        <ul class="stats">
            <li><a href="#">General</a></li>
            <li><a href="#" class="icon solid fa-heart">28</a></li>
            <li><a href="#" class="icon solid fa-comment">128</a></li>
        </ul>
    </footer> --}}
</article>


@if ($pagination)
    <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
    </nav>
@endif
