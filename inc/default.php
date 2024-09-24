pp<?php

// Theme Title
add_theme_support('title-tag');

//Thumbnail Image Area
add_theme_support( 'post-thumbnails',array('page','post'));
add_image_size( 'post-thumbnails',970,720,true);


//Excerpt to 40 words
function ali_excerpt_more($more){
    global $post;
return '<br> <br> <a class="readmore" href="'.get_permalink($post->ID) . '">' .'Read More' . '</a>';
}
add_filter('excerpt_more','ali_excerpt_more');
//
function ali_excerpt_length($length){
    return 30;
}
add_filter('excerpt_length','ali_excerpt_length',999);


//Pagenav Function

function ali_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;  // Corrected the typo
    if (!$current = get_query_var('paged')) $current = 1;
    
    // Arguments for pagination
    $args = array(
        'base'      => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
        'total'     => $max,
        'current'   => $current,
        'prev_text' => 'Prev',
        'next_text' => 'Next',
    );

    // Check if there's more than one page
    if ($max > 1) {
        echo '<div class="wp_pagenav">';
        
        // Show "Page x of y" if needed
        $pages = '<p class="pages">Page ' . $current . '<span> of </span>' . $max . '</p>';
        echo $pages;
        
        // Output the pagination links
        echo paginate_links($args);
        
        echo '</div>';
    }
}