<?php /**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Venera
 * @since Venera 1.0
 */
 ?>

<?php if ( have_posts() ) : ?> 
    <section class='section-wrapper stripped'>
        <div class='container'>
            <div class='row'>
                <div class='span12'>
                    <h3 class='section-header'>Web Log</h3>
                  </div>
            <?php 
            // Start the loop.
            while ( have_posts() ) : the_post(); ?>
                <div class='span4'>
                  <div class='white-card recent-post clearfix'>
                    <h5 class='recent-post-header'>                        
                      <a href="<?php printf( '%s',esc_url( get_permalink() )) ?>"><?php the_title(); ?></a>
                    </h5>
                    <div class='post-info clearfix'>
                      <div class='pull-left'>
                        <span class='post-date'>January 15, 2011</span>
                        <a href="<?php printf( '%s',esc_url( get_permalink() )) ?>" class="post-comments">14 Comments</a>
                      </div>
                      <div class='pull-right'>
                        <a href="#" class="post-like"><i class='icon-heart'></i>
                          250
                        </a>
                      </div>
                    </div>
                    <img alt="Photo-card-big-1" class="post-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/test-square.png" />
                    <p class='post-content separated'>Donec vel turpis non erat luctus ultrices vel sed massa. Quisque commodo venenatis arcu, non volutpat arcu lobortis at. Donec imperdiet nibh id metus adipiscing semper.</p>
                    <a href="<?php printf( '%s',esc_url( get_permalink() )) ?>" class="btn btn-primary btn-extra pull-right">Read More &gt;</a>
                  </div>
                </div>

        <?php endwhile; ?>
        
<!--            <div class='span4'>
              <div class='white-card recent-post clearfix'>
                <h5 class='recent-post-header'>
                  <a href="blog/single_post.html">Nullam velit diam, rhoncus sed</a>
                </h5>
                <div class='post-info clearfix'>
                  <div class='pull-left'>
                    <span class='post-date'>January 15, 2011</span>
                    <a href="blog/single_post.html" class="post-comments">14 Comments</a>
                  </div>
                  <div class='pull-right'>
                    <a href="#" class="post-like"><i class='icon-heart'></i>
                      250
                    </a>
                  </div>
                </div>
                <img alt="Photo-card-big-6" class="post-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/test-square.png" />
                <p class='post-content separated'>Donec vel turpis non erat luctus ultrices vel sed massa. Quisque commodo venenatis arcu, non volutpat arcu lobortis at. Donec imperdiet nibh id metus adipiscing semper.</p>
                <a href="blog/single_post.html" class="btn btn-primary btn-extra pull-right post-btn">Read More &gt;</a>
              </div>
            </div>-->
        </div>
    </div>
</section>
<?php endif; ?>