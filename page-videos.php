<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( '/template-parts/quick-menu' ) ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_videos.jpg'; ?>');">
    <div class="bg-mt-red-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          Vídeos em Destaque
        </h1>
        <h3 class="fw-normal text-white-75 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
          autem veritatis
        </h3>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row">
      <?php get_template_part( '/template-parts/categories-list' ); ?>
    </div>
    <div class="row justify-content-center items-push">
      <!-- Video -->
      <div class="col-8">
        <a class="block block-transparent h-100 mb-0" href="#">
          <div class="d-block d-md-flex">
            <div class="col-12 col-md-5 d-flex align-items-center">
              <img class="img-fluid" src="https://img.youtube.com/vi/XprCst-JNcM/maxresdefault.jpg" alt="">
            </div>
            <div class="block-content">
              <h4 class="mb-1">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, consequuntur
              </h4>
              <p class="fs-sm">
                <span class="text-muted">30/03/2023</span> · <em class="text-muted">11:56</em>
              </p>
              <p>
                Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius
                vel euismod sed, tristique et lectus justo amet
              </p>
            </div>
          </div>
        </a>
      </div>
      <!-- END Video -->
      <!-- Video -->
      <div class="col-8">
        <a class="block block-transparent h-100 mb-0" href="#">
          <div class="d-block d-md-flex">
            <div class="col-12 col-md-5 d-flex align-items-center">
              <img class="img-fluid" src="https://img.youtube.com/vi/OYOAfqvry_c/maxresdefault.jpg" alt="">
            </div>
            <div class="block-content">
              <h4 class="mb-1">
                Sapiente dicta aspernatur hic perspiciatis provident accusantium natus
              </h4>
              <p class="fs-sm">
                <span class="text-muted">19/03/2023</span> · <em class="text-muted">9:45</em>
              </p>
              <p>
                Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius
                vel euismod sed, tristique et lectus justo amet
              </p>
            </div>
          </div>
        </a>
      </div>
      <!-- END Video -->
      <!-- Video -->
      <div class="col-8">
        <a class="block block-transparent h-100 mb-0" href="#">
          <div class="d-block d-md-flex">
            <div class="col-12 col-md-5 d-flex align-items-center">
              <img class="img-fluid" src="https://i.ytimg.com/vi/FeRWNH5yX6o/maxresdefault.jpg" alt="">
            </div>
            <div class="block-content">
              <h4 class="mb-1">
                Deserunt, placeat velit temporibus dolor obcaecati impedit laborum corporis debitis
              </h4>
              <p class="fs-sm">
                <span class="text-muted">30/03/2023</span> · <em class="text-muted">11:56</em>
              </p>
              <p>
                Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius
                vel euismod sed, tristique et lectus justo amet
              </p>
            </div>
          </div>
        </a>
      </div>
      <!-- END Video -->
      <!-- Video -->
      <div class="col-8">
        <a class="block block-transparent h-100 mb-0" href="#">
          <div class="d-block d-md-flex">
            <div class="col-12 col-md-5 d-flex align-items-center">
              <img class="img-fluid" src="https://img.youtube.com/vi/rHOz1AdZM4A/maxresdefault.jpg" alt="">
            </div>
            <div class="block-content">
              <h4 class="mb-1">
                Meditacao Transcendental Sidhis e o voo ioguico</h4>
              <p class="fs-sm">
                <span class="text-muted">30/03/2023</span> · <em class="text-muted">11:56</em>
              </p>
              <p>
                Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius
                vel euismod sed, tristique et lectus justo amet
              </p>
            </div>
          </div>
        </a>
      </div>
      <!-- END Video -->
      <!-- Video -->
      <div class="col-8">
        <a class="block block-transparent h-100 mb-0" href="#">
          <div class="d-block d-md-flex">
            <div class="col-12 col-md-5 d-flex align-items-center">
              <img class="img-fluid" src="https://img.youtube.com/vi/MVOoGgJ9L84/maxresdefault.jpg" alt="">
            </div>
            <div class="block-content">
              <h4 class="mb-1">
                Meditacao Transcendental Sidhis e o voo ioguico</h4>
              <p class="fs-sm">
                <span class="text-muted">30/03/2023</span> · <em class="text-muted">11:56</em>
              </p>
              <p>
                Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius
                vel euismod sed, tristique et lectus justo amet
              </p>
            </div>
          </div>
        </a>
      </div>
      <!-- END Video -->




    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center push">
        <li class="page-item active">
          <a class="page-link" href="javascript:void(0)">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)">4</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)">5</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:void(0)" aria-label="Next">
            <span aria-hidden="true">
              <i class="fa fa-angle-right"></i>
            </span>
            <span class="visually-hidden">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- END Pagination -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>