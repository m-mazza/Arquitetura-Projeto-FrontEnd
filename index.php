<?php include('inc/header.php');?>
    <!-- barra de navegação -->
    <?php include('inc/navbar.php');?>
    <!-- Banner -->
    <?php include('inc/banner.php');?>

    <!-- sobre nós -->
    <div class="sectionsobre">
        <div class="container">
            <?php include('inc/sobre-nos.php');?>
        </div>
    </div>

    <!-- especialidades -->
    <div class="sectionespecialidades">
        <div class="container">
            <?php include('inc/especialidades.php');?>
        </div>
    </div>

    <!-- projetos -->
    <div class="sectionprojetos">
        <div class="container">
            <?php include('inc/projetos.php');?>
            <div class="row">
                <div class="col-12">
                    <div class="mt-3 d-flex justify-content-center">
                        <a href="projetos" class="btn btn-outline-dark btn-lg">veja outros projetos aqui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contato -->
    <div id="contato" class="sectioncontato">
        <div class="container">
            <?php include('inc/contato.php');?>
        </div>
    </div>

<?php include('inc/footer.php')?>

