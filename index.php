<?php get_header(); ?>

  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        
        if ( is_home() ):
            do_action( 'front_loop' );
        else:
            do_action( 'site_content' );
        endif;
        
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif; ?>
  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
