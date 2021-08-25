<?php get_header(); ?>

  <main>
    <?php
        $s=get_search_query();
        $args = array(
                        's' =>$s
                    );
            // The Query
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
                _e("<h2>Search Results for: ".get_query_var('s')."</h2>");
                while ( $the_query->have_posts() ) {
                   $the_query->the_post();
                         ?>
                            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                         <?php
                }
            }else{
        ?>
                <h2>Nothing Found</h2>
                <div>
                  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                </div>
        <?php } ?>
  </main>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
