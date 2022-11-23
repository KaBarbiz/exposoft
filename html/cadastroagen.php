<?php
include("../php/cadastro.php");
?>
<html>
    <head>
        
         <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cadastro</title>
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/cadastro.css">
    </head>
<body>

    <div class="formregistro">
      <h1> - Faça seu cadastro -</h1>
    <form  method="post" id="form" name="formulario"><br> 
   
 <input type="text" name="nome"  placeholder="Nome"  maxlength="25" required/> 
      
        
  <input type="email" name="email" placeholder="Email" required />
        <i class="fas fa-envelope iEmail"></i>
   
       
        
 <input type="password"  name="senha" placeholder="Senha" minlength="5" maxlength="12" required />
          <i class="fas fa-lock iPassword"></i>
        
        <input type="password"  name="senha2" placeholder="Confirmar Senha" required />
        <i class="fas fa-lock iPassword2"></i>
      
       
        
     
   <button  class="btn" type="submit" name="cadastrar" value="cadastrar">Enviar</button>
         
    </form>
        
 <a href="../html/login.php">Ja tem um Login?</a>
 <p>
 <a href="../html/index.php">Voltar ao Inicio</a>
 </p>    
           
</div>
    
    
    </body>
   
</html>
