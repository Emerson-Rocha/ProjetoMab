<?php
 session_start();
/*
if( !isset($_SESSION["login"] )){

echo "não existe";
}*/

//echo $_SESSION["login"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  
  <style>
  
 

  </style>
   
    <title>Document</title>
</head>

<body>
     <div class="container">
         <div class="row">  
             <div class="col-md-4 "></div> 
             <section class="col-md-4">
                <form action="procLogin.php" method="post">
                    <fieldset>
                        <legend>Identifique</legend>                        
                        <div>
                            <label for="login"> Login :</label>
                            <input type="text" class="form-control" name="login"  id="login">
                        </div>                        
                        <div>
                            <label for="senha"> Senha :</label>
                            <input type="password" class="form-control" name="senha"  id="senha">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Acesso</button>
                    </fieldset>
                </form>
            </section>
         <section class="col--4"></section> 
      </div>
     </div>


</body>
<script src="../js/jquery-3.5.1.slim.min.js" ></script>
   <script src="../js/popper.min.js" ></script>
</html>