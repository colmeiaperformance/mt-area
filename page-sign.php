<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part('/template-parts/quick-menu') ?>

  <!-- Hero -->
  <div class="bg-image bg-image-fixed"
    style="background-image: url('<?php echo get_template_directory_uri() . '/assets/media/mt/qm_cursos.jpg'; ?>');">
    <div class="bg-mt-default-op">
      <div class="content content-full text-center">
        <h1 class="fw-bold text-white mt-3 mb-2">
          <?php the_title(); ?>
        </h1>
        <!-- <h3 class="fw-normal text-white-75 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
          autem veritatis
        </h3> -->
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">


    <!-- Call to Action -->
    <div class="content content-boxed text-center">
      <div class="py-5">
        <h2 class="mb-3 text-center">
          Como posso ajudar a realizar esse propósito?
        </h2>
        <h3 class="h4 fw-light text-muted push text-center">
          Além de manter a regularidade da sua prática e ajudar a divulgar os benefícios da Meditação Transcendental,
          você pode abraçar essa causa se tornando um membro Sócio MT (MTLover).
        </h3>
        <!-- <span class="m-2 d-inline-block">
          <a class="btn btn-hero btn-primary" href="javascript:void(0)" data-toggle="click-ripple">
            <i class="fa fa-link opacity-50 me-1"></i> Aprenda como...
          </a>
        </span> -->
      </div>
    </div>
    <!-- END Call to Action -->

    <!-- Plans -->
    <div class="row justify-content-center items-push">
      <div class="col-md-6 col-xl-3">
        <!-- Meditante Plan -->
        <div class="block block-link-pop block-rounded text-center h-100 d-flex flex-column justify-content-between"> <!-- a -->
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
                  <span class="fa-li"><i class="fa-solid fa-check-circle text-warning"></i></span>
                  <span class="text-start">Base de conhecimento limitada</span>
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
          <div class="block-footer block-content-full bg-body-light py-3">
            <span class="btn btn-hero btn-secondary px-4 disabled">Plano Atual</span>
          </div> <!-- a -->
        </div>
        <!-- END Meditante Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Acessivel Plan -->
        <a class="block block-link-pop block-rounded block-themed block-fx-shadow text-center h-100 d-flex flex-column justify-content-between"
          href="javascript:void(0)">
          <div class="block-header">
            <h3 class="block-title"><i class="fa fa-check me-1"></i> Acessível</h3>
          </div>
          <div class="block-content bg-body-light">
            <div class="py-2">
              <p class="h1 fw-bold mb-2">R$60</p>
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
          <div class="block-footer block-content-full bg-body-light py-3">
            <span class="btn btn-hero btn-primary px-4">Aderir</span>
          </div>
        </a>
        <!-- END Acessivel Plan -->
      </div>
      <div class="col-md-6 col-xl-3">
        <!-- Abundante Plan -->
        <a class="block block-link-pop block-rounded block-themed block-fx-shadow text-center h-100 d-flex flex-column justify-content-between"
          href="javascript:void(0)">
          <div class="block-header">
            <h3 class="block-title"><i class="fa fa-check me-1"></i> Abundante</h3>
          </div>
          <div class="block-content bg-body-light">
            <div class="py-2">
              <p class="h1 fw-bold mb-2">R$120</p>
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
          <div class="block-footer block-content-full bg-body-light py-3">
            <span class="btn btn-hero btn-primary px-4">Aderir</span>
          </div>
        </a>
        <!-- END Abundante Plan -->
      </div>
    </div>
    <div class="row">
      <p class="text-center small">*Os descontos exclusivos são no máximo em até 10 eventos, livros ou cursos.</p>
    </div>
    <!-- END Plans -->

    <!-- Special Offer -->
    <div class="bg-body-light">
      <div class="content content-boxed content-full">
        <div class="py-5">
          <h2 class="mb-2 text-center">
            Por que se tornar um sócio?
          </h2>
          <h3 class="fw-light text-muted push text-center">
            Você estará ajudando a manter o Movimento MT no Brasil para que possamos disseminar cada vez mais esse
            conhecimento a todas as pessoas e, assim, transformar a consciência coletiva de nosso Brasil.
          </h3>
        </div>
        <div class="row py-3 text-center">
          <div class="col-sm-6 col-md-3 mb-5">
            <div class="my-3">
              <i class="fa fa-2x fa-sun text-success"></i>
            </div>
            <h4 class="h5 mb-2">
              Benefícios exclusivos
            </h4>
            <p class="mb-0 text-muted">

            </p>
          </div>
          <div class="col-sm-6 col-md-3 mb-5">
            <div class="my-3">
              <i class="fa fa-2x fa-ticket text-success"></i>
            </div>
            <h4 class="h5 mb-2">
              Eventos especiais
            </h4>
            <p class="mb-0 text-muted">

            </p>
          </div>
          <div class="col-sm-6 col-md-3 mb-5">
            <div class="my-3">
              <i class="fa fa-2x fa-puzzle-piece text-success"></i>
            </div>
            <h4 class="h5 mb-2">
              Integração com a comunidade
            </h4>
            <p class="mb-0 text-muted">

            </p>
          </div>
          <div class="col-sm-6 col-md-3 mb-5">
            <div class="my-3">
              <i class="fa fa-2x fa-circle-dollar-to-slot text-success"></i>
            </div>
            <h4 class="h5 mb-2">
              Descontos em cursos e eventos
            </h4>
            <p class="mb-0 text-muted">

            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- END Special Offer -->



    <!-- Final -->
    <div class="content content-boxed text-center">
      <div class="py-5">
        <h2 class="mb-3 text-center">
          Maharishi Mahesh Yogi assumiu o propósito de levar a MT ao maior número possível de pessoas e, assim, criar
          indivíduos livres de sofrimento e uma sociedade global mais pacífica por meio do pleno desenvolvimento de cada
          ser humano.
        </h2>
        <h3 class="h4 fw-light text-muted push text-center">
          Esse é o nosso propósito: construir uma sociedade de paz e felicidade através do pleno desenvolvimento da
          consciência.
        </h3>
      </div>
    </div>
    <!-- END Final -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>