<?php get_header(); ?>

    <div id="main" class="container">
      <div class="row">
        <div id="search" class="span9">
          <h2 class="underlined">Search</h2>
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="post">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="entry">
                <?php 
                  the_post_thumbnail();
                  the_excerpt();
//                  the_content();
                ?>
                <p class="postmetadata">
                  <?php _e('Filed under&#58;'); ?>
                  <?php the_category(' | '); ?>
                  <?php _e('by'); ?>
                  <?php the_author(); ?><br />
                  <?php 
                    comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;');
                    edit_post_link('Edit Post', ' &#124; ', '');
                  ?>
                </p>
              </div>
            </div>
          <?php endwhile; ?>
          <?php include_once('navigation_links.inc.php') ?>
          <?php else: ?>
            <div id="post-0" class="post no-results not-found">
              <h3><?php _e( 'Nothing Found', 'your-theme' ) ?></h3>
              <div class="entry">
                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'your-theme' ); ?></p>
              <?php get_search_form(); ?>
              </div><!-- .entry-content -->
            </div>
          <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div> <!-- /container -->

<?php get_footer(); // include the footer ?>



