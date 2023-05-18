<!-- Show Categories -->
<div class="row items-push">
  <?php
      $categories = get_categories( array(
        'orderby' => 'name',
        'parent'  => 0
      ) );
?>
  <div class="dropdown text-center text-lg-end">
    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Filtrar por categoria
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