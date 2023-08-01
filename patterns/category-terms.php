<?php
// Verifica o tipo de post personalizado do post atual
$post_type = get_post_type();
$post_taxonomy = get_object_taxonomies($post_type);
$taxonomy = implode('', $post_taxonomy);

// Verifica se o post possui a taxonomia 'generos-literarios'
$terms = get_the_terms(get_the_ID(), $taxonomy);

// Verifica se há termos associados ao post
if ($terms && !is_wp_error($terms)) {
  // Imprime os termos no formato desejado
  foreach ($terms as $term) {
    echo '<span class="badge bg-primary">' . esc_html($term->name) . '</span> ';
  }
} else {
  echo 'Sem gêneros literários registrados.';
}
