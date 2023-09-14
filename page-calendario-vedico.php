<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_agenda.jpg'; ?>');">
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
  <div class="content w-50">

    <!-- Form -->
    <div class="row">
      <div class="col">
        <div class="block block-rounded">
          <div class="block-content">
            <table class="table table-borderless table-striped text-center">
              <thead>
                <tr class="bg-primary text-white">
                  <th scope="col"><?php _e('Data', 'mt-area'); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $calendario_vedico = get_field('calendario_vedico', 'option');

                if ($calendario_vedico) :

                  // Criar um array auxiliar para armazenar as datas
                  $datas_vedicas = array();

                  // Percorrer o array de meditações coletivas presencial
                  foreach ($calendario_vedico as $calendario) {

                    // Armazenar as datas no array auxiliar
                    $data_vedica = $calendario['vedico_data'];
                    $datas_vedicas[] = $data_vedica;
                  }
                  // Ordenar as datas em ordem cronológica
                  //sort($datas_vedicas);
                  usort($datas_vedicas, "compareByTimeStamp");


                  // Percorrer o array ordenado de datas
                  foreach ($datas_vedicas as $data_vedica) {

                    // Procurar a meditação correspondente ao horário de início
                    foreach ($calendario_vedico as $calendario) {

                      if ($calendario['vedico_data'] === $data_vedica) {
                        // Exibir a linha correspondente 
                ?>

                        <tr class="">
                          <td scope="row">
                            <?php echo $calendario['vedico_data'] . ' - ' . $calendario['nome_da_data'] . '<br>';
                            $tz_object = new DateTimeZone('Brazil/East');
                            $datetime = new DateTime();
                            $datetime->setTimezone($tz_object);
                            $date_today = $datetime->format('d\/m');

                            if ($date_today == $calendario['vedico_data']) { ?>
                              <a target="_blank" href="<?php echo $calendario['vedico_audio']; ?>">Clique aqui para ouvir</a>
                            <?php } else {
                              echo '';
                            } ?>
                          </td>
                        </tr>

                <?php
                        break;
                      }
                    }
                  }

                endif; ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
    <!-- END Form -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<script>
  jQuery(".nav-main-link .nav-main-link-name:contains('Residenciais')").parent().removeClass("active");
  jQuery(".nav-main-link .nav-main-link-name:contains('Recorrentes')").parent().removeClass("active");
</script>

<?php include("footer.php"); ?>