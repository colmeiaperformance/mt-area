<?php get_header(); ?>


<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_artigos.jpg'; ?>');">
    <div class="<?php if (!is_front_page() && is_home()) {
                  echo 'bg-mt-green-op';
                } else {
                  echo 'bg-mt-default-op';
                } ?>">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php if (!is_front_page() && is_home()) {
            _e('Conhecimento', 'mt-area');
          } elseif (is_custom_post_type()) {
            post_type_archive_title();
          } else {
            the_title();
          } ?>
        </h1>
        <!-- <h3 class="fw-normal text-white-75 mb-3"></h3> -->
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row">
      <?php get_template_part('/template-parts/categories-list'); ?>
    </div>
    <div class="row items-push">

      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>

          <!-- Story -->
          <div class="col-lg-4">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <div class="w-100 img-blog">
                <img class="img-fluid object-fit-cover" src="<?php if (!empty(get_the_post_thumbnail_url())) {
                                              echo esc_url(get_the_post_thumbnail_url());
                                            } else {
                                              echo get_template_directory_uri() . '/assets/media/mt/bg-post.jpg';
                                            }
                                            ?>" alt="">
              </div>
              <div class="block-content">
                <h4 class="mb-1">
                  <?php the_title(); ?>
                </h4>
                <p class="fs-sm">
                  <span class="text-primary"><?php the_author(); ?></span> · <?php the_time('d/m/Y'); ?> · <em class="text-muted"><?php echo reading_time(); ?></em>
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


    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
      <?php
      wp_boostrap_5_pagination();
      ?>
    </div>
    <!-- END Pagination -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php get_footer(); ?>