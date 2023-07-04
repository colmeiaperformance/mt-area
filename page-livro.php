<?php 
include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( '/patterns/quick-menu' ) ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_livros.jpg'; ?>');">
    <div class="bg-mt-orange-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php _e('Livros', 'mt-area'); ?>
        </h1>
        <h3 class="fw-normal text-white-75 mb-3">
        </h3>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row">
      <?php get_template_part( '/patterns/categories-list' ); ?>
    </div>
    <div class="row items-push gap">

      <?php
    // $args = array(
    //     'post_type' => 'livro',
    //     'posts_per_page' => 3,
    //     // 'order' => 'ASC'
    // );
    // $livros_query = new WP_Query( $args );
    ?>

      <?php if ( have_posts() ) : 
        $i = 1;
      ?>
      <?php while ( have_posts() ) : the_post(); ?>


      <!-- Book -->
      <div class="col-xxl-6">
        <div class="block block-rounded border-start border-warning border-3 block-link-shadow">

          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div class="col-md-4 text-center text-md-start flex-shrink-1">
                <img class="img-fluid img-livros-grid" src="<?php if ( get_the_post_thumbnail() ) : the_post_thumbnail_url(); ?>
                 <?php endif; ?>" alt="">
              </div>
              <div class="block-content d-block d-flex flex-column justify-content-around">
                <p class="fw-semibold text-dark text-center text-md-start mb-0">
                  <?php the_title(); ?>
                </p>


                <span class="fs-sm text-muted">Autoria:
                  <strong><?php echo get_field ('livro_autor'); ?></strong><br></span>
                <span class="fs-sm text-muted"><?php echo get_field('livro_texto_de_destaque'); ?><br></span>
                <div class="d-block text-center d-md-flex justify-content-between">
                  <p class="fs-3 text-success mb-1">
                    R$ <?php echo get_field('livro_valor'); ?>
                  </p>
                  <span class="btn btn-lg btn-success">
                    <i class="fa fa-shopping-cart me-2"></i> Adquirir
                  </span>
                </div>
              </div>

            </div>
          </div>

          <div class="accordion block-content block-content-full block-content-sm bg-body-light p-0"
            id="accordion<?php echo $i; ?>">
            <button id="book<?php echo $i; ?>" class="accordion-header accordion-button collapsed bg-transparent"
              type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="false"
              aria-controls="collapse<?php echo $i; ?>">
              <?php _e('Saiba Mais', 'mt-area' ); ?> </button>
            <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse"
              aria-labelledby="book<?php echo $i; ?>" data-bs-parent="#accordion<?php echo $i; ?>" style="">
              <div class="accordion-body">
                <span class="fs-sm text-muted">Editora:
                  <strong><?php echo get_field('livro_editora'); ?></strong></span><br>
                <span class="fs-sm text-muted">Edição:
                  <strong><?php echo get_field('livro_edicao'); ?></strong></span><br>
                <span class="fs-sm text-muted">Número de Páginas:
                  <strong><?php echo get_field('livro_numero_de_paginas'); ?></strong></span><br>
                  <span class="fs-sm text-muted">Tipo: <strong>Capa comum</strong></span><br>
                <span class="fs-sm text-muted">Data da Publicação: <strong>05/12/2022</strong></span><br>
                <span class="fs-sm text-muted">Dimensões: <strong>20.8 x 13.8 x 1 cm</strong></span><br>
                <span class="fs-sm text-muted">Idioma: <strong>Português</strong></span><br>
                <span class="fs-sm text-muted">ISBN-10: <strong>3459210234</strong></span><br>
                <span class="fs-sm text-muted">Descrição: <strong>Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Magni laboriosam sunt voluptas voluptate distinctio accusantium, amet quam quos nihil facere
                    reiciendis doloremque aliquid quo iste a. Alias nesciunt quisquam illum.</strong></span>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END Book -->
      <?php $i++; ?>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
      <div class="d-flex justify-content-center">

        <?php 
        wp_boostrap_5_pagination( );
        ?>
      </div>



      <!-- Book -->
      <!-- <div class="col-xxl-6">
        <div class="block block-rounded border-start border-warning border-3 block-link-shadow">

          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div class="col-md-4 text-center text-md-start flex-shrink-1">
                <img src="<?php //echo get_template_directory_uri() . '/assets/media/mt/book4.png'; ?>" alt="">
              </div>
              <div class="block-content d-block d-flex flex-column justify-content-around">
                <p class="fw-semibold text-dark text-center text-md-start mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
                <span class="fs-sm text-muted">Autoria: <strong>João Torres</strong><br></span>
                <span class="fs-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, dolores
                  vero eaque ab aliquid qui.<br></span>
                <div class="d-block text-center d-md-flex justify-content-between">
                  <p class="fs-3 text-success mb-1">
                    R$ 49,90
                  </p>
                  <span class="btn btn-lg btn-success">
                    <i class="fa fa-shopping-cart me-2"></i> Adquirir
                  </span>
                </div>
              </div>

            </div>
          </div>

          <div class="accordion block-content block-content-full block-content-sm bg-body-light p-0" id="accordion4">
            <button id="book4" class="accordion-header accordion-button collapsed bg-transparent" type="button"
              data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
              Saiba Mais
            </button>
            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="books" data-bs-parent="#accordion4"
              style="">
              <div class="accordion-body">
                <span class="fs-sm text-muted">Editora: <strong>Nome da Editora</strong></span><br>
                <span class="fs-sm text-muted">Edição: <strong>2ª</strong></span><br>
                <span class="fs-sm text-muted">Número de Páginas: <strong>240</strong></span><br>
                <span class="fs-sm text-muted">Data da Publicação: <strong>05/12/2022</strong></span><br>
                <span class="fs-sm text-muted">Dimensões: <strong>20.8 x 13.8 x 1 cm</strong></span><br>
                <span class="fs-sm text-muted">Idioma: <strong>Português</strong></span><br>
                <span class="fs-sm text-muted">ISBN-10: <strong>3459210234</strong></span><br>
                <span class="fs-sm text-muted">Tipo: <strong>Capa comum</strong></span><br>
                <span class="fs-sm text-muted">Descrição: <strong>Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Magni laboriosam sunt voluptas voluptate distinctio accusantium, amet quam quos nihil facere
                    reiciendis doloremque aliquid quo iste a. Alias nesciunt quisquam illum.</strong></span>
              </div>
            </div>
          </div>

        </div>
      </div> -->
      <!-- END Book -->

    </div>


  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>