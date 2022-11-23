<?php
include("../php/phpagendamento.php");
?>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agenda</title>

    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/agendamento.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



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
    <div class="usu">
    </div>
    <div class="boxlg">
        <div class="info">
            Horario de abertura do retaurante as 10:00
            <br>
            Horario de fechamento do restaurante as 23:00

        </div><br>

        <div class="box">

            <form method="post">
                <div class="ola">
                    Seja bem-vindo <?php echo $_SESSION['nome'];  ?>
                    <a class="sair" href="../php/logout.php">Sair</a>

                </div>

                <div></div>

                <div class="aviso"> -Agende seu Horario-</div><br>
                <!- 2mesa=3 4mesa=6 6mesa=->
                    Data<input type="date" name="data" placeholder="Data" required /><br>
                    Horario <input type="time" min="10:00" max="23:00" name="horario" placeholder="Horario" required /><br>

                    Mesa para 2 <input type="radio" name="lugarpara" value="2" required><br>
                    Mesa para 4 <input type="radio" name="lugarpara" value="4" required><br>
                    Mesa para 6 <input type="radio" name="lugarpara" value="6" required><br>


                    <input type="submit" name="cadastrar" valor="cadastrar">

            </form>

        </div>

    </div>



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