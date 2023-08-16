<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/patterns/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_cursos.jpg'; ?>');">
    <div class="bg-mt-default-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">

    <!-- Quick Overview -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted me-1"></i> Quick Overview
    </h2>
    <div class="block block-rounded">
      <div class="block-content block-content-full">
        <div class="row text-center">
          <div class="col-md-4 py-3">
            <div class="fs-1 fw-light text-dark mb-1">
              $49.680
            </div>
            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Balance</a>
          </div>
          <div class="col-md-4 py-3">
            <div class="fs-1 fw-light text-success mb-1">
              +$780
            </div>
            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Income Today</a>
          </div>
          <div class="col-md-4 py-3">
            <div class="fs-1 fw-light text-danger mb-1">
              -$49
            </div>
            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Expenses Today</a>
          </div>
        </div>
      </div>
    </div>
    <!-- END Quick Overview -->

    <!-- Latest Transactions -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted me-1"></i> Latest Transactions
    </h2>
    <a class="block block-rounded block-link-shadow border-start border-success border-3" href="javascript:void(0)">
      <div class="block-content block-content-full d-flex align-items-center justify-content-between">
        <div>
          <p class="fs-lg fw-semibold mb-0">
            +$250,00
          </p>
          <p class="text-muted mb-0">
            xxx-485 Account
          </p>
        </div>
        <div class="ms-3">
          <i class="fa fa-arrow-left text-success"></i>
        </div>
      </div>
      <div class="block-content block-content-full block-content-sm bg-body-light">
        <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>June 10, 2018 -
            10:06</strong></span>
      </div>
    </a>
    <a class="block block-rounded block-link-shadow border-start border-danger border-3" href="javascript:void(0)">
      <div class="block-content block-content-full d-flex align-items-center justify-content-between">
        <div>
          <p class="fs-lg fw-semibold mb-0">
            -$540,00
          </p>
          <p class="text-muted mb-0">
            xxx-7898 VISA
          </p>
        </div>
        <div class="ms-3">
          <i class="fa fa-arrow-right text-danger"></i>
        </div>
      </div>
      <div class="block-content block-content-full block-content-sm bg-body-light">
        <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>June 5, 2018 - 08:46</strong></span>
      </div>
    </a>
    <a class="block block-rounded block-link-shadow border-start border-success border-3" href="javascript:void(0)">
      <div class="block-content block-content-full d-flex align-items-center justify-content-between">
        <div>
          <p class="fs-lg fw-semibold mb-0">
            +$120,00
          </p>
          <p class="text-muted mb-0">
            xxx-485 Account
          </p>
        </div>
        <div class="ms-3">
          <i class="fa fa-arrow-left text-success"></i>
        </div>
      </div>
      <div class="block-content block-content-full block-content-sm bg-body-light">
        <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>May 25, 2018 - 12:25</strong></span>
      </div>
    </a>
    <a class="block block-rounded block-link-shadow border-start border-success border-3" href="javascript:void(0)">
      <div class="block-content block-content-full d-flex align-items-center justify-content-between">
        <div>
          <p class="fs-lg fw-semibold mb-0">
            +$698,00
          </p>
          <p class="text-muted mb-0">
            xxx-796 Account
          </p>
        </div>
        <div class="ms-3">
          <i class="fa fa-arrow-left text-success"></i>
        </div>
      </div>
      <div class="block-content block-content-full block-content-sm bg-body-light">
        <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>May 23, 2018 - 14:23</strong></span>
      </div>
    </a>
    <!-- END Latest Transactions -->

    <!-- View More -->
    <div class="text-center">
      <a class="btn btn-sm btn-alt-secondary fw-semibold" href="javascript:void(0)">
        <i class="fa fa-arrow-down opacity-50 me-1"></i> Veja mais..
      </a>
    </div>
    <!-- END View More -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>