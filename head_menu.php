<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage Venera
 * @since Venera 1.0
 */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pagename = get_query_var('pagename');  
    if ( !$pagename && $id > 0 ) {  
        // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
        $post = $wp_query->get_queried_object();  
        $pagename = $post->post_name;  
    }
?>     
            <header id='header'>
              <div class='navbar navbar-fixed-top'>
                <div class='navbar-inner'>
                  <div class='container'>
                    <a class='btn btn-navbar' data-target='.nav-collapse' data-toggle='collapse'>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                    </a>
                    <a href="index.html" class="brand"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
                    <div class='nav-collapse subnav-collapse collapse pull-right' id='top-navigation'>
                        
                      <ul class='nav'>
                          
                        <li  class='<?php if ($pagename == '' ) echo 'active' ?>'>
                          <a href="<?php bloginfo('url'); ?>">Home</a>
                        </li>                        
                   
                        <li class='<?php if ($pagename == 'contact' ) echo 'active' ?>'>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact Me' ) ) ); ?>">
                                <?php esc_html_e( 'Contact', 'textdomain' ); ?></a>
                             
                        </li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
            </header>
