<div class="block block-transparent">
  <?php if (has_tag()) { ?>
  <h4>Tags:</h4>
  <?php the_tags('<span class="badge bg-white fs-base px-3 py-2 me-2 m-1">', '</span><span class="badge bg-white fs-base px-3 py-2 me-2 m-1">', '</span>'); ?>
  <?php } ?>
</div>