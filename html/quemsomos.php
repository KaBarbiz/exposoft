<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/quemsomos.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- menu -->
<header id="header">
    <div class="cxlogo">
        <img class="logo" src="../img/Jacquin.png">
    </div>
    <nav id="nav">
        <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
        </button>
        <ul id="menu" role="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="sobrenos.php">Quem Somos</a></li>
            <li><a href="agendamento.php">Agendamento</a></li>
            <li class="menu-cardapio"><a href="cardapio.php">Cardapio</a>
            </li>
        </ul>
    </nav>
    <div class="cxlogin">
        <a href="login.php">
            <button type="image" class="btn"><img class="imagebtn" src="../img/R.png"></button>
            <div>
        </a>
    </div>
</header>

<script src="../js/menu.js"></script>
<!-- fim menu -->

<body>

    <!-- quem somos -->
    <div class="container-all">
        <div class="card">
            <div class="picture">
                <img class="perfil" src="../img/vinimika.jpg" alt="">
            </div>
            <div class="text-card">
                <h2 class="text-main">Vinicius Mikael</h2>
                <p class="desc">Responsavel pelo cadastro e login, agenda,
                    por nosso banco de dados e também por nosso php usado na criação
                    de nosso site.
                </p>
            </div>
        </div>
        <div class="card">
            <div class="picture">
                <img class="perfil" src="../img/kaue.jpg" alt="">
            </div>
            <div class="text-card">
                <h2 class="text-main">Kaue Barbi</h2>
                <p class="desc">Responsavel por nossa pagina home,
                    nossa pagina quem somos, por nosso footer e por 
                    consertar e ajeitar a responsividade do site e erros.
                </p>
            </div>
        </div>
        <div class="card">
            <div class="picture">
                <img class="perfil" src="../img/vinirafa.jpg" alt="">
            </div>
            <div class="text-card">
                <h2 class="text-main">Vinicius Rafael</h2>
                <p class="desc">Responsavel pela criação de nosso cardapio,
                    pela responsividade das paginas, por nosso kodular, e nosso 
                    diagrama total do site. 
                </p>
            </div>
        </div>
    </div>
    <!-- fim quem somos -->

    <!-- footer -->
    <footer>
        <section class="footer">
            <p class="copyright">
                Moretti Ristorante
            </p>
            <div class="social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <ul class="list">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="cardapio.php">Cardapio</a>
                </li>
                <li>
                    <a href="agendamento.php">Agenda</a>
                </li>
                <li>
                    <a href="sobrenos.php">Sobre Nos</a>
                </li>
            </ul>
        </section>
    </footer>
    </footer>
    <!-- fim do footer -->
</body>

</html>