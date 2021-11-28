<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feeback do usuario</title>
</head>
<style>
    body{
        margin:8px;
        padding :0px;
        display:flex;
        flex-direction:column;
        align-items: flex-start;
        justify-content:center;
        
    }
    h2{
        color:purple;
        margin-top:-10px;
        
    }
    h3{
        color:red;
    }
    h4{
        color:purple;
        margin-top:-10px;
    }
    h5{
        color:yellow;
    }
    button{
   
    width: 150px;
    height: 40px;
    margin: 20px auto 0;
    background: #8f1fff;
    color: white;
    font-size: 16px;
    font-weight: 500;
    cursor:pointer;
    border: 1px solid #8f1fff;
    border-radius: 2px;
    cursor:pointer;
    }
    button:hover{
    background:#ffffff;
    color:#8f1fff;
    transition: all 0.3s;
}
    
</style>
<body>
<?php
  require 'conection.php';

  $sql = $pdo->query('SELECT * FROM usuarios');
  $dataBD = $sql->fetchALl(PDO::FETCH_ASSOC);

  $getData = fn($data) => $data  ? $data : header("location:index.html");
  $getDataMessage = fn($data) => $data ;

  
  $name = $getData(filter_input(INPUT_POST,'nome'));
  $email = $getData(filter_input(INPUT_POST,'email'));
  $message = $getDataMessage(filter_input(INPUT_POST,'mensagem'));
  
  if($name && $email){
    $pdo->query("INSERT INTO usuarios (nome,email,mensagem) VALUES ('$name','$email','$message')");
  }

  echo "Total de registros:" .$sql->rowCount();
  echo "<pre>";
  print_r($dataBD);
  
?>

<h1>Nome:<?php echo $name?></h1>
<h2>Email:<?php echo $email?></h2>
<h4>Obrigado por entrar em contato,retornaremos em breve!!!</h4>
<button onclick="back()" >Voltar à navegação</button>
</div>
</body>
<script>

    const back = () => window.location.href="index.html";
    
</script>
</html>