<div class="row no-gutters">
    <div class="col-12">
        <div class="title-wrapper">
            <h1>NOSSOS PROJETOS</h1>
        </div>
    </div>
    <?php
    $path = "assets/images/projetos/";
    $diretorio = dir($path);
    while($arquivo = $diretorio -> read()){
    $caminho_completo =  $path.$arquivo;
    if($arquivo != '.' && $arquivo != '..' ) {
    $projeto = explode('.', $arquivo);
    ?>
    <div class="col-12 col-12-m col-sm-4">
        <div class="project-wrapper">
            <a href="<?php echo$caminho_completo;?>" class="glightbox2" data-glightbox="title: <?php echo $projeto[0];?>; description: .custom-desc2; descPosition: left;">
                <img src="<?php echo$caminho_completo;?>">
                <div class="text-over fadeIn-left"><?php echo $projeto[0];?></div>
            </a>
            <div class="glightbox-desc custom-desc2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pharetra erat nec libero dapibus vulputate.</p>
                <p>Suspendisse ullamcorper arcu quis nisl auctor, non auctor eros vestibulum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pharetra erat nec libero dapibus vulputate.</p>
            </div>
        </div>
    </div>
    <?php 
        }   
    }
    $diretorio -> close();
    ?> 
</div>