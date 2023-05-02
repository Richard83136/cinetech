<?php 
// session_start();
require 'header.php' ?>
    <ul classe="genres"></ul>
    <section class="container">

        <div class="scroll_bloc hover">
            <h3>Films à venir</h3>
            <article class="scroll_container upcoming_movie"></article>
        </div>

        <div class="scroll_bloc hover">
            <h3>Films les mieux notés</h3>
            <article class="scroll_container top_rated_movie"></article>
        </div>

        <div class="scroll_bloc hover">
            <h3>Films populaires</h3>
            <article class="scroll_container popular_movie"></article>
        </div>

        <div class="scroll_bloc hover">
            <h3>Films récents</h3>
            <article class="scroll_container now_playing_movie"></article>
        </div>
        
    </section>
    <h3>Commentaires</h3>
    <?php 
require('../dbconnect.php');
//SELECT utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur;
  $req = $pdo->query("SELECT utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ");
  ?>
    <div style="margin-left:33%;">
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

