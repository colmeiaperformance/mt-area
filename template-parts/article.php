<?php

if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

<!-- Story -->
<div class="col-lg-4">
  <a class="block block-rounded block-link-pop h-100 mb-0"
    href="<?php the_permalink(); ?>"
    title="<?php the_title_attribute(); ?>">
    <div class="w-100 img-blog">
      <img class="img-fluid object-fit-cover" src="<?php if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail'))) {
          esc_url(the_post_thumbnail_url(get_the_ID(), 'post-thumbnail'));
      } else {
          echo get_template_directory_uri() . '/assets/media/mt/bg-post.jpg';
      }
        ?>" alt="">
    </div>
    <div class="block-content">
      <h4 class="mb-1">
        <?php the_title(); ?>
      </h4>

      <?php if (!is_custom_post_type()) : ?>
      <p class="fs-sm">
        <span class="text-primary"><?php the_author(); ?></span> ·
        <?php the_time('d/m/Y'); ?> · <em
          class="text-muted"><?php echo reading_time(); ?></em>
      </p>
      <?php endif;?>
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