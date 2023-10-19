<?php
 include("servidor.php");
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    
    <title>Document</title>
</head>
<body>
<div class="container mt-5">

<table class="table table-bordered">
  
    <tr>
        <?php
        // query 
         $sql = "select * from  tb_livro ";

         // executar o comando
         $res = mysqli_query( $link,$sql );
          
         // conversão array
        while( $colunaBanco = mysqli_fetch_array($res)){
           //echo $colunaBanco["img_liv"];
            echo "<td>";
             echo "<p>";
                echo "<img src='adm/".$colunaBanco["img_liv"]."' 
                 width = '' height='' >";
                 echo "<h3>".$colunaBanco["titulo_liv"]."</h3>";
                 echo "<a href='detalhe.php?cod_liv=".$colunaBanco["cod_liv"]."'>
                       Detalhe </a>";

             echo "</p>";
           echo "</td>";

        }

          // fechar o banco 
          mysqli_close($link);
        
        ?>
      

    </tr>

</table>

</div>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</body>
</html>