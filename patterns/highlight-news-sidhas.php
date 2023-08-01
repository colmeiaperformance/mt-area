<div class="row items-push">
  <div class="col-12">
    <!-- Blog #1 -->
    <div class="block block-rounded h-100 mb-0">
      <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-green py-3">
        <div class="me-3">
          <p class="fw-semibold mb-0"><?php _e('Base de conhecimento exclusiva para Sidhas', 'mt-area'); ?></p>
        </div>
        <i class="fa fa-2x fa-lock text-white"></i>
      </div>
      <div class="block-content">
        <div class="row items-push">
          <?php
          // WP_Query arguments
          $args = array(
            'post_type'              => array('post'),
            'posts_per_page'         => '4',
            'meta_query' => array(
              array(
                'key' => 'conteudo_restrito_sidhas',
                'value' => '1',
                'compare' => '=='
              )
            )
          );

          // The Query
          $query_sidhas_news = new WP_Query($args);

          // The Loop
          if ($query_sidhas_news->have_posts()) {
            while ($query_sidhas_news->have_posts()) {
              $query_sidhas_news->the_post(); ?>


              <div class="col-md-6 col-lg-3">
                <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>">
                  <div class="w-100 img-blog">
                    <img class="img-fluid object-fit-cover" src="<?php if (!empty(get_the_post_thumbnail_url())) {
                                                  esc_url(the_post_thumbnail_url());
                                                } else {
                                                  echo get_template_directory_uri() . '/assets/media/mt/bg-post.jpg';
                                                }
                                                ?>" alt="">
                  </div>
                  <div class="block-content">
                    <h4 class="mb-1"><?php the_title(); ?></h4>
                    <p class="fs-sm">
                      <span class="text-primary"><?php the_author(); ?></span> - <?php the_date(); ?> · <em class="text-muted"><?php echo reading_time(); ?></em>
                    </p>
                    <!-- <p>
                      <?php //the_excerpt();
                      ?>
                    </p> -->
                  </div>
                </a>
              </div>


            <?php }
          } else { ?>
            <div class="row items-push">
              <div class="alert alert-secondary p-3 mb-0">
                <i class="fa fa-info-circle me-1"></i> Não há posts para exibir.
              </div>
            </div>
          <?php }

          // Restore original Post Data
          wp_reset_postdata();
          ?>

        </div>
      </div>
      <div class="block-content bg-body-light">
        <div class="d-flex justify-content-end push">
          <a class="btn btn-sm btn-alt-secondary" href="<?php echo site_url() . '/blog?sidhas=true'; ?>">
            Leia Mais <i class="fa fa-fw fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- END Blog #1 -->
  </div>
</div>