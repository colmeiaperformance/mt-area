<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
<?php get_template_part( '/patterns/quick-menu' ) ?>


  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/photos/photo2@2x.jpg'; ?>');">
    <div class="bg-white-75">
      <div class="content content-top content-full text-center pb-5">
        <h1 class="fw-bold my-5">
          Lorem ipsum dolor sit amet consectetur adipisicing elit
        </h1>
        <p class="my-5 pb-1">
          <a class="btn btn-hero btn-success" href="javascript:void(0)" data-toggle="click-ripple">
            <i class="fa fa-shopping-cart opacity-50 me-1"></i> Adquira Agora
          </a>
        </p>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-boxed">
    <!-- Meta -->
    <div class="row items-push">
      <div class="col-md-4">
        <a class="block block-rounded block-bordered block-link-shadow h-100 mb-0" href="javascript:void(0)">
          <div class="block-content block-content-full text-center bg-body-light">
            <img class="img-avatar img-avatar-thumb" src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar16.jpg'; ?>" alt="">
            <div class="mt-2">
              <p class="fw-semibold mb-0">
                João Torres <span class="fw-normal text-muted mb-0">| Instrutor</span>
              </p>
            </div>
          </div>
          <div class="block-content block-content-full text-center">
            <div class="row g-sm">
              <div class="col-6">
                <div class="item item-circle mx-auto">
                  <i class="fa fa-2x fa-fw fa-calendar me-1"></i>
                </div>
                <p class="text-muted mb-0">
                  15/03/2023
                </p>
              </div>
              <div class="col-6">
                <div class="item item-circle mx-auto">
                  <i class="fa fa-fw fa-location-dot fa-2x text-dark"></i>
                </div>
                <p class="text-muted mb-0">
                  São Paulo/SP
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-8">
        <div class="block block-rounded block-bordered block-link-shadow h-100 mb-0">
          <div class="block-content h-100 pb-4">
            <table class="table table-borderless table-striped h-100 align-middle">
              <tbody>
                <tr>
                  <td>
                    <span class="fs-lg fw-bold">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit
                    </span>

                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="fw-medium d-block d-md-flex justify-content-between align-items-center">
                      <span class="fs-1 fw-bold text-success">R$ 290,90</span>
                      <a href="#" class="btn btn-success text-uppercase text-white mt-2 mt-md-auto">
                        <i class="fa fa-fw fa-shopping-cart me-1"></i> Adquira Agora
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fa fa-fw fa-tags me-1"></i>
                    <span class="badge bg-primary">Meditação</span>
                    <span class="badge bg-primary">Dicas</span>
                    <span class="badge bg-primary">Presenciais</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- END Meta -->

    <!-- Lessons -->
    <div class="block block-rounded block-bordered">
      <div class="block-content">
        <table class="table table-striped table-borderless table-vcenter">
          <tbody>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  01
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 1</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 20:52
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Introdução à Meditação
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  02
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 2</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 11:03
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  03
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 3</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 17:23
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Magni unde eveniet libero ea, repellendus obcaecati asperiores temporibus id excepturi porro quasi
                    et minus cupiditate error ducimus natus rerum at sapiente
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  04
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 4</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 32:15
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">

                    Voluptas sunt voluptates aperiam inventore, reiciendis, distinctio eligendi voluptatum voluptatem
                    repudiandae modi dolorum
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  05
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 5</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 21:33
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Ullam ipsam voluptatibus, quidem, repellat libero praesentium at neque consectetur possimus adipisci
                    eligendi ratione laboriosam laudantium eius
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  06
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 6</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 17:26
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Navigation Patterns
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  07
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 7</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 19:18
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Facilis maiores ducimus nemo ullam suscipit nobis, sequi
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  08
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 8</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 23:02
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Corporis sunt sapiente hic, iste aspernatur qui
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  09
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 9</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 12:15
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Aliquid veniam nihil hic minima laborum ducimus repudiandae perferendis fuga
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center w-25 d-none d-md-table-cell">
                <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                  10
                </a>
              </td>
              <td>
                <div class="py-4">
                  <div class="fs-sm fw-bold text-uppercase mb-2">
                    <span class="text-muted me-3">Módulo 10</span>
                    <span class="text-primary">
                      <i class="fa fa-clock"></i> 18:69
                    </span>
                  </div>
                  <a class="h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                    Conclusão
                  </a>
                  <p class="text-muted mb-0">
                    Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit
                    sollicitudin orci, eget dictum leo mi nec lectus.
                  </p>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- END Lessons -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>