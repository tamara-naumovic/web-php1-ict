<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/reglog.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
 
<body>
    <div class="okvir">
        <?php include("header.php"); ?>
            <div id="log-okvir">
            <div class="forma registracija">
                <div class="title">
                    Registration form
                </div>
                <form action="" id="formReg" class="form">
                    <div class="form-control">
                        <label>Username</label>
                        <input type="text" name="username" id="username" placeholder="Username"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Email</label>
                        <input type="email" name="email" id="email" placeholder="Email"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Address</label>
                        <input type="text" name="address" id="address" placeholder="Address"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Confirm Password</label>
                        <input type="password" name="username" id="confpassword" placeholder="Confirm password"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <input type="submit" name="btnReg" id="btnReg" value="Register"/>
                </form>
            </div>
            <div class="forma login">
                <div class="title">
                    Login
                </div>
                <form action="" id="formLog" class="form">
                    <div class="form-control">
                        <label>Username</label>
                        <input type="text" name="username" id="usernameLog" placeholder="Username"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Password</label>
                        <input type="password" name="password" id="passwordLog" placeholder="Password"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <input type="submit" name="btnLog" id="btnLog" value="Login"/>
                </form>
            </div>
        </div>
        <div class="cistac"></div>
        <?php include("footer.php"); ?>

        <script type="text/javascript" src="js/validacija.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </div>
</body>

</html>