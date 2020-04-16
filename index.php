<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sigla - home</title>
        <link rel="icon" href="util/icon.jpg" type="image/icon type">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="util/links/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <script src="util/links/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="util/links/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="util/links/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="util/links/fontisawesome.js" crossorigin="anonymous"></script>

    </head>
    <body>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="#"><img src="util/logo-completa-laranja.png" width="100px" /></a>
            <button id="navbutton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#sobre" onclick="closenav();">Sobre</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Sistema de gestão</a>
                            <a class="dropdown-item" href="#">Site comercial</a>
                            <a class="dropdown-item" href="#">Aplicativos mobile</a>
                            <a class="dropdown-item" href="#">Outros</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <script>
            function closenav () {
                if (window.innerHeight > window.innerWidth)
                    document.getElementById("navbutton").click();
            }
        </script>

        <section class="home_upper">
            <div class="container-fluid">
                <blockquote class="blockquote text-center">
                    <h1 class="display-4"><strong>SIGLA</strong></h1>
                    <p><strong>Bem vindo a página da SIGLA,
                            Sistema Integrado de Gestão e Logistica Aplicada.</strong></p>
                </blockquote>
            </div>
        </section>

        <section class="home_middle" id="sobre">
            <div class="container-fluid">
                <blockquote class="blockquote text-center">
                    <h1 class="display-4"><strong>SIGLA</strong></h1>
                    <p><strong>Bem vindo a página da SIGLA,
                            Sistema Integrado de Gestão e Logistica Aplicada.</strong></p>
                </blockquote>
            </div>
        </section>

        <section class="home_middle_2">
            <div class="container-fluid">
                <blockquote class="blockquote text-center">
                    <h1 class="display-4"><strong>SIGLA</strong></h1>
                    <p><strong>Bem vindo a página da SIGLA,
                            Sistema Integrado de Gestão e Logistica Aplicada.</strong></p>
                </blockquote>
            </div>
        </section>
        <section class="home_footer" id="contato">
            <div class="container-fluid">
                <blockquote class="blockquote text-center">
                    <h1 class="display-4"><strong>SIGLA</strong></h1>
                    <p class="display-4"><strong>SIGA-NOS NAS REDES SOCIAIS.</strong></p>
                </blockquote>

                <div class="container">
                    <div class="row">
                        <div class="col-sm text-center">
                            first of three columns
                        </div><br>
                        <div class="col-sm text-center">
                            second of three columns
                        </div><br>
                        <div class="col-sm text-center">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5537988434097&text=ola"><i class="fab fa-whatsapp"></i> WhatsApp </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/siglalp"><i class="fab fa-instagram"></i> Instagram </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-square"></i> <i class="fab fa-facebook-f"></i>acebook </a>
                                </li>
                            </ul>
                        </div><br>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
