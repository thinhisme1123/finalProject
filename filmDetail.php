<?php
    require_once("handleData.php");

$id = $_GET['id'] ?? '1';

$check = checkLogin();

// $film = getFilm($id);

    // $filmGern = có thể trả về một hàm mới bên handleData để lấy phim cùng thể loại
    $filmGenre = getSameGenre($id);
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
    <link rel="stylesheet" href="./style/account.css">

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
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="user_search">
                    <div class="user_search-search"><i class="user_search-searchicon fa-solid fa-magnifying-glass"></i></div>
                    <div class="account"><?php
                                            if ($check['code'] == 0) {
                                                echo ('<a href="profile.php" class="user-link"><i class="account-icon fa-solid fa-user"></i></a>');
                                            } else {
                                                echo ('<a href="login.php" class="user-link"><i class="account-icon fa-solid fa-user"></i></a>');
                                            }
                                            ?></div>
                    <div class="inputbox transition-inputbox"><input placeholder="Search Film Name" class="input-search" type="text"></div>
                </div>
            </header>
        </div>
    </div>
    <!-- header section end -->
    <!-- use php to render the interface -->
    <!--film detail container start-->
    <div class="filmdetail-section">
        <div class="filmdetail-container">
            <div class="filmdetail-container-grid">
                <div class="filmdetail-container-poster">
                    <div class="filmimg-container">
                        <img id="film-img" src="" alt="">
                        <h1 id="nameFilm">Film Title here</h1>
                        <button class="trailer-btn">
                            <i class="fa-brands fa-youtube"></i>
                            Trailer</button>
                        <button onclick="openVideoFilm()" class="watch-btn">
                            <i class="fa-solid fa-play"></i>
                            Watch Film</button>
                    </div>
                </div>
                <!-- information about the film start-->
                <div class="filmdetail-container-infor">
                    <div class="filmdetaile-infor-item">
                        <h4 class="filmdetaile-infor-item_type">Rating star:</h4>
                        <div class="rating-stars">
                            <span class="star" data-rating="1"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="2"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="3"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="4"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="5"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="6"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="7"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="8"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="9"><i class="fa-solid fa-star"></i></span>
                            <span class="star" data-rating="10"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <p id="filmdetaile-infor-item-ratingstart-content"></p>
                        <p id="rating-stars-response"></p>
                        <h4 class="gern-info filmdetaile-infor-item_type">Genre: <span class="filmdetaile-infor-item_info"><?= $film['fGenre'] ?></span></h4>
                        <h4 class="filmdetaile-infor-item_type">Actors: <span class="filmdetaile-infor-item_info">Trấn Thành, Lê Giang</span></h4>
                    </div>
                    <div class="filmdetaile-infor-item">
                        <h4 class="filmdetaile-infor-item_type">Year: <span class="filmdetaile-infor-item_info">2021</span></h4>
                        <h4 class="filmdetaile-infor-item_type">Director: <span class="filmdetaile-infor-item_info"><?= $film['fDir'] ?></span></h4>
                    </div>
                    <div class="filmdetaile-infor-item">
                        <h4 class="filmdetaile-infor-item_type">Country: <span class="filmdetaile-infor-item_info"><?= $film['fCountry'] ?></span></h4>
                        <h4 class="filmdetaile-infor-item_type">Duration: <span class="filmdetaile-infor-item_info"><span id="duration"><?= $film['fDuration'] ?></span> minutes</span></h4>
                    </div>
                    <div class="filmdetaile-infor-review">
                        <h4 class="filmdetaile-infor-item_type">Review Film</h4>
                        <p><?= $film['fDesc'] ?></p>
                    </div>
                </div>
                <!-- video film  -->
                <div class="filmdetail-container-video">
                    <video width="640" height="480" controls>
                        <source src="./videoFilm/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div> 
                <!-- information about the film end-->
                <div class="filmdetail-container-similarfilm">
                    <h1>Similiar Film</h1>
                    <div class="filmdetail-container-similarfilm-grid">
                        <div class="row">
                            <?php
                                foreach($filmGenre as $fg) {
                                    ?>
                                        <div class="film-item l-3 m-4 c-6">
                                            <div class="film-item-img-container">
                                                <img src="./poster/<?= $fg['fPosterPath'] ?>" alt="">
                                            </div>
                                            <h4><?= $fg['fName'] ?></h4>
                                            <button class="film-item-watch-btn"><a href="filmDetail.php?id=<?= $fg['fId'] ?>" class="film-item-watch-link">Watch</a></button>
                                        </div>
                                    <?php
                                }
                                
                            ?>
                            <!-- <div class="film-item l-3 m-4 c-6">
                                <div class="film-item-img-container">
                                    <img src="./poster/antman.jpg" alt="">
                                </div>
                                <h4>Ant Man</h4>
                                <button class="film-item-watch-btn"><a href="filmDetail.php?id=1" class="film-item-watch-link">Watch</a></button>
                            </div>
                            <div class="film-item l-3 m-4 c-6">
                                <div class="film-item-img-container">
                                    <img src="./poster/antman.jpg" alt="">
                                </div>
                                <h4>Ant Man</h4>
                                <button class="film-item-watch-btn"><a href="filmDetail.php?id=1" class="film-item-watch-link">Watch</a></button>
                            </div>
                            <div class="film-item l-3 m-4 c-6">
                                <div class="film-item-img-container">
                                    <img src="./poster/antman.jpg" alt="">
                                </div>
                                <h4>Ant Man</h4>
                                <button class="film-item-watch-btn"><a href="filmDetail.php?id=1" class="film-item-watch-link">Watch</a></button>
                            </div>
                            <div class="film-item l-3 m-4 c-6">
                                <div class="film-item-img-container">
                                    <img src="./poster/antman.jpg" alt="">
                                </div>
                                <h4>Ant Man</h4>
                                <button class="film-item-watch-btn"><a href="filmDetail.php?id=1" class="film-item-watch-link">Watch</a></button>
                            </div>
                            <div class="film-item l-3 m-4 c-6">
                                <div class="film-item-img-container">
                                    <img src="./poster/antman.jpg" alt="">
                                </div>
                                <h4>Ant Man</h4>
                                <button class="film-item-watch-btn"><a href="filmDetail.php?id=1" class="film-item-watch-link">Watch</a></button>
                            </div>

                        </div>
                        
                    </div>
                </div>
                                       
            </div>
        </div>
    </div>
    <!--film detail container end-->
    <!-- commment section start -->
    <div class="comment-seciton">
        <div class="comment-container">
            <div class="comment-container-grid">
                <div class="row comment-header">
                    <p><span id="cmt-amount">0</span> comments</p>
                    <div class="comment-sort-style">List style
                        <select name="sort-style" id="comment-sort-style-options">
                            <option value="latest">Latest</option>
                            <option value="Most Views">Most Views</option>
                        </select>
                    </div>
                </div>
                <div class="row comment-content">
                    <div class="icon-user">
                        <img src="./icon/1200px-User_icon-cp.svg.png" alt="">
                        <span class="name-user">You</span>
                    </div>
                    <form action="handleData.php" method="post">
                        <textarea name="cmt" id="cmt-box" cols="100" rows="4" oninput="resizeTextarea()" placeholder="Write your comment here"></textarea>
                        <button class="submit-comment-btn" type="submit" name="submit-comment-btn">Post</button>
                    </form>
                    <div class="comments-container">
                        <div class="comments-container-item">
                            <img src="./icon/1200px-User_icon-cp.svg.png" alt="">
                            <div class="name-and-content">
                                <span class="name-user">You</span>
                                <p class="comments-container-content">phim này hay quá</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- commment section end -->

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
    <div class="modal-remind-login">
        <div class="modal__remind-overlay"></div>
        <div class="modal-remind-container">
            <div class="modal__remind-body">
                <div class="modal__remind-inner">
                    <h3>Message</h3>
                    <div class="modal-remind-close">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                <div class="modal_remind-content">
                    <p>You have to login before comment or rating any film !</p>
                    <p>It will move to login page automatically in <span id="count-down">10</span> s</p>
                    <button class="move-login-btn"><a href="login.php" class="move-login-btn_link">Move to login</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- remind loggin modal end-->


    <script type="text/javascript" src="./filmDetail.js"></script>
</body>

</html>