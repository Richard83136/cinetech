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
          <a class="nav-link " href="deconnexion.php">Déconnexion</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
       <?php
         } else {
      
  }
    

    // on verifie si les champs sont  remplie et s'il existe
if (isset($_POST['submit'])) {
    //VARIABLES 
    $commentaire = $_POST['commentaire'];
    $id_utilisateur = $_SESSION['id']; 
    $date =date("Y-m-d H:i:s");
    //TEST si password = paswword comfirm
        $requete = $pdo->prepare("INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES (?,?,?)");
        $requete->execute(array($commentaire,$id_utilisateur,$date));

        }
        ?>

    

     
  
<button class="btn btn-secondary m-5"><a href="index.php" style="text-decoration:none;color:white;">Accueil</a></button>  
<h1 style="text-align:center;">Envoyer un commentaire</h1><br><br>
    <div style="display:block; margin-left:40%;">
      
    <form method="post">
        <table>
            <tr>
                <td> <textarea class="w-100"  name="commentaire"cols="40" rows="5" placeholder=" Entrer votre commentaire"></textarea></td>
            </tr>
        </table>
        <button class="btn btn-info d-block " name="submit">Envoyer</button>
    </form>
</div>       


</body>

</html>