<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class='carousel slide over-something' id='homepage-carousel'>
    <div class='carousel-inner slider-w'>
        <div class='active item'>
            <div class='container'>
                <h1 class='slider-header'><strong><?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?></strong></h1>
               
                <div class='slider-browsers-w clearfix'>
                    <div class='slider-browser slider-browser-left hidden-phone' data-position-bottom='-8%'>
                        <a href="features/pricing_tables.html">
                            <img alt="Browser-window-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/LogoAvaaz.png" />
                            
                        </a>
                        
                    </div>
                    <div class='slider-browser slider-browser-center' data-position-bottom='-9%'>
                        
                        <img alt="Browser-window-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/logo-greenpeace.png" />
                    </div>
                    <div class='slider-browser slider-browser-right hidden-phone' data-position-bottom='-8%'>
                        <img alt="Browser-window-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/logo-ciwf.png" />
                    </div>
                </div>
            </div>
        </div>

    </div>
   
</div>
