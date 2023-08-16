<?php
/*
Template Name: Tecnologias Maharishi
*/

include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/patterns/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_artigos.jpg'; ?>');">
    <div class="bg-mt-default-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php post_type_archive_title(); ?>
        </h1>

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
      $args = array(
        'post_type' => 'tecnologia-maharishi',
        'post_status' => 'publish',
        'posts_per_page'  => 3,
      );

      $news = new WP_Query($args);

      if (have_posts()) :
        while (have_posts()) : the_post(); ?>

          <!-- Story -->
          <div class="col-lg-4">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <div class="d-flex justify-content-center align-items-center badge py-5 rounded-0" style="background-color:<?php echo get_field('maharishi_cor_icone'); ?>">
                <i class="fa-solid <?php echo get_field('maharishi_icone'); ?> fa-5x"></i>
              </div>
              <div class="block-content">
                <h4 class="mb-1">
                  <?php the_title(); ?>
                </h4>
                <p class="fs-sm">
                  <?php the_excerpt(); ?>
                </p>
              </div>
            </a>
          </div>
          <!-- END Story -->


      <?php endwhile; // end while
      endif; // end if
      wp_reset_postdata();
      get_template_part('/patterns/pagination'); ?>


    </div>
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>