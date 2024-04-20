<!DOCTYPE html>
<html @php(language_attributes())>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @php(do_action('get_header'))
    @php(wp_head())
</head>

<body @php(body_class('is-preload'))>
    @php(wp_body_open())

    <!-- Wrapper -->
    <div id="wrapper">
        <a class="sr-only focus:not-sr-only" href="#main">
            {{ __('Skip to content') }}
        </a>

        @include('sections.header')

        <!-- Main -->
        <main id="main" class="main">
            @yield('content')
        </main>

        @hasSection('sidebar')
            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar">
                @yield('sidebar')
            </aside>
        @endif

        @if (is_single() || is_page())
            @include('sections.footer')
        @endif
    </div>

    <!-- Scripts -->
    @php(do_action('get_footer'))
    @php(wp_footer())
</body>

</html>
