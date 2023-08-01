<?php

/**
 * Template Name: Cursos
 */

include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/patterns/quick-menu') ?>

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
      <?php get_template_part('/patterns/categories-list'); ?>
    </div>
    <div class="row items-push gap">

      <?php
      $args = array(
        'post_type' => 'curso',
        'posts_per_page' => 3,
        // 'order' => 'ASC'
      );
      $cursos_query = new WP_Query($args);

      if (have_posts()) :
        while (have_posts()) : the_post(); ?>

          <!-- Course -->
          <div class="col-xxl-6">
            <a class="block block-rounded border-start border-primary border-3 block-link-shadow" href="<?php the_permalink(); ?>">
              <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                <div class="d-md-flex flex-grow-1">
                  <div style="background-image: url('<?php if (get_the_post_thumbnail()) : the_post_thumbnail_url(); ?>
                 <?php endif; ?>');" class="col-md-4 pb-8 text-end bg-image">
                    <span class="badge bg-gd-sea-op fw-bold p-2 text-uppercase mt-2 me-2">
                      <?php
                      $curso_modalidade = get_field('curso_modalidade');
                      switch ($curso_modalidade) {
                        case 'online':
                          $curso_tipo_reproducao = get_field('curso_reproducao')['curso_tipo_reproducao'];
                          if ($curso_tipo_reproducao == 'ao_vivo')
                            $modalidade = 'Ao Vivo';
                          else
                            $modalidade = 'Online';

                          break;
                        case 'presencial':
                          $modalidade = 'Presencial';
                          break;
                        default:
                          $modalidade = 'Curso';
                          break;
                      }
                      echo $modalidade;

                      ?>
                    </span>
                  </div>
                  <div class="block-content">
                    <p class="fw-semibold text-dark">
                      <?php the_title(); ?>
                    </p>
                    <p class="fs-3 text-success mb-1">
                      <?php _e('R$ ', 'mt-area') ?> <?php echo get_field('curso_valor'); ?>
                    </p>
                  </div>

                </div>
              </div>
              <div class="block-content block-content-full block-content-sm bg-body-light d-block d-md-flex justify-content-evenly">
                <span class="fs-sm text-muted">
                  <?php $instrutores = get_field('curso_instrutor');
                  $numero_de_instrutores = count($instrutores);
                  if ($numero_de_instrutores == 1) {
                    _e('Instrutor: ', 'mt-area');
                  } elseif ($numero_de_instrutores > 1) {
                    _e('Instrutores: ', 'mt-area');
                  }; ?>
                  <strong>
                    <?php
                    $i = 0;
                    foreach ($instrutores as $instrutor) {

                      echo $instrutor['user_firstname'] . ' ' .  $instrutor['user_lastname'];
                      if ($numero_de_instrutores > 1 && $numero_de_instrutores = $numero_de_instrutores - 1) {
                        echo ', ';
                      }
                    }
                    ?>
                  </strong><br>
                </span>
                <span class="fs-sm text-muted"><?php _e('Data: ', 'mt-area'); ?> <strong>
                    <?php echo get_field('curso_data_inicio');
                    if (get_field('curso_data_fim')) {
                      echo " - " . get_field('curso_data_fim');
                    }
                    ?></strong><br></span>
                <span class="fs-sm text-muted"><?php _e('Local: ', 'mt-area') ?>
                  <strong><?= get_field('curso_local'); ?></strong></span>
              </div>
            </a>
          </div>
          <!-- END Course -->

      <?php endwhile;

      endif;
      wp_reset_postdata(); ?>

      <div class="d-flex justify-content-center">

        <?php
        wp_boostrap_5_pagination();
        ?>
      </div>

    </div>

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>