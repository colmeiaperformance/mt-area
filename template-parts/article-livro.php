<?php
$args = array(
  'post_type' => 'livro',
  'posts_per_page' => 3,
  // 'order' => 'ASC'
);
$livros_query = new WP_Query($args);
?>

<?php if (have_posts()) :
    $i = 1;
    ?>
<?php while (have_posts()) : the_post(); ?>


<!-- Book -->
<div class="col-xxl-6">
  <div class="block block-rounded border-start border-warning border-3 block-link-shadow">

    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <div class="d-md-flex flex-grow-1">
        <div class="col-md-4 text-center text-md-start flex-shrink-1">
          <img class="img-fluid img-livros-grid" src="<?php if (get_the_post_thumbnail()) : the_post_thumbnail_url(); ?>
                 <?php endif; ?>" alt="">
        </div>
        <div class="block-content d-block d-flex flex-column justify-content-around">
          <p class="fw-semibold text-dark text-center text-md-start mb-0">
            <?php the_title(); ?>
          </p>


          <span class="fs-sm text-muted">Autoria:
            <strong><?php echo get_field('livro_autor'); ?></strong><br></span>
          <span
            class="fs-sm text-muted"><?php echo get_field('livro_texto_de_destaque'); ?><br></span>
          <div class="d-block text-center d-md-flex justify-content-between">
            <p class="fs-3 text-success mb-1">
              R$
              <?php echo get_field('livro_valor'); ?>
            </p>
            <div class="d-flex">
              <a href="<?php the_permalink(); ?>">
                <span class="btn btn-lg btn-primary me-2">
                  <i class="fa fa-plus-circle me-2"></i> Sobre
                </span>
              </a>
              <a
                href="<?php echo home_url() . '/checkout'; ?>">
                <span class="btn btn-lg btn-success">
                  <i class="fa fa-shopping-cart me-2"></i> Adquirir
                </span>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Backup accordions -->
    <!-- <div class="accordion block-content block-content-full block-content-sm bg-body-light p-0" id="accordion<?php //echo $i;?>">
    <button id="book<?php //echo $i;?>"
      class="accordion-header accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse"
      data-bs-target="#collapse<?php //echo $i;?>"
      aria-expanded="false"
      aria-controls="collapse<?php //echo $i;?>">
      <?php// _e('Saiba Mais', 'mt-area'); ?> </button>
    <div id="collapse<?php //echo $i;?>"
      class="accordion-collapse collapse"
      aria-labelledby="book<?php //echo $i;?>"
      data-bs-parent="#accordion<?php //echo $i;?>" style="">
      <div class="accordion-body">
        <span
          class="fs-sm text-muted"><?php //_e('Editora:', 'mt-area');?>
          <strong><?php //echo get_field('livro_editora');?></strong></span><br>
        <span
          class="fs-sm text-muted"><?php //_e('Edição:', 'mt-area');?>
          <strong><?php //echo get_field('livro_edicao');?></strong></span><br>
        <span
          class="fs-sm text-muted"><?php //_e('Número de Páginas:', 'mt-area');?>
          <strong><?php //echo get_field('livro_numero_de_paginas');?></strong></span><br>
        <span
          class="fs-sm text-muted"><?php //_e('Tipo:', 'mt-area');?>
          <strong><?php
                    //echo $livro_tipo_de_capa = ( get_field('livro_tipo_de_capa') ) ? get_field('livro_tipo_de_capa')['label'] : '' ;
        ?></strong></span><br>
        <span
          class="fs-sm text-muted"><?php //_e('Data da Publicação:', 'mt-area');?>
          <strong><?php //echo get_field('livro_data_da_publicacao');?></strong></span><br>
        <span
          class="fs-sm text-muted"><?php //_e('Dimensões:', 'mt-area');?>
          <strong><?php //echo get_field('livro_dimensoes');?></strong></span><br>
        <span
          class="fs-sm text-muted"><?php //_e('Idioma:', 'mt-area');?>
          <strong><?php //echo get_field('livro_idioma');?></strong></span><br>
        <span
          class="fs-sm text-muted"><?php //_e('ISBN-10:', 'mt-area');?>
          <strong><?php //echo get_field('livro_isbn');?></strong></span><br>
      </div>
    </div>
  </div> -->

</div>
</div>
<!-- END Book -->
<?php $i++;
    endwhile;
endif;
wp_reset_postdata();


?>