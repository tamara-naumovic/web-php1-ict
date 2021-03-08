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
            <div class="forma_cnt">
                <h2>Contact us</h2>
                <div id="error_message"></div>

                <form action="" id="myform">
                    <div class="input_field">
                        <input type="text" id="tbname" placeholder="Name"/>
                    </div>
                    <div class="input_field">
                        <input type="text" id="tbsubject" placeholder="Subject"/>
                    </div>
                    <div class="input_field">
                        <input type="text" id="tbphone" placeholder="Phone"/>
                    </div>
                    <div class="input_field">
                        <input type="text" id="tbemail" placeholder="Email"/>
                    </div>
                    <div class="input_field">
                        <textarea id="tbmessage" placeholder="Message"></textarea>
                    </div>
                    <div class="cntbtn">
                        <input type="submit" id="cbtn" value="submit"/>
                    </div>
                </form>
            </div>
        </div>
        <div class="cistac"></div>
        <?php include("footer.php"); ?>

        <script type="text/javascript" src="js/proba.js"></script>
    </div>
</body>
</html>