<?php

/**
 * Title: Signature Status
 * Slug: mt-area/profile-signature
 */
?>
<div class="row push p-sm-2 p-lg-4">
  <div class="offset-xl-1 col-xl-4 order-xl-1">
    <p class="bg-body-light p-4 rounded-3 text-muted fs-sm">
      Suas informações de pagamento jamais são mostradas a nenhum usuário. Ambiente seguro com SSL.
    </p>
  </div>
  <div class="col-xl-6 order-xl-0">
    <div class="block-content bg-body text-center mb-3">
      <h3 class="fs-4 fw-bold mb-3">
        Seu plano atual: Associado
      </h3>
      <h4 class="text-muted fs-6">Data da renovação: 05/05/2024</h4>
      <div class="push">
        <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Associado</span>
      </div>
    </div>
    <form action="" method="POST" onsubmit="return false;">
      <button type="submit" class="btn btn-alt-danger js-swal-unsign">
        <i class="fa fa-xmark-circle opacity-50 me-1"></i> Cancelar assinatura
      </button>
    </form>
  </div>
</div>

<script>
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })
  document.querySelector('.js-swal-unsign').addEventListener('click', e => {
    swalWithBootstrapButtons.fire({
      title: 'Tem certeza que deseja cancelar?',
      text: "Você perderá acesso a todo o conteúdo exclusivo para associados!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Sim, pode cancelar!',
      cancelButtonText: 'Não, quero continuar associado!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        swalWithBootstrapButtons.fire(
          'Até breve!',
          'Sua assinatura foi cancelada.',
          'success'
        )
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Que bom que ficou!',
          'Sua assinatura permanece :)',
          'error'
        )
      }
    });
    static init() {
      this.sweetAlert2();
    };
  });
  Dashmix.onLoad(() => pageDialogs.init());
</script>