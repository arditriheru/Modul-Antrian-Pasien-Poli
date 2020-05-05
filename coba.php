<?php session_start();
        if(isset($_SESSION["anak_id_dokter"])){ 
        if((time() - $_SESSION["last_login_time"]) > 6){
            header("location:controller/anak-reset-a.php");
        }else{
            $_SESSION["last_login_timestamp"] = time();
            }
        }else{
            header("location:anak-filter.php");
        }

        if(isset($_SESSION["anak_id_dokter"])){
        if((time() - $_SESSION["last_login_time"]) > 6){
            header("location: controller/anak-reset-a");
        }else {
            $_SESSION["last_login_time"] = time();
        }
        }else {
        header("location:anak-filter");
    }
        ?>
