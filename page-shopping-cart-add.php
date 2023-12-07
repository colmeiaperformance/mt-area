<?php
	include("header.php");
	var_dump($_POST);
    if (isset($_POST)) {
        var_dump($_POST);
    } else {
        die("Error");
    }
?>

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <div class="alert alert-primary" role="alert">
            <p class="mb-0">Adicionado com sucesso ao <a class="alert-link" href="<?php echo esc_url(home_url() . '/checkout'); ?>">carrinho</a>!</p>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->