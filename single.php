<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <?php
          if (have_posts()) {
              while (have_posts()) {
                  the_post(); ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');">
    <div class="bg-white-75">
      <div class="content content-top content-full text-center">
        <h1 class="fw-bold mt-5 mb-3">
          <?php the_title(); ?>
        </h1>
        <h2 class="h3 fw-normal text-black-75 mb-5"></h2>
        <p>
          <span class="badge rounded-pill bg-primary fs-base px-3 py-2 me-2 m-1">
            <i class="fa fa-user-circle me-1"></i>
            <?php the_author(); ?>
          </span>
          <span class="badge rounded-pill bg-primary fs-base px-3 py-2 m-1">
            <i class="fa fa-clock me-1"></i>
            <?php echo reading_time(); ?>
          </span>
        </p>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row justify-content-center">
      <div class="col-sm-8 py-5">
        <!-- Story -->
        <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
        <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
        <article class="js-gallery story">
          <?php the_content(); ?>
        </article>
        <!-- END Story -->

        <!-- Tags -->
        <div class="mt-5 d-flex justify-content-between push">
          <div class="tags-list btn-group" role="group">
            <?php get_template_part('/template-parts/tags') ?>
          </div>
        </div>
        <!-- END Tags -->

      </div>
    </div>
  </div>
  <!-- END Page Content -->

  <?php } // end while
          } // end if
          wp_reset_postdata(); ?>
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>