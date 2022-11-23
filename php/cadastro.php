<?php

 if(isset($_POST['cadastrar'])){
     $conexao=mysqli_connect("localhost","root","","login");
     $nome=$_POST['nome'];
     $email=$_POST['email'];
     $senha=$_POST['senha'];
     $senha2=$_POST['senha2'];
     if($senha != $senha2){
         
         echo '<div class="erros">Senhas não são iguais</div>';
     }else{
         $sql_email = "SELECT * FROM usu WHERE email = '$email' ";
            $result = mysqli_query($conexao,$sql_email);
    
            if (mysqli_num_rows($result) != 0){
           
             
               echo '<div class="erros">Existe um email igual cadastrado</div>';
            
            
    }
        else{

            $sql="INSERT INTO usu (email,senha,nome) VALUES ('$email','$senha','$nome')";
    
    $teste=mysqli_query($conexao,$sql);
header("Location: login.php");
        
        }
            
            }
    
    

     
 }

    


?>
