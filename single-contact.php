<?php
/*
  Single Post Template: [Contact Template]
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
get_header();
?>


<body>

    <?php get_template_part("head_menu"); ?>

    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

    <section class='section-wrapper post-w'>
        <div class='container'>
            <div class='row'>
                <div class='span4'>
                    <div class='blog-side-text-block widget-filled widget-yellow'>
                        <h3><?php _e('Feel Free', 'venera'); ?></h3>

                        <p><?php _e('to contact me contact for whatever you want', 'venera'); ?></p>
                    </div>
                </div>

                <div class='span8'>
                    <div class='single-post-w'>
                        <h1 class='post-title'><?php the_title(); ?></h1>

                        <div class='post-content'>

                            <?php
                            while (have_posts()) : the_post();

                                get_template_part('content', get_post_format());


                            endwhile;
                            ?>


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

                
 