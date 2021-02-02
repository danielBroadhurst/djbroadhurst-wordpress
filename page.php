<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['posts'] = Timber::get_posts();
$query = array(
    'post_type' => 'post',
    'category_name' => 'edits',
);
$context['edits'] = Timber::get_posts( $query );
$query = array(
    'post_type' => 'post',
    'category_name' => 'production',
);
$context['production'] = Timber::get_posts( $query );
$query = array(
    'post_type' => 'post',
    'category_name' => 'deep_house',
);
$context['deep_house'] = Timber::get_posts( $query );
$query = array(
    'post_type' => 'post',
    'category_name' => 'originals',
);
$context['originals'] = Timber::get_posts( $query );
$query = array(
    'post_type' => 'post',
    'category_name' => 'remixes',
);
$context['remixes'] = Timber::get_posts( $query );
$query = array(
    'post_type' => 'post',
    'category_name' => 'dj_mixes',
);
$context['dj_mixes'] = Timber::get_posts( $query );
$query = array(
    'post_type' => 'post',
    'category_name' => 'live_recordings',
);
$context['live_recordings'] = Timber::get_posts( $query );


$args = array(
    // Get post type project
    'post_type' => 'post',
    // Get 3 posts
    'posts_per_page' => 3,
    // Order random
    'orderby' => 'rand',
);
$context['related_posts'] = Timber::get_posts( $args );

$args = array(
    // Get post type project
    'post_type' => 'post',
    // Get 3 posts
    'posts_per_page' => 8,
    // Order random
    'orderby' => 'rand',
);
$context['related_posts_home'] = Timber::get_posts( $args );


$context['sidebar'] = Timber::get_sidebar('sidebar.php');
Timber::render( array( 'page-' . $post->post_name . '.twig', 'page.twig' ), $context );
