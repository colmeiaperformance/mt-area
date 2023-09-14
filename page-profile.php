<?php include("header.php"); ?>

<?php
// Verifica se o usuário está logado
if (!is_user_logged_in()) {
  wp_redirect(home_url());
  exit;
}
?>
<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <!-- Page Content -->
  <div class="content content-full">
    <!-- Hero -->
    <div class="rounded border overflow-hidden push">
      <div class="bg-mt-default-op pt-5"></div>
      <div class="px-4 py-3 bg-body-extra-light d-flex flex-column flex-md-row align-items-center">
        <a class="d-block img-link mt-n5" href="be_pages_generic_profile_v2.html">
          <img class="img-avatar img-avatar128 img-avatar-thumb" src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar13.jpg'; ?>" alt="">
        </a>
        <div class="ms-3 flex-grow-1 text-center text-md-start my-3 my-md-0">
          <h1 class="fs-4 fw-bold mb-1">John Smith</h1>
          <h2 class="fs-sm fw-medium text-muted mb-0">
            <?php _e('Meditante', 'mt-area'); ?>
          </h2>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Edit Account -->
    <div class="block block-bordered block-rounded">
      <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
        <li class="nav-item">
          <button class="nav-link space-x-1 active" id="account-profile-tab" data-bs-toggle="tab" data-bs-target="#account-profile" role="tab" aria-controls="account-profile" aria-selected="true">
            <i class="fa fa-user-circle d-sm-none"></i>
            <span class="d-none d-sm-inline"><?php _e('Perfil', 'mt-area'); ?></span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link space-x-1" id="account-courses-tab" data-bs-toggle="tab" data-bs-target="#account-courses" role="tab" aria-controls="account-courses" aria-selected="false">
            <i class="fa fa-asterisk d-sm-none"></i>
            <span class="d-none d-sm-inline"><?php _e('Histórico de Compra', 'mt-area'); ?></span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link space-x-1" id="account-sign-tab" data-bs-toggle="tab" data-bs-target="#account-sign" role="tab" aria-controls="account-sign" aria-selected="false">
            <i class="fa fa-credit-card d-sm-none"></i>
            <span class="d-none d-sm-inline">Minha Assinatura</span>
          </button>
        </li>
      </ul>
      <div class="block-content tab-content">
        <div class="tab-pane active" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab" tabindex="0">
          <?php echo get_template_part('/template-parts/profile-user') ?>
        </div>
        <div class="tab-pane" id="account-courses" role="tabpanel" aria-labelledby="account-courses-tab" tabindex="0">
          <?php echo get_template_part('/template-parts/profile-purchases') ?>
        </div>
        <div class="tab-pane" id="account-sign" role="tabpanel" aria-labelledby="account-sign-tab" tabindex="0">
          <?php echo get_template_part('/template-parts/profile-signature') ?>
        </div>
      </div>
    </div>
    <!-- END Edit Account -->
  </div>
  <!-- END Page Content -->



</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>