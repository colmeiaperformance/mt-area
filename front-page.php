<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/patterns/quick-menu') ?>

  <!-- Page Content -->
  <div class="content">

    <!-- Latest Events + Live + Stats -->
    <div class="row items-push">
      <div class="col-lg-8 order-2 order-lg-1">
        <!-- Stats -->
        <?php get_template_part('/patterns/highlights') ?>
        <!-- END Stats -->
      </div>
      <div class="col-lg-4 d-flex flex-column order-1 order-lg-2">

        <!-- Live -->
        <?php get_template_part('/patterns/meditation') ?>
        <!-- END Live -->

        <!-- Calendário Védico -->
        <?php get_template_part('/patterns/calendario-vedico') ?>
        <!-- END Calendário Védico -->


      </div>
    </div>
    <!-- END Latest Events + Live + Stats -->


    <!-- Full Calendar (functionality is initialized in js/pages/be_comp_calendar.min.js which was auto compiled from _js/pages/be_comp_calendar.js ) -->
    <!-- For more info and examples you can check out https://fullcalendar.io/ -->
    <div class="row d-flex items-push flex-xl-grow-1">
      <!-- Programas Regulares -->
      <div class="col-md-6">
        <?php get_template_part('/patterns/calendar-regulares') ?>
      </div>
      <!-- END Programas Regulares -->
      <!-- Agenda -->
      <div class="col-md-6">
      <?php get_template_part('/patterns/calendar') ?>
      </div>
      <!-- END Agenda -->
    </div>
    <!-- END full calendar -->

    <!-- Sidhas News -->
    <?php 
    if (check_user()) {
      get_template_part('/patterns/highlight-news-sidhas');
    }
    ?>
    <!-- END Sidhas News -->

    <!-- News -->
    <?php get_template_part('/patterns/highlight-news') ?>
    <!-- END News -->

    <!-- Maharishi -->
    <?php get_template_part('/patterns/tecnologias') ?>
    <!-- END Mararishi -->

    <!-- Highlight Media -->
    <div class="row items-push">
      <!-- Cursos -->
      <?php get_template_part('/patterns/highlight-cursos') ?>
      <!-- END Cursos -->
      <!-- Livros -->
      <?php get_template_part('/patterns/highlight-livros') ?>
      <!-- END Livros -->


    </div>
    <!-- END Highlight Media -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>