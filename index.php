<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="js\detail.js"></script>
    <script src="js\accueil.js"></script>
    <script src="js\search.js"></script>


    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">

    <title>Ciné-tech</title>
</head>
<body>

    <header class="headerindex">
        <?php
            session_start();
            if(isset($_SESSION['login'])){
                echo '<a href="vue/film.php">Films</a>';
                echo '<a href="vue/serie.php">Series</a>';
                echo '<a href="profil.php">Profil</a>';
                echo '<a href="livre-or.php">Livre d\'Or</a>';
                echo '<a href="commentaire.php">Commentaires</a>';
                echo '<a href="deconnexion.php">Déconnexion</a>';
            }

            else{
                echo '<a href="vue/film.php">Films</a>';
                echo '<a href="vue/serie.php">Series</a>';
                echo ' <a href="inscription.php">Inscription</a>';
                echo '<a href="connexion.php">Connexion</a>';
                echo '<a href="deconnexion.php">Déconnexion</a>';
            }    
        ?>
       
    </header>
    <main>
        <h1>Cinetech</h1>
        <h2>bienvenue 
            
            
        </h2>

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

   
</body>
</html>