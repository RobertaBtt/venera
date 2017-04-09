<?php
/*
Single Post Template: [Roberta Template]
Description: This part is optional, but helpful for describing the Post Template
*/
?>
<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Venera
 * @since Venera 1.0
 */

get_header(); ?>


<body>

    <?php get_template_part("head_menu"); ?>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
            <![endif]-->
           
            <section class='section-wrapper post-w'>
              <div class='container'>
                <div class='row'>
                  <div class='span8'>
                    <div class='single-post-w'>
                      <h1 class='post-title'><?php the_title(); ?></h1>
                      <p class='post-info'>
                        
<!--                        <span class='info-item'>
                          by
                          <a href="#">Michael Mayers</a>
                        </span>-->
                        <span class='info-item'><?php echo get_the_date( 'Y-m-d' ); ?></span>
<!--                        <span class='info-item'>
                          <a href="#">3 Comments</a>
                        </span>-->
                      </p>
                      <div class='single-post-image bottom decor-image'>
                        <img alt="Image-placeholder-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/image-placeholder-1.jpg" />
                      </div>
                      <div class='post-content'>
                           
                          <?php while ( have_posts() ) : the_post();

			 
			get_template_part( 'content', get_post_format() );
                        
                        the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

                        endwhile; ?>
                          
                 
                      </div>
                    </div>
                    
                    
                  </div>
                  
                </div>
              </div>
            </section>
        
        
            <?php get_footer(); ?>

</body>     
<!--
get_header(); ?>-->

<!--	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
 