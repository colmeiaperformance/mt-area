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
          <?php _e('Agenda Completa', 'mt-area'); ?>
        </h1>
        <!-- <h3 class="fw-normal text-white-75 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
          autem veritatis
        </h3> -->
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row items-push">

      <div class="w-100">
        <!--  Latest Events -->
        <div class="block block-rounded block-mode-loading-refresh">
          <div class="block-content pb-3">
            <?php
                $args = array(
                  'post_type' => 'evento',
                  'posts_per_page' => -1,
                  'meta_key'  => 'e_data',
                  'orderby' => 'meta_value',
                );
            $eventos_query = new WP_Query($args);

            if (have_posts()) : ?>
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm js-dataTable-buttons">
              <thead>
                <tr class="text-uppercase">
                  <th>Evento</th>
                  <th>Data</th>
                  <th class="d-none d-xl-table-cell">Tipo</th>
                  <th>Instrutor</th>
                  <th class="d-none d-sm-table-cell text-end" style="width: 25%;">Local</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while (have_posts()) : the_post(); ?>
                <tr>
                  <td>
                    <span class="fw-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                  </td>
                  <td>
                    <span
                      class="fs-sm text-muted"><?php echo $e_data = (get_field('e_data')) ? get_field('e_data') : ''; ?></span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold" style="color:<?php
                    $post_type = get_post_type();
                    $post_taxonomy = get_object_taxonomies($post_type);
                    $taxonomy = implode('', $post_taxonomy);
                    $terms = get_the_terms(get_the_ID(), $taxonomy);
                    foreach ($terms as $term) {
                      echo get_field('cor_do_tipo_do_evento', $term);
                    }
                    ?>">
                      <?php $modalidade = get_the_terms( get_the_ID(), 'categoria-de-evento' );;
                  if ($modalidade) {
                    foreach($modalidade as $term) {
                      echo $term->name;
                    }
                  }
                  ?>

                    </span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">
                      <?php
        $instrutores = get_field('e_instrutores');
        if ($instrutores) {
            $instrutoresNomes = array(); // Cria um array para armazenar os nomes dos instrutores
        
            foreach ($instrutores as $instrutor) {
                $instrutoresNomes[] = $instrutor['user_firstname'] . ' ' . $instrutor['user_lastname'];
            }
        
            // Use a função implode para juntar os nomes com vírgulas (exceto o último)
            echo implode(', ', $instrutoresNomes);
        }
        ?>
                    </span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <?php
                     $local = get_field('e_local');
                    if($local) { ?>
                    <a href="<?php echo get_permalink( $local ); ?>" class="">
                      <?php echo esc_html( get_the_title( $local ) ); ?>
                    </a>
                    <?php } ?>
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <?php 
                    $conteudo_restrito_associados = get_field('conteudo_restrito_associados');
                    switch ($conteudo_restrito_associados) {
                      case true:
                        echo $e_valor = (get_field('e_valor')) ? get_field('e_valor') : '' ;
                        break;
                      
                      default:
                        echo 'Gratuito';
                        break;
                    }
                    ?>
                  </td>
                </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
            <?php else: ?>
            <div class="alert alert-secondary p-3 mb-0">
              <i class="fa fa-info-circle me-1"></i> <?php _e('Não há eventos previstos.', 'mt-area'); ?>
            </div>
            <?php endif;
                wp_reset_postdata();
            ?>
          </div>
        </div>
        <!-- END Latest Events -->
      </div>

    </div>


  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<script>
jQuery(".nav-main-link .nav-main-link-name:contains('Residenciais')").parent().removeClass("active");
jQuery(".nav-main-link .nav-main-link-name:contains('Recorrentes')").parent().removeClass("active");
</script>

<?php include("footer.php"); ?>