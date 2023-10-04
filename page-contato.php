<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( '/template-parts/quick-menu' ) ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_cursos.jpg'; ?>');">
    <div class="bg-mt-default-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php the_title(); ?>
        </h1>
        <!-- <h3 class="fw-normal text-white-75 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
          autem veritatis
        </h3> -->
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">

    <!-- Form -->
    <div class="row">
      <div class="col">
        <?php get_template_part( '/template-parts/contact-form' ) ?>
      </div>
    </div>
    <!-- END Form -->

    <!-- Call to Action -->
    <?php get_template_part( '/template-parts/cta-associado' ) ?>
    <!-- END Call to Action -->

    <!-- Frequently Asked Questions -->
    <?php get_template_part( '/template-parts/faq' ) ?>
    <!-- END Frequently Asked Questions -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>