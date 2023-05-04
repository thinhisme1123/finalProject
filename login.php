<?php
    session_start();
    require_once('handleData.php');

    $error = '';
    $user = '';
    $pass = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            if (empty($user)) {
                $error = 'Please enter your username !';
            } else if (empty($pass)) {
                $error = 'Please enter your password !';
            } else {
                $rs = login($user, $pass);
                if ($rs == 3) {
                    $error = 'Username is wrong or does not exist !';
                } else if ($rs == 4) {
                    $error = 'Password is wrong !';
                } else {
                    $_SESSION['user'] = $rs['username'];
                    $_SESSION['id'] = $rs['userid'];
                    header('Location: index.php');
                    exit();
                }
            }
        }
    }

// $code = checkLogin($_SESSION['user'])['code'];
// if ($code == 0) {
//     header("location: profile.php");
// }
    if (isset($_SESSION['user']) == true) {
        header("location: profile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="./fav/Designbolts-Free-Multimedia-Film.512.ico">
    <link rel="stylesheet" href="./style/account.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./icon/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://cask.scotch.io/bootstrap-4.0.css">
    <link rel="stylesheet" href="https://cask.scotch.io/bootstrap-4.0-flex.css">
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</head>
<style>
    #error-message {
        background-color: #f8d7da;
        width: 100%;
        padding: 10px 10px;
        border-radius: 10px;
        border: 1px solid #ccc;
        color: #762d2f;
    }
</style>

<body>
    <!-- Login modal -->
    <div class="modal-login">
        <div class="modal__overlay"></div>
        <div class="modal-container">
            <div class="modal__body">
                <div class="modal__inner">
                    <div class="modal__header">
                        <h3>Login</h3>
                    </div>
                    <form action="" method="post">
                        <div class="form-input">
                            <input id="username-input" class="form-input-username" name="username" type="text" placeholder="Emai/Phonenumber/Username">
                            <input class="form-input-password" name="password" type="password" placeholder="Password">

                            <?php
                                if (!empty($error)) {
                                    echo "<div id='error-message'>$error</div>";
                                }
                            ?>
                        </div>
                        <button type="submit" name="" class="login-btn">LOGIN</button>

                        <div class="forget-loginwith">
                            <a href="" class="forget-loginwith-item">Forget Passoword</a>
                            <a href="" class="forget-loginwith-item">Login with SMS</a>
                        </div>
                        <div class="OR-item">
                            <span>OR</span>
                        </div>
                        <div class="login-mediasocial">
                            <button class="login-mediasocial-btn">
                                <i class="icon-fb fa-brands fa-facebook"></i>
                                Facebook
                            </button>
                            <button class="login-mediasocial-btn">
                                <i class="icon-gg fa-brands fa-google"></i>
                                Google
                            </button>
                            <button class="login-mediasocial-btn">
                                <i class="icon-apple fa-brands fa-apple"></i>
                                Apple
                            </button>
                        </div>
                        <div class="modal-footer">
                            <p class="modal-footer-item">
                                <span>You don't have an account?</span>
                                <button class="modal-footer-signup-btn"><a href="regester.php" class="regester-linking">Regester</a></button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./login.js"></script>
</body>
</html>