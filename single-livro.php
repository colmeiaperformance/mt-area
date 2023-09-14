<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>


  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="">
    <div class="bg-white-75">
      <div class="content content-top content-full text-center pb-5 d-flex justify-content-center">
        <div class="pe-5">
          <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Imagem">
        </div>
        <div>
          <h1 class="fw-bold my-5">
            <?= the_title(); ?>
          </h1>
          <p class="my-5 pb-1">
            <a class="btn btn-hero btn-success" href="<?= the_field('livro_link_de_compra'); ?>" data-toggle="click-ripple">
              <i class="fa fa-shopping-cart opacity-50 me-1"></i> <?php _e('Adquira Agora', 'mt-area') ?>
            </a>
          </p>
        </div>
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
            <?php
            $foto_autor = get_field('livro_foto_do_autor');
            if ($foto_autor) { ?>
              <img class="img-avatar img-avatar-thumb" src="<?php echo $foto_autor; ?>" alt="">
            <?php } ?>
            <div class="mt-2">
              <p class="fw-semibold mb-0">
                <?= get_field('livro_autor'); ?> <span class="fw-normal text-muted mb-0">|
                  <?php _e('Autor(a)', 'mt-area') ?></span>
              </p>
            </div>
          </div>
          <div class="block-content block-content-full text-center">
            <div class="row g-sm">
              <div class="col-6">
                <div class="item item-circle mx-auto">
                  <i class="fa fa-2x fa-fw fa-bookmark me-1"></i>
                </div>
                <p class="text-muted mb-0">
                  <?= get_field('livro_editora'); ?>
                </p>
              </div>
              <div class="col-6">
                <div class="item item-circle mx-auto">
                  <i class="fa fa-fw fa-book fa-2x text-dark"></i>
                </div>
                <p class="text-muted mb-0">
                  <?= get_field('livro_edicao'); ?><?php _e('ª Edição', 'mt-area') ?>
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
                      <?php echo get_field('livro_texto_de_destaque'); ?>
                    </span>

                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="fw-medium d-block d-md-flex justify-content-between align-items-center">
                      <span class="fs-1 fw-bold text-success">R$ <?= get_field('livro_valor'); ?></span>
                      <a href="<?= the_field('livro_link_de_compra'); ?>" class="btn btn-success text-uppercase text-white mt-2 mt-md-auto">
                        <i class="fa fa-fw fa-shopping-cart me-1"></i> <?php _e('Adquira Agora', 'mt-area') ?>
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
    <div class="block block-rounded block-bordered">
      <div class="block-content">
        <table class="table table-striped table-borderless table-vcenter">
          <tbody>

            <tr>
              <td>
                <div class="p-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3"><?php _e('Informações', 'mt-area'); ?></span>
                  </div>
                  <p class="text-muted mb-0">
                    <?php if (get_field('livro_editora')) : ?>
                      <span class="fs-sm text-muted"><?php _e('Editora:', 'mt-area'); ?>
                        <strong><?php echo get_field('livro_editora'); ?></strong>
                      </span><br>
                    <?php endif; ?>
                    <?php if (get_field('livro_edicao')) : ?>
                      <span class="fs-sm text-muted"><?php _e('Edição:', 'mt-area'); ?>
                        <strong><?php echo get_field('livro_edicao'); ?></strong>
                      </span><br>
                    <?php endif; ?>
                    <?php if (get_field('livro_numero_de_paginas')) : ?>
                      <span class="fs-sm text-muted"><?php _e('Número de Páginas:', 'mt-area'); ?>
                        <strong><?php echo get_field('livro_numero_de_paginas'); ?></strong>
                      </span><br>
                    <?php endif; ?>
                    <?php
                    $livro_tipo_de_capa = get_field('livro_tipo_de_capa');
                    if ($livro_tipo_de_capa != null) : ?>
                      <span class="fs-sm text-muted"><?php _e('Tipo:', 'mt-area'); ?>
                        <strong>
                          <?php echo $livro_tipo_de_capa = ($livro_tipo_de_capa) ? $livro_tipo_de_capa['label'] : ''; ?>
                        </strong>
                      </span><br>
                    <?php endif; ?>
                    <?php if (get_field('livro_data_da_publicacao')) : ?>
                      <span class="fs-sm text-muted"><?php _e('Data da Publicação:', 'mt-area'); ?>
                        <strong><?php echo get_field('livro_data_da_publicacao'); ?></strong>
                      </span><br>
                    <?php endif; ?>
                    <?php if (get_field('livro_dimensoes')) : ?>
                      <span class="fs-sm text-muted"><?php _e('Dimensões:', 'mt-area'); ?>
                        <strong><?php echo get_field('livro_dimensoes'); ?></strong>
                      </span><br>
                    <?php endif; ?>
                    <?php if (get_field('livro_idioma')) : ?>
                      <span class="fs-sm text-muted"><?php _e('Idioma:', 'mt-area'); ?>
                        <strong><?php echo get_field('livro_idioma'); ?></strong>
                      </span><br>
                    <?php endif; ?>
                    <?php if (get_field('livro_isbn')) : ?>
                      <span class="fs-sm text-muted"><?php _e('ISBN-10:', 'mt-area'); ?>
                        <strong><?php echo get_field('livro_isbn'); ?></strong>
                      </span><br>
                    <?php endif; ?>
                  </p>
                </div>
              </td>
            </tr>



          </tbody>
        </table>
      </div>
    </div>
    <!-- END Lessons -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>