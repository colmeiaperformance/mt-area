<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( '/patterns/quick-menu' ) ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_cursos.jpg'; ?>');">
    <div class="bg-mt-default-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php the_title(); ?>
        </h1>
        <h3 class="fw-normal text-white-75 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
          autem veritatis
        </h3>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">

    <!-- Plans -->
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <!-- Meditante Plan -->
        <a class="block block-link-pop block-rounded text-center" href="javascript:void(0)">
          <div class="block-header">
            <h3 class="block-title">Meditante</h3>
          </div>
          <div class="block-content bg-body-light">
            <div class="py-2">
              <p class="h1 fw-bold mb-2">R$0</p>
              <p class="h6 text-muted">por mês</p>
            </div>
          </div>
          <div class="block-content">
            <div class="py-2">
              <ul class="fa-ul text-start">
                <li>
                  <span class="fa-li"><i class="fa-solid fa-times-circle text-danger"></i></span>
                  <span class="text-start">Sem descontos exclusivos em eventos</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Base de Conhecimento</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Conhecimento</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Calendário de Eventos</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Suporte via WhatsApp</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <span class="btn btn-hero btn-secondary px-4">Escolher</span>
          </div>
        </a>
        <!-- END Freelancer Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Startup Plan -->
        <a class="block block-link-pop block-rounded text-center" href="javascript:void(0)">
          <div class="block-header">
            <h3 class="block-title">Associado Básico</h3>
          </div>
          <div class="block-content bg-body-light">
            <div class="py-2">
              <p class="h1 fw-bold mb-2">R$99</p>
              <p class="h6 text-muted">por mês</p>
            </div>
          </div>
          <div class="block-content">
            <div class="py-2">
              <ul class="fa-ul text-start">
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-warning"></i></span>
                  <span class="text-start">20% em descontos exclusivos*</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Base de Conhecimento</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Artigos</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Calendário de Eventos</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Suporte via WhatsApp</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <span class="btn btn-hero btn-secondary px-4">Escolher</span>
          </div>
        </a>
        <!-- END Startup Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Business Plan -->
        <a class="block block-link-pop block-rounded text-center"
          href="javascript:void(0)">
          <div class="block-header">
            <h3 class="block-title">
              Associado Premium
            </h3>
          </div>
          <div class="block-content bg-body-light">
            <div class="py-2">
              <p class="h1 fw-bold mb-2">R$249</p>
              <p class="h6 text-muted">por mês</p>
            </div>
          </div>
          <div class="block-content">
            <div class="py-2">
              <ul class="fa-ul text-start">
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-warning"></i></span>
                  <span class="text-start">50% em descontos exclusivos*</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Base de Conhecimento</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Artigos</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Calendário de Eventos</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Suporte via WhatsApp</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <span class="btn btn-hero btn-secondary px-4">Escolher</span>
          </div>
        </a>
        <!-- END Business Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- VIP Plan -->
        <a class="block block-link-pop block-rounded block-themed block-fx-shadow text-center" href="javascript:void(0)">
          <div class="block-header">
            <h3 class="block-title"><i class="fa fa-check me-1"></i> Associado VIP</h3>
          </div>
          <div class="block-content bg-body-light">
            <div class="py-2">
              <p class="h1 fw-bold mb-2">R$499</p>
              <p class="h6 text-muted">por mês</p>
            </div>
          </div>
          <div class="block-content">
            <div class="py-2">
              <ul class="fa-ul text-start">
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">100% em descontos exclusivos*</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Base de Conhecimento</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Artigos</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Calendário de Eventos</span>
                </li>
                <li>
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-success"></i></span>
                  <span class="text-start">Suporte via WhatsApp</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <span class="btn btn-hero btn-primary px-4">Escolher</span>
          </div>
        </a>
        <!-- END VIP Plan -->
      </div>
    </div>
    <div class="row"><p class="text-center small">*Os descontos exclusivos são no máximo em até 10 eventos, livros ou cursos.</p></div>
    <!-- END Plans -->

    <!-- Special Offer -->
    <div class="bg-body-light">
      <div class="content content-boxed content-full">
        <div class="py-5">
          <h2 class="mb-2 text-center">
            Ofertas Especiais
          </h2>
          <h3 class="fw-light text-muted push text-center">
            Se você se associar, você terá os seguintes benefícios inclusos, sem custo adicional:
          </h3>
        </div>
        <div class="row py-3">
          <div class="col-sm-6 col-md-4 mb-5">
            <div class="my-3">
              <i class="fa fa-2x fa-phone text-success"></i>
            </div>
            <h4 class="h5 mb-2">
              Suporte
            </h4>
            <p class="mb-0 text-muted">
              Tiramos suas dúvidas a respeito de tudo no universo da Meditação Transcendental.
            </p>
          </div>
          <div class="col-sm-6 col-md-4 mb-5">
            <div class="my-3">
              <i class="fa fa-2x fa-ticket text-success"></i>
            </div>
            <h4 class="h5 mb-2">
              Descontos imperdíveis
            </h4>
            <p class="mb-0 text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, cupiditate.
            </p>
          </div>
          <div class="col-sm-6 col-md-4 mb-5">
            <div class="my-3">
              <i class="fa fa-2x fa-puzzle-piece text-success"></i>
            </div>
            <h4 class="h5 mb-2">
              Integração com a comunidade
            </h4>
            <p class="mb-0 text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, eos.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- END Special Offer -->

    <!-- Call to Action -->
    <div class="content content-boxed text-center">
      <div class="py-5">
        <h2 class="mb-3 text-center">
          Por que se tornar associado?
        </h2>
        <h3 class="h4 fw-light text-muted push text-center">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, cumque rem deserunt eius officia sapiente!
        </h3>
        <span class="m-2 d-inline-block">
          <a class="btn btn-hero btn-primary" href="javascript:void(0)" data-toggle="click-ripple">
            <i class="fa fa-link opacity-50 me-1"></i> Aprenda como...
          </a>
        </span>
      </div>
    </div>
    <!-- END Call to Action -->



  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>