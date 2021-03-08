<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact </title>

    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d8531d1ca7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="okvir">
        <?php include("header.php"); ?>
        <div id="cnt-okvir">
            <div class="forma contact">
                <div class="title">
                    Contact
                </div>
                <form action="" id="formCnt" class="form">
                    <div class="form-control">
                        <label>Username</label>
                        <input type="text" name="username" id="usernameCnt" placeholder="Username"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Email</label>
                        <input type="email" name="email" id="emailCnt" placeholder="Email"/>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Message</label>
                        <textarea name="message" id="textareaCnt" placeholder="Message"></textarea>
                        <i class="fas fa-check"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small class="small">Error message</small>
                    </div>
                    <input type="submit" name="btnCnt" id="btnCnt" value="Send"/>
                </form>
            </div>
        </div>
        <div class="cistac"></div>
        <?php include("footer.php"); ?>

        <script type="text/javascript" src="js/validacijaCnt.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </div>
</body>
</html>