<!-- Show Categories -->
<div class="row items-push">
  <div class="dropdown text-center text-lg-end">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <?php _e('Filtrar por categoria', 'mt-area'); ?>
    </button>

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
          printf(
            '<li><a class="dropdown-item" href="%1$s">%2$s</a></li>',
            esc_url(get_category_link($category->term_id)),
            esc_html($category->name)
          );
        }
      } elseif (is_custom_post_type()) {
        $post_type = get_post_type();
        $post_taxonomy = get_object_taxonomies($post_type);
        $taxonomy = implode('', $post_taxonomy);
        $terms = get_the_terms(get_the_ID(), $taxonomy);

        if ($terms && !is_wp_error($terms)) {
          // Imprime os termos no formato desejado
          foreach ($terms as $term) {
            echo '<li><a class="dropdown-item" href="' . esc_url(get_category_link($term->term_id)) . '">' . esc_html($term->name) . '</a></li>';
          }
        } else {
          echo 'Sem categorias registradas.';
        }
      }
      ?>
    </ul>
  </div>
</div>
<!-- END Show Categories -->