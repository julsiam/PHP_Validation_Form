<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Validated Login Form</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>

    <?php
    $msg = "";
    if (isset($_POST['password'])) {
        $Cpassword = $_POST['Cpassword'];
        $password = $_POST['password'];
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            $msg = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        } elseif ($password != $Cpassword) {
            $msg = "Password doesn't match";
        } else {
            return true;
        }
    }

    ?>
    <div class="form">
        <div class="tab-content">
            <div id="signup">
                <h1><span style="color:#314964">| <b> AYUDA</b> </span>Registration Form</h1>
                <form action="home.php" method="POST">
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name<span class="req">*</span>
                            </label>
                            <input id="fname" minlength="2" maxlength="25" name="fname" type="text" required autocomplete="off" />

                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name<span id="nameError" class="req">*</span>
                            </label>
                            <input name="lname" id="lname" minlength="2" maxlength="25" type="text" required autocomplete="off" />
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Address<span class="req">*</span>
                        </label>
                        <input name="address" type="" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input name="email" type="email" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span></label>
                        <input type="password" name="password" required />
                        <span id="password" style="color:red; font-size:12px;margin-left: 15px; padding: 10px"><?php echo $msg ?></span>
                    </div>

                    <div class="field-wrap">
                        <label for="">ConfirmPassword<span class="req">*</span></label>
                        <input id="Cpassword" type="password" name="Cpassword" required />
                    </div>

                    <button type="submit" class="button button-block" name="submit">Sign Up</button>


                    <!-- <form action="home.php" method="POST">
                        <button type="submit" class="button button-block" name="submit"></button>
                    </form> -->

                    <!-- <input type="submit" value="Check" /><br /> -->
                </form>

            </div>
        </div>
    </div>
</body>

</html>