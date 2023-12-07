<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>


  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
    <div class="bg-white-75">
      <div class="content content-top content-full text-center pb-5">
        <h1 class="fw-bold my-5">
          <?= the_title(); ?>
        </h1>
        <p class="my-5 pb-1">
          <form method="post" action="<?php echo esc_url(home_url('/cart')); ?>">
              <button class="btn btn-hero btn-success" data-toggle="click-ripple">
                <i class="fa fa-shopping-cart opacity-50 me-1"></i> <?php _e('Adquira Agora', 'mt-area'); ?>
              </button>
          </form>
        </p>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <!-- Meta -->
    <div class="row items-push">
      <div class="col-md-4">
        <div class="block block-rounded block-bordered block-link-shadow h-100 mb-0">
          <div class="block-content block-content-full text-center bg-body-light">
            <span class="fw-semibold">
              <?php $instrutores = get_field('curso_instrutor');
              $numero_de_instrutores = count($instrutores);
              if ($numero_de_instrutores == 1) {
                _e('Instrutor: ', 'mt-area');
              } elseif ($numero_de_instrutores > 1) {
                _e('Instrutores: ', 'mt-area');
              }; ?>
            </span>

            <?php
            foreach ($instrutores as $instrutor) { ?>

              <div class="d-flex mt-2">
                <p class="mb-0">
                  <img class="img-avatar img-avatar-thumb" src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar16.jpg'; ?>" alt="">
                  <span class="fw-normal text-muted mb-0">
                    <?php echo $instrutor['user_firstname'] . ' ' . $instrutor['user_lastname']; ?>
                  </span>
                </p>
              </div>

            <?php } ?>

          </div>
          <div class="block-content block-content-full text-center">
            <div class="row g-sm">
              <div class="col-6">
                <div class="item item-circle mx-auto">
                  <i class="fa fa-2x fa-fw fa-calendar me-1"></i>
                </div>
                <p class="text-muted mb-0">
                  <?php echo get_field('curso_data_inicio');
                  if (get_field('curso_data_fim')) {
                    echo " - " . get_field('curso_data_fim');
                  }
                  ?>
                </p>
              </div>
              <div class="col-6">
                <div class="item item-circle mx-auto">
                  <?php
                  $modalidade = get_field('curso_modalidade'); ?>
                  <i class="fa fa-fw fa-<?php if ($modalidade == 'presencial') {
                                          echo 'location-dot';
                                        } else {
                                          echo 'globe';
                                        } ?> fa-2x text-dark"></i>
                </div>
                <p class="text-muted mb-0">
                  <?php

                  if ($modalidade == 'online') {
                    echo 'Online';
                  } else {
                    echo get_field('curso_local');
                  }
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="block block-rounded block-bordered block-link-shadow h-100 mb-0">
          <div class="block-content h-100 pb-4">
            <table class="table table-borderless table-striped h-100 align-middle">
              <tbody>
                <tr>
                  <td>
                    <span class="fs-lg fw-bold">
                      <?php echo get_field('curso_resumo'); ?>
                    </span>

                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="fw-medium d-block d-md-flex justify-content-between align-items-center">
                      <span class="fs-1 fw-bold text-success"><?php _e('R$ ', 'mt-area') ?>
                        <?php echo get_field('curso_valor'); ?></span>
                      <a href="<?php echo esc_url(home_url('/checkout')); ?>" class="btn btn-success text-uppercase text-white mt-2 mt-md-auto">
                        <i class="fa fa-fw fa-shopping-cart me-1"></i> <?php _e('Adquira Agora', 'mt-area'); ?>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fa fa-fw fa-tags me-1"></i>
                    <?php get_template_part('/template-parts/category-terms') ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- END Meta -->

    <!-- Lessons -->
    <?php
    $curso_modulos = get_field('curso_modulos');
    if ($curso_modulos) { ?>
      <div class="block block-rounded block-bordered">
        <div class="block-content">
          <table class="table table-striped table-borderless table-vcenter">
            <tbody>

              <?php
              $i = 1;
              foreach ($curso_modulos as $modulo) { ?>

                <tr>
                  <td class="text-center w-25 d-none d-md-table-cell">
                    <div class="item item-circle bg-primary text-white fs-2 mx-auto">
                      <?php
                      switch ($i) {
                        case $i < 10:
                          echo '0' . $i;
                          break;

                        default:
                          echo $i;
                          break;
                      }
                      ?>
                    </div>
                  </td>
                  <td>
                    <div class="py-4">
                      <div class="fs-sm fw-bold text-uppercase mb-2">
                        <span class="text-muted me-3"><?php _e('Módulo', 'mt-area'); ?><?= ' ' . $i; ?></span>
                        <span class="text-primary">
                          <i class="fa fa-clock"></i> <?php echo $modulo['curso_modulo_duracao']; ?>
                        </span>
                      </div>
                      <div class="h4 mb-2 d-inline-block text-dark">
                        <?php echo $modulo['curso_modulo_titulo']; ?>
                      </div>
                      <p class="text-muted mb-0">
                        <?php echo $modulo['curso_modulo_descricao']; ?>
                      </p>
                    </div>
                  </td>
                </tr>

              <?php
                $i++;
              } ?>

            </tbody>
          </table>
        </div>
      </div>
    <?php } ?>
    <!-- END Lessons -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>