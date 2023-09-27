<?php
if (!is_user_logged_in() && !is_page( 'login' )) {
  header('location: ' . home_url('/login'));
  die();
}
?>
<!doctype html>
<html lang="<?php bloginfo('language'); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

  <meta name="description" content="Dashboard &amp; Área de Meditantes">
  <meta name="author" content="Colmeia Performance">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('name'); ?>">
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



  <?php
  acf_form_head();
  wp_head();
  ?>
</head>

<body <?php body_class() ?>>

  <!-- Page Container -->
  <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header


      FOOTER

        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
  <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow side-trans-enabled">
    <!-- Side Overlay-->
    <aside id="side-overlay">
      <!-- Side Header -->
      <?php get_template_part('/template-parts/aside-header') ?>
      <!-- END Side Header -->

      <!-- Side Content -->
      <?php get_template_part('/template-parts/aside-content') ?>
      <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
    <nav id="sidebar" aria-label="Main Navigation">
      <!-- Side Header -->
      <div class="bg-header-dark">
        <div class="content-header bg-white-5">
          <!-- Logo -->
          <a class="fw-semibold text-white tracking-wide" href="<?php echo esc_url(home_url()); ?>">
            <span class="smini-visible">
              <!-- M<span class="opacity-75">T</span> -->
              <span class="opacity-75">
                <img class="img-fluid img-logo-header-small" src="<?php echo get_template_directory_uri() . '/assets/media/mt/logo-footer.png'; ?>" alt="">
              </span>
            </span>
            <span class="smini-hidden">
              <span class="opacity-75">
                <img class="img-fluid img-logo-header" src="<?php echo get_template_directory_uri() . '/assets/media/mt/logo-topo.png'; ?>" alt="">
              </span>
            </span>
          </a>
          <!-- END Logo -->

          <!-- Options -->
          <div>
            <button type="button" class="btn btn-sm btn-alt-secondary d-none d-lg-inline" data-toggle="layout" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-action="sidebar_mini_toggle">
              <i id="sidebar-style-toggler" class="fa fa-toggle-on"></i>
            </button>

            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
              <i class="far fa-moon" id="dark-mode-toggler"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
              <i class="fa fa-times-circle"></i>
            </button>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Options -->
        </div>
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side Navigation -->

        <div class="content-side">
          <ul class="nav-main">

            <!-- Menu Geral -->
            <?php
            //Menu Events
            $locations = get_nav_menu_locations();
            $menu_events = wp_get_nav_menu_object($locations['main-menu']);
            $menu_events_title = wp_kses_post($menu_events->name);

            wp_nav_menu(array(
              'menu'        => "main-menu",
              'menu_class'    => "nav-main",
              'menu_id'      => $menu_events_title,
              'container'      => "div",
              'fallback_cb'    => false,
              'depth'        => 2,
              'walker'      => new bootstrap_5_wp_nav_menu_walker(),
              'theme_location'  => "main-menu",
              'items_wrap'    => '<ul class="%2$s"><li class="nav-main-heading">%1$s</li>%3$s</ul>'
            ));
            // END Menu Events
            ?>
            <li class="nav-main-item">
              <a class="nav-main-link" href="<?php echo esc_url(admin_url('/profile.php')); ?>">
                <i class="nav-main-link-icon fa fa-user"></i>
                <span class="nav-main-link-name">Meu Perfil</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" onclick="selectPeopleTab();" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="nav-main-link-icon fa fa-address-card"></i>
                <span class="nav-main-link-name">Instrutores</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" onclick="selectWallTab();" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="nav-main-link-icon fa fa-bell"></i>
                <span class="nav-main-link-name">Notícias</span>
              </a>
            </li>
            <!-- END Menu Geral -->


            <?php
            //Menu Events
            //$locations = get_nav_menu_locations();
            $menu_events = wp_get_nav_menu_object($locations['events-menu']);
            $menu_events_title = wp_kses_post($menu_events->name);

            wp_nav_menu(array(
              'menu'        => "events-menu",
              'menu_class'    => "nav-main",
              'menu_id'      => $menu_events_title,
              'container'      => "div",
              'fallback_cb'    => false,
              'depth'        => 2,
              'walker'      => new bootstrap_5_wp_nav_menu_walker(),
              'theme_location'  => "events-menu",
              'items_wrap'    => '<ul class="%2$s"><li class="nav-main-heading">%1$s</li>%3$s</ul>'
            ));
            // END Menu Events

            //Menu Content
            // $locations = get_nav_menu_locations();
            $menu_content = wp_get_nav_menu_object($locations['content-menu']);
            $menu_content_title = wp_kses_post($menu_content->name);

            wp_nav_menu(array(
              'menu'        => "content-menu",
              'menu_class'    => "nav-main",
              'menu_id'      => $menu_content_title,
              'container'      => "div",
              'fallback_cb'    => false,
              'depth'        => 2,
              'walker'      => new bootstrap_5_wp_nav_menu_walker(),
              'theme_location'  => "content-menu",
              'items_wrap'    => '<ul class="%2$s"><li class="nav-main-heading">%1$s</li>%3$s</ul>'
            ));
            //END Menu Content

            ?>
          </ul>
        </div>

        <!-- <div class="content-side">
          <ul class="nav-main"> -->


        <!-- Menu Conteúdo -->
        <!-- <li class="nav-main-heading">Conteúdo</li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="blog-grid.php">
                <i class="nav-main-link-icon fa fa-file-lines"></i>
                <span class="nav-main-link-name">Posts Exclusivos</span>
              </a>
              <a class="nav-main-link" href="books-grid.php">
                <i class="nav-main-link-icon fa fa-book"></i>
                <span class="nav-main-link-name">Vitrine de Livros</span>
              </a>
              <a class="nav-main-link" href="videos-grid.php">
                <i class="nav-main-link-icon fa fa-video"></i>
                <span class="nav-main-link-name">Vídeos em Destaque</span>
              </a>
            </li> -->
        <!-- END Menu Conteúdo -->


        <!-- 
          </ul>
        </div> -->

        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
        <!-- Left Section -->
        <div>
          <!-- Toggle Sidebar -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
          <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-fw fa-bars"></i>
          </button>
          <!-- END Toggle Sidebar -->

          <!-- Open Search Section -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
            <i class="fa fa-fw fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Buscar...</span>
          </button>
          <!-- END Open Search Section -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div>
          <!-- Cart -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa-fw fa-regular fa-shopping-cart"></i>
              <span class="badge bg-primary rounded-pill">
                <!-- 
                  /*
                  TODO: Para cada item do carrinho, contar +1 aqui 
                  */
                -->
                3
              </span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
              <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-2">
                Carrinho
              </div>
              <ul class="nav-items my-2">
                <li>
                  <a class="d-flex text-dark py-2" href="#">
                    <div class="flex-shrink-0 mx-3 d-flex align-items-center">
                      <i class="fa fa-fw fa-chalkboard text-primary"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">Curso Lorem Ipsum</div>
                      <div class="text-muted">249,90</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex text-dark py-2" href="#">
                    <div class="flex-shrink-0 mx-3 d-flex align-items-center">
                      <i class="fa fa-fw fa-book text-primary"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">Livro Lorem ipsum</div>
                      <div class="text-muted">29,90</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex text-dark py-2" href="#">
                    <div class="flex-shrink-0 mx-3 d-flex align-items-center">
                      <i class="fa fa-fw fa-calendar text-primary"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">Evento Dolor sit amet</div>
                      <div class="text-muted">49,90</div>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="bg-primary-dark border-top fw-semibold text-white text-center p-2 d-flex align-items-center justify-content-center">
                <div class="fw-semibold"><?php _e('Total: ', 'mt-area'); ?> R$ 49,90</div>&nbsp;
              </div>
              <div class="p-2 border-top">
                <a class="btn btn-alt-primary w-100 text-center" href="<?php echo esc_url(home_url() . '/checkout'); ?>">
                  <i class="fa-fw fa-solid fa-shopping-cart opacity-50 me-1"></i>
                  <?php _e('Ir para o Carrinho', 'mt-area'); ?>
                </a>
              </div>
            </div>
          </div>
          <!-- END Cart -->

          <!-- User Dropdown -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-fw fa-user-circle"></i>
              <i class="fa fa-fw fa-angle-down ms-1 d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
              <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar10.jpg'; ?>" alt="">
                <div class="pt-2">
                  <a class="text-white fw-semibold" href="be_pages_generic_profile.html">João Torres</a>
                </div>
              </div>
              <div class="p-2">
                <a class="dropdown-item" href="<?php echo esc_url(admin_url('/profile.php')); ?>">
                  <i class="far fa-fw fa-user me-1"></i> Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="far fa-fw fa-file-alt me-1"></i> Meus Cursos
                </a>
                <div role="separator" class="dropdown-divider"></div>

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item" onclick="selectWallTab();" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                  <i class="fa fa-fw fa-bell me-1"></i> Notificações
                </a>
                <!-- END Side Overlay -->

                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo esc_url(wp_logout_url()); ?>">
                  <i class="fa fa-fw fa-sign-out-alt me-1"></i> Sair
                </a>
              </div>
            </div>
          </div>
          <!-- END User Dropdown -->

          <!-- Toggle Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button onclick="selectPeopleTab();" type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
            <i class="far fa-fw fa-list-alt"></i>
          </button>
          <!-- END Toggle Side Overlay -->
        </div>
        <!-- END Right Section -->
      </div>
      <!-- END Header Content -->

      <!-- Header Search -->
      <div id="page-header-search" class="overlay-header bg-sidebar-dark">
        <div class="content-header">
          <?php get_search_form(); ?>
        </div>
      </div>
      <!-- END Header Search -->

      <!-- Header Loader -->
      <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
      <div id="page-header-loader" class="overlay-header bg-primary-darker">
        <div class="content-header">
          <div class="w-100 text-center">
            <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
          </div>
        </div>
      </div>
      <!-- END Header Loader -->
    </header>
    <!-- END Header -->