<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'siteDescription' => $this->siteDescription(),
            'navigation' => $this->navigation(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Returns the site tagline.
     *
     * @return string
     */
    public function siteDescription()
    {
        return get_bloginfo('description', 'display');
    }

    /**
     * Returns the site tagline.
     *
     * @return string
     */
    public function navigation()
    {
        // Prepare the arguments for paginate_links()
        $pagination_args = array(
            'type' => 'array',
        );

        // Get the pagination links
        $pagination_links = paginate_links($pagination_args);

        if ($pagination_links) {

            // Filter the array to only include the "Next Page" and "Previous Page" links
            $filtered_links = array_filter($pagination_links, function ($link) {
                return strpos($link, 'prev') !== false || strpos($link, 'next') !== false;
            });

            foreach ($filtered_links as $key => $link) {
                $filtered_links[$key] = str_replace('page-numbers', 'button large', $link);
            }

            // Output the filtered links
            return $filtered_links;
        } else {
            $filtered_links[] = get_previous_post_link('%link', '&laquo; %title');
            $filtered_links[] = get_next_post_link('%link', '%title &raquo;');

            foreach ($filtered_links as $key => $link) {
                $filtered_links[$key] = str_replace('<a href', '<a class="button large" href', $link);
            }

            return $filtered_links;
        }
    }
}
