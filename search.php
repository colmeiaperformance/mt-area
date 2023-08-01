<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/patterns/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_artigos.jpg'; ?>');">
    <div class="bg-mt-default-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php _e('Busca por:', 'mt-area') ?>
        </h1>
        <h3 class="fw-normal text-white-75 mb-3"><?php the_search_query(); ?>
        </h3>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row">
      <?php get_template_part('/patterns/categories-list'); ?>
    </div>

    <div class="row items-push">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>

          <!-- Story -->
          <div class="col-lg-4">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <img class="img-fluid" src="<?php if (!empty(get_the_post_thumbnail_url())) {
                                            esc_url(the_post_thumbnail_url());
                                          } else {
                                            echo get_template_directory_uri() . '/assets/media/mt/bg-post.jpg';
                                          }
                                          ?>" alt="">
              <div class="block-content">
                <h4 class="mb-1">
                  <?php the_title(); ?>
                </h4>
                <?php if ('post' == get_post_type()) : ?>
                  <p class="fs-sm">
                    <span class="text-primary"><?php the_author(); ?></span> · <?php the_time('d/m/Y'); ?> · <em class="text-muted"><?php echo reading_time(); ?></em>
                  </p>
                  <p>
                    <?php the_excerpt(); ?>
                  </p>
                <?php endif; ?>
              </div>
            </a>
          </div>
          <!-- END Story -->


      <?php } // end while
      } // end if
      wp_reset_postdata(); ?>


    </div>

    <!-- Pagination -->
    <?php wp_boostrap_4_pagination(); ?>
    <!-- END Pagination -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>