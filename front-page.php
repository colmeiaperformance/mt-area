<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( 'template-parts/quick-menu' ) ?>

  <!-- Page Content -->
  <div class="content">

    <!-- Latest Events + Live + Stats -->
    <div class="row">
      <div class="col-lg-8 order-2 order-lg-1">
        <?php get_template_part( 'template-parts/calendar' ) ?>
      </div>
      <div class="col-lg-4 d-flex flex-column order-1 order-lg-2">
        <!-- Stats -->
        <div class="block block-rounded">
          <div class="block-content block-content-full d-flex justify-content-center align-items-center flex-grow-1 ribbon 
            ribbon-danger">
            <a class="link-fw" href="#">
              <div class="text-center">
                <div class="item item-circle bg-body-light mx-auto push">
                  <i class="fa fa-2x fa-circle-play text-primary"></i>
                </div>
                <h4 class="text-primary-dark mb-0">Meditação Coletiva Online</h4>
                <p class="text-muted">7h - 8h</p>
              </div>
            </a>
            <div class="ribbon-box">
              <i class="fa fa-video me-1 animated pulse animated-loop"></i>
              AO VIVO
            </div>
            <!-- <div class="ribbon-box">
              <i class="fa fa-video-slash me-1"></i>
              OFFLINE
            </div> -->

          </div>
          <!-- <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
            <a class="fw-medium" href="javascript:void(0)">
              Assista Agora
              <i class="fa fa-arrow-right ms-1 opacity-25"></i>
            </a>
          </div> -->
        </div>
        <div class="block block-rounded d-flex flex-column flex-grow-1">

          <div class="block-content h-100">
            <p class="text-uppercase fs-sm fw-bold text-center mt-2 mb-4">
              Notícias em Destaque
            </p>
            <ul class="nav-items my-2">

              <?php
            $args = array(
              'post_type' => 'cpt_register_news',
              'post_status' => 'publish',
              'posts_per_page' => 4, 
              // 'orderby' => 'title', 
              // 'order' => 'ASC', 
          );
      
          $news = new WP_Query( $args ); 
              
          while ( $news->have_posts() ) : $news->the_post(); ?>

              <li>
                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                  <div class="flex-shrink-0 mx-3">
                    <i class="fa fa-fw fa-check-circle text-success"></i>
                  </div>
                  <div class="flex-grow-1 fs-sm pe-2">
                    <div class="fw-semibold"><?php the_title(); ?></div>
                    <div class="text-muted"><?php the_excerpt(); ?></div>
                  </div>
                </a>
              </li>

              <?php endwhile;
      
          wp_reset_postdata(); 
            ?>


              <!-- <li>
                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                  <div class="flex-shrink-0 mx-3">
                    <i class="fa fa-fw fa-check-circle text-success"></i>
                  </div>
                  <div class="flex-grow-1 fs-sm pe-2">
                    <div class="fw-semibold">Evento "Lorem Ipsum" confirmado!</div>
                    <div class="text-muted">3 min atrás</div>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                  <div class="flex-shrink-0 mx-3">
                    <i class="fa fa-fw fa-user-plus text-info"></i>
                  </div>
                  <div class="flex-grow-1 fs-sm pe-2">
                    <div class="fw-semibold">Novo curso "Lorem Ipsum Dolor Sit Amet" foi adicionado.</div>
                    <div class="text-muted">2 dias atrás</div>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                  <div class="flex-shrink-0 mx-3">
                    <i class="fa fa-times-circle text-danger"></i>
                  </div>
                  <div class="flex-grow-1 fs-sm pe-2">
                    <div class="fw-semibold">Curso "Lorem Ipsum" cancelado.</div>
                    <div class="text-muted">1 semana atrás</div>
                  </div>
                </a>
              </li> -->
            </ul>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
            <a class="fw-medium" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
              Ver Todos
              <i class="fa fa-arrow-right ms-1 opacity-25"></i>
            </a>
          </div>
        </div>
        <!-- END Stats -->
      </div>
    </div>
    <!-- END Latest Events + Live + Stats -->


    <!-- Full Calendar (functionality is initialized in js/pages/be_comp_calendar.min.js which was auto compiled from _js/pages/be_comp_calendar.js ) -->
    <!-- For more info and examples you can check out https://fullcalendar.io/ -->
    <div class="row d-flex items-push flex-xl-grow-1">
      <div class="col-md-5">
        <div class="block block-rounded h-100 mb-0">
          <div class="block-header block-header-default bg-body-dark text-white py-3 bg-mt-dark-blue">
            <h3 class="block-title">
              Programas Regulares
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option text-white" data-toggle="block-option"
                data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option text-white" data-toggle="block-option"
                data-action="fullscreen_toggle"></button>
            </div>
          </div>
          <div class="block-content pb-3">
            Lista de Residenciais e Assembleias
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="block block-rounded h-100 mb-0">
          <div
            class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-dark-blue py-3">
            <div class="me-3">
              <p class="fw-semibold mb-0">Calendário Védico</p>
            </div>
            <div class="block-options">
              <button type="button" class="btn-block-option text-white" data-toggle="block-option"
                data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option text-white" data-toggle="block-option"
                data-action="fullscreen_toggle"></button>
              <!-- <i class="fa fa-2x fa-calendar text-white"></i> -->
            </div>
          </div>
          <div class="block block-content-full mb-0">
            <div class="block-content block-content-full">
              <!-- Calendar Container -->
              <div id="js-calendar" class="p-xl-4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END full calendar -->

    <!-- News -->
    <div class="row items-push">
      <div class="col-12">
        <!-- Blog #1 -->
        <div class="block block-rounded h-100 mb-0">
          <div
            class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-green py-3">
            <div class="me-3">
              <p class="fw-semibold mb-0">Confira nossa base de conhecimento exclusiva</p>
            </div>
            <i class="fa fa-2x fa-file-alt text-white"></i>
          </div>
          <div class="block-content">
            <div class="row items-push">


              <?php
              // WP_Query arguments
              $args = array(
                'post_type'              => array( 'post' ),
                'posts_per_page'         => '4',
              );

              // The Query
              $query_frontPage = new WP_Query( $args );

              // The Loop
              if ( $query_frontPage->have_posts() ) {
                while ( $query_frontPage->have_posts() ) {
                  $query_frontPage->the_post(); ?>

              <div class="col-md-6 col-lg-3">
                <a class="block block-rounded block-link-pop h-100 mb-0" href="<?php the_permalink(); ?>">
                  <img class="img-fluid" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="">
                  <div class="block-content">
                    <h4 class="mb-1"><?php the_title(); ?></h4>
                    <p class="fs-sm">
                      <span class="text-primary"><?php the_author(); ?></span> - <?php the_date(); ?> · <em
                        class="text-muted"><?php echo reading_time(); ?></em>
                    </p>
                    <!-- <p>
                      <?php //the_excerpt(); ?>
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
              <a class="btn btn-sm btn-alt-secondary" href="<?php echo site_url() . '/blog'; ?>">
                Leia Mais <i class="fa fa-fw fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- END Blog #1 -->
      </div>
    </div>
    <!-- END News -->

    <!-- Highlight Media -->
    <div class="row items-push">
      <div class="col-md-6">
        <!-- Cursos #1 -->
        <div class="block block-rounded h-100 mb-0">
          <div
            class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-blue">
            <div class="me-3">
              <p class="fw-semibold mb-0">Cursos em Destaque</p>
            </div>
            <i class="fa fa-2x fa-chalkboard text-white"></i>
          </div>
          <div class="block block-rounded">
            <div class="block-content block-content-full">
              <a class="block block-rounded block-link-rotate mb-2 bg-image" href="javascript:void(0)"
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/destaque_curso1.jpg'; ?>');">
                <div
                  class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between text-white bg-mt-gray-op">
                  <div class="me-3">
                    <p class="fs-base mb-0">
                      Curabitur dapibus metus sed quam faucibus dictum lorem ipsum
                    </p>
                    <p class="fs-sm mb-0">
                      Categoria 1
                    </p>
                  </div>
                </div>
              </a>
              <a class="block block-rounded block-link-rotate mb-2 bg-image" href="javascript:void(0)"
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/destaque_curso2.jpg'; ?>');">
                <div
                  class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between text-white bg-mt-gray-op">
                  <div class="me-3">
                    <p class="fs-base mb-0">
                      Curabitur dapibus metus sed quam faucibus dictum lorem ipsum
                    </p>
                    <p class="fs-sm mb-0">
                      Categoria 2
                    </p>
                  </div>
                </div>
              </a>
              <a class="block block-rounded block-link-rotate mb-2 bg-image" href="javascript:void(0)"
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/destaque_curso3.jpg'; ?>');">
                <div
                  class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between text-white bg-mt-gray-op">
                  <div class="me-3">
                    <p class="fs-base mb-0">
                      Curabitur dapibus metus sed quam faucibus dictum lorem ipsum
                    </p>
                    <p class="fs-sm mb-0">
                      Categoria 3
                    </p>
                  </div>
                </div>
              </a>
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
        <!-- END Cursos #1 -->
      </div>
      <div class="col-md-6">
        <!-- Livros #1 -->
        <div class="block block-rounded h-100 mb-0">
          <div
            class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-orange">
            <div class="me-3">
              <p class="fw-semibold mb-0">Livros</p>
            </div>
            <i class="fa fa-2x fa-book text-white"></i>
          </div>
          <div class="block block-rounded">
            <div class="block-content block-content-full">


              <a class="block block-rounded block-link-rotate mb-2 bg-image" href="javascript:void(0)"
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/book.png'; ?>');">
                <div
                  class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between text-white bg-mt-gray-op">
                  <div class="me-3">
                    <p class="fs-base mb-0">
                      Curabitur dapibus metus sed quam faucibus dictum lorem ipsum
                    </p>
                    <p class="fs-sm mb-0">
                      Categoria 3
                    </p>
                  </div>
                </div>
              </a>
              <a class="block block-rounded block-link-rotate mb-2 bg-image" href="javascript:void(0)"
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/book2.png'; ?>');">
                <div
                  class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between text-white bg-mt-gray-op">
                  <div class="me-3">
                    <p class="fs-base mb-0">
                      Curabitur dapibus metus sed quam faucibus dictum lorem ipsum
                    </p>
                    <p class="fs-sm mb-0">
                      Categoria 3
                    </p>
                  </div>
                </div>
              </a>
              <a class="block block-rounded block-link-rotate mb-2 bg-image" href="javascript:void(0)"
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/book3.png'; ?>');">
                <div
                  class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between text-white bg-mt-gray-op">
                  <div class="me-3">
                    <p class="fs-base mb-0">
                      Curabitur dapibus metus sed quam faucibus dictum lorem ipsum
                    </p>
                    <p class="fs-sm mb-0">
                      Categoria 3
                    </p>
                  </div>
                </div>
              </a>

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



    </div>
    <!-- END Highlight Media -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>