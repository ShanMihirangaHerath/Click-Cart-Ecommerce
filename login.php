<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Click-Cart</title>
    <link rel="icon" href="resource/image/logo+.png" type="image/png">
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="resource\font\material-design-iconic-font\css\material-design-iconic-font.min.css">
    <!--Stylesheets Links-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper" style="background-image: url('resource/image/bg-registration-form-2.jpg');">
        <div class="inner">
            <form action="">
                <h3>Login</h3>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="">
                </div>
                <div class="form-wrapper">
                    <label>
                        <input type="checkbox" id="rememberme">Remember me.
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-group">
                    <button onclick="login();">Login</button>
                    <button><a href="register.php">Register</a></button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>