<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
    <title>Cinetech</title>
</head>

<body>
    
    <script src="js\detail.js"></script>
    <script src="js\accueil.js"></script>
    <script src="js\search.js"></script>
    <script src="js\profil.js"></script>


    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">

    

<body>

    <header class="headerindex">
        <?php
            session_start();
            
            if(isset($_SESSION['login'])){


                echo '<a href="vue/film.php">Films</a>';
                echo '<a href="vue/serie.php">Series</a>';
                echo '<a href="profil.php">Profil</a>';
                echo '<a href="mesfavoris.php">Mes favoris</a>';
                echo '<a href="commentaire.php">Commentaires</a>';
                echo '<a href="deconnexion.php">Déconnexion</a>';

                
            }

            else{
                echo '<a href="vue/film.php">Films</a>';
                echo '<a href="vue/serie.php">Series</a>';
                echo ' <a href="inscription.php">Inscription</a>';
                echo '<a href="connexion.php">Connexion</a>';
                // echo '<a href="deconnexion.php">Déconnexion</a>';
            }    
        ?>
       
    </header>
    <main>
        <h1>Cinetech</h1>
        <h2>Bienvenue sur la page d'accueil</h2>

<section class="container">

        <div class="scroll_bloc hover">
            <h3>Films les mieux notés</h3>
            <article class="scroll_container top_rated_movie"></article>
        </div>

        <div class="scroll_bloc hover">
            <h3>Séries les mieux notées</h3>
            <article class="scroll_container top_rated_serie"></article>
        </div>

        <div class="scroll_bloc hover">
            <h3>Films populaires</h3>
            <article class="scroll_container popular_movie"></article>
        </div>

        <div class="scroll_bloc hover">
            <h3>Séries populaires</h3>
            <article class="scroll_container popular_serie"></article>
        </div>        
    </section>
    <h3>Commentaires</h3>
    <?php 
require('dbconnect.php');
//SELECT utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur;
  $req = $pdo->query("SELECT utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ");
  ?>
    <div style="margin-left:33%;margin-bottom:50px;">
      <table >
          
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
              </tbody>
          <?php
          } 
          ?>
      </table>
</div>

    
</body>
</html>