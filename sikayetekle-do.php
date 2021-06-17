<?php
include "config.php";
if(isset($_SESSION['username'])){ 
$datetime=date('d/m/Y H:i:s');
if(isset($_POST['send'])){
    echo"girdi";
    $kaydet="INSERT INTO complaints(complaints_title,complaints,complaints_time,complaintswho)values('".$_POST['title']."','".$_POST['explain']."','".$datetime."','".$_SESSION['username']."')";
    // $kaydet1=mysqli_query($baglan,$kaydet);
    if($kaydet1=mysqli_query($baglan,$kaydet)){
    echo'<script>alert("Kayıtbaşarılı");</script>
    <meta http-equiv="refresh" content=" 0.5; sikayetlerim.php">';
    }else{
        $baglan->eror;
    }


}
}
?>