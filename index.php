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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                        <li class="nav-item"><a class="nav-item_link" href="">Home</a></li>
                        <li class="nav-item nav-item_hover"><a class="nav-item_link" href="">Genre</a>
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
                <div class="user_search">
                    <div class="user_search-search"><i class="user_search-searchicon fa-solid fa-magnifying-glass"></i></div>
                    <div class="account"><a href="login.php" class="user-link"><i class="account-icon fa-solid fa-user"></i></a></div>
                    <div class="inputbox transition-inputbox"><input placeholder="Search Film Name" class="input-search" type="text"></div>
                </div>
            </header>
        </div>
    </div>
    <!-- header section end -->
    <!-- slider start-->
    <div class="slider-container">
        <div class="slider">
            <!-- <div class="grid">
                <div class="slider-container">
                    <div class="slider-container_img">
                        <img id="img-0" class="slider-img" src="./poster_slider/bogia.jpg" alt="">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>  -->
            <div class="slides">
                <!-- radio btn start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- radio btn end -->
                <!-- slide img start-->
                <div class="slide first">
                    <button data-id="1" class="watch-btn">Watch</button>
                    <img src="./poster_slider/bogia.jpg" alt="">
                </div>
                <div class="slide">
                    <button data-id="2" class="watch-btn">Watch</button>
                    <img src="./poster_slider/muoi.jpg" alt="">
                </div>
                <div class="slide">
                    <button data-id="3" class="watch-btn">Watch</button>
                    <img src="./poster_slider/kinhdom.jpg" alt="">
                </div>
                <div class="slide">
                    <button data-id="4" class="watch-btn">Watch</button>
                    <img src="./poster_slider/macbiec.jpg" alt="">
                </div>
                <!-- slide img end -->
                <!-- automatic navigation start-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!-- automatic navigation end-->
            </div>
            <!-- manual navigation start -->
            <div class="navigaiton-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- manual navigation end -->
        </div>
    </div>
    <!-- slider end-->
    <!-- main content -->
    <div class="maincontainer">
        <div class="movie-list-container">
            <h1 class="movie-title-list">New release</h1>
            <div class="movie-newest-wrapper">
                <div class="movie-newest-list">
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    
                </div>
                <i class="fa-solid fa-chevron-right arrow-newest-list-right"></i>
                <i class="fa-solid fa-chevron-left arrow-newest-list-left"></i>
            </div>
        </div>

        <div class="movie-list-container">
            <h1 class="movie-title-list">Most favorite</h1>
            <div class="movie-newest-wrapper">
                <div class="movie-newest-list">
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="movie-newest-item">
                            <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                            <span class="movie-newest-name">Ant Man</span>
                            <p class="movie-newest-desc">This is the description for the film</p>
                            <button class="movie-newest-button">Watch</button>
                        </div>

                    <div class="movie-newest-item">
                        <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                        <span class="movie-newest-name">Ant Man</span>
                        <p class="movie-newest-desc">This is the description for the film</p>
                        <button class="movie-newest-button">Watch</button>
                    </div>
                    <div class="movie-newest-item">
                        <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                        <span class="movie-newest-name">Ant Man</span>
                        <p class="movie-newest-desc">This is the description for the film</p>
                        <button class="movie-newest-button">Watch</button>
                    </div>
                    <div class="movie-newest-item">
                        <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                        <span class="movie-newest-name">Ant Man</span>
                        <p class="movie-newest-desc">This is the description for the film</p>
                        <button class="movie-newest-button">Watch</button>
                    </div>
                    <div class="movie-newest-item">
                        <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                        <span class="movie-newest-name">Ant Man</span>
                        <p class="movie-newest-desc">This is the description for the film</p>
                        <button class="movie-newest-button">Watch</button>
                    </div>
                    <div class="movie-newest-item">
                        <img class="movie-newest-img" src="poster/antman.jpg" alt="">
                        <span class="movie-newest-name">Ant Man</span>
                        <p class="movie-newest-desc">This is the description for the film</p>
                        <button class="movie-newest-button">Watch</button>
                    </div>
                    
                </div>
                <i class="fa-solid fa-chevron-right arrow-newest-list-right"></i>
                <i class="fa-solid fa-chevron-left arrow-newest-list-left"></i>
            </div>
        </div>
    </div>

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
</body>
</html>