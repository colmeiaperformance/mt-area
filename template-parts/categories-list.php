<!-- Show Categories -->
<?php if (!is_tag()) { ?>
<div class="row items-push">
    <div class="d-flex justify-content-center justify-content-lg-end">
        <div class="dropdown">
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <?php _e('Filtrar por categoria', 'mt-area'); ?>
            </a>
            <ul class="dropdown-menu">
                <?php
                if (is_home() || is_category()) {
                    $post_type = get_post_type();
                    $categories = get_categories(array(
                        'post_type' => $post_type,
                        'orderby' => 'name',
                        'parent'  => 0
                    ));
                    foreach ($categories as $category) {
                        // Obtém subcategorias desta categoria principal
                        $subcategories = get_terms(array(
                            'taxonomy' => 'category',
                            'parent' => $category->term_id,
                            'hide_empty' => false
                        ));

                        if (!empty($subcategories) && !is_wp_error($subcategories)) {
                            // Se houver subcategorias, crie um submenu
                            echo '<div class="btn-group dropdown d-flex">';
                            printf(
                                '<a href="%1$s" type="button" class="dropdown-item">%2$s</a>',
                                esc_url(get_category_link($category->term_id)),
                                esc_html($category->name)
                            );
                            echo '<a type="button" class="dropdown-toggle dropdown-toggle-split d-flex align-items-center"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                              </a>';
                            echo '<ul class="dropdown-menu dropdown-submenu">';
                            foreach ($subcategories as $subcategory) {
                                printf(
                                    '<li><a class="dropdown-item" href="%1$s">%2$s</a></li>',
                                    esc_url(get_term_link($subcategory)),
                                    esc_html($subcategory->name)
                                );
                            }
                            echo '</ul></div>';
                        } else {
                            // Se não houver subcategorias, crie um item simples
                            printf(
                                '<li><a class="dropdown-item" href="%1$s">%2$s</a></li>',
                                esc_url(get_category_link($category->term_id)),
                                esc_html($category->name)
                            );
                        }
                    }
                } elseif (is_tax()) {
                    // Obtém o objeto de taxonomia atual
                    $current_term = get_queried_object();

                    // Verifica se o objeto de taxonomia é válido e se pertence a um Custom Post Type
                    if ($current_term && isset($current_term->taxonomy) && isset($current_term->term_id)) {
                        // Obtém o nome da taxonomia e o term_id
                        $taxonomy = $current_term->taxonomy;
                        $term_id = $current_term->term_id;

                        // Obtém o nome do Custom Post Type associado à taxonomia
                        $post_type = get_taxonomy($taxonomy)->object_type[0];

                        // Obtém todas as categorias e subcategorias do CPT atual
                        $categories = get_terms(array(
                            'taxonomy' => $taxonomy, // Use a taxonomia do CPT
                            'orderby' => 'name',
                            'parent' => 0,
                            'hide_empty' => false
                        ));

                        foreach ($categories as $category) {
                            // Obtém subcategorias desta categoria principal no CPT
                            $subcategories = get_terms(array(
                                'taxonomy' => $taxonomy, // Use a taxonomia do CPT
                                'parent' => $category->term_id,
                                'hide_empty' => false
                            ));

                            if (!empty($subcategories) && !is_wp_error($subcategories)) {
                                // Se houver subcategorias, crie um submenu
                                echo '<div class="btn-group dropdown d-flex">';
                                printf(
                                    '<a href="%1$s" type="button" class="dropdown-item">%2$s</a>',
                                    esc_url(get_term_link($category->term_id, $taxonomy)), // Use a taxonomia do CPT
                                    esc_html($category->name)
                                );
                                echo '<a type="button" class="dropdown-toggle dropdown-toggle-split d-flex align-items-center"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  <span class="visually-hidden">Toggle Dropdown</span>
                                </a>';
                                echo '<ul class="dropdown-menu dropdown-submenu">';
                                foreach ($subcategories as $subcategory) {
                                    printf(
                                        '<li><a class="dropdown-item" href="%1$s">%2$s</a></li>',
                                        esc_url(get_term_link($subcategory, $taxonomy)), // Use a taxonomia do CPT
                                        esc_html($subcategory->name)
                                    );
                                }
                                echo '</ul></div>';
                            } else {
                                // Se não houver subcategorias, ele cria um item simples
                                printf(
                                    '<li><a class="dropdown-item" href="%1$s">%2$s</a></li>',
                                    esc_url(get_term_link($category->term_id, $taxonomy)), // Use a taxonomia do CPT
                                    esc_html($category->name)
                                );
                            }
                        }
                    }
                } elseif (is_post_type_archive() || is_custom_post_type()) {
                    // Obtém o nome do Custom Post Type atual
                    $post_type = get_query_var('post_type');
                    // Obtém as taxonomias associadas ao Custom Post Type
                    $taxonomies = get_object_taxonomies($post_type);

                    foreach ($taxonomies as $taxonomy) {
                        // Obtém todos os termos da taxonomia, incluindo os vazios
                        $terms = get_terms(array(
                            'taxonomy' => $taxonomy,
                            'hide_empty' => false, // Inclui termos mesmo que não tenham posts associados
                        ));

                        // Verifica se existem termos na taxonomia
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                // Verifica se o termo é uma categoria principal (sem pai)
                                if ($term->parent == 0) {
                                    // Obtém subcategorias desta categoria principal
                                    $subcategories = get_terms(array(
                                        'taxonomy' => $taxonomy,
                                        'parent' => $term->term_id,
                                        'hide_empty' => false,
                                    ));

                                    if (!empty($subcategories) && !is_wp_error($subcategories)) {
                                        // Se houver subcategorias, crie um submenu
                                        echo '<div class="btn-group dropdown d-flex">';
                                        printf(
                                            '<a href="%1$s" type="button" class="dropdown-item">%2$s</a>',
                                            esc_url(get_term_link($term)),
                                            esc_html($term->name)
                                        );
                                        echo '<a type="button" class="dropdown-toggle dropdown-toggle-split d-flex align-items-center"
                                          data-bs-toggle="dropdown" aria-expanded="false">
                                          <span class="visually-hidden">Toggle Dropdown</span>
                                        </a>';
                                        echo '<ul class="dropdown-menu dropdown-submenu">';
                                        foreach ($subcategories as $subcategory) {
                                            printf(
                                                '<li><a class="dropdown-item" href="%1$s">%2$s</a></li>',
                                                esc_url(get_term_link($subcategory)),
                                                esc_html($subcategory->name)
                                            );
                                        }
                                        echo '</ul></div>';
                                    } else {
                                        // Se não houver subcategorias, ele cria um item simples
                                        printf(
                                            '<li><a class="dropdown-item" href="%1$s">%2$s</a></li>',
                                            esc_url(get_term_link($term)),
                                            esc_html($term->name)
                                        );
                                    }
                                }
                            }
                        } else {
                            echo 'Sem categorias registradas.';
                        }
                    }
                } else {
                    echo '';
                }
    ?>
            </ul>
        </div>
    </div>
</div>
<!-- END Show Categories -->
<?php } ?>



<!-- Backup HTML -->
<!-- <div class="row items-push">
  <div class="d-flex justify-content-center justify-content-lg-end">
    <div class="dropdown">
      <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Filtrar por categoria
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Item pai</a></li>
        <li><a class="dropdown-item" href="#">Item pai</a></li>
        <div class="btn-group dropdown d-flex">
          <a href="#" type="button" class="dropdown-item">Item pai</a>
          <a type="button" class="dropdown-toggle dropdown-toggle-split d-flex align-items-center"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </a>
          <ul class="dropdown-menu dropdown-submenu">
            <li><a class="dropdown-item" href="#">Item filho</a></li>
            <li><a class="dropdown-item" href="#">Item filho</a></li>
            <li><a class="dropdown-item" href="#">Item filho</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
</div> -->