<?php

//definir variaveis de conexão
define("servidor", "localhost");
define("usuario", "root");
define("senha", "");
define("banco", "phpproj");
define("porta", "3306");


// caminho do servidor
@$link  = mysqli_connect(servidor, usuario, senha, banco, porta );

if(!$link){
    //die();
    //echo "acesso ao banco";
    echo mysqli_connect_errno();
    echo "<br>";
    echo mysqli_connect_error();
}

?>