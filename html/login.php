<?php
include("../php/phplogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../css/login.css"/>
   
</head>
<body>
    
    <div class="formlogin">
    <h1>Faça seu Login</h1>
    <form action="" method="post" name="formulario">
        <p>
           
            <input type="text" placeholder="Email" name="email" required>
            <i class="fas fa-envelope iEmail"></i>
        </p>
        <p>
           
            <input type="password" placeholder="Senha" name="senha" required>
            <i class="fas fa-lock iPassword"></i>
        </p>
      
        <input class="btn" type="submit" name="cadastrar" value="Logar">
       
    </form>
    
<a href="cadastroagen.php">Não tem um Login?</a>
<a href="../html/index.php">Voltar ao Inicio</a>

</div>




</body>

</html>


