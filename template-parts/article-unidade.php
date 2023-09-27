<?php
$args = array(
  'post_type' => 'unidade',
  'posts_per_page' => 3,
  'order' => 'ASC'
);
$cursos_query = new WP_Query($args);

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<div class="col-md-6">
  <a class="block block-transparent bg-image" style="background-image: url('<?php
    if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {
        echo get_template_directory_uri() . '/assets/media/mt/unidades-default.jpg';
    } ?>
     );" href="<?php the_permalink(); ?>" data-toggle="click-ripple">
    <div class="block-content ribbon ribbon-glass ribbon-bottom bg-black-50">
      <div class="ribbon-box">
        <span class="fw-bold">Rio de Janeiro</span>
      </div>
      <div class="pt-4 pb-4 px-md-3">
        <h3 class="h1 fw-bold text-white mb-1"><?php the_title(); ?>
        </h3>
        <h4 class="fw-normal text-body-color-light">Rio de Janeiro</h5>
          <h5 class="fw-normal text-body-color-light mb-0">
            <?php
            $telefones = get_field('unid_telefones_de_contato');
        foreach ($telefones as $telefone) {
            $numero = $telefone['unid_telefone'];
            echo format_phone($numero);
        }
        ?>
          </h5>
          <h5 class="fw-normal text-body-color-light">
            <?php echo get_field('unid_email_de_contato'); ?>
          </h5>
      </div>
    </div>
  </a>
</div>

<?php endwhile;
else:
    get_template_part('/template-parts/no-posts');
endif;
wp_reset_postdata();
?>