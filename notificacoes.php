<!DOCTYPE html>
<html lang="pt">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="Grupo Experimental de Teatro da Universidade de Aveiro">
    <meta name="keywords" content="cultura, arte, música, teatro, dança">
    <meta name="author" content="Simão Bentes">
    <meta name="apple-mobile-web-app-title" content="GrETUA">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="manifest" href="manifest.json">
    <title>GrETUA</title>
</head>
<body>
<section class="container-fluid pt-3 pb-2 px-3 topindexmenu">
    <div class="row gx-0 align-items-center">
        <div class="col-auto">
            <a href="gretua.php" class="text-white"><i class="bi bi-chevron-left p-1 mb-0 h5"></i></a>
        </div>
        <div class="col-auto ps-3">
            <h3 class="mb-0">Notificações</h3>
        </div>
    </div>
</section>
<section id="info_notificacoes" class="py-4 container-fluid px-3 menu_perfil">
        <h6 class="notdias pt-2">Novo</h6>
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="col-auto">
                            <img src="img/ruipedro.jpg" class="userbubble me-2">
                            <strong>Rui</strong> vai ao evento <strong>Da Chick</strong></div>
                    </div>
                    <div class="col-auto">
                        <div class="my-2">
                            <img src="img/da_chick.jpg" class="minpub">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h6 class="notdias pt-2">Ontem</h6>
            <ul class="list-group list-group-flush lista_perfil">
                <li class="list-group-item lista_perfil py-1 my-0">

                    <div class="my-2">
                        <img src="img/brigitesilva.jpg" class="userbubble me-2">
                        <b>Brigite</b> gostou do seu post.
                    </div>
                </li>
                <li class="list-group-item lista_perfil py-1 my-0">

                    <div class="my-2">
                        <img src="img/danielantunes.jpg" class="userbubble me-2">
                        <b>Daniel</b> gostou do seu post.
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <h6 class="notdias pt-2">Esta semana</h6>
            <ul class="list-group list-group-flush lista_perfil">
                <li class="list-group-item lista_perfil py-1 my-0">

                    <div class="my-2">
                        <img src="img/helenasoares.jpg" class="userbubble me-2">
                        <b>Helena</b> gostou do seu post.
                    </div>
                </li>
                <li class="list-group-item lista_perfil py-1 my-0">

                    <div class="my-2">
                        <img src="img/josepereira.jpg" class="userbubble me-2">
                        <b>José</b> gostou do seu post.
                    </div>
                </li>
            </ul>
        </div>
</section>

<?php include_once "components/tab_bar.php" ?>


<!-- Javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>