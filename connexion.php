<?php
// session_start();
include('dbconnect.php');
include('header1.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Connexion</title>
</head>

    

<body class="pageconnexion">
<?php

    if (isset($_SESSION['login']) == TRUE) {?> 

<nav class="navbar navbar-expand-lg navbar-light  bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cinetech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.php">Ton profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="commentaires.php">Commentaires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Déconnexion</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
       <?php
         } else {?>
         <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cinetech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="livre-or.php">Livre d 'or</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">Inscription</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
      <?php
  }
    
if (isset($_POST['submit'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];
   
    $req = $pdo->prepare("SELECT * FROM utilisateurs WHERE login='$login' && password='$password'");
    $req->execute();
    $result = $req->fetch();
    $row = $req->rowCount() == 1;
  if($row){
      $_SESSION['login']=$login;
      $_SESSION['id'] = $result['id'];
      $_SESSION['admin']=TRUE;
     header('location:index.php');  
    }else{
    echo "<h1 style=color:red;'> Votre mot de passe ou login est incorrecte</h1>";
}
}
    
?><br><br>
<div style="height:100vh;">
<div class="formu">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Login</td>
                        <td><input type="text" name="login" require></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td> <input type="password" name="password" require></td>
                    </tr>
                  
                    </table>
                    <div class="valider">
                 <button name="submit" class="btn btn-success">Valider</button></div>
            </form>
            
        </div>
</div>
        <?php
include('footer.php');
?>
       
      
</body>

</html>