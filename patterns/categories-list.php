<?php
/**
 * Title: Categories List
 * Slug: mt-area/categories-list
 * Categories: query
 * Keywords: categories list
 * Block Types: core/template-part/categories-list
 */
?>
<!-- Show Categories -->
<div class="row items-push">
  <?php
  $post_type = get_post_type();
      $categories = get_categories( array(
        'post_type' => $post_type,
        'orderby' => 'name',
        'parent'  => 0
      ) );
?>
  <div class="dropdown text-center text-lg-end">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <?php _e('Filtrar por categoria', 'mt-area'); ?>
    </button>

    <ul class="dropdown-menu">
      <!-- <li><span class="dropdown-item-text">Selecione uma categoria</span></li> -->

      <?php    
      foreach ( $categories as $category ) {
        printf( '<li><a class="dropdown-item" href="%1$s">%2$s</a></li>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_html( $category->name )
      );
    }
    ?>
    </ul>
  </div>
</div>
<!-- END Show Categories -->