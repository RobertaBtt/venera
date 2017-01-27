<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage Venera
 * @since Venera 1.0
 */

get_header(); ?>

<body>

    <?php get_template_part("head_menu");

    get_template_part("title_carousel");

    //get_template_part("sub_slider");

    //get_template_part("last_posts");

    get_template_part("from_blog");


    get_template_part("recent_post");

    get_template_part("footer");

    ?>

</body>
</html>
