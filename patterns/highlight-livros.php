<div class="col-md-6">
  <!-- Livros #1 -->
  <div class="block block-rounded h-100 mb-0 d-flex flex-column justify-content-between">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-orange">
      <div class="me-3">
        <p class="fw-semibold mb-0"><?php _e('Livros', 'mt-area'); ?></p>
      </div>
      <i class="fa fa-2x fa-book text-white"></i>
    </div>
    <div class="block block-rounded mb-0">
      <div class="block-content block-content-full">

        <?php
        $args = array(
          'post_type' => 'livro',
          'posts_per_page' => 3,
          // 'order' => 'ASC'
        );
        $highlight_livros_query = new WP_Query($args);

        if ($highlight_livros_query->have_posts()) :
          while ($highlight_livros_query->have_posts()) : $highlight_livros_query->the_post(); ?>

            <a class="block block-rounded block-link-rotate mb-2 bg-image" href="<?php the_permalink(); ?>">
              <div class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-start text-dark-muted bg-mt-light-gray-op block-highlight">
                <div class="col-2 me-3">
                  <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="col-8 me-3">
                  <p class="fs-base mb-0">
                    <?php the_title(); ?>
                  </p>
                  <p class="fs-sm mb-0">
                    <?php echo get_field('livro_autor'); ?>
                  </p>
                </div>
              </div>
            </a>

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>



      </div>
    </div>
    <div class="block-content bg-body-light">
      <div class="p-2">
        <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
          <i class="fa fa-fw fa-eye opacity-50 me-1"></i> Ver Tudo
        </a>
      </div>
    </div>
  </div>
  <!-- END Livros #1 -->
</div>