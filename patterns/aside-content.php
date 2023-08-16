<?php

/**
 * Title: Conteúdo Aside
 * Slug: mt-area/aside-content
 */
?>
<div class="content-side">
  <!-- Side Overlay Tabs -->
  <div class="block block-transparent pull-x pull-t mb-0">
    <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="so-wall-tab" data-bs-toggle="tab" data-bs-target="#so-wall" role="tab" aria-controls="so-wall" aria-selected="true">
          <i class="fa fa-fw fa-bell"></i>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab" aria-controls="so-people" aria-selected="false">
          <i class="fa fa-fw fa-address-card"></i>
        </button>
      </li>
    </ul>
    <div class="block-content tab-content overflow-hidden">
      <!-- Settings Tab -->
      <div class="tab-pane pull-x fade fade-up show active" id="so-wall" role="tabpanel" aria-labelledby="so-wall-tab" tabindex="0">
        <div class="block mb-0">
          <!-- Notification Wall -->
          <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold"><?php _e('Notícias em Destaque', 'mt-area'); ?></span>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm">
              <ul class="nav-items my-2">

                <?php
                $args = array(
                  'post_type' => 'noticia-em-destaque',
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                  // 'orderby' => 'title', 
                  // 'order' => 'ASC', 
                );

                $news_aside = new WP_Query($args);

                while ($news_aside->have_posts()) : $news_aside->the_post();
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
                        <div class="text-muted"><?php echo get_the_date('d/m/Y'); ?></div>
                        <div class="text-muted"><?php echo get_field('destaque_resumo'); ?></div>
                      </div>
                    </a>
                  </li>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>

              </ul>

            </div>
          </div>
          <!-- END Notification Wall -->



          <!-- Notification View All -->
          <div class="block-content block-content-full border-top">
            <a class="btn w-100 btn-alt-primary" href="<?php echo home_url() . '/noticias-em-destaque' ?>">
              <i class="fa fa-fw fa-eye me-1"></i> Ver Tudo
            </a>
          </div>
          <!-- END Notification View All -->
        </div>
      </div>
      <!-- END Settings Tab -->

      <!-- People -->
      <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab" tabindex="0">
        <div class="block mb-0">
          <!-- Instrutores -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Instrutores</span>
          </div>
          <div class="block-content">

            <ul class="nav-items">

              <?php
              $current_user = wp_get_current_user();
              $authorusers = get_users('role=author');
              // Array of WP_User objects.
              foreach ($authorusers as $a_user) { ?>

                <li>
                  <a class="d-flex py-2" href="<?php if ($a_user->user_website) {
                                                  echo $a_user->user_website;
                                                } else {
                                                  echo '#';
                                                } ?>">
                    <div class="flex-shrink-0 mx-3 overlay-container">
                      <img class="img-avatar img-avatar48" src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar3.jpg'; ?>" alt="">
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold"><?php echo $a_user->first_name . ' ' . $a_user->last_name; ?></div>
                      <div class="fs-sm text-muted"><?php echo $a_user->description; ?></div>
                    </div>
                  </a>
                </li>

              <?php }
              ?>

              <!-- <li>
                      <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php //echo get_template_directory_uri() . '/assets/media/avatars/avatar3.jpg'; 
                                  ?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold">Lori Grant</div>
                          <div class="fs-sm text-muted">Paraná</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php //echo get_template_directory_uri() . '/assets/media/avatars/avatar13.jpg'; 
                                  ?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold">Justin Hunt</div>
                          <div class="fw-normal fs-sm text-muted">Minas Gerais</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php //echo get_template_directory_uri() . '/assets/media/avatars/avatar2.jpg';
                                  ?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold">Susan Day</div>
                          <div class="fw-normal fs-sm text-muted">Santa Catarina</div>
                        </div>
                      </a>
                    </li> -->
            </ul>
          </div>
          <!-- Instrutores -->

          <!-- Equipe -->
          <div class="block-content block-content-sm block-content-full bg-body">
            <span class="text-uppercase fs-sm fw-bold">Equipe MT</span>
          </div>
          <div class="block-content">
            <ul class="nav-items">
              <li>
                <a class="d-flex py-2" href="be_pages_generic_profile.html">
                  <div class="flex-shrink-0 mx-3 overlay-container">
                    <img class="img-avatar img-avatar48" src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar7.jpg'; ?>" alt="">
                  </div>
                  <div class="flex-grow-1">
                    <div class="fw-semibold">Amanda Powell</div>
                    <div class="fw-normal fs-sm text-muted">São Paulo</div>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex py-2" href="be_pages_generic_profile.html">
                  <div class="flex-shrink-0 mx-3 overlay-container">
                    <img class="img-avatar img-avatar48" src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar7.jpg'; ?>" alt="">
                  </div>
                  <div class="flex-grow-1">
                    <div class="fw-semibold">Mary Drewz</div>
                    <div class="fw-normal fs-sm text-muted">Rio de Janeiro</div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <!-- END Equipe -->



        </div>
      </div>
      <!-- END People -->


    </div>
  </div>
  <!-- END Side Overlay Tabs -->
</div>