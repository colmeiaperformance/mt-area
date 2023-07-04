<?php
if ( !is_user_logged_in() ) {
  header('location: '.home_url( '/wp-admin' ));
  die();
}
?>
<!doctype html>
<html lang="pt-br" style="margin-top: 0 !important;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Dashboard - Área de Meditantes</title>

  <meta name="description" content="Dashboard &amp; Área de Meditantes">
  <meta name="author" content="Colmeia Performance">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="Dashboard &amp; Área de Meditantes">
  <meta property="og:site_name" content="Area do Meditante">
  <meta property="og:description" content="Dashboard &amp; Área de Meditantes">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-57x57.png';?>">
  <link rel="apple-touch-icon" sizes="60x60"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-60x60.png';?>">
  <link rel="apple-touch-icon" sizes="72x72"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-72x72.png';?>">
  <link rel="apple-touch-icon" sizes="76x76"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-76x76.png';?>">
  <link rel="apple-touch-icon" sizes="114x114"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-114x114.png';?>">
  <link rel="apple-touch-icon" sizes="120x120"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-120x120.png';?>">
  <link rel="apple-touch-icon" sizes="144x144"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-144x144.png';?>">
  <link rel="apple-touch-icon" sizes="152x152"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-152x152.png';?>">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/apple-icon-180x180.png';?>">
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/android-icon-192x192.png'; ?>">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/favicon-32x32.png';?>">
  <link rel="icon" type="image/png" sizes="96x96"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/favicon-96x96.png';?>">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri() . '/assets/media/favicons/favicon-16x16.png';?>">
  <link rel="manifest" href="<?php echo get_template_directory_uri() . '/assets/media/favicons/manifest.json';?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage"
    content="<?php echo get_template_directory_uri() . '/assets/media/favicons/ms-icon-144x144.png';?>">
  <meta name="theme-color" content="#ffffff">
  <!-- END Favicons -->

  <?php wp_head(); ?>
</head>

<body>

  <div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
      <!-- Page Content -->
      <div class="bg-image"
        style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/bg-404.jpg'; ?>');">
        <div class="row g-0 justify-content-center">
          <div class="hero-static col-sm-8 col-md-6 col-xl-5 d-flex align-items-center p-2 px-sm-0">
            <!-- Reminder Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
              <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-transparent">
                <!-- Header -->
                <div class="d-flex mx-auto flex-column align-items-center justify-content-center page-404">
                  <h1>404</h1>
                  <h2>Oops</h2>
                  <h3>Página não encontrada. Sentimos muito!</h3>
                  <p>Gostaria de voltar à <a href="<?php echo home_url(); ?>" class="">página inicial?</a></p>
                </div>
                <!-- END Header -->


              </div>
            </div>
            <!-- END Reminder Block -->
          </div>
        </div>
      </div>
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
  </div>
  <!-- END Page Container -->


</body>

</html>