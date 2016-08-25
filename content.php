<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Venera
 * @since Venera 1.0
 */
?>
<p>
 

    <?php
    /* translators: %s: Name of current post */
    the_content(sprintf(
                    __('Continue reading %s', 'venera'), 
            the_title('<span class="screen-reader-text">', '</span>', false)
    ));
    ?>
 

</p>
