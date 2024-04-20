<!-- Header -->
<header id="header" class="banner">
    <h1>
        <a class="brand" href="{{ home_url('/') }}">
            {!! $siteName !!}
        </a>
    </h1>

    @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary links" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
    @endif

    <nav class="main">
        <ul>
            <li class="search">
                <a class="fa-search" href="#search">Search</a>
                <form id="search" method="get" action="{{ home_url('/') }}">
                    <input type="search" placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}" value="{{ get_search_query() }}"
                        name="s">
                </form>
            </li>

            <li class="menu">
                <a class="fa-bars" href="#menu">Menu</a>
            </li>
        </ul>
    </nav>
</header>

<!-- Menu -->
<section id="menu">
    <!-- Search -->
    <section>
        <form class="search" method="get" action="{{ home_url('/') }}">
            <input type="search" placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}" value="{{ get_search_query() }}" name="s">
        </form>
    </section>

    @if (has_nav_menu('primary_navigation'))
        <!-- Links -->
        <section>
            {!! wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'links',
                'echo' => false,
                'link_before' => '<h3>',
                'link_after' => '</h3>',
            ]) !!}
        </section>
    @endif

    <!-- Actions -->
    <section>
        <ul class="actions stacked">
            <li><a href="#" class="button large fit">Log In</a></li>
        </ul>
    </section>
</section>
