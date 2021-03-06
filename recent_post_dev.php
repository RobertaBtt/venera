<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if (have_posts()) : ?> 
    <section class='section-wrapper stripped'>
        <div class='container'>
            <div class='row'>
                <div class='span12'>
                    <h3 class='section-header'>Dev, IT</h3>
                </div>

                <?php query_posts( array ( 'category_name' => 'dev', 'posts_per_page' => 4 ) );?>

                <?php while (have_posts()) : the_post(); ?>
                        <div class='span3'>                    
                            <div class='white-card recent-post clearfix'>                
                                <h5 class='recent-post-header'>
                                    <a href="<?php printf('%s', esc_url(get_permalink())) ?>"><?php the_title(); ?></a>
                                </h5>
                                <div class='post-info clearfix'>
                                    <div class='pull-left'>
                                        <span class='post-date'><?php echo get_the_date('F d, Y'); ?></span>
                                        <a href="<?php printf('%s', esc_url(get_permalink())) ?>" class="post-comments"></a>
                                    </div>
                                    <div class='pull-right'>
                                        
                                    </div>
                                </div>

                                <div class="post-image">
                                    <a href="<?php printf('%s', esc_url(get_permalink())) ?>" data-rel="lightbox[gallery]">
                                        <img alt="Photo-card"   src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">

                                    </a>
                                </div>


                                <p><?php the_excerpt();?>
                                    </p>
                                <a href="<?php printf('%s', esc_url(get_permalink())) ?>" class="btn btn-primary btn-extra pull-right">Read More &gt;</a>

                            </div>
                        </div>
                <?php endwhile; ?>
                <?php // Reset Query
                wp_reset_query(); ?>
            </div>



        </div>
    </div>
    </section>
<?php endif; ?>