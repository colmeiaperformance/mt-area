<div class="block block-rounded gx-0">
  <div class="block-header block-header-default">
    <h3 class="block-title">
      <?php echo $faq_titulo_da_secao = (get_field('faq_titulo_da_secao')) ? get_field('faq_titulo_da_secao') : acf_get_field('faq_titulo_da_secao')['default_value']; ?>
    </h3>
  </div>
  <div class="block-content">
    <?php
$sec = 0;
if(have_rows('faq_topico', 'option')) :
    while(have_rows('faq_topico', 'option')) : the_row();?>
    <?php
    $sec2 = $sec + 1;
    $titulo = get_sub_field('titulo');
        $descricao = (get_sub_field('descricao')) ? get_sub_field('descricao') : '';
        if ($titulo) { ?>
    <h2 class="content-heading"><strong><?= $sec2; ?>.</strong><?= $titulo; ?>
    </h2>
    <?php } ?>
    <!-- <?= $titulo ?> -->
    <div class="row items-push">
      <div class="col-lg-4">
        <p class="text-muted">
          <?php echo $descricao; ?>
        </p>
      </div>
      <?php
          if(have_rows('duvidas')):
            $q = 0;
          ?>
      <div class="col-lg-8">
        <div id="faq<?= $sec;?>" role="tablist" aria-multiselectable="true">
          <?php while(have_rows('duvidas')) : the_row();
              // Get sub value.
              $titulo_da_duvida = (get_sub_field('titulo_da_duvida')) ? get_sub_field('titulo_da_duvida') : '';
              $resposta = (get_sub_field('resposta')) ? get_sub_field('resposta') : '';
              $q2 = $q + 1;
              ?>


          <div class="block block-rounded mb-1">
            <div class="block-header block-header-default" role="tab" id="faq<?= $sec;?>_h<?= $q?>">
              <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq<?= $sec;?>"
                href="#faq<?= $sec;?>_q<?= $q?>" aria-expanded="true"
                aria-controls="faq<?= $sec;?>_q<?= $q?>"><?= $sec2; ?>.<?= $q2; ?>
                <?= $titulo_da_duvida; ?></a>
            </div>
            <div id="faq<?= $sec;?>_q<?= $q?>" class="collapse" role="tabpanel"
              aria-labelledby="faq<?= $sec;?>_h<?= $q?>" data-bs-parent="#faq<?= $sec;?>">
              <div class="block-content">
                <?= $resposta; ?>
              </div>
            </div>
          </div>




          <?php
              $q++;
          endwhile; ?>
        </div>
      </div>
      <?php
    endif; ?>

    </div>
    <!-- END <?= $titulo ?> -->

    <?php
$sec++;
    endwhile;
endif;
wp_reset_postdata();?>

  </div>
</div>