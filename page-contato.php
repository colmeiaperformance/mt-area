<?php include("header.php"); ?>

<!-- Main Container -->
<main id="main-container">
  <?php get_template_part( 'template-parts/quick-menu' ) ?>

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

    <div class="row">
      <div class="col">
        <form action="#" method="POST">
          <div class="block block-rounded">
            <div class="block-header block-header-default block-header">
              <h3 class="block-title"></h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center py-sm-3 py-md-5">
                <div class="col-sm-10 col-md-8">
                  <div class="d-lg-flex gap-lg-3">

                    <div class="col mb-4 form-floating">
                      <input type="text" class="form-control form-control-alt" id="block-form8-firstname"
                        name="block-form8-lastname" placeholder="Insira seu nome..">
                      <label class="form-label" for="block-form8-firstname">Nome</label>
                    </div>
                    <div class="col mb-4 form-floating">
                      <input type="text" class="form-control form-control-alt" id="block-form8-lastname"
                        name="block-form8-lastname" placeholder="Insira seu sobrenome..">
                      <label class="form-label" for="block-form8-lastname">Sobrenome</label>
                    </div>
                  </div>

                  <div class="mb-4 form-floating">
                    <textarea class="form-control form-control-alt" id="block-form8-message" style="height: 100px"
                      name="block-form8-message" placeholder="Insira sua dúvida, sugestão ou crítica..."></textarea>
                    <label class="form-label" for="block-form8-password">Dúvida, crítica ou sugestão</label>
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="block-form8-remember-me"
                        name="block-form8-remember-me">
                      <label class="form-check-label" for="block-form8-remember-me">Aceito receber contato via e-mail ou
                        telefone de um membro da Equipe MT.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light text-center">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-check opacity-50 me-1"></i> Enviar
              </button>
              <button type="reset" class="btn btn-alt-secondary">
                <i class="fa fa-sync-alt opacity-50 me-1"></i> Limpar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>


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