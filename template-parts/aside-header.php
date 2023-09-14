<div class="bg-image" style="background-image: url('<?php //echo get_template_directory_uri() . '/assets/media/various/bg_side_overlay_header.jpg';
                                                    ?>');">
  <div class="bg-primary-op">
    <div class="content-header">
      <!-- User Avatar -->
      <span class="me-1">
        <img class="img-avatar img-avatar48"
          src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar10.jpg'; ?>"
          alt="">
      </span>
      <!-- END User Avatar -->

      <!-- User Info -->
      <div class="ms-2">
        <span class="text-white fw-semibold" href="#"><?php $current_user = wp_get_current_user();
if ($current_user->exists()) {
    echo $current_user->display_name;
}  ?></span>
        <div class="text-white-75 fs-sm">
          <?php
          $role = wp_get_current_user()->roles[0];
$role_name = $role ? wp_roles()->get_names()[$role] : '';
/* Or directly access WP_Roles::$role_names:
      $role_name = $role ? wp_roles()->role_names[ $role ] : '';
      */
echo $role_name;
?>
          <?php // echo implode(', ', $current_user->roles);
?>
        </div>
      </div>
      <!-- END User Info -->

      <!-- Close Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
        <i class="fa fa-times-circle"></i>
      </a>
      <!-- END Close Side Overlay -->
    </div>
  </div>
</div>