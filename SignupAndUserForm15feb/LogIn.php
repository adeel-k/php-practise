<?php
include_once "Read.php";
ob_start();
session_start();
?>

<?

?>

<html lang="en">

<head>
    <title>LogInForm</title>


</head>

<body>
<center>
    <h2>Enter LogIn</h2>
    <div class="container form-logIn">

        <?php


        $msg = '';

        if (isset($_POST['login']) && !empty($_POST['email'])
            && !empty($_POST['password'])) {

            $username = trim($GLOBALS['username']);
            $password = trim($GLOBALS['password']);
//
            if ($_POST['email'] === $username &&
                $_POST['password'] === $password) {

                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'Adeel';

                echo 'You have entered valid use name and password';
                header('Location: https://www.google.com/search?channel=fs&client=ubuntu&q=youtube');
            } else {
                $msg = 'Wrong username or password';
            }
        }
        ?>
    </div> <!-- /container -->

    <div class="container">
        <?php
        echo "Hello {$_SESSION['username']}";
        ?>
        <form class="form-signin" role="form"
              action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
              ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="email" class="form-control"
                   name="email" placeholder="Email "
                   required autofocus></br>
            <br>
            <input type="password" class="form-control"
                   name="password" placeholder="password " required>
            <br><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit"
                    name="login">Login
            </button>
        </form>

        Click here <a href="SignUpForm.php" tite="SignUp">SignUp

    </div>
</center>
</body>
</html>
