<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resource/image/logo+.png" type="image/png">
    <title>Register | Click-Cart</title>
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="resource\font\material-design-iconic-font\css\material-design-iconic-font.min.css">
    <!--Stylesheets Links-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper" style="background-image: url('resource/image/bg-registration-form-2.jpg');">
        <div class="inner">
            <form action="">
                <h3>Register</h3>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" id="f_name" placeholder="">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" id="l_name" placeholder="">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="">
                </div>
                <div class="form-wrapper">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" id="conf_password" placeholder="">
                </div>
                <div class="form-wrapper">
                    <label>
                        <input type="checkbox">I accept the terms and conditions.
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-group">
                    <button onclick="register();" type="button">Register Now</button>
                    <button><a href="login.php">Login</a></button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>