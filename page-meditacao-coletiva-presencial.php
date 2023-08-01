<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/patterns/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_cursos.jpg'; ?>');">
    <div class="bg-mt-default-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">

    <!-- Form -->
    <div class="row">
      <div class="col">
        <div class="block block-rounded">
          <div class="block-content">
            <table class="table">
              <thead class="bg-body-dark">
                <tr>
                  <th scope="col"><?php _e('Localidade', 'mt-area'); ?></th>
                  <th scope="col"><?php _e('Horário de Início', 'mt-area'); ?></th>
                  <th scope="col"><?php _e('Horário de Encerramento', 'mt-area'); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $meditacao_coletiva_presencial = get_field('mcp_configuracao', 'option');
                if ($meditacao_coletiva_presencial) :

                  // Criar um array auxiliar para armazenar os horários de início
                  $horarios_de_inicio = array();

                  // Percorrer o array de meditações coletivas presencial
                  foreach ($meditacao_coletiva_presencial as $meditacao) {

                    // Armazenar os horários de início no array auxiliar
                    $horarios_de_inicio[] = $meditacao['mcp_horario_de_inicio'];
                  }
                  // Ordenar os horários de início em ordem cronológica
                  sort($horarios_de_inicio);

                  // Percorrer o array ordenado de horários de início
                  foreach ($horarios_de_inicio as $horario_de_inicio) {

                    // Procurar a meditação correspondente ao horário de início
                    foreach ($meditacao_coletiva_presencial as $meditacao) {

                      if ($meditacao['mcp_horario_de_inicio'] === $horario_de_inicio) {
                        // Exibir a linha correspondente 
                ?>

                        <tr class="">
                          <td scope="row"><?= $meditacao['mcp_localidade']; ?></td>
                          <td><?= $meditacao['mcp_horario_de_inicio']; ?></td>
                          <td><?= $meditacao['mcp_horario_de_encerramento']; ?></td>
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

<?php include("footer.php"); ?>