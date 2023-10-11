<div class="content content-boxed text-center">
  <div class="py-5">
    <h2 class="mb-3 text-center">
      <?php echo $cta_titulo = (get_field('cta_titulo', 'option')) ? get_field('cta_titulo', 'option') : 'Por que se tornar associado?'; ?>
    </h2>
    <h3 class="h4 fw-light text-muted push text-center">
      <?php echo $cta_titulo = (get_field('cta_subtitulo', 'option')) ? get_field('cta_subtitulo', 'option') : ''; ?>
    </h3>
    <span class="m-2 d-inline-block">
      <a class="btn btn-hero btn-primary" href="<?php echo site_url() . '/sign' ?>" data-toggle="click-ripple">
        <i class="fa fa-link opacity-50 me-1"></i> 
        <?php echo $cta_titulo = (get_field('cta_texto_do_botao', 'option')) ? get_field('cta_texto_do_botao', 'option') : 'Aprenda como...'; ?>
      </a>
    </span>
  </div>
</div>