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

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .formheight {
            line-height: 6em; 
        }
    </style>

    <title>Login & Signup</title>
</head>

<body>
    <div class="form">
        <form method="POST" action="sikayetedit-do.php">
        <input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
            <div class="mb-3 mt-5">
                <label for="sikayettarihi" class="form-label">Şikayet Başlığı</label>
                <input type="text" class="form-control" id="sikayettarihi" aria-describedby="sikayettarihiHelp"
                    placeholder="Şikayet Başlığını Giriniz" name="title" required>
            </div>
            <div class="mb-3">
                <label for="sikayetaciklama" class="form-label">Şikayet Açıklaması</label>
                <input type="text" class="form-control formheight" id="sikayetaciklama" placeholder="Şikayetinizi Açıklayın" name="explain" required>
            </div>
            <button type="submit" class="btn btn-primary" name="send">Şikayeti Düzenle</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>
<?php }?>