<div class="bg-body-light border-top border-bottom d-none d-md-block">
  <div class="content content-full py-1">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-sm text-uppercase fw-bold mt-2 mb-0 mb-sm-2">
        <i class="fa fa-angle-right fa-fw text-primary"></i> Bem-Vindo(a), <?php display_user_info('name');  ?>
      </h1>
      <nav aria-label="breadcrumb">
        <?php the_breadcrumb(); ?>
      </nav>
    </div>
  </div>
</div>

<!-- Quick Menu -->
<nav class="bg-body-dark">
  <div class="content">
    <div class="row justify-content-center g-sm push">
      <div class="col-4 col-md-2 col-xl-2">
        <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo '';?>');"
          href="<?php echo home_url(); ?>">
          <div class="block-content block-content-full bg-mt-default bg-opacity-75 ratio ratio-16x9">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <img class="img-fluid w-50"
                  src="<?php echo get_template_directory_uri() . '/assets/media/mt/logo-quickmenu.svg'; ?>" alt="">
                <div class="fw-semibold mt-3 text-uppercase text-white quick-menu-text">Painel</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-4 col-md-2 col-xl-2">
        <a class="block block-rounded text-center bg-image"
          style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_agenda.jpg'; ?>');"
          href="<?php echo home_url( '/calendario' ); ?>">
          <div class="block-content block-content-full bg-mt-dark-blue-op ratio ratio-16x9">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <i class="fa fa-2x fa-calendar text-white"></i>
                <div class="fw-semibold mt-3 text-uppercase text-white quick-menu-text">Agenda</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-4 col-md-2 col-xl-2">
        <a class="block block-rounded text-center bg-image"
          style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_artigos.jpg'; ?>');"
          href="<?php echo home_url( '/blog' ); ?>">
          <div class="block-content block-content-full bg-mt-green-op ratio ratio-16x9">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <i class="fa fa-2x fa-file-alt text-white"></i>
                <div class="fw-semibold mt-3 text-uppercase text-white quick-menu-text">Conhecimento</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-4 col-md-2 col-xl-2">
        <a class="block block-rounded text-center bg-image"
          style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_cursos.jpg'; ?>');"
          href="<?php echo home_url( '/cursos' ); ?>">
          <div class="block-content block-content-full bg-mt-blue-op ratio ratio-16x9">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <i class="fa fa-2x fa-chalkboard text-white"></i>
                <div class="fw-semibold mt-3 text-uppercase text-white quick-menu-text">Academia MT</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-4 col-md-2 col-xl-2">
        <a class="block block-rounded text-center bg-image"
          style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_livros.jpg'; ?>');"
          href="<?php echo home_url( '/livros' ); ?>">
          <div class="block-content block-content-full bg-mt-orange-op ratio ratio-16x9">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <i class="fa fa-2x fa-book text-white"></i>
                <div class="fw-semibold mt-3 text-uppercase text-white quick-menu-text">Livros</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-4 col-md-2 col-xl-2">
        <a class="block block-rounded text-center bg-image"
          style="background-image: url('<?php //echo get_template_directory_uri() . '/assets/media/mt/qm_videos.jpg'; ?>');"
          href="<?php echo home_url( '/sign' ); ?>">
          <div class="block-content block-content-full bg-mt-default ratio ratio-16x9">
            <div class="d-flex justify-content-center align-items-center">
              <div>
                <i class="fa fa-2x fa-hands-holding-heart text-white"></i>
                <div class="fw-semibold mt-3 text-uppercase text-white quick-menu-text">Seja sócio</div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</nav>
<!-- END Quick Menu -->