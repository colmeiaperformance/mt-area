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
        <!-- <h3 class="fw-normal text-white-75 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
          autem veritatis
        </h3> -->
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">

    <!-- Form -->
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
    <!-- END Form -->

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

    <!-- Frequently Asked Questions -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Perguntas Frequentes</h3>
      </div>
      <div class="block-content">
        <!-- Introduction -->
        <h2 class="content-heading"><strong>1.</strong> Introdução</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="text-muted">
              Get to know us better with this introduction section. You can always contact us if you need any further
              assistance.
            </p>
          </div>
          <div class="col-lg-8">
            <div id="faq1" role="tablist" aria-multiselectable="true">
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq1_h1">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq1" href="#faq1_q1"
                    aria-expanded="true" aria-controls="faq1_q1">1.1 Welcome to your own dashboard</a>
                </div>
                <div id="faq1_q1" class="collapse" role="tabpanel" aria-labelledby="faq1_h1" data-bs-parent="#faq1">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq1_h2">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq1" href="#faq1_q2"
                    aria-expanded="true" aria-controls="faq1_q2">1.2 The team behind the project</a>
                </div>
                <div id="faq1_q2" class="collapse" role="tabpanel" aria-labelledby="faq1_h2" data-bs-parent="#faq1">
                  <div class="block-content">
                    <div class="row">
                      <div class="col-lg-6">
                        <a class="block block-link-shadow text-center" href="javascript:void(0)">
                          <div class="block-content">
                            <img class="img-avatar" src="assets/media/avatars/avatar1.jpg" alt="">
                          </div>
                          <div class="block-content block-content-full">
                            <div class="fw-semibold">Alice Moore</div>
                            <div class="fs-sm text-muted">Web Designer</div>
                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a class="block block-link-shadow text-center" href="javascript:void(0)">
                          <div class="block-content">
                            <img class="img-avatar" src="assets/media/avatars/avatar14.jpg" alt="">
                          </div>
                          <div class="block-content block-content-full">
                            <div class="fw-semibold">Adam McCoy</div>
                            <div class="fs-sm text-muted">Web Development</div>
                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a class="block block-link-shadow text-center" href="javascript:void(0)">
                          <div class="block-content">
                            <img class="img-avatar" src="assets/media/avatars/avatar9.jpg" alt="">
                          </div>
                          <div class="block-content block-content-full">
                            <div class="fw-semibold">Jesse Fisher</div>
                            <div class="fs-sm text-muted">Photographer</div>
                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a class="block block-link-shadow text-center" href="javascript:void(0)">
                          <div class="block-content">
                            <img class="img-avatar" src="assets/media/avatars/avatar5.jpg" alt="">
                          </div>
                          <div class="block-content block-content-full">
                            <div class="fw-semibold">Betty Kelley</div>
                            <div class="fs-sm text-muted">Graphic Designer</div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq1_h3">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq1" href="#faq1_q3"
                    aria-expanded="true" aria-controls="faq1_q3">1.3 What are our values?</a>
                </div>
                <div id="faq1_q3" class="collapse" role="tabpanel" aria-labelledby="faq1_h3" data-bs-parent="#faq1">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq1_h4">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq1" href="#faq1_q4"
                    aria-expanded="true" aria-controls="faq1_q4">1.4 What are our future plans?</a>
                </div>
                <div id="faq1_q4" class="collapse" role="tabpanel" aria-labelledby="faq1_h4" data-bs-parent="#faq1">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Introduction -->

        <!-- Features -->
        <h2 class="content-heading"><strong>2.</strong> Eventos</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="text-muted">
              There are tons of available features, so you might have some questions
            </p>
          </div>
          <div class="col-lg-8">
            <div id="faq2" role="tablist" aria-multiselectable="true">
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq2_h1">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq2" href="#faq2_q1"
                    aria-expanded="true" aria-controls="faq2_q1">What are the key features?</a>
                </div>
                <div id="faq2_q1" class="collapse" role="tabpanel" aria-labelledby="faq2_h1" data-bs-parent="#faq2">
                  <div class="block-content">
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                      accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                      vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                      venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                      nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                      massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                      viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <ul class="fa-ul list-li-push-sm">
                      <li>
                        <i class="fa fa-check fa-li"></i> Fully Responsive
                      </li>
                      <li>
                        <i class="fa fa-check fa-li"></i> API Support
                      </li>
                      <li>
                        <i class="fa fa-check fa-li"></i> Dynamic and real time data
                      </li>
                      <li>
                        <i class="fa fa-check fa-li"></i> Security
                      </li>
                    </ul>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                      accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                      vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                      venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                      nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                      massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                      viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq2_h2">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq2" href="#faq2_q2"
                    aria-expanded="true" aria-controls="faq2_q2">How to use your dashboard?</a>
                </div>
                <div id="faq2_q2" class="collapse" role="tabpanel" aria-labelledby="faq2_h2" data-bs-parent="#faq2">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq2_h3">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq2" href="#faq2_q3"
                    aria-expanded="true" aria-controls="faq2_q3">How easy can I connect to third party services?</a>
                </div>
                <div id="faq2_q3" class="collapse" role="tabpanel" aria-labelledby="faq2_h3" data-bs-parent="#faq2">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq2_h4">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq2" href="#faq2_q4"
                    aria-expanded="true" aria-controls="faq2_q4">How secure is my data?</a>
                </div>
                <div id="faq2_q4" class="collapse" role="tabpanel" aria-labelledby="faq2_h4" data-bs-parent="#faq2">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Features -->

        <!-- Knowledge -->
        <h2 class="content-heading"><strong>3.</strong> Conhecimento</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="text-muted">
              There are tons of available features, so you might have some questions
            </p>
          </div>
          <div class="col-lg-8">
            <div id="faq3" role="tablist" aria-multiselectable="true">
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq3_h1">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq3" href="#faq3_q1"
                    aria-expanded="true" aria-controls="faq3_q1">What are the key features?</a>
                </div>
                <div id="faq3_q1" class="collapse" role="tabpanel" aria-labelledby="faq3_h1" data-bs-parent="#faq3">
                  <div class="block-content">
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                      accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                      vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                      venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                      nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                      massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                      viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <ul class="fa-ul list-li-push-sm">
                      <li>
                        <i class="fa fa-check fa-li"></i> Fully Responsive
                      </li>
                      <li>
                        <i class="fa fa-check fa-li"></i> API Support
                      </li>
                      <li>
                        <i class="fa fa-check fa-li"></i> Dynamic and real time data
                      </li>
                      <li>
                        <i class="fa fa-check fa-li"></i> Security
                      </li>
                    </ul>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                      accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                      vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                      venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                      nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                      massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi
                      viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq3_h2">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq3" href="#faq3_q2"
                    aria-expanded="true" aria-controls="faq3_q2">How to use your dashboard?</a>
                </div>
                <div id="faq3_q2" class="collapse" role="tabpanel" aria-labelledby="faq3_h2" data-bs-parent="#faq3">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq3_h3">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq3" href="#faq3_q3"
                    aria-expanded="true" aria-controls="faq3_q3">How easy can I connect to third party services?</a>
                </div>
                <div id="faq3_q3" class="collapse" role="tabpanel" aria-labelledby="faq3_h3" data-bs-parent="#faq3">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq3_h4">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq3" href="#faq3_q4"
                    aria-expanded="true" aria-controls="faq3_q4">How secure is my data?</a>
                </div>
                <div id="faq3_q4" class="collapse" role="tabpanel" aria-labelledby="faq3_h4" data-bs-parent="#faq3">
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing
                      luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor
                      tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum
                      quis in sit varius lorem sit metus mi.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Knowledge -->

        <!-- Payments -->
        <h2 class="content-heading"><strong>4.</strong> Pagamentos</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="text-muted">
              Anything regarding plans and payments can be found in this section
            </p>
          </div>
          <div class="col-lg-8">
            <div id="faq4" role="tablist" aria-multiselectable="true">
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq4_h1">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq4" href="#faq4_q1"
                    aria-expanded="true" aria-controls="faq4_q1">What are the available plans?</a>
                </div>
                <div id="faq4_q1" class="collapse" role="tabpanel" aria-labelledby="faq4_h1" data-bs-parent="#faq4">
                  <div class="block-content">
                    <div class="row">
                      <div class="col-md-6">
                        <!-- Developer Plan -->
                        <a class="block block-link-shadow block-rounded block-bordered text-center"
                          href="javascript:void(0)">
                          <div class="block-header">
                            <h3 class="block-title">Developer</h3>
                          </div>
                          <div class="block-content bg-gray-lighter">
                            <div class="h1 fw-bold mb-1">$19</div>
                            <div class="h5 text-muted">per month</div>
                          </div>
                          <div class="block-content">
                            <p class="mb-1"><strong>2</strong> Projects</p>
                            <p class="mb-1"><strong>10GB</strong> Storage</p>
                            <p class="mb-1"><strong>15</strong> Clients</p>
                            <p><strong>Email</strong> Support</p>
                          </div>
                          <div class="block-content block-content-full bg-gray-lighter">
                            <span class="btn btn-sm btn-primary">Sign Up</span>
                          </div>
                        </a>
                        <!-- END Developer Plan -->
                      </div>
                      <div class="col-md-6">
                        <!-- Startup Plan -->
                        <a class="block block-link-shadow block-rounded block-bordered text-center"
                          href="javascript:void(0)">
                          <div class="block-header">
                            <h3 class="block-title">Startup</h3>
                          </div>
                          <div class="block-content bg-gray-lighter">
                            <div class="h1 fw-bold mb-1">$39</div>
                            <div class="h5 text-muted">per month</div>
                          </div>
                          <div class="block-content">
                            <p class="mb-1"><strong>10</strong> Projects</p>
                            <p class="mb-1"><strong>30GB</strong> Storage</p>
                            <p class="mb-1"><strong>100</strong> Clients</p>
                            <p><strong>FULL</strong> Support</p>
                          </div>
                          <div class="block-content block-content-full bg-gray-lighter">
                            <span class="btn btn-sm btn-primary">Sign Up</span>
                          </div>
                        </a>
                        <!-- END Startup Plan -->
                      </div>
                      <div class="col-md-6">
                        <!-- Business Plan -->
                        <a class="block block-link-shadow block-rounded block-bordered text-center"
                          href="javascript:void(0)">
                          <div class="block-header">
                            <h3 class="block-title">Business</h3>
                          </div>
                          <div class="block-content bg-gray-lighter">
                            <div class="h1 fw-bold mb-1">$99</div>
                            <div class="h5 text-muted">per month</div>
                          </div>
                          <div class="block-content">
                            <p class="mb-1"><strong>50</strong> Projects</p>
                            <p class="mb-1"><strong>100GB</strong> Storage</p>
                            <p class="mb-1"><strong>1000</strong> Clients</p>
                            <p><strong>FULL</strong> Support</p>
                          </div>
                          <div class="block-content block-content-full bg-gray-lighter">
                            <span class="btn btn-sm btn-primary">Sign Up</span>
                          </div>
                        </a>
                        <!-- END Business Plan -->
                      </div>
                      <div class="col-md-6">
                        <!-- VIP Plan -->
                        <a class="block block-link-shadow block-rounded block-bordered text-center"
                          href="javascript:void(0)">
                          <div class="block-header">
                            <h3 class="block-title">VIP</h3>
                          </div>
                          <div class="block-content bg-gray-lighter">
                            <div class="h1 fw-bold mb-1">$249</div>
                            <div class="h5 text-muted">per month</div>
                          </div>
                          <div class="block-content">
                            <p class="mb-1"><strong>Unlimited</strong> Projects</p>
                            <p class="mb-1"><strong>Unlimited</strong> Storage</p>
                            <p class="mb-1"><strong>Unlimited</strong> Clients</p>
                            <p><strong>FULL</strong> Support</p>
                          </div>
                          <div class="block-content block-content-full bg-gray-lighter">
                            <span class="btn btn-sm btn-primary">Sign Up</span>
                          </div>
                        </a>
                        <!-- END VIP Plan -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block block-rounded mb-1">
                <div class="block-header block-header-default" role="tab" id="faq4_h2">
                  <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#faq4" href="#faq4_q2"
                    aria-expanded="true" aria-controls="faq4_q2">What are the available withdrawal options?</a>
                </div>
                <div id="faq4_q2" class="collapse" role="tabpanel" aria-labelledby="faq4_h2" data-bs-parent="#faq4">
                  <div class="block-content">
                    <div class="row">
                      <div class="col-md-6 col-xl-4">
                        <a class="block block-link-shadow text-center" href="javascript:void(0)">
                          <div class="block-content">
                            <i class="fab fa-paypal fa-2x"></i>
                          </div>
                          <div class="block-content block-content-full">
                            <div class="fw-semibold mb-1">Paypal</div>
                            <div class="fs-sm text-muted">0.5% + .25c</div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <a class="block block-link-shadow text-center" href="javascript:void(0)">
                          <div class="block-content">
                            <i class="fa fa-credit-card fa-2x"></i>
                          </div>
                          <div class="block-content block-content-full">
                            <div class="fw-semibold mb-1">Credit Card</div>
                            <div class="fs-sm text-muted">$7.50 flat fee</div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-12 col-xl-4">
                        <a class="block block-link-shadow text-center" href="javascript:void(0)">
                          <div class="block-content">
                            <i class="fa fa-building fa-2x"></i>
                          </div>
                          <div class="block-content block-content-full">
                            <div class="fw-semibold mb-1">Bank Transfer</div>
                            <div class="fs-sm text-muted">$20.00 flat fee</div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Payments -->

      </div>
    </div>
    <!-- END Frequently Asked Questions -->

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include("footer.php"); ?>