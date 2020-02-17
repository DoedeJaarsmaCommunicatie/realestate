<?php
/**
 * Created by PhpStorm.
 * User: Mitch
 * Date: 15-11-2018
 * Time: 20:23
 */

use Timber\Post;
use Timber\Timber;
use App\Helpers\Template;
use App\Controllers\Http\Vacatures\VacatureController;

$context              = Timber::get_context();
$context['post']      = new Post();
$context['vacatures'] =
    (new VacatureController())
        ->setArgs(
            [
                'post_type'     => 'vacature',
                'posts_per_page' => -1,
                'orderby'       => 'rand',
                'order'         => 'ASC',
                'tax_query'     => [
                    [
                        'relation'      => 'AND',
                        'taxonomy' => 'branche',
                        'field'    => 'term_id',
                        'terms'    => wp_get_post_terms($context['post']->ID, 'branche', ['fields' => 'ids']),
                        ]
                    ],
                'meta_query' => [
                    'relation'      => 'OR',
                    [
                        'key' => 'position_filled',
                        'compare' => '!=',
                        'value' => '1',
                        'type'  => 'NUMERIC'
                    ],
                    [
                        'key' => 'position_filled',
                        'compare' => 'NOT EXISTS',
                    ]
                ]
            ]
        )
        ->fetchData();



Timber::render(Template::viewTwigFile('single-vacature'), $context);
