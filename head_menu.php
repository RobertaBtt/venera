<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
                        <li class='active'>
                          <a href="index.html">Home</a>
                        </li>                        
                   
                        <li class=''>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact' ) ) ); ?>">
                                <?php esc_html_e( 'Contact', 'textdomain' ); ?></a>
                            
                             
                        </li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
            </header>
