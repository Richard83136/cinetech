<?php
 //session_start();
include('dbconnect.php');
include('header1.php');

?>


<body class="pagecommentaire">
<?php
 
    if (isset($_SESSION['login']) == TRUE) {?> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cinetech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="profil.php">Votre profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="resultcommentaire.php">Vos commentaires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="deconnexion.php">Déconnexion</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
       <?php
         } else {
      
  }

  require('dbconnect.php');
//SELECT utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur;
  $req = $pdo->query("SELECT utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ");
  ?>
    <div class="">
      <table class=" mx-auto mt-5">
          
          <thead>
              <tr style="border:1px solid black;" >
                  <th style="border:1px solid black;text-align:center;padding:2%;">Utilisateur</th>
                  <th style="border:1px solid black;text-align:center;">commentaire :</th>
                  
                  
              </tr>
          </thead>
          <?php
          while($res = $req->fetch()){
        //   var_dump($res);
          ?>
          
              <tbody>
                  <tr>
                      <td style="border:1px solid black; text-align:center;min-width:300px;"><?php echo $res['login'] ?></td>
                      <td style="border:1px solid black; text-align:center;min-width:150px"><?php echo  $res['commentaire'] ?></td>
                      
                      
                  </tr>
              </tbody></div>
          <?php
          } 
          ?>
      </table>