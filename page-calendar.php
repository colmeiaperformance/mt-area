<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
<?php get_template_part( '/patterns/quick-menu' ) ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_agenda.jpg'; ?>');">
    <div class="bg-mt-dark-blue-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          Agenda Completa
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
    <div class="row items-push">

      <div class="w-100">
        <!--  Latest Events -->
        <div class="block block-rounded block-mode-loading-refresh">
          <div class="block-header block-header-default text-white bg-gd-primary py-3">
            <h3 class="block-title">
              Destaques da Agenda
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
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm js-dataTable-buttons">
              <thead>
                <tr class="text-uppercase">
                  <th>Evento</th>
                  <th>Data</th>
                  <th class="d-none d-xl-table-cell">Tipo</th>
                  <th>Instrutor</th>
                  <th class="d-none d-sm-table-cell text-end" style="width: 25%;">Local</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span class="fw-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">01/03/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-warning">Residencial</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    São Paulo/SP
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Nunc eget lobortis augue</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">04/03/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-info">Curso</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Maria Barros</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Rio de Janeiro/RJ
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Maecenas egestas sollicitudin lorem, at accumsan erat ullamcorper
                      in</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">10/03/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-warning">Residencial</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Márcio Nunes</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Fortaleza/CE
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Mauris orci erat, feugiat non ex condimentum, scelerisque accumsan
                      libero</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">20/03/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-info">Curso</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Minas Gerais
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Morbi at ipsum turpis</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">02/04/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-success">Geral</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Joana Machado</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Curitiba/PR
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Phasellus nec metus eget justo aliquam semper sed et est</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">20/04/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-danger">Live</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Online
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Maecenas ut diam vitae magna vehicula volutpat volutpat a magna</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">03/05/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-success">Geral</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Maria Barros</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    São Paulo/SP
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Curabitur dapibus metus sed quam faucibus dictum</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">11/05/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-success">Geral</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Joana Machado</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Rio de Janeiro/RJ
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Vero eum molestiae accusantium reprehenderit distinctio voluptatibus quas
                      consectetur qui</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">19/05/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-warning">Residencial</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Porto Alegre/RS
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Consectetur adipisicing elit. Iste, provident</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">27/05/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-danger">Live</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Online
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- END Latest Events -->
      </div>

    </div>

    
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<script>
  jQuery(".nav-main-link .nav-main-link-name:contains('Residenciais')").parent().removeClass("active");
  jQuery(".nav-main-link .nav-main-link-name:contains('Recorrentes')").parent().removeClass("active");
</script>

<?php include("footer.php"); ?>