<?php
include "config.php";
if(isset($_SESSION['username'])){ 
if(isset($_POST['send'])){
    $datetime=date('d/m/Y H:i:s');
    $tut=$_POST['id'];
    $tut1=$_POST['title'];
    $tut2=$_POST['explain'];

    
    $bul = "UPDATE complaints SET complaints_title ='$tut1',complaints ='$tut2',complaints_time ='$datetime'  WHERE id =$tut";
    $sikayet=mysqli_query($baglan,$bul);

    echo'<script>alert("Şikayet Düzenlendi!");</script>
    <meta http-equiv="refresh" content=" 0.5; sikayetlerim.php">';



}
}
?>