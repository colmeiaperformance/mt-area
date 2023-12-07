<?php
	
	use MtArea\Services\Model\Movements;
	
	include("header.php");
    require_once("Services/Model/Movements.php");
    require_once("Services/Helpers/Util.php");
	
	$movements = new Movements();
?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo esc_url(the_post_thumbnail_url()); ?>');">
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
    <h2 class="content-heading mt-3">
      <i class="fa fa-angle-right text-muted me-1"></i> <?php _e('Resumo do mês', 'mt-area'); ?>
    </h2>
    <div class="block block-rounded">
      <div class="block-content block-content-full">
        <div class="row text-center">
          <div class="col-md-4 py-3">
            <div class="fs-1 fw-light text-success mb-1">
<!--              R$4.968,00-->
                R$<?= number_format($movements->getTotal(), 2, ',', '.') ?>
            </div>
            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)"><?php _e('Compras', 'mt-area'); ?></a>
          </div>
          <div class="col-md-4 py-3">
            <div class="fs-1 fw-light text-success mb-1">
              +R$780,00
            </div>
            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)"><?php _e('Assinaturas', 'mt-area'); ?></a>
          </div>
          <div class="col-md-4 py-3">
            <div class="fs-1 fw-light text-danger mb-1">
              -R$49,00
            </div>
            <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)"><?php _e('Cancelamentos', 'mt-area'); ?></a>
          </div>
        </div>
      </div>
    </div>
    <!-- END Quick Overview -->

    <!-- Latest Transactions -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted me-1"></i> Últimas Transações
    </h2>
  
    <?php
        foreach ($movements->all() as $movement):
        
    ?>
        <a class="block block-rounded block-link-shadow border-start <?= $movement->operacao === '+' ? 'border-success' : 'border-danger' ?> border-3" href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                <div>
                    <p class="fs-lg fw-semibold mb-0">
                        <?= $movement->operacao ?>$<?= number_format($movement->valor, 2, ',', '.') ?>
                    </p>
                    <p class="text-muted mb-0">
                        <?= $movement->ini ?> <?= getTipo($movement->tipo) ?>
                    </p>
                </div>
                <div class="ms-3">
                    <i class="fa <?= $movement->operacao === '+' ? 'fa-arrow-left text-success' : 'fa-arrow-right text-danger' ?>"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <span class="fs-sm text-muted">
                  De: <?= $movement->de_onde_e ?> <strong><?= $movement->nome ?></strong> em <strong><?= date_format(date_create($movement->created_at), 'd \d\e F \d\e Y H:i') ?></strong>
                </span>
            </div>
        </a>
    <?php endforeach; ?>
    <!-- END Latest Transactions -->

    <!-- View More -->
    <div class="text-center mb-5">
      <a class="btn btn-sm btn-alt-primary fw-semibold" href="javascript:void(0)">
      <?php _e('Veja mais', 'mt-area'); ?> <i class="fa fa-arrow-right opacity-50 me-1"></i>
      </a>
    </div>
    <!-- END View More -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>