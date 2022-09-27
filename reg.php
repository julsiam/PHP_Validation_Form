<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Validated Login Form</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div class="form">
        <div class="tab-content">
            <div id="signup">
                <h1><span style="color:#314964">| <b> AYUDA</b> </span>Registration Form</h1>

                <form action="home.php" method="POST" onsubmit="return validateRegForm()">

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
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" id="pswd1" value="" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Confirm Password<span class="req">*</span>
                        </label>
                        <input name="password" type="password" id="pswd2" value="" required autocomplete="off" />
                        <span id="errorConfirmPass"> </span> <br>

                    </div>

                    <button type="submit" class="button button-block">Sign Up</button>

                </form>
            </div>

        </div>
    </div>
    <script>

    </script>
    <script src="valid.js"></script>
</body>

</html>