<?php 
/**
 * Title: Article
 * Slug: mt-area/article
 * Categories: query
 * Keywords: article
 * Block Types: core/template-part/article
 */

          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); ?>

<!-- Story -->
<div class="col-lg-4">
  <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>"
    title="<?php the_title_attribute(); ?>">
    <img class="img-fluid" src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ) ); ?>"
      alt="">
    <div class="block-content">
      <h4 class="mb-1">
        <?php the_title(); ?>
      </h4>
      <p class="fs-sm">
        <span class="text-primary"><?php the_author(); ?></span> · <?php the_time('d/m/Y'); ?> · <em
          class="text-muted"><?php echo reading_time(); ?></em>
      </p>
      <p>
        <?php the_excerpt(); ?>
      </p>
    </div>
  </a>
</div>
<!-- END Story -->


<?php } // end while
          } // end if
          wp_reset_postdata(); ?>