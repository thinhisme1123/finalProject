<?php
    session_start();
    if (isset($_SESSION['user']) == true) {
        header("location: index.php");
    }
    $error = '';
    require_once('handleData.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (checkUser($_POST['username'])['code'] == 6) {
            register($_POST['username'], $_POST['password']);
            header("location: login.php");
        } else if (checkUser($_POST['username'])['code'] == 5) {
            $error = 'Username is exist!';
        }
    }
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regester</title>
<link rel="icon" type="image/x-icon" href="./fav/Designbolts-Free-Multimedia-Film.512.ico">
    <link rel="stylesheet" href="./style/account.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./icon/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Modal signup -->
    <div class="modal-signup">
            <div class="modal__overlay--signup"></div>
            <div class="modal-container">
                <div class="modal__body-signup">
                    <div class="modal__inner">
                        <div class="modal__header">
                            <h3>SignUp</h3>
                        </div>
                        <form action="" method="post">
                            <div class="form-input">
                                <input class="form-input-username" name="username" type="text" placeholder="Emai/Phonenumber/Username">
                                <input class="form-input-username" name="password" type="text" placeholder="Password">
                                <?php
                                    if ($error != '') {
                                        echo '<div>'.$error.'</div>';
                                    }
                                ?>
                            </div>
                            <button class="signup-btn">NEXT</button>
                            <div class="OR-item">
                                <span>OR</span>
                            </div>
                            <div class="signup-mediasocial">
                                <button class="signup-mediasocial-btn">
                                    <i class="icon-fb fa-brands fa-facebook"></i>
                                    Facebook
                                </button>
                                <button class="signup-mediasocial-btn signup-gg-btn">
                                    <i class="icon-gg fa-brands fa-google"></i>
                                    Google
                                </button>
                            </div>
                            <div class="modal-footer">
                                <p class="modal-footer-item">
                                    <span>You already have an account?</span>
                                    <button class="modal-footer-signup-btn"><a href="login.php" class="regester-linking">Login</a></button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>