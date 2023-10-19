<?php
   include("../servidor.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

  <script>
    //var i = confirm("deseja excluir?");
    //alert(i); 
  
  </script> 

</head>

<body>
    <div class="container">
   <?php
   // pegar o codigo do livro

 $cod_liv = $_GET["cod_liv"];

   // query
    $delSQL = " delete from tb_livro where cod_liv =". $cod_liv;

    // executar
    $res =  mysqli_query( $link , $delSQL );

    // obter o numero de linhas afetadas

    if( mysqli_affected_rows($link) == 1){

        echo "Excluido com sucesso!";
    }
  
     // fecha o banco
     mysqli_close($link);

   ?>
    </div>
</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>