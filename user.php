<?php 
//session_start();
    class User{
        public function __construct() {
            $host = "localhost:3306";
            $db_name = "cinetech";
            $username = "root";
            $password = "";
            $conn = null;
        
            try{   
                $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }

            catch(PDOException $exception){
                echo "Connection error: " . $exception->getMessage();
            }
        }

        public function add_Fav(){
            $host = "localhost:3306";
            $db_name = "cinetech";
            $username = "root";
            $password = "";
            $conn = null; 
            $user_id = $_SESSION['login'];

            require_once 'classcommentaire.php';
            $comm= new Commentaire();
            $params = $comm->id_film();

            $request = "SELECT * FROM `favoris` WHERE `id_utilisateur` = '$user_id' AND `support_id` = '$params[1]' AND `type` = '$params[0]'";
            $request2 = "INSERT INTO `favoris`( `id_utilisateur`, `support_id`, `type`) VALUES ('$user_id','$params[1]','$params[0]')";
            
            $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $stmt = $conn->prepare($request);
            $stmt -> execute();
            $user= $stmt->fetchAll();
            
            if(!empty($_SESSION['login'])){
                if(empty($user)){
                    $stmt = $conn->prepare($request2);
                    $stmt -> execute();?>
                    <div style="text-align:center"><h4>Film ajouté aux favoris</h4></div>
                    
                    <?php
                }
                else{?>
                    <div style="text-align:center"><h4></h4></div>
                    
                    <?php
                    echo "Film déjà dans les favoris.";
                }
            }
        }

        public function delet_fav(){
            $host = "localhost:3306";
            $db_name = "cinetech";
            $username = "root";
            $password = "";
            $conn = null; 
            $user_id = $_SESSION['login'];

            require_once 'classcommentaire.php';
            $comm= new Commentaire();
            $params = $comm->id_film();
              
            $request = "SELECT * FROM `favoris` WHERE `id_utilisateur` = '$user_id' AND `support_id` = '$params[1]' AND `type` = '$params[0]'";
            $request2 = "DELETE FROM `favoris` WHERE `id_utilisateur` = '$user_id' AND `support_id` = '$params[1]' AND `type` = '$params[0]'";
            
            $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $stmt = $conn->prepare($request);
            $stmt-> execute();
            $user = $stmt->fetchAll();
            
            if(!empty($user)){
                $stmt2 = $conn->prepare($request2);
                $stmt2-> execute();?>
                    <h4 style="text-align:center;">Film supprimé des favoris</h4>
                
                <?php
            }
            else{?>
                <h4 style="text-align:center;">Ce film n'est pas dans les favoris</h4>
                
            <?php }
        }
    }
?>

    