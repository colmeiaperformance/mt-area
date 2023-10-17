<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_agenda.jpg'; ?>');">
    <div class="bg-mt-dark-blue-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php _e('Calendário Védico', 'mt-area'); ?>
        </h1>
        <!-- <h3 class="fw-normal text-white-75 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
          autem veritatis
        </h3> -->
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div id="calendario-vedico" class="content w-50">

    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="block block-rounded">
          <div class="block-content">

            <?php
          $args = array(
            'post_type' => 'evento',
            'posts_per_page' => -1,
          );

          $eventos = new WP_Query($args);

          if (have_posts()) :
          ?>
            <!-- Calendario vedico -->
            <table class="table table-borderless table-striped text-center">
              <thead>
                <tr class="bg-primary text-white">
                  <th scope="col">
                    <?php _e('Data', 'mt-area');?>
                  </th>
                  <th scope="col">
                    <?php _e('Evento Védico', 'mt-area');?>
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php while (have_posts()) :
                the_post();
                $vedico_data = get_field('vedico_data');
                
                if (!empty($vedico_data)) :
            ?>
                <tr class="">
                  <td scope="row">
                    <?php echo $vedico_data; ?>
                  </td>
                  <td class="text-start">
                    <?php echo get_the_title(); ?><br>
                    <?php
                    $tz_object = new DateTimeZone('Brazil/East');
                    $datetime = new DateTime();
                    $datetime->setTimezone($tz_object);
                    $date_today = $datetime->format('d/m');

                    if ($date_today == $vedico_data) :
                    ?>
                
                    <a class="fs-5" target="_blank" href="<?php echo the_permalink();?>">Veja mais sobre a data de hoje!</a>
                  
                <?php else : ?>
                <!-- Se a data não for hoje -->
                <?php endif; ?>
                  </td>
                </tr>
                <?php
                endif; // Fim da verificação de data válida
              endwhile;
              wp_reset_postdata();
                ?>

              </tbody>
            </table>
            <!-- END Calendario vedico -->
            <?php 
            else :
              echo '<p class="alert alert-secondary">Nenhuma data cadastrada.<p>';
            endif;
            ?>


          </div>
        </div>
      </div>
    </div>

    <!-- END Table -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<script>
jQuery(".nav-main-link .nav-main-link-name:contains('Residenciais')").parent().removeClass("active");
jQuery(".nav-main-link .nav-main-link-name:contains('Recorrentes')").parent().removeClass("active");
</script>



<?php include("footer.php"); ?>