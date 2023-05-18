<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( 'template-parts/quick-menu' ) ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_livros.jpg'; ?>');">
    <div class="bg-mt-orange-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          Livros
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

      <!-- Book -->
      <div class="col-xxl-6">
        <div class="block block-rounded border-start border-warning border-3 block-link-shadow">

          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div class="col-md-4 text-center text-md-start flex-shrink-1">
                <img src="<?php echo get_template_directory_uri() . '/assets/media/mt/book.png'; ?>" alt="">
              </div>
              <div class="block-content d-block d-flex flex-column justify-content-around">
                <p class="fw-semibold text-dark text-center text-md-start mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
                <span class="fs-sm text-muted">Autoria: <strong>João Torres</strong><br></span>
                <span class="fs-sm text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quis
                  animi repudiandae aliquam. Consequuntur, fuga!<br></span>
                <div class="d-block text-center d-md-flex justify-content-between">
                  <p class="fs-3 text-success mb-1">
                    R$ 49,90
                  </p>
                  <span class="btn btn-lg btn-success">
                    <i class="fa fa-shopping-cart me-2"></i> Adquirir
                  </span>
                </div>
              </div>

            </div>
          </div>

          <div class="accordion block-content block-content-full block-content-sm bg-body-light p-0" id="accordion1">
            <button id="book1" class="accordion-header accordion-button collapsed bg-transparent" type="button"
              data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
              Saiba Mais
            </button>
            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="book1" data-bs-parent="#accordion1"
              style="">
              <div class="accordion-body">
                <span class="fs-sm text-muted">Editora: <strong>Nome da Editora</strong></span><br>
                <span class="fs-sm text-muted">Edição: <strong>2ª</strong></span><br>
                <span class="fs-sm text-muted">Número de Páginas: <strong>240</strong></span><br>
                <span class="fs-sm text-muted">Data da Publicação: <strong>05/12/2022</strong></span><br>
                <span class="fs-sm text-muted">Dimensões: <strong>20.8 x 13.8 x 1 cm</strong></span><br>
                <span class="fs-sm text-muted">Idioma: <strong>Português</strong></span><br>
                <span class="fs-sm text-muted">ISBN-10: <strong>3459210234</strong></span><br>
                <span class="fs-sm text-muted">Tipo: <strong>Capa comum</strong></span><br>
                <span class="fs-sm text-muted">Descrição: <strong>Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Magni laboriosam sunt voluptas voluptate distinctio accusantium, amet quam quos nihil facere
                    reiciendis doloremque aliquid quo iste a. Alias nesciunt quisquam illum.</strong></span>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END Book -->

      <!-- Book -->
      <div class="col-xxl-6">
        <div class="block block-rounded border-start border-warning border-3 block-link-shadow">

          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div class="col-md-4 text-center text-md-start flex-shrink-1">
                <img src="<?php echo get_template_directory_uri() . '/assets/media/mt/book2.png'; ?>" alt="">
              </div>
              <div class="block-content d-block d-flex flex-column justify-content-around">
                <p class="fw-semibold text-dark text-center text-md-start mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
                <span class="fs-sm text-muted">Autoria: <strong>João Torres</strong><br></span>
                <span class="fs-sm text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas rem
                  similique officia, ipsum quae nulla.<br></span>
                <div class="d-block text-center d-md-flex justify-content-between">
                  <p class="fs-3 text-success mb-1">
                    R$ 49,90
                  </p>
                  <span class="btn btn-lg btn-success">
                    <i class="fa fa-shopping-cart me-2"></i> Adquirir
                  </span>
                </div>
              </div>

            </div>
          </div>

          <div class="accordion block-content block-content-full block-content-sm bg-body-light p-0" id="accordion2">
            <button id="book2" class="accordion-header accordion-button collapsed bg-transparent" type="button"
              data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
              Saiba Mais
            </button>
            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="book2" data-bs-parent="#accordion2"
              style="">
              <div class="accordion-body">
                <span class="fs-sm text-muted">Editora: <strong>Nome da Editora</strong></span><br>
                <span class="fs-sm text-muted">Edição: <strong>2ª</strong></span><br>
                <span class="fs-sm text-muted">Número de Páginas: <strong>240</strong></span><br>
                <span class="fs-sm text-muted">Data da Publicação: <strong>05/12/2022</strong></span><br>
                <span class="fs-sm text-muted">Dimensões: <strong>20.8 x 13.8 x 1 cm</strong></span><br>
                <span class="fs-sm text-muted">Idioma: <strong>Português</strong></span><br>
                <span class="fs-sm text-muted">ISBN-10: <strong>3459210234</strong></span><br>
                <span class="fs-sm text-muted">Tipo: <strong>Capa comum</strong></span><br>
                <span class="fs-sm text-muted">Descrição: <strong>Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Magni laboriosam sunt voluptas voluptate distinctio accusantium, amet quam quos nihil facere
                    reiciendis doloremque aliquid quo iste a. Alias nesciunt quisquam illum.</strong></span>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END Book -->

      <!-- Book -->
      <div class="col-xxl-6">
        <div class="block block-rounded border-start border-warning border-3 block-link-shadow">

          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div class="col-md-4 text-center text-md-start flex-shrink-1">
                <img src="<?php echo get_template_directory_uri() . '/assets/media/mt/book3.png'; ?>" alt="">
              </div>
              <div class="block-content d-block d-flex flex-column justify-content-around">
                <p class="fw-semibold text-dark text-center text-md-start mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
                <span class="fs-sm text-muted">Autoria: <strong>João Torres</strong><br></span>
                <span class="fs-sm text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                  nihil quo ipsa voluptatem, ipsam impedit.<br></span>
                <div class="d-block text-center d-md-flex justify-content-between">
                  <p class="fs-3 text-success mb-1">
                    R$ 49,90
                  </p>
                  <span class="btn btn-lg btn-success">
                    <i class="fa fa-shopping-cart me-2"></i> Adquirir
                  </span>
                </div>
              </div>

            </div>
          </div>

          <div class="accordion block-content block-content-full block-content-sm bg-body-light p-0" id="accordion3">
            <button id="book3" class="accordion-header accordion-button collapsed bg-transparent" type="button"
              data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              Saiba Mais
            </button>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="book3" data-bs-parent="#accordion3"
              style="">
              <div class="accordion-body">
                <span class="fs-sm text-muted">Editora: <strong>Nome da Editora</strong></span><br>
                <span class="fs-sm text-muted">Edição: <strong>2ª</strong></span><br>
                <span class="fs-sm text-muted">Número de Páginas: <strong>240</strong></span><br>
                <span class="fs-sm text-muted">Data da Publicação: <strong>05/12/2022</strong></span><br>
                <span class="fs-sm text-muted">Dimensões: <strong>20.8 x 13.8 x 1 cm</strong></span><br>
                <span class="fs-sm text-muted">Idioma: <strong>Português</strong></span><br>
                <span class="fs-sm text-muted">ISBN-10: <strong>3459210234</strong></span><br>
                <span class="fs-sm text-muted">Tipo: <strong>Capa comum</strong></span><br>
                <span class="fs-sm text-muted">Descrição: <strong>Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Magni laboriosam sunt voluptas voluptate distinctio accusantium, amet quam quos nihil facere
                    reiciendis doloremque aliquid quo iste a. Alias nesciunt quisquam illum.</strong></span>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END Book -->

      <!-- Book -->
      <div class="col-xxl-6">
        <div class="block block-rounded border-start border-warning border-3 block-link-shadow">

          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div class="d-md-flex flex-grow-1">
              <div class="col-md-4 text-center text-md-start flex-shrink-1">
                <img src="<?php echo get_template_directory_uri() . '/assets/media/mt/book4.png'; ?>" alt="">
              </div>
              <div class="block-content d-block d-flex flex-column justify-content-around">
                <p class="fw-semibold text-dark text-center text-md-start mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
                <span class="fs-sm text-muted">Autoria: <strong>João Torres</strong><br></span>
                <span class="fs-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, dolores
                  vero eaque ab aliquid qui.<br></span>
                <div class="d-block text-center d-md-flex justify-content-between">
                  <p class="fs-3 text-success mb-1">
                    R$ 49,90
                  </p>
                  <span class="btn btn-lg btn-success">
                    <i class="fa fa-shopping-cart me-2"></i> Adquirir
                  </span>
                </div>
              </div>

            </div>
          </div>

          <div class="accordion block-content block-content-full block-content-sm bg-body-light p-0" id="accordion4">
            <button id="book4" class="accordion-header accordion-button collapsed bg-transparent" type="button"
              data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
              Saiba Mais
            </button>
            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="books" data-bs-parent="#accordion4"
              style="">
              <div class="accordion-body">
                <span class="fs-sm text-muted">Editora: <strong>Nome da Editora</strong></span><br>
                <span class="fs-sm text-muted">Edição: <strong>2ª</strong></span><br>
                <span class="fs-sm text-muted">Número de Páginas: <strong>240</strong></span><br>
                <span class="fs-sm text-muted">Data da Publicação: <strong>05/12/2022</strong></span><br>
                <span class="fs-sm text-muted">Dimensões: <strong>20.8 x 13.8 x 1 cm</strong></span><br>
                <span class="fs-sm text-muted">Idioma: <strong>Português</strong></span><br>
                <span class="fs-sm text-muted">ISBN-10: <strong>3459210234</strong></span><br>
                <span class="fs-sm text-muted">Tipo: <strong>Capa comum</strong></span><br>
                <span class="fs-sm text-muted">Descrição: <strong>Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit. Magni laboriosam sunt voluptas voluptate distinctio accusantium, amet quam quos nihil facere
                    reiciendis doloremque aliquid quo iste a. Alias nesciunt quisquam illum.</strong></span>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END Book -->

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