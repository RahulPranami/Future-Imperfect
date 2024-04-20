<ul class="stats">
    {{-- <li><a href="#" class="icon solid fa-heart">28</a></li> --}}
    {{-- <li><a href="#" class="icon solid fa-comment">128</a></li> --}}

    @if ('post' === get_post_type())
        @if (get_the_category_list())
            <li>
                {!! get_the_category_list(', ') !!}
            </li>
        @endif

        @if (get_the_tag_list())
            <li>
                {!! get_the_tag_list('', ', ') !!}
            </li>
        @endif
    @endif

    @if (!is_single() && !post_password_required() && (comments_open() || get_comments_number()))
        <li>
            {!! comments_popup_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: post title */
                        __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'future-imperfect'),
                        [
                            'span' => [
                                'class' => [],
                            ],
                        ],
                    ),
                    wp_kses_post(get_the_title()),
                ),
            ) !!}
        </li>
    @endif

    {!! edit_post_link(
        sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __('Edit <span class="screen-reader-text">%s</span>', 'future-imperfect'),
                [
                    'span' => [
                        'class' => [],
                    ],
                ],
            ),
            wp_kses_post(get_the_title()),
        ),
        '<li class="edit-link">',
        '</li>',
    ) !!}
</ul>
