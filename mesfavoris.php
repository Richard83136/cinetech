<?php
// session_start();
include('dbconnect.php');


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js\detail.js"></script>
    <script src="js\accueil.js"></script>
    <script src="js\search.js"></script>
    <script src="js\profil.js"></script>
  
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
    <title>Cinetech</title>
</head>

<body >
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

    <h1 style="text-align:center;">Mes favoris</h1><br><br>
   
  <?php
  
$req = $pdo->query("SELECT `id`, `id_utilisateur`, `support_id`, `type`  FROM `favoris`  WHERE 1 ");
?>
    <div style="color:blue;margin-left:30%;">
    <table class="mt-5 d-block mx-auto">
        
        <thead>
            <tr style="border:1px solid black;" >
                <th style="border:1px solid black;text-align:center;padding:2%;">Film</th>
                <th style="border:1px solid black;text-align:center;">Plaquettes :</th>
                
                
            </tr>
        </thead>
        <?php
        while($res = $req->fetch()){
        
        ?>
        
            <tbody >
                <tr>
                    <td style="border:1px solid black; text-align:center;min-width:300px;"><?php echo $res['support_id'] ?></td>
                    <td style="border:1px solid black; text-align:center;min-width:150px"><?php echo  $res['type'] ?></td>
                    
                    
                </tr>
            </tbody>
        <?php
        } 
        ?>
    </table></div>

      
    <section class="container">

<div class="scroll_bloc hover">
    <h3>Films les mieux notés </h3>
    <article class="scroll_container top_rated_movie"></article>
</div>

       
</section>


    
</body>

</html>