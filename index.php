<?php get_header(); ?>

  <main>
    <article>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
      endwhile;
      else :
          _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
      endif; ?>
    </article>
  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
