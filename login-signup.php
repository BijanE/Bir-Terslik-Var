<?php
include "config.php";
$bayrak1=1;
$datetime=date('d/m/Y H:i:s');
if(isset($_POST['signup'])){
    $save1=$_POST['username'];
    $save2=$_POST['pass'];
$kaydet="INSERT INTO member(nickname,pass,date_time)values('".$save1."','".$save2."','".$datetime."')";
$kayit=mysqli_query($baglan,$kaydet);
echo'<script>alert("Kayıt oldunuz!Giriş yapınız");</script>
<meta http-equiv="refresh" content=" 0.5; index.php">';

}
$bul= "SELECT * FROM member";
$uye=mysqli_query($baglan,$bul);
if(isset($_POST['login'])){
if ($uye->num_rows>0) {
    while ($uye2 =$uye->fetch_assoc()) {
       if ($_POST['username']==$uye2["nickname"] && $_POST['pass']==$uye2["pass"]) {
          
            $bayrak1=0;
           $_SESSION['username']=$uye2["nickname"];
           echo $_SESSION['username'];
           $_SESSION['pass']=$uye2["pass"];
           echo'<meta http-equiv="refresh" content=" 0.5; sikayetekle.php">';
       }
    }
 }
 if($bayrak1){

    echo'<script>alert("Şifre ve/veya Kullanıcı Adı yanlış!");</script>
			<meta http-equiv="refresh" content=" 0.5; index.php">';
 }

}

?>