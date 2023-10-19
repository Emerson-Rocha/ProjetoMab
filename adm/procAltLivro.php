<?php
// segurança

include("../servidor.php");

// pegar os registro do formulario
 $cod_liv = $_POST["cod_liv"];

 $titulo = $_POST["titulo"] ;

 $desc =  $_POST["desc"];

 $valor = $_POST["valor"];

 $cod_ed = $_POST["ed"] ;

// trocar a imagem
//$alteralImagen = ?

// query

$sqlUpdate =  " update tb_livro 
                   set   titulo_liv = '".$titulo."',
                         desc_liv = '".$desc."',
                         valor_liv = $valor,
                          cod_ed =  ".$cod_ed ." 
                 where cod_liv = ". $cod_liv;   

           //executar
         $res = mysqli_query($link ,$sqlUpdate); 
         
         if ( mysqli_affected_rows($link) == 1){
               echo "Alterado com Sucesso";
         }
mysqli_close($link);

?>