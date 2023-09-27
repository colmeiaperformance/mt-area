<div class="block block-rounded d-flex flex-column flex-grow-1 h-100">
  <div class="block-content h-100">
    <p class="text-uppercase fs-sm fw-bold text-center mt-2 mb-4">
      <?php _e('Últimas Notícias', 'mt-area'); ?>
    </p>
    <ul class="nav-items my-2">

      <?php
      $args = array(
        'post_type' => 'noticia-em-destaque',
        'post_status' => 'publish',
        'posts_per_page' => 5,
        // 'orderby' => 'title', 
        // 'order' => 'ASC', 
      );

      $news = new WP_Query($args);

      while ($news->have_posts()) : $news->the_post();
        $icone = get_field('destaque_icone');
      ?>

        <li>
          <a class="d-flex text-dark py-2" href="<?php the_permalink(); ?>">
            <div class="flex-shrink-0 mx-3">
              <i class="fa fa-fw fa-<?php if ($icone == 'fa-solid fa-circle-check') {
                                      echo 'check-circle text-success';
                                    } elseif ($icone == 'fa-solid fa-circle-plus') {
                                      echo 'plus-circle text-info';
                                    } elseif ($icone == 'fa-solid fa-circle-xmark') {
                                      echo 'circle-xmark text-danger';
                                    } elseif ($icone == 'fa-solid fa-circle-exclamation') {
                                      echo 'circle-exclamation text-warning';
                                    } else {
                                      echo 'check-circle text-success';
                                    }; ?>"></i>
            </div>
            <div class="flex-grow-1 fs-sm pe-2">
              <div class="fw-semibold"><?php the_title(); ?></div>
              <div class="text-muted">
                <?php echo get_the_excerpt(); ?>
              </div>
            </div>
          </a>
        </li>

      <?php endwhile;

      wp_reset_postdata();
      ?>

    </ul>
  </div>
  <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
    <a class="fw-medium" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
      <?php _e('Ver Todos', 'mt-area'); ?>
      <i class="fa fa-arrow-right ms-1 opacity-25"></i>
    </a>
  </div>
</div>