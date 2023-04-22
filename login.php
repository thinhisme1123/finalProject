<?php
    session_start();

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
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
                        <div class="form-input">
                            <input class="form-input-username" name="username" type="text" placeholder="Emai/Phonenumber/Username">
                            <input class="form-input-password" name="password" type="password"  placeholder="Password">
                        
                        </div>
                        <button name="" class="login-btn">LOGIN</button>
                        
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
                                <button class="modal-footer-signup-btn"><a href="register.php" class="regester-linking">Register</a></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>