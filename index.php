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

    <title>Login & Signup</title>
</head>

<body>
    <div>
        <h2>Bi Terslik Var</h2>
        <h5>Kayıt Ol & Giriş Yap</h5>
    </div>

    <div class="form">
        <form method="POST" action="login-signup.php">
            <div class="mb-3 mt-5">
                <label for="username" class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp"
                    placeholder="Kullanıcı Adınızı Giriniz" required>
            </div>
            <div class="mb-3">
                <label for="sifre" class="form-label">Şifre</label>
                <input type="password" class="form-control" name="pass" id="sifreHelp" placeholder="Şifrenizi Giriniz" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Giriş Yap</button>
            <button type="submit" class="btn btn-primary" name="signup">Kayıt Ol</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>