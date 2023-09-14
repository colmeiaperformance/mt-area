<div class="col">
  <div class="block block-rounded h-100 mb-0">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark text-white bg-mt-dark-blue py-3">
      <div class="me-3">
        <p class="fw-semibold mb-0"><?php _e('Calendário Védico', 'mt-area'); ?></p>
      </div>
    </div>
    <div class="block block-content-full mb-0">
      <div class="block-content block-content-full">

        <?php
        $hoje = date('d/m');
        $proxima_data = null;
        $hoje_timestamp = strtotime($hoje);
        $meses_extenso = array(
          'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
          'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        );

        if (have_rows('calendario_vedico', 'option')) {
          while (have_rows('calendario_vedico', 'option')) : the_row();
            $vedico_data = get_sub_field('vedico_data');
            $nome_da_data = get_sub_field('nome_da_data');
            $vedico_audio = get_sub_field('vedico_audio');

            // Ajuste para comparar apenas o dia e mês, desconsiderando o ano
            $vedico_data_parts = explode('/', $vedico_data);
            $vedico_data_sem_ano = $vedico_data_parts[1] . '/' . $vedico_data_parts[0]; // Invertendo o formato d/m
            $vedico_data_timestamp = strtotime($vedico_data_sem_ano);

            if ($vedico_data_timestamp >= $hoje_timestamp && ($proxima_data === null || $vedico_data_timestamp < $proxima_data)) {
              $proxima_data = $vedico_data_timestamp;
              $proxima_data_nome = $nome_da_data;
              $proxima_data_audio = $vedico_audio;
            }

          endwhile;

          if ($proxima_data !== null) {
            $dia = date('d', $proxima_data);
            $mes_numerico = date('m', $proxima_data);
            $mes_extenso = $meses_extenso[intval($mes_numerico) - 1]; // Obter o mês por extenso
            $dia_mes = $dia . '/' . $mes_numerico;
        ?>

            <?php if ($dia_mes == $hoje) {
              echo '<a target="_blank" class="link-fw" href="' . $proxima_data_audio . '">';
            } else {
              echo '<div class="link-fw">';
            }
            ?>
            <div class="text-center">
              <p id="status-box" class="text-muted">
                <?php if ($dia_mes == $hoje) {
                  _e('Hoje é', 'mt-area');
                } else {
                  _e('Próxima data:', 'mt-area');
                } ?>
              </p>
              <div class="item rounded bg-body-light mx-auto fs-1">
                <?php echo $dia; ?>
              </div>
              <p class="text-muted"><?php echo $mes_extenso; ?></p>
              <h4 class="text-primary-dark mb-0"><?php echo $proxima_data_nome; ?></h4>
            </div>
            <?php if ($dia_mes == $hoje) {
              echo '</a>';
            } else {
              echo '</div>';
            }
            ?>
          <?php
          }
        } else { ?>
          <div class="alert alert-secondary p-3 mb-0">
            <i class="fa fa-info-circle me-1"></i> Por enquanto, não há datas previstas.
          </div>
        <?php }
        ?>

      </div>
      <div id="link-status-online" class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
        <a class="fw-medium" href="./calendario-vedico">
          Todas as datas
          <i class="fa fa-arrow-right ms-1 opacity-25"></i>
        </a>
      </div>
    </div>
  </div>
</div>