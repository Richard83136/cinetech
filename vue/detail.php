<?php 

 include 'header.php';
    require '../classcommentaire.php';
     
    ?>
    <section class="container">
        <div class="detail_film">  
            <div class="detail_film_img"></div>
            <div class="detail_film_info"></div>
        </div>
        <form action="" method="post">
            <label for="checkbox">
                <input type="submit" name="checkbox" value="Ajouter au favoris" id="checkbox">
            </label>
            <label for="">
                <input type="submit" name="checkbox_delete" value="Supprimer du favoris" id="checkbox">
            </label>
        </form>
        <?php 
        require('../user.php');
        
        if(isset($_POST['checkbox'])){

                
                $user = new User; 
                $user->add_Fav();
            }
            elseif(isset($_POST['checkbox_delete'])){
 
                $user = new User; 
                $user->delet_fav();
            } 
            
        ?>
    </section>
    <section class="container">
        <div class="scroll_bloc hover">
            <h3>film similaire</h3>
            <article class="scroll_container similar_film"></article>
        </div>
    </section>
    <section>
        

