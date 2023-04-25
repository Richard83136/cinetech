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
            if(isset($_SESSION['user'])){
                echo '<a href="vue/film.php">Films</a>';
                echo '<a href="vue/serie.php">Series</a>';
                echo '<a href="vue/profil.php">Profil</a>';
                // echo '<a href="vue/deconnection.php">Déconnexion</a>';
            }

            else{
                echo '<a href="vue/film.php">Films</a>';
                echo '<a href="vue/serie.php">Series</a>';
                echo ' <a href="#">Inscription</a>';
                echo '<a href="#">Connexion</a>';
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

    <footer>
        <ul class="box">
            <li class="link_name"><h3>Navigation</h3></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="vue/film.php">Films</a></li>
            <li><a href="vue/serie.php">Séries</a></li>
        </ul>
        <p>© 2022 NetFredox</p>
           <ul class="box">
            <li class="link_name"><h3>Liens externes</h3></li>
            <li><a href="https://github.com/frederick-sonder1/cinetech">Repository GitHub</a></li>
            <li><a href="https://frederick-sonder.students-laplateforme.io">Portfolio</a></li>
        </ul>
    </footer>
</body>
</html>