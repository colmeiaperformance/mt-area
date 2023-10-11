<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>


  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
    <div class="bg-white-75">
      <div class="content content-top content-full text-center pb-5">
        <h1 class="fw-bold my-5">
          <?= the_title(); ?>
        </h1>
        <p class="my-5 pb-1">
          <a class="btn btn-hero btn-success" href="<?php echo esc_url(home_url('/checkout')); ?>"
            data-toggle="click-ripple">
            <i class="fa fa-shopping-cart opacity-50 me-1"></i> <?php _e('Inscreva-se Agora', 'mt-area'); ?>
          </a>
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
              <?php $instrutores = (get_field('e_instrutores')) ? get_field('e_instrutores') : [];
              $numero_de_instrutores = count($instrutores);
              if ($numero_de_instrutores == 1) {
                  _e('Instrutor: ', 'mt-area');
              } elseif ($numero_de_instrutores > 1) {
                  _e('Instrutores: ', 'mt-area');
              } ?>
            </span>

            <?php
            if ($instrutores) {
            foreach ($instrutores as $instrutor) { ?>

            <div class="d-flex mt-2">
              <p class="mb-0">
                <img class="img-avatar img-avatar-thumb"
                  src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar16.jpg'; ?>" alt="">
                <span class="fw-normal text-muted mb-0">
                  <?php echo $instrutor['user_firstname'] . ' ' . $instrutor['user_lastname']; ?>
                </span>
              </p>
            </div>

            <?php }
            } ?>

          </div>
          <div class="block-content block-content-full text-center">
            <div class="row g-sm">
              <div class="col-12">
                <div class="item item-circle mx-auto">
                  <i class="fa fa-fw fa-location-dot fa-2x text-dark"></i>
                </div>
                <p class="text-muted mb-0">
                  Unidade: <?php
                  $e_local = get_field('e_local');
                  if( $e_local ):
                    ?>
                  <a href="<?php echo esc_url(get_permalink( $e_local )); ?>">
                    <h3><?php echo esc_html( get_the_title( $e_local ) ); ?></h3>
                  </a>
                  <?php
               endif; ?>
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
                      Data: <?php echo get_field('e_data');
                  if (get_field('e_data')) {
                      echo " - " . get_field('e_data');
                  }
                  ?>
                    </span>

                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="fw-medium d-block d-md-flex justify-content-between align-items-center">
                      <span class="fs-1 fw-bold text-success"><?php _e('R$ ', 'mt-area') ?>
                        <?php echo $e_valor = (get_field('e_valor')) ? get_field('e_valor') : ''; ?></span>
                      <a href="<?php echo esc_url(home_url('/checkout')); ?>"
                        class="btn btn-success text-uppercase text-white mt-2 mt-md-auto">
                        <i class="fa fa-fw fa-shopping-cart me-1"></i> <?php _e('Adquira Agora', 'mt-area'); ?>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    Tipo de evento:
                    <?php $modalidade = get_the_terms( get_the_ID(), 'categoria-de-evento' );;
                  if ($modalidade) {
                    foreach($modalidade as $term) {
                      echo '<span class="fw-bold" style="color:' . get_field('cor_do_tipo_do_evento', $term) . '">' . $term->name . '</span>';
                    }
                  }
                  ?>
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
    $evento_modulos = get_field('evento_modulos');
    if ($evento_modulos) { ?>
    <div class="block block-rounded block-bordered">
      <div class="block-content">
        <table class="table table-striped table-borderless table-vcenter">
          <tbody>

            <?php
          $i = 1;
          foreach ($evento_modulos as $modulo) { ?>

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
            } ?>
                </div>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3"><?php _e('Módulo', 'mt-area'); ?><?= ' ' . $i; ?></span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> <?php echo $modulo['evento_modulo_duracao']; ?>
                    </span>
                  </div>
                  <div class="h4 mb-2 d-inline-block text-dark">
                    <?php echo $modulo['evento_modulo_titulo']; ?>
                  </div>
                  <p class="text-muted mb-0">
                    <?php echo $modulo['evento_modulo_descricao']; ?>
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