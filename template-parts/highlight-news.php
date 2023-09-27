<div class="row items-push">
  <div class="col-12">
    <!-- Blog #1 -->
    <div class="block block-rounded h-100 mb-0">
      <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-green py-3">
        <div class="me-3">
          <p class="fw-semibold mb-0"><?php _e('Confira nossa base de conhecimento exclusiva', 'mt-area'); ?></p>
        </div>
        <i class="fa fa-2x fa-file-alt text-white"></i>
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
                'value' => '0',
                'compare' => '=='
              )
            )
          );

          // The Query
          $query_frontPage = new WP_Query($args);

          // The Loop
          if ($query_frontPage->have_posts()) {
            while ($query_frontPage->have_posts()) {
              $query_frontPage->the_post(); ?>

              <div class="col-md-6 col-lg-3">
                <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>">
                  <div class="w-100 img-blog">
                    <img class="img-fluid object-fit-cover" src="<?php if (!empty(get_the_post_thumbnail_url())) {
                                                  echo esc_url(get_the_post_thumbnail_url());
                                                } else {
                                                  echo esc_url(get_template_directory_uri() . '/assets/media/mt/bg-post.jpg');
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
          <a class="btn btn-sm btn-alt-secondary" href="<?php echo esc_url(site_url() . '/blog'); ?>">
            Leia Mais <i class="fa fa-fw fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- END Blog #1 -->
  </div>
</div>