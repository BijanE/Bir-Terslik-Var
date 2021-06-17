<?php
include "config.php";
if(isset($_SESSION['username'])){ 

if(isset($_POST['delete'])){
    $tut=$_POST['id'];
    $sil = "DELETE FROM complaints WHERE id='$tut'";
    if(mysqli_query($baglan,$sil)){
        echo'<script>alert("Sikayet Silindi!");</script>
        <meta http-equiv="refresh" content=" 0.5; sikayetlerim.php">';
    }
    else{
        $baglan->eror;
    }
    
}
}
?>