<?php
// 
session_start();
include("../servidor.php");

if(!isset($_SESSION["login"])){
    header("location:index.php");
}

// pegar todos os campo

 $titulo = $_POST["titulo"];

 $desc = $_POST["desc"];

 $valor = $_POST["valor"];

$cod_ed = $_POST["ed"];


 $imagem = $_FILES["arq"];

 //print_r( $imagem );
 echo "<br>";
 //echo $_FILES["arq"]["name"];
 echo "<br>";
 //echo $imagem["name"];
$diretorio = "img/".$imagem["name"];



 // query inserir no banco

 $sqlInsert = " insert into tb_livro ( cod_ed, titulo_liv, desc_liv, valor_liv, img_liv) ";
 $sqlInsert .=" values( $cod_ed, '$titulo', '$desc', '$valor','$diretorio' )"; 
//echo  $sqlInsert;

 $resulta = mysqli_query($link ,$sqlInsert );

// saber se algo foi afetado no banco, quantidade linha

  //echo mysqli_affected_rows($link);

   if(mysqli_affected_rows($link)){
    // move para o diretorio definitivo
    move_uploaded_file($imagem["tmp_name"], $diretorio);
    echo "cadastro feito com sucesso";
   }

  
?>