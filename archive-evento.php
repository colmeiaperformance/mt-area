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
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm js-dataTable-buttons">
              <thead>
                <tr class="text-uppercase">
                  <th>Evento</th>
                  <th>Data</th>
                  <th class="d-none d-xl-table-cell">Tipo</th>
                  <th>Instrutor</th>
                  <th class="d-none d-sm-table-cell text-end" style="width: 25%;">Local</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $args = array(
                  'post_type' => 'evento',
                  'posts_per_page' => -1,
                  'meta_key'  => 'e_geral_data',
                  'orderby' => 'meta_value',
                );
$eventos_query = new WP_Query($args);

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
                <tr>
                  <td>
                    <span class="fw-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                  </td>
                  <td>
                    <span
                      class="fs-sm text-muted"><?php echo $e_geral_data = (get_field('e_geral_data')) ? get_field('e_geral_data') : ''; ?></span>
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
                      <?php
                      $tipos_de_eventos = get_field('e_tipo_do_evento');
                          if ($tipos_de_eventos) {
                              foreach ($tipos_de_eventos as $tipo_do_evento) {
                                  echo $tipo_do_evento->name;
                              }
                          }
                          ?>
                    </span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">
                      <?php
        $instrutores = get_field('e_geral_instrutores');
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
                    <a href="<?php echo site_url() . '/unidade/' . $local->post_name; ?>" class="">
                      <?php echo $local->post_title; ?>
                    </a>
                    <?php }
        ?>
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="<?php the_permalink(); ?>">Ver</a>
                  </td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <div class="alert alert-secondary p-3 mb-0">
                  <i class="fa fa-info-circle me-1"></i> <?php _e('Não há eventos previstos.', 'mt-area'); ?>
                </div>
                <?php endif;
                wp_reset_postdata();
?>
                <!-- <tr>
                  <td>
                    <span class="fw-semibold">Nunc eget lobortis augue</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">04/03/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-info">Curso</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Maria Barros</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Rio de Janeiro/RJ
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Maecenas egestas sollicitudin lorem, at accumsan erat ullamcorper
                      in</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">10/03/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-warning">Residencial</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Márcio Nunes</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Fortaleza/CE
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Mauris orci erat, feugiat non ex condimentum, scelerisque accumsan
                      libero</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">20/03/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-info">Curso</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Minas Gerais
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Morbi at ipsum turpis</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">02/04/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-success">Geral</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Joana Machado</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Curitiba/PR
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Phasellus nec metus eget justo aliquam semper sed et est</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">20/04/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-danger">Live</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Online
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Maecenas ut diam vitae magna vehicula volutpat volutpat a magna</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">03/05/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-success">Geral</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Maria Barros</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    São Paulo/SP
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Curabitur dapibus metus sed quam faucibus dictum</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">11/05/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-success">Geral</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">Joana Machado</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Rio de Janeiro/RJ
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Vero eum molestiae accusantium reprehenderit distinctio voluptatibus quas
                      consectetur qui</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">19/05/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-warning">Residencial</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Porto Alegre/RS
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Consectetur adipisicing elit. Iste, provident</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">27/05/2023</span>
                  </td>
                  <td class="d-none d-xl-table-cell">
                    <span class="fw-semibold text-danger">Live</span>
                  </td>
                  <td>
                    <span class="fs-sm text-muted">João Torres</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    Online
                  </td>
                  <td class="text-center text-nowrap fw-medium">
                    <a href="javascript:void(0)">
                      Ver
                    </a>
                  </td>
                </tr> -->
              </tbody>
            </table>
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