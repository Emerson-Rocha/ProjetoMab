<?php
// sempre no inicio
session_start();

// incluir o arquivo do servidor de conexão
//require();
include("../servidor.php");
//include_once();
//require_once();

?>
<!DOCTYPE html>
<html>
<?php
   // criar
  //echo  $_SESSION["login"] = 10;
 if(!isset($_SESSION["login"])){

    header("location:index.php");
 }
 
 $id =  $_SESSION["login"];
// fazer um query no banco para saber quem e usuário

 $sql = "select nome_us from tb_usuario where cod_us =" .$id;
  
 // executar no banco

    $resultado = mysqli_query( $link, $sql);

   // converter os valores retornados no mysql para array do php 3 forma
      $camposTabela = mysqli_fetch_array($resultado);
       // indice
      //echo $camposTabela[0];
      // associativo
      echo "<h5> Olá " .$camposTabela["nome_us"] ."</h5>";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">


</head>

<body>
    <div class="container">

                
        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link" href="cadastro.php" target="link">Cadastro de livros</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="lista_livro.php" target="link">Lista de Livros</a>
           <a class="flex-sm-fill text-sm-center nav-link" href="#">Usuários</a>
            <a class="flex-sm-fill text-sm-center nav-link " href="sair.php" tabindex="-1" >sair</a>
            
        </nav>

        <iframe  name="link" width="100%" height="1000px" frameborder="0" style="border: 0;">

        </iframe>
    </div>


    


    
</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>
