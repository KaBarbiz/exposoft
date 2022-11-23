<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- links ao css -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/conteudo.css">
    <!-- prevalece o ultimo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Morreti Ristorante</title>
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
            <li><a href="quemsomos.php">Quem Somos</a></li>
            <li><a href="agendamento.php">Agendamento</a></li>
            <li class="menu-cardapio"><a href="cardapio.php">Cardapio</a>
            </li>
        </ul>
    </nav>
    <div class="cxlogin">
        <a href="login.php">
           
            <button type="image" class="btn"><img class="imagebtn" src="../img/R.png"></button>
            <div>
            </div>
        </a>
    </div>
</header>

<script src="../js/menu.js"></script>
<!-- fim menu -->


<body>

    <!-- slideshow -->
    <h3 class="titulo">Mais Pedidos da Semana</h3>
    <div class="slider">
        <center>
            <div class="img-slider">
                <div class="slide active">
                    <img src="../img/slidebruschetta.jpg" alt="">
                    <div class="info">
                        <h2>Bruschetta</h2>
                    </div>
                </div>
                <div class="slide">
                    <img src="../img/slidetiranusu.jpg" alt="">
                    <div class="info">
                        <h2>Tiranusu</h2>
                    </div>
                </div>
                <div class="slide">
                    <img src="../img/slidemacarrao.jpg" alt="">
                    <div class="info">
                        <h2>Macarrao </h2>
                    </div>
                </div>
                <div class="slide">
                    <img src="../img/slidegelato.jpeg" alt="">
                    <div class="info">
                        <h2>Gelato</h2>
                    </div>
                </div>
                <div class="slide">
                    <img src="../img/slidenhoquer.jpg" alt="">
                    <div class="info">
                        <h2>Nhoque de Sugo</h2>
                    </div>
                </div>
                <div class="navigation">
                    <div class="btn active"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                </div>
            </div>
        </center>
    </div>

    <script src="../js/slideautom.js"></script>
    <!-- fim do slideshow -->

    <!-- home conteudo -->
    <h3 class="titulo">Sobre Nosso Restaurante</h3>
    <div class="container">
        <div class="textoh">
            <h1>Morreti Ristorante</h1>
            <div class="imagem">
                <img class="img-box" src="../img/restaurante.jpg" alt="">
            </div>
            <p> O Moretti Ristorante, é um restaurante foca apenas
                em comidas descendentes italianas ou próprias
                da Itália, tentamos ao máximo fazer com que você se
                sinta na própria Torre de Pisa é o mais fiel possível
                aos seus ingredientes, chegando a algo que relembre
                o paladar original dos próprios italianos.</p>
        </div>
    </div>
    <!-- fim home conteudo -->

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
    <!-- fim do footer -->
</body>


</html>