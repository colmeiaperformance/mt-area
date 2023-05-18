<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( 'template-parts/quick-menu' ) ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_cursos.jpg'; ?>');">
    <div class="bg-mt-blue-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          Cursos
        </h1>
        <h3 class="fw-normal text-white-75 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
          autem veritatis
        </h3>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row">
      <?php get_template_part( '/template-parts/categories-list' ); ?>
    </div>
    <div class="row items-push gap">

      <!-- Course -->
      <div class="col-xxl-6">
        <a class="block block-rounded border-start border-primary border-3 block-link-shadow"
          href="<?php echo home_url( '/course-single' ); ?>">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/photos/photo10.jpg'; ?>');"
                class="col-md-4 pb-8 text-end bg-image">
                <span class="badge bg-gd-sea-op fw-bold p-2 text-uppercase mt-2 me-2">
                  Ao Vivo
                </span>
              </div>
              <div class="block-content">
                <p class="fw-semibold text-dark">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
                <p class="fs-3 text-success mb-1">
                  R$ 299,90
                </p>
              </div>

            </div>
          </div>
          <div
            class="block-content block-content-full block-content-sm bg-body-light d-block d-md-flex justify-content-evenly">
            <span class="fs-sm text-muted">Instrutor: <strong>João Torres</strong><br></span>
            <span class="fs-sm text-muted">Data: <strong>15/03/2023</strong><br></span>
            <span class="fs-sm text-muted">Local: <strong>São Paulo/SP</strong></span>
          </div>
        </a>
      </div>
      <!-- END Course -->
      <!-- Course -->
      <div class="col-xxl-6">
        <a class="block block-rounded border-start border-primary border-3 block-link-shadow"
          href="<?php echo home_url( '/course-single' ); ?>">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/photos/photo11.jpg'; ?>');"
                class="col-md-4 pb-8 text-end bg-image">
                <span class="badge bg-gd-sea-op fw-bold p-2 text-uppercase mt-2 me-2">
                  Presencial
                </span>
              </div>
              <div class="block-content">
                <p class="fw-semibold text-dark">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore optio magni ipsam dolores, quidem
                  maxime
                </p>
                <p class="fs-3 text-success mb-1">
                  R$ 299,90
                </p>
              </div>

            </div>
          </div>
          <div
            class="block-content block-content-full block-content-sm bg-body-light d-block d-md-flex justify-content-evenly">
            <span class="fs-sm text-muted">Instrutor: <strong>João Torres</strong><br></span>
            <span class="fs-sm text-muted">Data: <strong>15/03/2023</strong><br></span>
            <span class="fs-sm text-muted">Local: <strong>São Paulo/SP</strong></span>
          </div>
        </a>
      </div>
      <!-- END Course -->
      <!-- Course -->
      <div class="col-xxl-6">
        <a class="block block-rounded border-start border-primary border-3 block-link-shadow"
          href="<?php echo home_url( '/course-single' ); ?>">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/photos/photo12.jpg'; ?>');"
                class="col-md-4 pb-8 text-end bg-image">
                <span class="badge bg-gd-sea-op fw-bold p-2 text-uppercase mt-2 me-2">
                  Presencial
                </span>
              </div>
              <div class="block-content">
                <p class="fw-semibold text-dark">
                  Cupiditate eveniet, recusandae sapiente accusantium inventore, officiis a explicabo odit porro
                  perspiciatis, vitae reprehenderit
                </p>
                <p class="fs-3 text-success mb-1">
                  R$ 299,90
                </p>
              </div>

            </div>
          </div>
          <div
            class="block-content block-content-full block-content-sm bg-body-light d-block d-md-flex justify-content-evenly">
            <span class="fs-sm text-muted">Instrutor: <strong>João Torres</strong><br></span>
            <span class="fs-sm text-muted">Data: <strong>15/03/2023</strong><br></span>
            <span class="fs-sm text-muted">Local: <strong>São Paulo/SP</strong></span>
          </div>
        </a>
      </div>
      <!-- END Course -->
      <!-- Course -->
      <div class="col-xxl-6">
        <a class="block block-rounded border-start border-primary border-3 block-link-shadow"
          href="<?php echo home_url( '/course-single' ); ?>">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div
                style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/photos/photo13.jpg'; ?>');"
                class="col-md-4 pb-8 text-end bg-image">
                <span class="badge bg-gd-sea-op fw-bold p-2 text-uppercase mt-2 me-2">
                  Online
                </span>
              </div>
              <div class="block-content">
                <p class="fw-semibold text-dark">
                  Suscipit animi architecto earum neque sit repellat reiciendis fuga enim dolores corporis veritatis,
                  voluptatibus error ab
                </p>
                <p class="fs-3 text-success mb-1">
                  R$ 299,90
                </p>
              </div>

            </div>
          </div>
          <div
            class="block-content block-content-full block-content-sm bg-body-light d-block d-md-flex justify-content-evenly">
            <span class="fs-sm text-muted">Instrutor: <strong>João Torres</strong><br></span>
            <span class="fs-sm text-muted">Data: <strong>15/03/2023</strong><br></span>
            <span class="fs-sm text-muted">Local: <strong>São Paulo/SP</strong></span>
          </div>
        </a>
      </div>
      <!-- END Course -->






    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center push">
        <li class="page-item active">
          <a class="page-link" href="javascript:void(0)">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)">4</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)">5</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)" aria-label="Next">
            <span aria-hidden="true">
              <i class="fa fa-angle-right"></i>
            </span>
            <span class="visually-hidden">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- END Pagination -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>