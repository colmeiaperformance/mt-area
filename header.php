<?php
if ( !is_user_logged_in() ) {
  header('location: '.home_url( '/wp-admin' ));
  die();
}
?>
<!doctype html>
<html lang="pt-br">

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
  <div id="page-container"
    class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow side-trans-enabled">
    <!-- Side Overlay-->
    <aside id="side-overlay">
      <!-- Side Header -->
      <div class="bg-image"
        style="background-image: url('<?php //echo get_template_directory_uri() . '/assets/media/various/bg_side_overlay_header.jpg'; ?>');">
        <div class="bg-primary-op">
          <div class="content-header">
            <!-- User Avatar -->
            <span class="me-1">
              <img class="img-avatar img-avatar48"
                src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar10.jpg'; ?>" alt="">
            </span>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ms-2">
              <span class="text-white fw-semibold"
                href="#"><?php $current_user = wp_get_current_user(); if ( $current_user->exists() ) { echo $current_user->display_name; }  ?></span>
              <div class="text-white-75 fs-sm">
                <?php
                $role = wp_get_current_user()->roles[0];
                $role_name = $role ? wp_roles()->get_names()[ $role ] : '';
                /* Or directly access WP_Roles::$role_names:
                $role_name = $role ? wp_roles()->role_names[ $role ] : '';
                */
                echo $role_name;
                ?>
                <?php // echo implode(', ', $current_user->roles); ?>
              </div>
            </div>
            <!-- END User Info -->

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout"
              data-action="side_overlay_close">
              <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Side Overlay -->
          </div>
        </div>
      </div>
      <!-- END Side Header -->

      <!-- Side Content -->
      <div class="content-side">
        <!-- Side Overlay Tabs -->
        <div class="block block-transparent pull-x pull-t mb-0">
          <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="so-wall-tab" data-bs-toggle="tab" data-bs-target="#so-wall" role="tab"
                aria-controls="so-wall" aria-selected="true">
                <i class="fa fa-fw fa-bell"></i>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab"
                aria-controls="so-people" aria-selected="false">
                <i class="fa fa-fw fa-address-card"></i>
              </button>
            </li>
          </ul>
          <div class="block-content tab-content overflow-hidden">
            <!-- Settings Tab -->
            <div class="tab-pane pull-x fade fade-up show active" id="so-wall" role="tabpanel"
              aria-labelledby="so-wall-tab" tabindex="0">
              <div class="block mb-0">
                <!-- Notification Wall -->
                <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                <div class="block-content block-content-sm block-content-full bg-body">
                  <span class="text-uppercase fs-sm fw-bold">Notícias em Destaque</span>
                </div>
                <div class="block-content block-content-full">
                  <div class="row g-sm">
                    <ul class="nav-items my-2">
                      <li>
                        <a class="d-flex text-dark py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 mx-3">
                            <i class="fa fa-fw fa-check-circle text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm pe-2">
                            <div class="fw-semibold">Evento "Lorem Ipsum" confirmado!</div>
                            <div class="text-muted">01/03/2023</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex text-dark py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 mx-3">
                            <i class="fa fa-fw fa-user-plus text-info"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm pe-2">
                            <div class="fw-semibold">Novo curso "Lorem Ipsum Dolor Sit Amet" foi adicionado.</div>
                            <div class="text-muted">26/02/2023</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex text-dark py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 mx-3">
                            <i class="fa fa-times-circle text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm pe-2">
                            <div class="fw-semibold">Curso "Lorem Ipsum" cancelado.</div>
                            <div class="text-muted">20/02/2023</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex text-dark py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 mx-3">
                            <i class="fa fa-fw fa-check-circle text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm pe-2">
                            <div class="fw-semibold">Evento "Lorem Ipsum" confirmado!</div>
                            <div class="text-muted">13/02/2023</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex text-dark py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 mx-3">
                            <i class="fa fa-fw fa-user-plus text-info"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm pe-2">
                            <div class="fw-semibold">Novo curso "Lorem Ipsum Dolor Sit Amet" foi adicionado.</div>
                            <div class="text-muted">05/02/2023</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex text-dark py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 mx-3">
                            <i class="fa fa-times-circle text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm pe-2">
                            <div class="fw-semibold">Curso "Lorem Ipsum" cancelado.</div>
                            <div class="text-muted">15/01/2023</div>
                          </div>
                        </a>
                      </li>
                    </ul>

                  </div>
                </div>
                <!-- END Notification Wall -->



                <!-- Notification View All -->
                <!-- <div class="block-content block-content-full border-top">
                  <a class="btn w-100 btn-alt-primary" href="be_layout_api.html">
                    <i class="fa fa-fw fa-eye me-1"></i> Ver Tudo
                  </a>
                </div> -->
                <!-- END Notification View All -->
              </div>
            </div>
            <!-- END Settings Tab -->

            <!-- People -->
            <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab"
              tabindex="0">
              <div class="block mb-0">
                <!-- Instrutores -->
                <div class="block-content block-content-sm block-content-full bg-body">
                  <span class="text-uppercase fs-sm fw-bold">Instrutores</span>
                </div>
                <div class="block-content">

                  <ul class="nav-items">

                    <?php
                    $current_user = wp_get_current_user();
                    $authorusers = get_users( 'role=author' );
                    // Array of WP_User objects.
                    foreach ( $authorusers as $a_user ) { ?>

                    <li>
                      <a class="d-flex py-2"
                        href="<?php if ( $a_user->user_website ) {echo $a_user->user_website; } else { echo '#'; } ?>">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar3.jpg'; ?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold"><?php echo $a_user->first_name . ' ' . $a_user->last_name; ?></div>
                          <div class="fs-sm text-muted"><?php echo $a_user->description; ?></div>
                        </div>
                      </a>
                    </li>

                    <?php }
                    ?>

                    <!-- <li>
                      <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php //echo get_template_directory_uri() . '/assets/media/avatars/avatar3.jpg'; ?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold">Lori Grant</div>
                          <div class="fs-sm text-muted">Paraná</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php //echo get_template_directory_uri() . '/assets/media/avatars/avatar13.jpg'; ?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold">Justin Hunt</div>
                          <div class="fw-normal fs-sm text-muted">Minas Gerais</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php //echo get_template_directory_uri() . '/assets/media/avatars/avatar2.jpg';?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold">Susan Day</div>
                          <div class="fw-normal fs-sm text-muted">Santa Catarina</div>
                        </div>
                      </a>
                    </li> -->
                  </ul>
                </div>
                <!-- Instrutores -->

                <!-- Equipe -->
                <div class="block-content block-content-sm block-content-full bg-body">
                  <span class="text-uppercase fs-sm fw-bold">Equipe MT</span>
                </div>
                <div class="block-content">
                  <ul class="nav-items">
                    <li>
                      <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar7.jpg'; ?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold">Amanda Powell</div>
                          <div class="fw-normal fs-sm text-muted">São Paulo</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="d-flex py-2" href="be_pages_generic_profile.html">
                        <div class="flex-shrink-0 mx-3 overlay-container">
                          <img class="img-avatar img-avatar48"
                            src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar7.jpg'; ?>"
                            alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="fw-semibold">Mary Drewz</div>
                          <div class="fw-normal fs-sm text-muted">Rio de Janeiro</div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- END Equipe -->



              </div>
            </div>
            <!-- END People -->


          </div>
        </div>
        <!-- END Side Overlay Tabs -->
      </div>
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
          <a class="fw-semibold text-white tracking-wide" href="index.html">
            <span class="smini-visible">
              <!-- M<span class="opacity-75">T</span> -->
              <span class="opacity-75">
                <img class="img-fluid img-logo-header-small"
                  src="<?php echo get_template_directory_uri() . '/assets/media/mt/logo-footer.png'; ?>" alt="">
              </span>
            </span>
            <span class="smini-hidden">
              <span class="opacity-75">
                <img class="img-fluid img-logo-header"
                  src="<?php echo get_template_directory_uri() . '/assets/media/mt/logo-topo.png';?>" alt="">
              </span>
            </span>
          </a>
          <!-- END Logo -->

          <!-- Options -->
          <div>
            <button type="button" class="btn btn-sm btn-alt-secondary d-none d-lg-inline" data-toggle="layout"
              data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
              data-action="sidebar_mini_toggle">
              <i id="sidebar-style-toggler" class="fa fa-toggle-on"></i>
            </button>

            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
              data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
              <i class="far fa-moon" id="dark-mode-toggler"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
              data-action="sidebar_close">
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
            $menu_events = wp_get_nav_menu_object( $locations['main-menu'] );
            $menu_events_title = wp_kses_post( $menu_events->name );

            wp_nav_menu( array(
              'menu'				=> "main-menu",
              'menu_class'		=> "nav-main",
              'menu_id'			=> $menu_events_title,
              'container'			=> "div",
              'fallback_cb'		=> false,
              'depth'				=> 2,
              'walker'			=> new bootstrap_5_wp_nav_menu_walker(),
              'theme_location'	=> "main-menu",
              'items_wrap'		=> '<ul class="%2$s"><li class="nav-main-heading">%1$s</li>%3$s</ul>'
            ) );
            // END Menu Events
            ?>
            <li class="nav-main-item">
              <a class="nav-main-link" href="<?php echo admin_url( '/profile.php' ); ?>">
                <i class="nav-main-link-icon fa fa-user"></i>
                <span class="nav-main-link-name">Meu Perfil</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" onclick="selectPeopleTab();" aria-haspopup="true" aria-expanded="false"
                href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="nav-main-link-icon fa fa-address-card"></i>
                <span class="nav-main-link-name">Instrutores</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" onclick="selectWallTab();" href="javascript:void(0)" data-toggle="layout"
                data-action="side_overlay_toggle">
                <i class="nav-main-link-icon fa fa-bell"></i>
                <span class="nav-main-link-name">Avisos</span>
              </a>
            </li>
            <!-- END Menu Geral -->


            <?php
            //Menu Events
            //$locations = get_nav_menu_locations();
            $menu_events = wp_get_nav_menu_object( $locations['events-menu'] );
            $menu_events_title = wp_kses_post( $menu_events->name );

            wp_nav_menu( array(
              'menu'				=> "events-menu",
              'menu_class'		=> "nav-main",
              'menu_id'			=> $menu_events_title,
              'container'			=> "div",
              'fallback_cb'		=> false,
              'depth'				=> 2,
              'walker'			=> new bootstrap_5_wp_nav_menu_walker(),
              'theme_location'	=> "events-menu",
              'items_wrap'		=> '<ul class="%2$s"><li class="nav-main-heading">%1$s</li>%3$s</ul>'
            ) );
            // END Menu Events

            //Menu Content
            // $locations = get_nav_menu_locations();
            $menu_content = wp_get_nav_menu_object( $locations['content-menu'] );
            $menu_content_title = wp_kses_post( $menu_content->name );

            wp_nav_menu( array(
              'menu'				=> "content-menu",
              'menu_class'		=> "nav-main",
              'menu_id'			=> $menu_content_title,
              'container'			=> "div",
              'fallback_cb'		=> false,
              'depth'				=> 2,
              'walker'			=> new bootstrap_5_wp_nav_menu_walker(),
              'theme_location'	=> "content-menu",
              'items_wrap'		=> '<ul class="%2$s"><li class="nav-main-heading">%1$s</li>%3$s</ul>'
            ) );
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
          <!-- Notifications Dropdown -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-fw fa-flag"></i>
              <span class="badge bg-primary rounded-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
              aria-labelledby="page-header-notifications-dropdown">
              <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                Avisos
              </div>
              <ul class="nav-items my-2">
                <li>
                  <a class="d-flex text-dark py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3">
                      <i class="fa fa-fw fa-check-circle text-success"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">Evento "Lorem Ipsum" confirmado!</div>
                      <div class="text-muted">3 min atrás</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex text-dark py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3">
                      <i class="fa fa-fw fa-user-plus text-info"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">Novo curso "Lorem Ipsum Dolor Sit Amet" foi adicionado.</div>
                      <div class="text-muted">2 dias atrás</div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="d-flex text-dark py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 mx-3">
                      <i class="fa fa-times-circle text-danger"></i>
                    </div>
                    <div class="flex-grow-1 fs-sm pe-2">
                      <div class="fw-semibold">Curso "Lorem Ipsum" cancelado.</div>
                      <div class="text-muted">1 semana atrás</div>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="p-2 border-top">
                <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)" data-toggle="layout"
                  data-action="side_overlay_toggle">
                  <i class="fa fa-fw fa-eye opacity-50 me-1"></i> Ver Tudo
                </a>
              </div>
            </div>
          </div>
          <!-- END Notifications Dropdown -->

          <!-- User Dropdown -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="far fa-fw fa-user-circle"></i>
              <i class="fa fa-fw fa-angle-down ms-1 d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
              <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                <img class="img-avatar img-avatar48 img-avatar-thumb"
                  src="<?php echo get_template_directory_uri() . '/assets/media/avatars/avatar10.jpg'; ?>" alt="">
                <div class="pt-2">
                  <a class="text-white fw-semibold" href="be_pages_generic_profile.html">João Torres</a>
                </div>
              </div>
              <div class="p-2">
                <a class="dropdown-item" href="<?php echo admin_url( '/profile.php' ); ?>">
                  <i class="far fa-fw fa-user me-1"></i> Perfil
                </a>
                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                  <i class="far fa-fw fa-file-alt me-1"></i> Meus Cursos
                </a>
                <div role="separator" class="dropdown-divider"></div>

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item" onclick="selectWallTab();" href="javascript:void(0)" data-toggle="layout"
                  data-action="side_overlay_toggle">
                  <i class="fa fa-fw fa-bell me-1"></i> Notificações
                </a>
                <!-- END Side Overlay -->

                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo wp_logout_url(); ?>">
                  <i class="fa fa-fw fa-sign-out-alt me-1"></i> Sair
                </a>
              </div>
            </div>
          </div>
          <!-- END User Dropdown -->

          <!-- Toggle Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button onclick="selectPeopleTab();" type="button" class="btn btn-alt-secondary" data-toggle="layout"
            data-action="side_overlay_toggle">
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