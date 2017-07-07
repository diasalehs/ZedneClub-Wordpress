<?php

function learningWordPress_resources() {
	if( is_page( 'home' ) ) {   
			wp_enqueue_style('style', get_stylesheet_uri());

	}
	if( is_page( 'more' ) ) {   
		wp_enqueue_style( 'Styles2', get_template_directory_uri() . '/Styles2.css',false,'4.8','all');

	}
	if( is_page( 'More Quotes' ) ) {   
		wp_enqueue_style( 'Styles2', get_template_directory_uri() . '/Styles2.css',false,'4.8','all');

	}
	
}
function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => True,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&raquo;'),
    'next_text'       => __('&laquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='pagination'>";
      
      echo $paginate_links;
    echo "</nav>";
  }

}
add_action('wp_enqueue_scripts', 'learningWordPress_resources');