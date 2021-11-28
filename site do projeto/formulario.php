<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Form</title>
</head>
<style>
    body{
        margin:0px;
        padding :0px;
        display:flex;
        flex-direction:column;
        align-items: flex-start;
        justify-content:center;
        
    }
    h2{
        color:purple;
    }
    h3{
        color:red;
    }
    h4{
        color:purple;
    }
    h5{
        color:yellow;
    }
    
</style>
<body>
<?php

  $host= 'lbl-db-azureserver.mysql.database.azure.com';
  $bd= 'contato';
  $senhabd= 'admadm.001';
  $userbd = $bd;
 
  $conexao = mysql_connect($host,$bd, $senhabd);
  $banco = mysql_select_db($bd,$conexao);

  $nome = filter_input(INPUT_POST,'nome');
  $email = filter_input(INPUT_POST,'email');
  $mensagem = filter_input(INPUT_POST,'mensagem');


   if (!$conexao){
       die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
  }

  if (!$banco){
    die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
  }
  $query = "INSERT INTO `usuario` ( `nome` , `email` , `mensagem` ) VALUES ('$nome', '$email', '$mensagem')";
  //    if($nome){
  
//         echo "<h2>". "Mensagem que foi enviada:  " .$mensagem ."</h2>".
        
//             "<h4>"." Olá ".$nome.  " Seu email é ".$email."</h4>" .
           
//             "<h2>"." Obrigado por entrar em Contato "."<br>"." Retornaremos em breve"."</h2>";
//     }else{
//       echo "<h3>". "Dados inválidos "."<br>". "Volte a página e preencha os Campos corretamente"."</h3>" ;
//  }

?>
</body>
</html>