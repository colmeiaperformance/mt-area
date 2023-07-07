<?php

/**
 * Title: Meditação Online Coletiva
 * Slug: mt-area/meditation
 * Categories: query
 * Keywords: meditation
 * Block Types: core/template-part/meditation
 */

$is_online = false;
$link_da_palestra = '#';
// Obtém o horário atual em Brasília (get_brasilia_current_time criado em functions.php)
$current_time = get_brasilia_current_time();

// Obtém os itens do campo repetidor 'configuracao' na página de opções do ACF
$configuracoes = get_field('configuracao', 'option');
//Coloca os itens em ordem cronológica
sort($configuracoes);

if ($configuracoes) {
  foreach ($configuracoes as $configuracao) {
    $horario_de_inicio = $configuracao['horario_de_inicio'];
    $horario_de_encerramento = $configuracao['horario_de_encerramento'];


    // Verifica se o horário atual está dentro do intervalo
    if ($current_time >= $horario_de_inicio && $current_time <= $horario_de_encerramento) {
      // Exibe o horário de início e encerramento que se encaixou na condição
      $is_online = true;
      $link_da_palestra = $configuracao['link_da_meditacao_coletiva_online'];
      echo $horario_de_inicio . ' - ' . $horario_de_encerramento;
      break;
    }
  }
}
?>

<div class="block block-rounded">
  <div class="block-content block-content-full d-flex justify-content-center align-items-center flex-grow-1 ribbon 
  <?php if ($is_online == false) {
    echo 'ribbon-light';
  } else {
    echo 'ribbon-danger';
  } ?>">
    <a class="link-fw" href="<?php echo $link_da_palestra; ?>">
      <div class="text-center">
        <div class="item item-circle bg-body-light mx-auto push">
          <i class="fa fa-2x fa-circle-play text-primary"></i>
        </div>
        <h4 class="text-primary-dark mb-0"><?php _e('Meditação Coletiva Online', 'mt-area'); ?></h4>
        <?php if ($is_online == true) {
          echo '<p id="status-box" class="text-muted">' . _e('Clique para participar agora', 'mt-area') . '</p>';
        } ?>
      </div>
    </a>
    <?php if ($is_online == true) { ?>
      <div id="status-online" class="ribbon-box">
        <i class="fa fa-video me-1 animated pulse animated-loop"></i>
        <?php _e('AO VIVO', 'mt-area'); ?>
      </div>
    <?php } elseif ($is_online == false) { ?>
      <div id="status-offline" class="ribbon-box">
        <i class="fa fa-video-slash me-1"></i>
        <?php _e('OFFLINE', 'mt-area'); ?>
      </div>
    <?php } ?>
  </div>
  <div id="link-status-online" class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
    <a class="fw-medium" href="./meditacao-coletiva-online">
      <?php _e('Todos os horários', 'mt-area'); ?>
      <i class="fa fa-arrow-right ms-1 opacity-25"></i>
    </a>
  </div>
</div>




<!-- <div class="block block-rounded">
  <div class="block-content block-content-full d-flex justify-content-center align-items-center flex-grow-1 ribbon 
            ribbon-light">
    <a class="link-fw" href="#">
      <div class="text-center">
        <div class="item item-circle bg-body-light mx-auto push">
          <i class="fa fa-2x fa-circle-play text-primary"></i>
        </div>
        <h4 class="text-primary-dark mb-0">Meditação Coletiva Online</h4>
        <p id="status-box" class="text-muted">7h - 8h</p>
      </div>
    </a>
    <div id="status-online" class="ribbon-box" style="display:none;">
      <i class="fa fa-video me-1 animated pulse animated-loop"></i>
      AO VIVO
    </div>
    <div id="status-offline" class="ribbon-box">
      <i class="fa fa-video-slash me-1"></i>
      OFFLINE
    </div>

  </div>
  <div id="link-status-online" class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
    <a class="fw-medium" href="./meditacao-coletiva-online">
      Todos os horários
      <i class="fa fa-arrow-right ms-1 opacity-25"></i>
    </a>
  </div>
</div> -->