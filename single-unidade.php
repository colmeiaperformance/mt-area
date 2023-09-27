<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>


  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php
  if (has_post_thumbnail( )) {
    echo get_the_post_thumbnail_url();
  } else {
    echo get_template_directory_uri() . '/assets/media/mt/unidades-default.jpg';
  }
    ?>');">
    <div class="bg-white-75">
      <div class="content content-top content-full text-center pb-5">
        <h1 class="fw-bold my-5">
          <?= the_title(); ?>
        </h1>
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
              <?php $instrutores = get_field('unid_instrutor_responsavel');
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
                <img class="img-avatar img-avatar-thumb"
                  src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar16.jpg'; ?>" alt="">
                <span class="fw-normal text-muted mb-0">
                  <?php echo $instrutor['user_firstname'] . ' ' . $instrutor['user_lastname']; ?>
                </span>
              </p>
            </div>

            <?php } ?>

          </div>
          <div class="block-content block-content-full text-center">
            <div class="row g-sm">
              <div class="col-12">
                <div class="item item-circle mx-auto">
                  <i class="far fa-2x fa-fw fa-envelope me-1"></i>
                </div>
                <p class="text-muted mb-0">
                  <?php the_field('unid_email_de_contato'); ?>
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
                      <?php
                  $telefones = get_field('unid_telefones_de_contato'); ?>
                      <i class="far fa-fw fa-phone fa-1x text-dark"></i>
          </div>

          <?php
                  foreach ($telefones as $telefone) {
                    $numero = $telefone['unid_telefone'];
                    echo format_phone($numero);
                  }
                  ?>

          </span>

          </td>
          </tr>
          <tr>
            <td>
              <div class="fw-medium d-block d-md-flex justify-content-between align-items-center">
                <span class="fs-1 fw-bold text-muted"><?php _e('Endereço: ', 'mt-area') ?>
                  <?php 
                  $unid_endereco = get_field('unid_endereco');
                  echo $unid_endereco['tipo'] . ' ' . $unid_endereco['logradouro'] . ', ' . $unid_endereco['numero'] . ' - ' . $unid_endereco['complemento'] . '<br>' . $unid_endereco['cidade'] . ' - ' . $unid_endereco['uf'];
                  ?></span>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <?php _e('Estado: ', 'mt-area' ); ?>
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

  <!-- Map -->
  <?php
  if (get_field('unid_mapa')) { ?>
  <div class="block block-rounded block-bordered overflow-hidden">
    <div class="block-content overflow-hidden">
      <?php echo get_field('unid_mapa'); ?>
    </div>
    <script>
    jQuery(document).ready(function() {
      document.querySelector('iframe').width = '100%';
    });
    </script>
  </div>
  <?php } ?>
  <!-- END Map -->


  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>