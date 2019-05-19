<?php

add_action( 'muplugins_loaded', function(){
    global $current_blog, $current_site;
    if ( false === stripos( $current_blog->domain, $current_site->cookie_domain ) ) {
        $current_site->cookie_domain = $current_blog->domain;
    }
});
