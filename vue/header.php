<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="../js/detail.js"></script> 
    <script src="../js/film.js"></script>
    <script src="../js/serie.js"></script>
    <script src="../js/profil.js"></script>
     <script src="../js/search.js"></script>
    <script src="../js/favoris.js"></script>

    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/profil.css">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/admin.css"> 

    <title>Ciné-tech</title>
</head>
<body>
    <header class="headermix">
        <?php        
            // session_start();
            if(isset($_SESSION['login'])){
                echo '<a href="../index.php">accueil</a>';
                echo '<a href="film.php">Films</a>';
                echo '<a href="serie.php">Series</a>';
                echo '<a href="/cinetech/profil.php">Profil</a>';
                // echo '<a href="connexion.php">connexion</a>';
                echo '<a href="/cinetech/deconnexion.php">Déconnexion</a>';
            }

           

            else{
                echo '<a href="../index.php">accueil</a>';
                echo '<a href="film.php">Films</a>';
                echo '<a href="serie.php">Series</a>';
                echo '<a href="/cinetech/profil.php">Profil</a>';
                // echo '<a href="/cinetech/deconnexion.php">Déconnexion</a>';
            }  
        ?>
        <form action="search.php">
            <input type="text" name="search" placeholder="Rechercher un film">
            <button type="submit" class="fas fa-search">Rechercher</button>
        </form>
    </header>
    <main>