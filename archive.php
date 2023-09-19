<?php get_header(); ?>


<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_artigos.jpg'; ?>');">
    <div class="<?php if (!is_front_page() && is_home()) {
        echo 'bg-mt-green-op';
    } elseif (get_post_type() == 'livro') {
        echo 'bg-mt-orange-op';
    } elseif (get_post_type() == 'curso') {
        echo 'bg-mt-blue-op';
    } else {
        echo 'bg-mt-default-op';
    } ?>">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php if (!is_front_page() && is_home()) {
              _e('Conhecimento', 'mt-area');
          } elseif (is_custom_post_type()) {
              echo get_the_archive_title();
          } elseif (is_category()) {
              echo _e('Categoria: ', 'mt-area') . the_category(', ');
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
      if (is_single()) {
          get_template_part('/template-parts/article');
      } elseif (get_post_type() == 'livro') {
          get_template_part('/template-parts/article-livro');
      } elseif (get_post_type() == 'curso') {
          get_template_part('/template-parts/article-curso');
      } elseif (is_archive()) {
          get_template_part('/template-parts/article');
      } ?>

    </div>

    <!-- Pagination -->
    <?php get_template_part('/template-parts/pagination'); ?>
    <!-- END Pagination -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php get_footer(); ?>