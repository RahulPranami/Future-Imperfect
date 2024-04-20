<!-- Intro -->
<section id="intro">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" rel="home">
        @if (has_custom_logo())
            <img src="<?php echo wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full'); ?>" alt="logo" />
        @else
            <img src="@asset('images/logo.jpg')" alt="logo" />
        @endif
    </a>

    <header>
        <h2>{{ $siteName }}</h2>

        @if ($siteDescription)
            <p>{{ $siteDescription }}</p>
        @endif
    </header>
</section>

@php(dynamic_sidebar('sidebar-primary'))

<!-- About -->
{{-- <section class="blurb">
    <h2>About</h2>
    <p>
        Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl.
        Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor
        magna enim, ac accumsan tortor cursus at phasellus sed ultricies.
    </p>
    <ul class="actions">
        <li><a href="#" class="button">Learn More</a></li>
    </ul>
</section> --}}

<!-- Footer -->
<section id="footer">
    @php(dynamic_sidebar('socials'))

    @php(dynamic_sidebar('sidebar-footer'))
</section>
