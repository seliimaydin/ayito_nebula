<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">

                    <h1 class="auth-title">Giriş Yap.</h1>
                    <p class="auth-subtitle mb-5">Nebula Technology AYİTO Yönetici Girişi.</p>

                    <form action="netting/processing.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                              <input name="ad" minlength="3" maxlength="25" type="text" class="form-control" placeholder="Kullanıcı Adı" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="sifre" minlength="8" maxlength="25" type="password" class="form-control" placeholder="Şifre" required="">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button name="kullanicigiris" type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Giriş Yap</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>
