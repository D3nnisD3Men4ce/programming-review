<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <ul>
        <?php
        if (isset($_SESSION["userid"])) {
        ?>
        <h1>WELCOME</h1>
        <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
        <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
        <?php
        } else {
        ?>
        <li><a href="#">SIGN UP</a></li>
        <li><a href="#" class="header-login-a">LOGIN</a></li>
        <?php
        }
        ?>
    </ul>

    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdConfirm" placeholder="Confirm Password">
                    <input type="text" name="email" placeholder="Email">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>