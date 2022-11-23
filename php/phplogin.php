<?php

session_start();
if(isset($_POST['cadastrar']) ){

    include('conexao1.php');
    
    
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
//injection segurança
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

       
        
        $sql_code = "SELECT * FROM usu WHERE email = '$email'AND SENHA = '$senha' ";
        
       $result=mysqli_query($mysqli,$sql_code);

        $quantidade= mysqli_num_rows($result);

        if($quantidade > 0) {
    
                
           while($usuario=mysqli_fetch_array($result)){
           

            
            $_SESSION['id'] = $usuario['id'];
            
            $_SESSION['nome'] = $usuario['nome'];
               

 header("Location: agendamento.php");
}
        } else {
            
            echo '<div class="erro">Falha ao logar! E-mail ou senha incorretos</div>';
        }

    }

}

?>
