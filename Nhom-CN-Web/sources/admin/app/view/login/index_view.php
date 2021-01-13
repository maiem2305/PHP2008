<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/css/Login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="login-card">
            <img src="../uploads/images/ava.jpg" class="profile-img-card">
            <p class="profile-name-card">Can't Hold You...</p>
            <form class="form-signin" action="?c=login&m=handle" method="POST">
                <span class="reauth-email">Cuz I have nothing <i class="far fa-frown"></i></span>
                <input class="form-control" type="text" required="" placeholder="Username" autofocus="" id="inputUser" name="user" value="Chuyện Tình Buồn">
                <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="pass">
                <div class="checkbox">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember me</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg btn-signin" name="btnSubmit" type="submit">Sign in</button>
            </form>
            <a href="#" class="forgot-password">Forgot your password?</a></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/admin/js/validateformLogin.js"></script>
</body>
</html>