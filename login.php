<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>


    <div class="form">
        <div class="tab-content">
            <div id="signin">
                <h1><span style="color:#314964">| <b> AYUDA</b> </span>Log in Form</h1>
                <form action="#" method="POST">

                    <div class="box header">
                        <img src="./image/profile.png" alt="" />
                    </div>
                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input class="input" name="email" type="email" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input class="input" type="password" id="pswd1" value="" required autocomplete="off" />
                    </div>
                

                    <button type="submit" class="button button-block">Sign In</button>

                </form>

            </div>

        </div>

    </div>


</body>

</html>