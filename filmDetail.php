<?php 
    $id = $_GET['id'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- change by js -->
    <title>Name Film</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/grid.css">
    <link rel="stylesheet" href="./icon/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="./fav/Designbolts-Free-Multimedia-Film.512.ico">
    <link rel="stylesheet" href="./style/responsive.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/filmDetail.css">
</head>
<body>
    <!-- header section start -->
    <div class="main-container">
        <div class="grid-container">
            <header id="header">
                <div class="header-list"><i class="header-list_icon fa-solid fa-list"></i></div>
                <h2 class="nameWeb">T&ĐFilmWorld</h2>
                <nav class="nav">
                    <ul class="navcontainer">
                        <li class="nav-item"><a class="nav-item_link" href="">Home</a></li>
                        <li class="nav-item nav-item_hover"><a class="nav-item_link" href="">Genr</a>
                            <div class="subnav-genr">
                                <ul class="genr-list">
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Action Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Romantic Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Humor Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Romantic Film</a></li>
                                </ul>
                                <ul class="genr-list">
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Drama Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Anime Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Science Fiction Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Avengure Film</a></li>
                                </ul>
                                <ul class="genr-list">
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">War Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Sport Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">War Film</a></li>
                                    <li class="genr-list-item"><a href="" class="genr-list-item_link">Movie Theaters</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-item_link" href="">Odd Movies</a></li>
                        <li class="nav-item"><a class="nav-item_link" href="">Series Movie</a></li>
                        <li class="nav-item topphim-hover"><a class="nav-item_link" href="">Top Film</a>
                            <div class="subnav-topphim">
                                <ul class="topphim-list">
                                    <li class="topphim-list-item"><a class="topphim-list-item_link" href="">Top IMDB</a></li>
                                    <li class="topphim-list-item"><a class="topphim-list-item_link" href="">Netflix Film</a></li>
                                    <li class="topphim-list-item"><a class="topphim-list-item_link" href="">Marvel Film</a></li>
                                </ul>
                                <ul class="topphim-list">
                                    <li class="topphim-list-item"><a class="topphim-list-item_link" href="">Hot Film</a></li>
                                    <li class="topphim-list-item"><a class="topphim-list-item_link" href="">DC Conic</a></li>
                                    <li class="topphim-list-item"><a class="topphim-list-item_link" href="">HD Film</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="user_serach">
                    <div class="user_search-search"><i class="user_search-searchicon fa-solid fa-magnifying-glass"></i></div>
                    <div class="account"><a href="login.php" class="user-link"><i class="account-icon fa-solid fa-user"></i></a></div>
                    <div class="inputbox transition-inputbox"><input placeholder="Search Film Name" class="input-search" type="text"></div>
                </div>
            </header>
        </div>
    </div>
    <!-- header section end -->

    <!--film detail container start-->
    <div class="filmdetail-container">
        <div class="grid">
            <h1>hello</h1>
            <form action="handleData.php" method="post">
                <textarea name="cmt" id="cmt-box" cols="100" rows="5"></textarea>
            </form>
        </div>
    </div>
    <!--film detail container end-->

    <!-- foooter section start -->
    <footer id="footer">
        <div class="grid">
            <div class="row">
                <ul class="footer-genr-list col l-2 m-4 c-6">
                    <li>T&ĐFilm</li>
                    <img class="logo-footer" src="./icon/z4250255531215_fe622fd66eddc03705f6e624c17a8f5f.jpg" alt="">
                </ul>
                <ul class="footer-genr-list col l-2 m-4 c-6">
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link" style="color: #66ad31;">Fantastic Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">American Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Korean Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">China Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">ThaiLand Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Honor Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">VietNam Film</a></li>
                </ul>
                <ul class="footer-genr-list col l-2 m-4 c-6">
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link" style="color: #66ad31;">New Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Movie Theaters</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Odd Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Series Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Action Film</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Fantasy Movie</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Drama Film</a></li>
                </ul>
                <ul class="footer-genr-list col l-2 m-4 c-6">
                    <li class="0footer-genr-list-item aboutus-header"><a href="" class="footer-genr-list-item_link" style="color: #66ad31;">About Us</a></li>
                    <ul class="aboutus-icon-list">
                        <li class="footer-genr-list-item c-3"><a href="" class="aboutus-icon_link"><i class="aboutus-icon fa-brands fa-facebook"></i></a></li>
                        <li class="footer-genr-list-item c-3"><a href="" class="aboutus-icon_link"><i class="aboutus-icon fa-brands fa-instagram"></i></a></li>
                        <li class="footer-genr-list-item c-3"><a href="" class="aboutus-icon_link"><i class="aboutus-icon fa-brands fa-twitter"></i></a></li>
                        <li class="footer-genr-list-item c-3"><a href="" class="aboutus-icon_link"><i class="aboutus-icon fa-solid fa-envelope"></i></a></li>
                    </ul>
                </ul>
                <ul class="footer-genr-list col l-2 m-4 c-6">
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link" style="color: #66ad31;">Contact With Us</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Ask Question</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Contact</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">News</a></li>
                </ul>
                <ul class="footer-genr-list col l-2 m-4 c-6">
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link" style="color: #66ad31;">Information</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Terms of use</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Application Policy</a></li>
                    <li class="footer-genr-list-item"><a href="" class="footer-genr-list-item_link">Copyright complaint</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div id="footer_copyright">
        <h2>Copyright © T&ĐFilm</h2>
    </div>
    <!-- foooter section end -->
    <!-- remind loggin modal start-->
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
                                <button class="modal-footer-signup-btn"><a href="regester.php" class="regester-linking">Regester</a></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- remind loggin modal end-->


    <script type="text/javascript" src="./filmDetail.js"></script>
</body>
</html>