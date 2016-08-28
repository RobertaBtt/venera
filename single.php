<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Venera
 * @since Venera 1.0
 */

get_header();

?>

<body>
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
                        <span class='info-item'>
                          by
                          <a href="#">Michael Mayers</a>
                        </span>
                        <span class='info-item'>Sept 16th, 2012</span>
                        <span class='info-item'>
                          <a href="#">3 Comments</a>
                        </span>
                      </p>
                      <div class='single-post-image bottom decor-image'>
                        <img alt="Image-placeholder-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/photos/image-placeholder-1.jpg" />
                      </div>
                      <div class='post-content'>
                          inizio while
                          <?php while ( have_posts() ) : the_post();

			 
			get_template_part( 'content', get_post_format() );
                        endwhile; ?>
                          fine while
                 
                      </div>
                    </div>
                    <div class='post-author-w'>
                      <h3 class='section-header'>About Author</h3>
                      <div class='row'>
                        <div class='span1'>
                          <div class='post-author-photo hidden-phone'>
                            <img alt="Avatar-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/test-user.png" />
                          </div>
                        </div>
                        <div class='span7'>
                          <div class='post-author-bio-w'>
                            <div class='post-author-name'>Mario Bolatelli</div>
                            <div class='post-author-bio'>Nulla semper tincidunt rutrum. Proin consectetur, nisi ac congue accumsan, lorem odio pretium quam, quis vestibulum nunc felis ut turpis. Nullam vulputate euismod urna non pharetra. Phasellus blandit mattis ipsum, ac laoreet lorem lacinia et.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class='post-comments-w'>
                      <h3 class='section-header'>
                        Comments (175)
                        <a href="#form-add-comment" class="roll-link roll-red"><span data-title='Add yours'>Add yours</span>
                        </a>
                      </h3>
                      <ul class='post-comments-list'>
                        <li>
                          <div class='row'>
                            <div class='span1'>
                              <div class='comment-author-photo hidden-phone'>
                                <img alt="Avatar-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/test-user.png" />
                              </div>
                            </div>
                            <div class='span7'>
                              <div class='comment-author'>
                                <a href="#" class="roll-link roll-red"><span data-title='Jonathan Mayers'>Jonathan Mayers</span>
                                </a>
                                says
                              </div>
                              <div class='comment-content'>Cras et ligula libero. Quisque quis magna vitae ipsum consequat varius in ut ante. Maecenas a mi nibh, eu euismod orci. Vivamus viverra lacus vitae tortor molestie malesuada. In nulla nibh, congue sed molestie nec, dapibus sed purus. Proin consectetur, nisi ac congue accumsan, lorem odio pretium quam, quis vestibulum nunc felis ut turpis. Nullam vulputate euismod urna non pharetra. Phasellus blandit mattis ipsum, ac laoreet lorem lacinia et.</div>
                              <div class='comment-date pull-left'>
                                Posted on Nov 16, 2012 | 10:16 AM EST
                              </div>
                              <a href="#form-add-comment" class="roll-link pull-right roll-red"><span data-title='Reply'>Reply</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class='row'>
                            <div class='span1'>
                              <div class='comment-author-photo hidden-phone'>
                                <img alt="Avatar-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/test-user.png" />
                              </div>
                            </div>
                            <div class='span7'>
                              <div class='comment-author'>
                                <a href="#" class="roll-link roll-red"><span data-title='Michael Monson'>Michael Monson</span>
                                </a>
                                says
                              </div>
                              <div class='comment-content'>Nullam vulputate euismod urna non pharetra. Phasellus blandit mattis ipsum, ac laoreet lorem lacinia et.</div>
                              <div class='comment-date pull-left'>
                                Posted on Nov 16, 2012 | 10:16 AM EST
                              </div>
                              <a href="#form-add-comment" class="roll-link pull-right roll-red"><span data-title='Reply'>Reply</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class='row'>
                            <div class='span1'>
                              <div class='comment-author-photo hidden-phone'>
                                <img alt="Avatar-1" src="../assets/images/test-user.png" />
                              </div>
                            </div>
                            <div class='span7'>
                              <div class='comment-author'>
                                <a href="#" class="roll-link roll-red"><span data-title='Mike Stiller'>Mike Stiller</span>
                                </a>
                                says
                              </div>
                              <div class='comment-content'>Sed euismod, metus sed congue rutrum, justo elit malesuada quam, id pulvinar velit massa et justo.</div>
                              <div class='comment-date pull-left'>
                                Posted on Nov 16, 2012 | 10:16 AM EST
                              </div>
                              <a href="#form-add-comment" class="roll-link pull-right roll-red"><span data-title='Reply'>Reply</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class='row'>
                            <div class='span1'>
                              <div class='comment-reply hidden-phone'>
                                <img alt="Icon-message-reply" src="../assets/images/icon-message-reply.png" />
                              </div>
                            </div>
                            <div class='span1'>
                              <div class='comment-author-photo hidden-phone'>
                                <img alt="Avatar-4" src="../assets/images/test-user.png" />
                              </div>
                            </div>
                            <div class='span6'>
                              <div class='comment-author'>
                                <a href="#" class="roll-link roll-red"><span data-title='Michael Monson'>Michael Monson</span>
                                </a>
                                says
                              </div>
                              <div class='comment-content'>Nullam vulputate euismod urna non pharetra. Phasellus blandit mattis ipsum, ac laoreet lorem lacinia et.</div>
                              <div class='comment-date pull-left'>
                                Posted on Nov 16, 2012 | 10:16 AM EST
                              </div>
                              <a href="#form-add-comment" class="roll-link pull-right roll-red"><span data-title='Reply'>Reply</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class='row'>
                            <div class='span1'>
                              <div class='comment-author-photo hidden-phone'>
                                <img alt="Avatar-3" src="../assets/images/test-user.png" />
                              </div>
                            </div>
                            <div class='span7'>
                              <div class='comment-author'>
                                <a href="#" class="roll-link roll-red"><span data-title='Gary Oldbridge'>Gary Oldbridge</span>
                                </a>
                                says
                              </div>
                              <div class='comment-content'>Integer velit mauris, commodo sit amet tempus ac, aliquet nec massa. Donec non lacus sed diam molestie venenatis sollicitudin sit amet metus. Proin consectetur, nisi ac congue accumsan, lorem odio pretium quam, quis vestibulum nunc felis ut turpis. Nullam vulputate euismod urna non pharetra. Phasellus blandit mattis ipsum, ac laoreet lorem lacinia et.</div>
                              <div class='comment-date pull-left'>
                                Posted on Nov 16, 2012 | 10:16 AM EST
                              </div>
                              <a href="#form-add-comment" class="roll-link pull-right roll-red"><span data-title='Reply'>Reply</span>
                              </a>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="white-card extra-padding">
                      <form class='form-transparent' id='form-add-comment'>
                        <fieldset>
                          <div class='row-fluid'>
                            <div class='span12'>
                              <legend>Add your comment</legend>
                            </div>
                            <div class='controls controls-row'>
                              <input class='search-input span6' placeholder='Your name' type='text'>
                              <input class='search-input span6' placeholder='Your email' type='text'>
                            </div>
                            <div class='controls controls-row'>
                              <textarea class='span12' placeholder='Your comment' rows='6'></textarea>
                            </div>
                            <div class='form-actions'>
                              <button class='btn btn-small'>Submit Comment</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>
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
                      <div class='blog-recent-tweets widget-tp'>
                        <h3>
                          <i class='icon-twitter-sign'></i>
                          Recent Tweets
                        </h3>
                        <ul>
                          <li>
                            <a href="#">about 7 hours ago</a>
                            Envato's Most Wanted – $2,000 Reward for the First 20 Sprite Sheets
                            <a href="#">enva.to/ZHkuNJ</a>
                          </li>
                          <li>
                            <a href="#">about 7 hours ago</a>
                            Envato's Most Wanted – $2,000 Reward for the First 20 Sprite Sheets
                            <a href="#">enva.to/ZHkuNJ</a>
                          </li>
                          <li>
                            <a href="#">about 7 hours ago</a>
                            Envato's Most Wanted – $2,000 Reward for the First 20 Sprite Sheets
                            <a href="#">enva.to/ZHkuNJ</a>
                          </li>
                        </ul>
                      </div>
                      <div class='blog-flickr-widget widget-tp'>
                        <h3>From Flickr</h3>
                        <ul class='thumbnails'>
                          <li class='span1'>
                            <a class='thumbnail'>
                              <img alt="Photo-card-1" src="../assets/images/test-square.png" />
                            </a>
                          </li>
                          <li class='span1'>
                            <a class='thumbnail'>
                              <img alt="Photo-card-3" src="../assets/images/test-square.png" />
                            </a>
                          </li>
                          <li class='span1'>
                            <a class='thumbnail'>
                              <img alt="Photo-card-1" src="../assets/images/test-square.png" />
                            </a>
                          </li>
                          <li class='span1'>
                            <a class='thumbnail'>
                              <img alt="Photo-card-3" src="../assets/images/test-square.png" />
                            </a>
                          </li>
                          <li class='span1'>
                            <a class='thumbnail'>
                              <img alt="Photo-card-3" src="../assets/images/test-square.png" />
                            </a>
                          </li>
                          <li class='span1'>
                            <a class='thumbnail'>
                              <img alt="Photo-card-1" src="../assets/images/test-square.png" />
                            </a>
                          </li>
                          <li class='span1'>
                            <a class='thumbnail'>
                              <img alt="Photo-card-3" src="../assets/images/test-square.png" />
                            </a>
                          </li>
                          <li class='span1'>
                            <a class='thumbnail'>
                              <img alt="Photo-card-1" src="../assets/images/test-square.png" />
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        
        <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>
            

            <?php get_footer(); ?>

          
<!--
get_header(); ?>-->

<!--	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
 