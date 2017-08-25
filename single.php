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
                        <span class='info-item'>
                            Tags:  
                            <?php 
                                $all_the_tags = get_the_tags();
                                if ($all_the_tags) :
                                    foreach($all_the_tags as $this_tag) { ?> 
                            
                                        <a href='<?php echo get_tag_link($this_tag->term_id); ?>' class='post-tag'>
                                        <span class='label label-info'><?php echo $this_tag->name; ?></span>
                                      </a>
                                    <?php }endif; 
                                    
                                    ?>
                          
                          
                        </span>
<!--                        <span class='info-item'>
                          by
                          <a href="#">Michael Mayers</a>
                        </span>-->
                        <span class='info-item'><?php echo get_the_date( 'F d, Y' ); ?></span>
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
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'venera' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'venera' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'venera' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'venera' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

                        endwhile; ?>
                          
                 
                      </div>
                    </div>
                    
                    
                  </div>
                  <div class='span4'>
                    <div class='blog-side-bar'>
                      <div class='blog-side-search widget-tp'>
                        <h3>
                          <i class='icon-search'></i>
                          Search in blog
                        </h3>
                        <form class='no-margin-bottom form-search'>
                          <fieldset>
                            <div class='controls controls-row'>
                              <input class='search-input span4' placeholder='Input search query' type='text'>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                      <div class='blog-categories widget-tp'>
                           <?php the_category( $separator, $parents, $post_id ); ?> 


                        <h3>
                          <i class='icon-th-list'></i>
                          Post Categories
                        </h3>
                        <ul>
                          <li>
                            <a href="#">Quisque quis magna vitae</a>
                          </li>
                          <li>
                            <a href="#">Fusce pharetra nisl vitae nisl</a>
                          </li>
                          <li>
                            <a href="#">Sed euismod, metus sed congue</a>
                          </li>
                          <li>
                            <a href="#">Ut diam arcu, dictum ut vulputate</a>
                          </li>
                          <li>
                            <a href="#">Etiam molestie nibh vitae turpis</a>
                          </li>
                        </ul>
                      </div>
                      <div class='blog-side-text-block widget-filled widget-yellow'>
                        <h3>Just some text block</h3>
                        <p>Ut diam arcu, dictum ut vulputate sed, iaculis nec lorem. Fusce pharetra nisl vitae nisl ultricies ut malesuada leo fringilla.</p>
                        <p>Sed euismod, metus sed congue rutrum, justo elit malesuada quam, id pulvinar velit massa et justo. Etiam molestie nibh vitae turpis euismod ornare. Etiam dapibus ullamcorper tellus, nec suscipit eros imperdiet id.</p>
                      </div>
                      <div class='blog-side-tags widget-tp'>
                        <h3>
                          <i class='icon-tags'></i>
                          Popular Tags
                        </h3>
                          
                          <?php $tags = get_tags();
$html = '<div class="post_tags">';
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
			
	$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
	$html .= "{$tag->name}</a>";
}
$html .= '</div>';
echo $html; ?>
                        <ul>
                          <li>
                            <a href="#" class="side-tag">CSS</a>
                          </li>
                          <li>
                            <a href="#" class="side-tag">JS</a>
                          </li>
                          <li>
                            <a href="#" class="side-tag">Tablets</a>
                          </li>
                          <li>
                            <a href="#" class="side-tag">Monitors</a>
                          </li>
                          <li>
                            <a href="#" class="side-tag">Keyboards</a>
                          </li>
                          <li>
                            <a href="#" class="side-tag">Apple</a>
                          </li>
                          <li>
                            <a href="#" class="side-tag">Microsoft</a>
                          </li>
                          <li>
                            <a href="#" class="side-tag">Samsung</a>
                          </li>
                          <li>
                            <a href="#" class="side-tag">Bootstrap</a>
                          </li>
                        </ul>
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

		
 