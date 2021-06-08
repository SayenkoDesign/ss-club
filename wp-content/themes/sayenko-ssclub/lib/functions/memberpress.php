<?php
function mepr_login_redirect_url( $url ) {
	$location = $_SERVER['HTTP_REFERER'];
	if( ! empty( $location ) ) {
		$url = wp_safe_redirect($location);
	}
    
  }
  // add_filter('mepr-login-redirect-url', 'mepr_login_redirect_url');

  // /register/general