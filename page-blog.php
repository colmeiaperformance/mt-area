<?php get_header(); ?>


<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( '/patterns/quick-menu' ) ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_artigos.jpg'; ?>');">
    <div class="bg-mt-green-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php _e( 'Knowledge', 'mt-area' ); ?>
        </h1>
        <!-- <h3 class="fw-normal text-white-75 mb-3"></h3> -->
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row">
      <?php get_template_part( '/patterns/categories-list' ); ?>
    </div>
    <div class="row items-push">

      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <!-- Story -->
      <div class="col-lg-4">
        <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>"
          title="<?php the_title_attribute(); ?>">
          <img class="img-fluid"
            src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'post-thumbnail' ) ); ?>" alt="">
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


      <?php endwhile; // end while

        wp_reset_postdata(); 
        endif; // end if
        wp_boostrap_5_pagination();
          ?>


    </div>

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php get_footer(); ?>