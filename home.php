<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <script src="https://kit.fontawesome.com/9eaadacc51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="window">

        <div class="box header">
            <img src="./image/profile.png" alt="" />
            <h6>Welcome ka-Ayuda</h6>

            <h1><?php echo $_POST["fname"]; ?>
                <?php echo $_POST["lname"]; ?> <br></h1>
            <h4><?php echo $_POST["email"]; ?> </h4>
        </div>

        <div class="box footer">
            <ul>
                <li><a href="#"><span class="fa-solid fa-location-dot"></span> <br> <?php echo $_POST["address"]; ?></a></li>
                <li><a href="#"><span class="fa-solid fa-envelope"></span><br><?php echo $_POST["email"]; ?></a></li>
                <li><a href="#"><span class="fa-solid fa-lock"></span> <br><?php echo $_POST["password"]; ?></a></li>
            </ul>

            <?php
            echo '<form method="POST" action="login.php"><button type="submit" class="button button-block">Proceed</button></form>';
            ?>

            <!-- <button type="submit" class="button button-block">Proceed</button> -->
        </div>

    </div>


</body>

</html>