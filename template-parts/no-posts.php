<div class="row items-push">
  <div class="alert alert-secondary p-3 mb-0">
    <i class="fa fa-info-circle me-1"></i>
    <?php
    if (is_tax('estado')) {
        printf(__('Não há unidades registradas nesse Estado. Gostaria de conferir a lista com <a href="%1$s">todas as nossas Unidades</a>?', 'mt-area'), esc_url(site_url() . '/unidades'));
    } elseif (is_tax('categoria-de-curso')) {
        $taxonomy = 'categoria-de-curso';
        $post_type = get_taxonomy($taxonomy)->object_type[0];
        $archive_link = get_post_type_archive_link($post_type);
        if ($archive_link) {
          printf(__('Não há cursos registrados nessa categoria, que tal conferir nossa <a href="%1$s">lista de cursos</a> completa?', 'mt-area'), esc_url($archive_link) );
        } else {
          printf(__('Não há cursos registrados nessa categoria, que tal conferir nossa <a href="%1$s">lista de cursos</a> completa?', 'mt-area'), esc_url(site_url() . '/cursos'));
        }        
    } elseif (is_tax('genero-literario')) {
      $taxonomy = 'genero-literario';
        $post_type = get_taxonomy($taxonomy)->object_type[0];
        $archive_link = get_post_type_archive_link($post_type);
        if ($archive_link) {
          printf(__('Não há livros registrados nessa categoria, que tal conferir nossa <a href="%1$s">lista de livros</a> completa?', 'mt-area'), esc_url($archive_link) );
        } else {
          printf(__('Não há livros registrados nessa categoria, que tal conferir nossa <a href="%1$s">lista de livros</a> completa?', 'mt-area'), site_url() . '/livros');
        }  
    } else {
        printf(__('Enquando não há resultados com esses parâmetros, que tal conferir nossa <a href="%1$s">Base de conhecimento</a> completa?', 'mt-area'), site_url() . '/blog');
    }
    ?>
  </div>
</div>