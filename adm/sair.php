<?php
 session_start();
 // excluir a sessão
 unset($_SESSION["login"]);
 header("location: index.php");
?>