<?php
wp_redirect( get_permalink( get_option( 'page_for_posts' ) ), '301' );
exit;
//include(get_query_template('index'));