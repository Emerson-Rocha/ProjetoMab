<?php
session_start();
// incluir o arquivo de configuração do sercidor acesso

include ("../servidor.php");


//definir variaveis de conexão
/*define("servidor", "localhost");
define("usuario", "root");
define("senha", "");
define("banco", "phpproj");
define("porta", "3306");
*/

// caminho do servidor
/*@$link  = mysqli_connect(servidor, usuario, senha, banco, porta );

if(!$link){
    //die();
    //echo "acesso ao banco";
    echo mysqli_connect_errno();
    echo "<br>";
    echo mysqli_connect_error();
}
*/

// pegar as variaveis do formulario, e forma que está vindo

$login =  $_POST['login'];
$senha =  $_POST['senha'];

// 1º fazer query sql formato de string
 $sqlLogin = " select * from  tb_usuario  where login_us = '".
              $login ."' and  senha_us = '". $senha  ."'";

     // 2º executar string sql no banco; 
     
     $resposta = mysqli_query( $link ,$sqlLogin );

     // 3 obter a quantidade de linhas que ele retornou
     
       $linha  =  mysqli_num_rows($resposta);

       if($linha == 1){
         
      //converte o valores retornado do mysql(array) para php(array), 
      // indice, associativo, misto
      // MYSQLI_ASSOC, MYSQLI_NUM ou MYSQLI_BOTH.
         $colunaBanco = mysqli_fetch_array($resposta);
                // mostrar o nome do coluna nome_us
         // indice
          // echo  "nome : ". $colunaBanco[1];
         echo "<br>";
          //echo  "senha : " . $colunaBanco[3];
         echo "<br>";
        //associativo
         //echo  "nome : ". $colunaBanco["nome_us"];
         echo "<br>";
         //echo  "senha : " . $colunaBanco["senha_us"];
        // fechar o banco
         mysqli_close($link);
        // session
         $_SESSION["login"] = $colunaBanco["cod_us"];


         // direcionar para a pagina menu
         header("location:menu.php");

       }else{
        header("location:index.php");

       }


?>