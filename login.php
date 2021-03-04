<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registracija</title>

    <link rel="stylesheet" href="css/reglog.css" type="text/css">
    <link rel="stylesheet" href="css/stil.css" type="text/css">


</head>

<body>
    <div class="okvir">
        <?php include("zaglavlje.php"); ?>
        <div id="log-okvir">
            <div class="forma registracija">
                <div class="title">
                    Registration form
                </div>
                <div class="form">
                    <form action="">

                        <div class="input_polje">
                            <label for="">First Name</label>
                            <input type="text" class="input"/>
                        </div>

                        <div class="input_polje">
                            <label for="">Last Name</label>
                            <input type="text" class="input"/>
                        </div>

                        <div class="input_polje">
                            <label for="">Password</label>
                            <input type="password" class="input"/>
                        </div>

                        <div class="input_polje">
                            <label for="">Confirm Password</label>
                            <input type="password" class="input"/>
                        </div>

                        <div class="input_polje">
                            <label for="">Gender</label>
                            <div class="custom_select">
                                <select>
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="input_polje">
                            <label for="">Email address</label>
                            <input type="email" class="input"/>
                        </div>

                        <div class="input_polje">
                            <label for="">Phone number</label>
                            <input type="text" class="input"/>
                        </div>

                        <div class="input_polje">
                            <label for="">Address</label>
                            <textarea class="textarea"></textarea>
                        </div>

                        <div class="input_polje">
                            <label for="">Postal Code</label>
                            <input type="text" class="input"/>
                        </div>

                        <div class="input_polje terms">
                            <label for="" class="check">
                                <input type="checkbox"/>
                                <span class="checkmark"></span>
                            </label>
                            <p>Agreed to terms and conditions</p>
                        </div>

                        <div class="input_polje">
                            <input type="submit" value="Register" class="btnReg"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="forma login">
                <div class="title">
                    Login
                </div>
                <div class="form">
                    <form action="">

                        <div class="input_polje">
                            <label for="">Email</label>
                            <input type="email" class="input"/>
                        </div>

                        <div class="input_polje">
                            <label for="">Password</label>
                            <input type="password" class="input"/>
                        </div>

                        <div class="input_polje">
                            <input type="submit" value="Login" class="btnLog"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="cistac"></div>
        <?php include("footer.php")?>
    </div>


</body>

</html>