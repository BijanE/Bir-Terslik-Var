<?php
include "navbar.php";
include "config.php";
if(isset($_SESSION['username'])){ 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .card {
            margin-left: 35% !important;
            width: 400px   !important;
        }

        h6 {
            text-align: center;
        }
        .card-body{
            text-align: center;

        }
     
    </style>

    <title>Hello, world!</title>
</head>

<body>

    <!-- Card -->
    <?php
    $bul= "SELECT * FROM complaints";
    $sikayet=mysqli_query($baglan,$bul);

    while($sikayet1=$sikayet->fetch_assoc()){
    if($sikayet1['complaintswho']==$_SESSION['username']){
    ?>
    <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $sikayet1['complaints_title'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $sikayet1['complaints_time'];?></h6>
            <p class="card-text"><?php echo $sikayet1['complaints'];?></p>
            
            <form method="POST" action="sikayetedit.php">
            <button type="submit" class="btn btn-primary"name="edit">Şikayeti Düzenle</button>
            <input type="hidden" name="id" value="<?php echo $sikayet1['id'];?>">
            </form>
            </br>
            </br>
            <form method="POST" action="sikayetsil.php">
            <input type="hidden" name="id" value="<?php echo $sikayet1['id'];?>">
            <button type="submit" class="btn btn-primary" name="delete">Şikayeti Sil</button>
            </form>

        </div>
    </div>
    <?php
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
        }
    ?>