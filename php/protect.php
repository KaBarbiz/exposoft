
<html>
<head>
    <style>
        body{
            background: #F78A79;
            justify-content: center;
            margin-top: 15px; /* MARG TOPO */ 
            text-align: center;
            align-items: center;
        }
        h1{
            margin-left: 10px;
            font-size: 30px;
        }

    </style>
    
    </head>
<body>
   
    
    </body>
</html>
<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("<h1>Faça seu login primeiro.<h1><p><a href=\"../html/login.php\">Logar</a></p>");
}


?>