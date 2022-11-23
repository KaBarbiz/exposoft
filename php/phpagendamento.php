<?php
include("protect.php");
if(isset($_POST['cadastrar'])){
      
  
$idpessoa=  $_SESSION['id'] ;
$nome= $_SESSION['nome'];

 
    
  $conexao=mysqli_connect("localhost","root","","login");
           
        $lugarpara=$_POST['lugarpara'];
        $data=$_POST['data'];
        $horario=$_POST['horario'];
    
    if($data < 2022 ) {
      echo '<div id="erros1">Não é possivel realizar o agendamento</div>';
    }else{
      
   //$sql_hora="SELECT FROM usu WHERE horario = '$horario' ";
   // $result=mysqli_query($conexao,$sql_hora);
    
   // if(mysqli_num_rows($result) != 0){
         
    //}
    
    
    
    $sql="INSERT INTO agenda (lugarpara,data,horario,idpessoa) VALUES (' $lugarpara ',' $data ',' $horario ',' $idpessoa ')";
    
    $teste=mysqli_query($conexao,$sql);

   echo '<div id="erros">O agendamento foi um sucesso</div>';

        }
}

?>
