<?php
include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_cursos.jpg'; ?>');">
    <div class="bg-mt-blue-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php _e('Cursos', 'mt-area') ?>
        </h1>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row">
      <?php get_template_part('/template-parts/categories-list'); ?>
    </div>
    <div class="row items-push gap">

      
      <?php get_template_part('/template-parts/article-curso'); ?>
      <?php get_template_part('/template-parts/pagination'); ?>


    </div>

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>