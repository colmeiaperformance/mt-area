<?php

/**
 * Title: Tecnologias
 * Slug: mt-area/tecnologias
 */
?>
<div class="row items-push">
  <div class="col-12">
    <!-- Tecnologias Maharishi -->
    <div class="block block-rounded h-100 mb-0">
      <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-default py-3">
        <div class="me-3">
          <p class="fw-semibold mb-0"><?php _e('Conheça nossas Tecnologias Maharishi', 'mt-area'); ?></p>
        </div>
        <i class="fa fa-2x fa-lightbulb-on text-white"></i>
      </div>
      <div class="block-content">
        <div class="row items-push">

          <?php
          $args = array(
            'post_type' => 'tecnologia-maharishi',
            'posts_per_page' => 4,
            // 'order' => 'ASC'
          );
          $highlight_maharishi_query = new WP_Query($args);

          if ($highlight_maharishi_query->have_posts()) :
            while ($highlight_maharishi_query->have_posts()) : $highlight_maharishi_query->the_post(); ?>
              <div class="col-md-6 col-lg-3">
                <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>">
                  <div class="d-flex justify-content-center align-items-center badge py-5 rounded-0" style="background-color:<?php echo get_field('maharishi_cor_icone'); ?>"><i class="fa-solid <?php echo get_field('maharishi_icone'); ?> fa-5x"></i></div>
                  <div class="block-content">
                    <h4 class="mb-1"><?= the_title( ); ?></h4>
                    <p class="fs-sm text-muted">
                      <?php echo get_field('maharishi_resumo'); ?>
                    </p>
                  </div>
                </a>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>


        </div>
      </div>
      <div class="block-content bg-body-light">
        <div class="d-flex justify-content-end push">
          <a class="btn btn-sm btn-alt-secondary" href="<?php echo site_url() . '/tecnologias-maharishi'; ?>">
            <?php _e('Veja todas', 'mt-area'); ?> <i class="fa fa-fw fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- END Tecnologias Maharishi -->
  </div>
</div>