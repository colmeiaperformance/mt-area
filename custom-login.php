<?php

/**
 * Template Name: Custom Login Page
 */

// Redireciona usuários já logados para a página inicial
if (is_user_logged_in()) {
  wp_redirect(home_url());
  exit;
}

// Verifica se o formulário foi submetido
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  //Verifica se o checkbox "Lembrar-me" foi marcado
  $rememberme = isset($_POST['rememberme']) ? true : false;

  // Verificações de autenticação aqui (se necessário)
  $user = wp_signon(array(
    'user_login' => $username,
    'user_password' => $password,
    'remember' => $rememberme,
  ));

  if (is_wp_error($user)) {
    $error = $user->get_error_message();
    return $error;
  } else {
    // Autenticação bem-sucedida, redireciona o usuário para a página inicial
    wp_redirect(home_url());
    exit;
  }
}

?>
<!doctype html>
<html lang="pt-br" style="margin-top: 0 !important;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Comunidade MT Brasil</title>

  <meta name="description" content="Dashboard &amp; Área de Meditantes">
  <meta name="author" content="Colmeia Performance">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="Comunidade &amp; MT Brasil">
  <meta property="og:site_name" content="Comunidade MT Brasil">
  <meta property="og:description" content="Comunidade &amp; MT Brasil">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-57x57.png'; ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-60x60.png'; ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-72x72.png'; ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-76x76.png'; ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-114x114.png'; ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-120x120.png'; ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-144x144.png'; ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-152x152.png'; ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-180x180.png'; ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/android-icon-192x192.png'; ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/favicon-32x32.png'; ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/favicon-96x96.png'; ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/favicon-16x16.png'; ?>">
  <link rel="manifest" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/manifest.json'; ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/assets/media/favicons/ms-icon-144x144.png'; ?>">
  <meta name="theme-color" content="#ffffff">
  <!-- END Favicons -->

  <?php wp_head(); ?>
</head>

<body>
  <div class="hero-section">
    <div class="container g-0 g-md-auto h-100 d-flex align-items-center justify-content-center">
      <div class="row align-items-center w-100">
        <div class="col-12 col-lg-6 gx-5 d-flex flex-column justify-content-around mt-5 mt-lg-0">
          <div class="hero-container mb-3 mb-lg-auto">
            <h1 class="hero-title mb-3"><?php _e('Bem-vindo à Comunidade MT Brasil!', 'mt-area'); ?></h1>
            <h2 class="hero-subtitle">
              <?php _e('Área exclusiva aos praticantes da Meditação Transcendental', 'mt-area'); ?></h2>
          </div>
        </div>
        <div class="col-12 col-lg-6 gx-5 px-md-4 mb-5 mb-lg-auto">
          <div class="shadow bg-white p-2 p-md-5 rounded mx-lg-5">
            <div id="login-container">
              <div class="img text-center mb-md-3">
                <img class="img-fluid w-25" src="<?php echo get_template_directory_uri() . '/assets/media/mt/icon-arvore.png' ?>" alt="">
              </div>
              <form id="login-form" action="" method="post">
                <div class="mb-3">
                  <label class="form-label" for="username">Nome de Usuário ou Email:</label>
                  <input class="form-control" type="text" name="username" id="username" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="password">Senha:</label>
                  <input class="form-control" type="password" name="password" id="password" required>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="rememberme" value="" id="rememberme" value="forever">
                    <label class="form-check-label" for="rememberme">
                      <?php _e('Lembrar-me', 'mt-area'); ?>
                    </label>
                  </div>
                </div>
                <div class="mb-3">
                  <input class="btn btn-login w-100" type="submit" name="submit" value="Entrar">
                </div>
              </form>
            </div>
            <?php if ($error) : ?>
              <div class="mb-3">
                <p class="error-message alert alert-danger"><?php echo $error; ?></p>
              </div>
            <?php endif; ?>
            <div class="mb-3">
              <a name="registerme" id="registerme" class="btn btn-primary w-100" href="#" role="button"><?php _e('Primeiro acesso?
                Solicite seu login', 'mt-area'); ?></a>
            </div>
            <div class="mb-3">
              <a class="text-muted" href="#"><?php _e('Esqueceu sua senha?', 'mt-area'); ?></a>
            </div>
          </div>
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- hero-section -->

</body>

</html>