<form class="w-100" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
  <div class="input-group">
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_search_off">
      <i class="fa fa-fw fa-times-circle"></i>
    </button>
    <input type="text" class="form-control border-0" placeholder="Buscar no painel..." id="s" name="s"
      value="<?php the_search_query(); ?>" />
    <input type="hidden" value="post" name="post_type" id="post_type" />
    <input class="btn btn-primary" type="submit" id="searchsubmit"
      value="<?php echo esc_attr__( 'Search', 'mt-area' ); ?>" />
  </div>
</form>