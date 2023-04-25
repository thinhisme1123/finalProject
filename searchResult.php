<?php 
    session_start();
    require_once('handleData.php');
    $inputSearch = $_GET['input'] ?? '';

    //this code is restrict customer from this page by enter it from web searching 
    if (!isset($_SERVER['HTTP_REFERER'])) {
        header("location: index.php");
        die;
    }
    else if ($inputSearch == '' || !isset($inputSearch)) {
        header("Location:".$_SERVER['HTTP_REFERER']);
        die;
    }

    $films = getFilmBySearchBar($inputSearch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&ĐFilm</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/grid.css">
    <link rel="stylesheet" href="./icon/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="./fav/Designbolts-Free-Multimedia-Film.512.ico">
    <link rel="stylesheet" href="./style/responsive.css">
    <link rel="stylesheet" href="./style/style.css">
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
                        <li class="nav-item"><a class="nav-item_link" href="index.php">Home</a></li>
                        <li class="nav-item nav-item_hover"><a class="nav-item_link" href="">Genre</a>
                            <div class="subnav-genr">
                                <ul class="genr-list">
                                    <li class="genr-list-item"><a href="genre.php?genre=Action" class="genr-list-item_link">Action Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=Romance" class="genr-list-item_link">Romantic Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=Comedy" class="genr-list-item_link">Comedy Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=family" class="genr-list-item_link">Family Film</a></li>
                                </ul>
                                <ul class="genr-list">
                                    <li class="genr-list-item"><a href="genre.php?genre=Drama" class="genr-list-item_link">Drama Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=Anime" class="genr-list-item_link">Anime Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=Sci-fi" class="genr-list-item_link">Science Fiction Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=Adventure" class="genr-list-item_link">Aventure Film</a></li>
                                </ul>
                                <ul class="genr-list">
                                    <li class="genr-list-item"><a href="genre.php?genre=War" class="genr-list-item_link">War Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=Sport" class="genr-list-item_link">Sport Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=Thriller" class="genr-list-item_link">Thriller Film</a></li>
                                    <li class="genr-list-item"><a href="genre.php?genre=''" class="genr-list-item_link">Movie Theaters</a></li>
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
                           
                            </div>     </ul>
                        </li>
                    </ul>
                </nav>
                <div class="user_search">
                    <div class="user_search-search"><i class="user_search-searchicon fa-solid fa-magnifying-glass"></i></div>
                    <div class="account"><a href="login.php" class="user-link"><i class="account-icon fa-solid fa-user"></i></a></div>
                    <div class="inputbox transition-inputbox"><input placeholder="Search Film Name" class="input-search" type="text"></div>
                </div>
            </header>
        </div>
    </div>
    <!-- header section end -->

    <!-- main content start-->
    <div class="maincontainer">
        <div class="grid">
            <div class="row">
                <?php
                    foreach($films as $f) {
                        ?>
                            <div class="film-item l-2 m-4 c-6">
                                <div class="film-item-img-container">
                                    <img src="./poster/<?= $f['fPosterPath'] ?>" alt="">
                                </div>
                                <h4><?= $f['fName'] ?></h4>
                                <button class="film-item-watch-btn"><a href="filmDetail.php?id=<?= $f['fId'] ?>" class="film-item-watch-link">Watch</a></button>
                            </div>
                        <?php
                    }
                ?>
                <!-- <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=1" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div>
                <div class="film-item l-2 m-4 c-6">
                    <div class="film-item-img-container">
                        <img src="./poster/antman.jpg" alt="">
                    </div>
                    <h4>Ant Man</h4>
                    <button class="film-item-watch-btn"><a href="filmDetail.php?id=2" class="film-item-watch-link">Watch</a></button>
                </div> -->
            </div>
            
        </div>
    </div>
    <!-- main content end-->

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
    <script type="text/javascript" src="./main.js"></script>
    <script type="text/javascript" src="./searchResult.js"></script>
</body>
</html>