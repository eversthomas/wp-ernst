<?php get_header(); ?>

  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        
        if ( is_home() ):
            do_action( 'front_loop' );
        else:
            do_action( 'site_content' );
            
            if ( is_single() ):
                next_post_link();
                previous_post_link();
            else:
            endif;
            
        endif;
        
        // If comments are open or we have at least one comment, load up the comment template.
         if ( comments_open() || get_comments_number() ) :
             comments_template();
         endif;
        
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif; ?>
    
    <?php posts_nav_link(); ?>
  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
