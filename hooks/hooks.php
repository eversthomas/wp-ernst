<?php
function blog_list() { ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
    </article>
<?php }
add_action( 'front_loop', 'blog_list', 1 );

function full_content() { ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>
<?php }
add_action( 'site_content', 'full_content', 1 );
