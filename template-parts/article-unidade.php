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
  <a class="block block-transparent bg-image card-unidade" style="background-image: url('<?php
    if (has_post_thumbnail()) {
        the_post_thumbnail_url();
    } else {
        echo get_template_directory_uri() . '/assets/media/mt/unidades-default.jpg';
    } ?>
     );" href="<?php the_permalink(); ?>"
    data-toggle="click-ripple">
    <div class="block-content ribbon ribbon-glass ribbon-bottom bg-black-50 card-unidade-content">
      <div class="ribbon-box">
        <span class="fw-bold">
          <?php
        $post_type = get_post_type();
        $post_taxonomy = get_object_taxonomies($post_type);
        $taxonomy = implode('', $post_taxonomy);
        $terms = get_the_terms(get_the_ID(), $taxonomy);
        if (!empty($post_taxonomy)) {
            $taxonomy = $post_taxonomy[0];
            $terms = get_the_terms(get_the_ID(), $taxonomy);
            if ($terms && !is_wp_error($terms)) {
                $term = $terms[0];
                $term_name = $term->name;
                echo $term_name;
            }
        }
        ?>
        </span>
      </div>
      <div class="pt-4 pb-4 px-md-3">
        <h3 class="h1 fw-bold text-white mb-1"><?php the_title(); ?>
        </h3>
        <h4 class="fw-normal text-body-color-light"><?php
        $unid_endereco = get_field('unid_endereco');
        echo $unid_cidade = ($unid_endereco['cidade']) ? $unid_endereco['cidade'] . ' - ' : '';
        if ($terms) {
            foreach ($terms as $term) {
                echo get_field('sigla_do_estado', $term);
            }
        }
        ?></h5>
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