<?php
get_header();
while (have_posts()) {
    the_post();
    // Display post content
}
get_footer();
