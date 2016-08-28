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
    
    <?php get_template_part("head_menu");?>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
            <![endif]-->
           
            <section class='section-wrapper contact-page-w'>
              <div class='container'>
                <h3 class='section-header'><?php _e( 'Contact Page', 'venera' ); ?></h3>
                <div class='row'>
                  <div class='span4'>
                    <div class='blog-side-text-block widget-filled widget-yellow'>
                      <h3><?php _e( 'Feel Free', 'venera' ); ?></h3>
                       
                      <p><?php _e( 'to contact me contact for whatever you want', 'venera' ); ?></p>
                    </div>
                  </div>
                  <div class='span8'>
                    <div class="white-card extra-padding">
                    <form class='form-transparent no-margin-bottom' id='form-add-comment'>
                      <fieldset>
                        <div class='row-fluid'>
                          <div class='span12'>
                            <legend>
                                <?php _e( 'Complete the form to contact me', 'venera' ); ?></legend>
                            <div class='controls controls-row'>
                              <input class='search-input span6' 
                                     placeholder='<?php _e( 'Your name', 'venera' ); ?>' type='text'>
                              <input class='search-input span6' 
                                     placeholder='<?php _e( 'Your email', 'venera' ); ?>' type='text'>
                            </div>
                            <div class='controls controls-row'>
                              <textarea class='span12' 
                                        placeholder='<?php _e( 'Your message', 'venera' ); ?>' rows='6'></textarea>
                            </div>
                            <div class='form-actions'>
                              <button class='btn btn-small'><?php _e( 'Submit Message', 'venera' ); ?></button>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                    </div>
                  </div>
                </div>
                
              </div>
            </section>

            <?php get_footer(); ?>

</body>
