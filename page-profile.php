<?php include("header.php"); ?>

<?php
// Verifica se o usuário está logado
if (!is_user_logged_in()) {
  wp_redirect( home_url() );
  exit;
}
?>
<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( 'template-parts/quick-menu' ) ?>

  <!-- Page Content -->
  <div class="content content-full">
    <!-- Hero -->
    <div class="rounded border overflow-hidden push">
      <div class="bg-mt-default-op pt-5"></div>
      <div class="px-4 py-3 bg-body-extra-light d-flex flex-column flex-md-row align-items-center">
        <a class="d-block img-link mt-n5" href="be_pages_generic_profile_v2.html">
          <img class="img-avatar img-avatar128 img-avatar-thumb"
            src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar13.jpg'; ?>" alt="">
        </a>
        <div class="ms-3 flex-grow-1 text-center text-md-start my-3 my-md-0">
          <h1 class="fs-4 fw-bold mb-1">John Smith</h1>
          <h2 class="fs-sm fw-medium text-muted mb-0">
            Edit Account
          </h2>
        </div>
        <div class="space-x-1">
          <a href="be_pages_generic_profile_v2.html" class="btn btn-sm btn-alt-secondary space-x-1">
            <i class="fa fa-arrow-left opacity-50"></i>
            <span>Back to Profile</span>
          </a>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Edit Account -->
    <div class="block block-bordered block-rounded">
      <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
        <li class="nav-item">
          <button class="nav-link space-x-1 active" id="account-profile-tab" data-bs-toggle="tab"
            data-bs-target="#account-profile" role="tab" aria-controls="account-profile" aria-selected="true">
            <i class="fa fa-user-circle d-sm-none"></i>
            <span class="d-none d-sm-inline">Perfil</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link space-x-1" id="account-password-tab" data-bs-toggle="tab"
            data-bs-target="#account-password" role="tab" aria-controls="account-password" aria-selected="false">
            <i class="fa fa-asterisk d-sm-none"></i>
            <span class="d-none d-sm-inline">Senha</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link space-x-1" id="account-connections-tab" data-bs-toggle="tab"
            data-bs-target="#account-connections" role="tab" aria-controls="account-connections" aria-selected="false">
            <i class="fa fa-share-alt d-sm-none"></i>
            <span class="d-none d-sm-inline">Conexões</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link space-x-1" id="account-billing-tab" data-bs-toggle="tab"
            data-bs-target="#account-billing" role="tab" aria-controls="account-billing" aria-selected="false">
            <i class="fa fa-credit-card d-sm-none"></i>
            <span class="d-none d-sm-inline">Pagamento</span>
          </button>
        </li>
      </ul>
      <div class="block-content tab-content">
        <div class="tab-pane active" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab"
          tabindex="0">
          <div class="row push p-sm-2 p-lg-4">
            <div class="offset-xl-1 col-xl-4 order-xl-1">
              <p class="bg-body-light p-4 rounded-3 text-muted fs-sm">
                Your account's vital info. Your username will be publicly visible.
              </p>
            </div>
            <div class="col-xl-6 order-xl-0">
              <?php
              // Obtém as informações do usuário atual
                $current_user = wp_get_current_user();

                // Verifica se o formulário foi enviado
                if (isset($_POST['update_profile'])) {

                  // Obtém os valores enviados pelo formulário
                  $user_email = sanitize_email($_POST['user_email']);
                  $user_first_name = sanitize_text_field($_POST['user_first_name']);
                  $user_last_name = sanitize_text_field($_POST['user_last_name']);
                  $user_display_name = sanitize_text_field($_POST['display_name']);
                  $user_nickname = sanitize_text_field($_POST['nickname']);
                  $user_website = esc_url($_POST['user_website']);
                  $user_bio = esc_textarea($_POST['user_bio']);
                  $user_password = $_POST['password'];

                  // Atualiza as informações do usuário
                  $user_id = get_current_user_id();
                  $user_args = array(
                    'ID' => $user_id,
                    'user_email' => $user_email,
                    'first_name' => $user_first_name,
                    'last_name' => $user_last_name,
                    'display_name' => $user_display_name,
                    'nickname' => $user_nickname,
                    'user_url' => $user_website,
                    'description' => $user_bio
                  );
                  
                  
                  if ($user_password) {
                    $user_args['user_pass'] = $user_password;
                  }

                  


                  wp_update_user($user_args);

                  
                  // Verifica se o perfil foi atualizado com sucesso
                    if (!is_wp_error($user_id)) {
                      // Mostra uma mensagem de sucesso
                      echo '<div class="alert alert-success">Seu perfil foi atualizado com sucesso!</div>';
                    }
                    elseif (is_wp_error($user_id)) {
                    // Mostra uma mensagem de erro
                    echo '<div class="alert alert-danger">Ocorreu um erro. Por favor, verifique e envie novamente!</div>';
                    }
                  

                }
                ?>

              <form method="post" action="<?php echo get_permalink(); ?>" enctype="multipart/form-data">
                <div class="mb-3">
                  <label class="form-label" for="user_email">E-mail</label>
                  <input class="form-control" type="email" name="user_email"
                    value="<?php echo $current_user->user_email; ?>" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="user_first_name">Nome</label>
                  <input class="form-control" type="text" name="user_first_name"
                    value="<?php echo $current_user->first_name; ?>">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="user_last_name">Sobrenome</label>
                  <input class="form-control" type="text" name="user_last_name"
                    value="<?php echo $current_user->last_name; ?>">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="display_name">Exibir o nome publicamente como</label>
                  <select class="form-select" name="display_name" id="display_name">
                    <?php
									$public_display                     = array();
									$public_display['display_nickname'] = $current_user->nickname;
									$public_display['display_username'] = $current_user->user_login;

								if ( ! empty( $current_user->first_name ) ) {
									$public_display['display_firstname'] = $current_user->first_name;
								}

								if ( ! empty( $current_user->last_name ) ) {
									$public_display['display_lastname'] = $current_user->last_name;
								}

								if ( ! empty( $current_user->first_name ) && ! empty( $current_user->last_name ) ) {
									$public_display['display_firstlast'] = $current_user->first_name . ' ' . $current_user->last_name;
									$public_display['display_lastfirst'] = $current_user->last_name . ' ' . $current_user->first_name;
								}

								if ( ! in_array( $current_user->display_name, $public_display, true ) ) { // Only add this if it isn't duplicated elsewhere.
									$public_display = array( 'display_displayname' => $current_user->display_name ) + $public_display;
								}

								$public_display = array_map( 'trim', $public_display );
								$public_display = array_unique( $public_display );

								?>
                    <?php foreach ( $public_display as $id => $item ) : ?>
                    <option <?php selected( $current_user->display_name, $item ); ?>><?php echo $item; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="nickname">Apelido (obrigatório)</label>
                  <input class="form-control" type="text" name="nickname" value="<?php echo $current_user->nickname; ?>"
                    required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="user_website">Website</label>
                  <input class="form-control" type="url" name="user_website"
                    value="<?php echo $current_user->user_url; ?>">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="user_bio">Biografia</label>
                  <textarea class="form-control" name="user_bio"><?php echo $current_user->description; ?></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label me-3" for="user_avatar">Foto do perfil</label>
                  <?php //echo get_avatar( $current_user->ID, 100 ); ?>
                  <?php if ( get_option( 'show_avatars' ) ) : ?>

                  <?php echo get_avatar( $current_user->ID, 100, '', 'avatar', $args = array( 'class' => 'img-avatar mb-2' ) ); ?>
                  <p class="description">
                    <?php
										$description = sprintf(
											/* translators: %s: Gravatar URL. */
											__( '<a target="_blank" href="%s">You can change your profile picture on Gravatar</a>.' ),
											__( 'https://en.gravatar.com/' )
										);

									echo apply_filters( 'user_profile_picture_description', $description, $current_user->ID );
									?>
                  </p>
                  <?php endif; ?>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="password">Nova senha</label>
                  <input class="form-control" type="password" name="password" value="">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="confirm_password">Confirme a nova senha</label>
                  <input class="form-control" type="password" name="confirm_password" value="">
                </div>
                <div class="mb-3">
                  <input class="btn btn-primary" type="submit" name="update_profile" value="Atualizar perfil">
                </div>
              </form>

            </div>
          </div>
        </div>
        <div class="tab-pane" id="account-password" role="tabpanel" aria-labelledby="account-password-tab" tabindex="0">
          <div class="row push p-sm-2 p-lg-4">
            <div class="offset-xl-1 col-xl-4 order-xl-1">
              <p class="bg-body-light p-4 rounded-3 text-muted fs-sm">
                Changing your sign in password is an easy way to keep your account secure.
              </p>
            </div>
            <div class="col-xl-6 order-xl-0">
              <form action="be_pages_generic_profile_v2_edit.html" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <label class="form-label" for="dm-profile-edit-password">Current Password</label>
                  <input type="password" class="form-control" id="dm-profile-edit-password"
                    name="dm-profile-edit-password">
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label class="form-label" for="dm-profile-edit-password-new">New Password</label>
                    <input type="password" class="form-control" id="dm-profile-edit-password-new"
                      name="dm-profile-edit-password-new">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-12">
                    <label class="form-label" for="dm-profile-edit-password-new-confirm">Confirm New Password</label>
                    <input type="password" class="form-control" id="dm-profile-edit-password-new-confirm"
                      name="dm-profile-edit-password-new-confirm">
                  </div>
                </div>
                <button type="submit" class="btn btn-alt-primary">
                  <i class="fa fa-check-circle opacity-50 me-1"></i> Update Password
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="account-connections" role="tabpanel" aria-labelledby="account-connections-tab"
          tabindex="0">
          <div class="row push p-sm-2 p-lg-4">
            <div class="offset-xl-1 col-xl-4 order-xl-1">
              <p class="bg-body-light p-4 rounded-3 text-muted fs-sm">
                You can connect your account to third party networks to get extra features.
              </p>
            </div>
            <div class="col-xl-6 order-xl-0">
              <form action="be_pages_generic_profile_v2_edit.html" method="POST" onsubmit="return false;">
                <div class="row mb-4">
                  <div class="col-sm-10 col-lg-8">
                    <a class="btn w-100 btn-alt-danger text-start" href="javascript:void(0)">
                      <i class="fab fa-fw fa-google opacity-50 me-1"></i> Connect to Google
                    </a>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-sm-10 col-lg-8">
                    <a class="btn w-100 btn-alt-info text-start" href="javascript:void(0)">
                      <i class="fab fa-fw fa-twitter opacity-50 me-1"></i> Connect to Twitter
                    </a>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-sm-10 col-lg-8">
                    <a class="btn w-100 btn-alt-primary bg-white d-flex align-items-center justify-content-between"
                      href="javascript:void(0)">
                      <span>
                        <i class="fab fa-fw fa-facebook me-1"></i> John Doe
                      </span>
                      <i class="fa fa-fw fa-check me-1"></i>
                    </a>
                  </div>
                  <div class="mt-2">
                    <a class="btn btn-sm btn-alt-secondary rounded-pill" href="javascript:void(0)">
                      <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Edit Facebook Connection
                    </a>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-sm-10 col-lg-8">
                    <a class="btn w-100 btn-alt-warning bg-white d-flex align-items-center justify-content-between"
                      href="javascript:void(0)">
                      <span>
                        <i class="fab fa-fw fa-instagram me-1"></i> @john_doe
                      </span>
                      <i class="fa fa-fw fa-check me-1"></i>
                    </a>
                  </div>
                  <div class="mt-2">
                    <a class="btn btn-sm btn-alt-secondary rounded-pill" href="javascript:void(0)">
                      <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Edit Instagram Connection
                    </a>
                  </div>
                </div>
                <button type="submit" class="btn btn-alt-primary">
                  <i class="fa fa-check-circle opacity-50 me-1"></i> Update Connections
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="account-billing" role="tabpanel" aria-labelledby="account-billing-tab" tabindex="0">
          <div class="row push p-sm-2 p-lg-4">
            <div class="offset-xl-1 col-xl-4 order-xl-1">
              <p class="bg-body-light p-4 rounded-3 text-muted fs-sm">
                Your billing information is never shown to other users and only used for creating your invoices.
              </p>
            </div>
            <div class="col-xl-6 order-xl-0">
              <form action="be_pages_generic_profile_v2_edit.html" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <label class="form-label" for="dm-profile-edit-company-name">Company Name (Optional)</label>
                  <input type="text" class="form-control" id="dm-profile-edit-company-name"
                    name="dm-profile-edit-company-name">
                </div>
                <div class="row mb-4">
                  <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-firstname">Firstname</label>
                    <input type="text" class="form-control" id="dm-profile-edit-firstname"
                      name="dm-profile-edit-firstname">
                  </div>
                  <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-lastname">Lastname</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname"
                      name="dm-profile-edit-lastname">
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="dm-profile-edit-street-1">Street Address 1</label>
                  <input type="text" class="form-control" id="dm-profile-edit-street-1" name="dm-profile-edit-street-1">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="dm-profile-edit-street-2">Street Address 2</label>
                  <input type="text" class="form-control" id="dm-profile-edit-street-2" name="dm-profile-edit-street-2">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="dm-profile-edit-city">City</label>
                  <input type="text" class="form-control" id="dm-profile-edit-city" name="dm-profile-edit-city">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="dm-profile-edit-postal">Postal code</label>
                  <input type="text" class="form-control" id="dm-profile-edit-postal" name="dm-profile-edit-postal">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="dm-profile-edit-vat">VAT Number</label>
                  <input type="text" class="form-control" id="dm-profile-edit-vat" name="dm-profile-edit-vat"
                    value="EA00000000" disabled>
                </div>
                <button type="submit" class="btn btn-alt-primary">
                  <i class="fa fa-check-circle opacity-50 me-1"></i> Update Billing
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Edit Account -->
  </div>
  <!-- END Page Content -->



</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>