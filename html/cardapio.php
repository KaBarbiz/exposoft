<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cardapio</title>

    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/cardapio.css">

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
            <li class="menu-cardapio"><a href="cardapio.php">Cardapio</a>
                <ul>
                    <li><a href="#pratos">Pratos Principais</a></li>
                    <li> <a href="#entradas">Entredas</a></li>
                    <li><a href="#sobremesas"> Sobremesas</a></li>
                </ul>
            </li>
            <li><a href="agendamento.php">Agendamento</a></li>
            <li><a href="quemsomos.php">Quem Somos</a></li>
            
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
<!-- fim do menu -->

<body>

    <!-- cardapio -->
    <div class="cardapio-geral col-l-12 col-m-12 col-s-12">
        <div class="subtitulos col-l-12 col-m-12 col-s-12">
            <h1 id="pratos"> Pratos Pricipais: </h1>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/nhoquesugo.jpeg" alt="Nhoque ao Sugo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Nhoque ao Sugo: </h2>
                    <p>
                        - batata <br>
                        - noz-moscada <br>
                        - queijo parmesão <br>
                        - manjericão <br>
                        - molho de tomate
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/nhoquerecheado.jpeg" alt="Nhoque Recheado">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Nhoque Recheado: </h2>
                    <p>
                        - queijo mussarela<br>
                        - batata<br>
                        - leite<br>
                        - massa de tomate <br>
                        - queijo parmesão <br>
                        - molho de tomate <br>
                        - carne moída
                    </p>
                </div>
            </div>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/lasanha.jpeg" alt="Lasanha">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Lasanha: </h2>
                    <p>
                        - Massa de lasanha <br>
                        - Carne moída <br>
                        - Creme de Leite <br>
                        - Prejunto <br>
                        - Mussarela <br>
                        - Molho de Tomate
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/macarraoalho.jpeg" alt="Macarrão Alho e Óleo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Macarrão Alho e Óleo: </h2>
                    <p> - Macarrão Spaghetti<br>
                        - Alho<br>
                        - Orégano<br>
                        - Óleo
                    </p>
                </div>
            </div>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/macarraocarbonara.jpeg" alt="Macarrão à Carbonara">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Macarrão à Carbonara:</h2>
                    <p> - Macarrão Spaghetti<br>
                        - Bacon<br>
                        - Ovo<br>
                        - Pimenta-do-reino
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/ravioli.jpeg" alt="Ravioli">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Ravioli:</h2>
                    <p> - Ravioli<br>
                        - Molho de Tomate<br>
                        - Ervilha<br>
                        - Maionese<br>
                        - Leite
                    </p>
                </div>
            </div>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/Polpettone.jpeg" alt="Polpettone">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Polpettone </h2>
                    <p> - Coxão mole <br>
                        - Ovo<br>
                        - Leite <br>
                        - Pão <br>
                        - Queijo Parmesão <br>
                        - Queijo Mussarela
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/risotto.jpeg" alt="Risotto">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Risotto: </h2>
                    <p> - camarão<br>
                        - arroz<br>
                        - pimentão verde<br>
                        - tomate<br>
                        - Limão
                    </p>
                </div>
            </div>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/bucatini.jpg" alt="Bucatini All'amatriciana">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Bucatini All'amatriciana: </h2>
                    <p> - Macarrão Spaghetti<br>
                        - Queijo Pecorino<br>
                        - Molho de Tomate<br>
                        - Pimenta<br>
                        - Vinho Branco
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/Margherita.jpeg" alt="Nhoque ao Sugo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Pizza: </h2>
                    <p> Ingredientes: <br>
                        - Molho de Tomate <br>
                        - Mussarela<br>
                        - Tomate <br>
                        - Manjericão<br>
                        - Azeite
                    </p>
                </div>
            </div>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/costela.jpeg" alt="Costela à Milanesa">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Costela à Milanesa: </h2>
                    <p> - Costela de porco<br>
                        - Ovo<br>
                        - Pimenta<br>
                        - Tomate
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/antepasto.jpeg" alt="Antepasto com Berinjela">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Antepasto com Berinjela: </h2>
                    <p> - Berinjela<br>
                        - Pimentão Vermelho<br>
                        - Pimentão Verde<br>
                        - Pimentão Amarelo<br>
                        - Azeitona
                    </p>
                </div>
            </div>
        </div>
        <div class="subtitulos col-l-12 col-m-12 col-s-12">
            <h1 id="entradas"> Entradas: </h1>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/oliveascolane.jpeg" alt="Olive Ascolane">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Olive Ascolane: </h2>
                    <p> - azeitona (empanada)<br>
                        - Carne de boi<br>
                        - Carne de porco<br>
                        - Frango<br>
                        - Queijo Parmesão
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/polentafrita.jpeg" alt="Polenta Frita">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Polenta Frita: </h2>
                    <p> - Fubá<br>
                        - Maisena<br>
                        - Caldo de Galinha<br>
                        - Caldo de Legumes
                    </p>
                </div>
            </div>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/bruschetta.jpeg" alt="Bruschetta de Cogumelo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Bruschetta: </h2>
                    <p> Ingredientes: <br>
                        - fatias de pão italiano <br>
                        - tomates <br>
                        - mussarela de búfala <br>
                        - manjericão <br>
                        - orégano
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/crostini.jpeg" alt="Crostini de Cogumelos">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Crostini: </h2>
                    <p> Ingredientes:<br>
                        - atum<br>
                        - pimentão amarelo<br>
                        - tomates<br>
                        - alho <br>
                        - manjericao <br>
                        - pao italiano <br>
                        - queijo parmesão
                    </p>
                </div>
            </div>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/arancino.jpeg" alt="Arancino">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Arancino: </h2>
                    <p>
                        - Arroz<br>
                        - pimenta<br>
                        - queijo parmesão<br>
                        - Carne
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/salada.jpeg" alt="Nhoque ao Sugo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Salada: </h2>
                    <p> Ingredientes:<br>
                        - cebola<br>
                        - tomates<br>
                        - pepino<br>
                        - Manjericão <br>
                        - Pimenta-do-reino <br>
                        - pão toscano <br>
                        - Vinagre
                    </p>
                </div>
            </div>
        </div>
        <div class="subtitulos col-l-12 col-m-12 col-s-12">
            <h1 id="sobremesas"> Sobremesas: </h1>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/tiramisu.jpeg" alt="Nhoque ao Sugo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Tiramisu: </h2>
                    <p> Ingredientes: <br>
                        - biscoitos champangne <br>
                        - creme de leite fresco <br>
                        - conhaque opcional <br>
                        - café frio <br>
                        - chocolate em pó
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/gellato.jpeg" alt="Nhoque ao Sugo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Gellato: </h2>
                    <p> Ingredientes:<br>
                        - chá de leite<br>
                        - laranja ou tangerina<br>
                        - casca de laranja<br>
                        - suco de laranja <br>
                        - Extrato de Baunilha <br>
                        - Chocolate <br>
                        - Creme de Leite
                    </p>
                </div>
            </div>
        </div>
        <div class="caixista col-s-12 col-m-12 col-l-12">
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/struffoli.jpeg" alt="Nhoque ao Sugo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Struffoli: </h2>
                    <p> Ingredientes: <br>
                        - manteiga <br>
                        - leite<br>
                        - mel <br>
                        - pistache <br>
                        - tangerina
                    </p>
                </div>
            </div>
            <div class="cxtxteimg col-l-6 col-m-12 col-s-12">
                <div class="imgcardapio col-s-12 col-m-6 col-l-6">
                    <img src="../img/cannolli.jpeg" alt="Nhoque ao Sugo">
                </div>
                <div class="textcardapio col-s-12 col-m-6 col-l-6">
                    <h2> Cannolli: </h2>
                    <p> Ingredientes:<br>
                        - Manteiga<br>
                        - Vinho Branco<br>
                        - Cachaça<br>
                        - Óleo de Milho <br>
                        - Açucar <br>
                        - Ricota <br>
                        - Baunilha
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- fim do cardapio -->

    <!-- botao up -->
    <!-- <a id="link-topo" href="">&#9650;</a> -->
    <!-- fim do botao up -->

</body>
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

</html>
