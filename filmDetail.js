const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

var filmList = [{
        id: 1,
        path: 'bogia.jpg',
        filmName: "Bố già"
    },
    {
        id: 2,
        path: 'muoi.jpg',
        filmName: "Mười"
    },
    {
        id: 3,
        path: 'kinhdom.jpg',
        filmName: "King Dom"
    },
    {
        id: 4,
        path: 'macbiec.jpg',
        filmName: "Mắt biếc"
    },

]

// handle list moble open
$$('.header-list')[0].onclick = () => {
    $$('.header-list')[0].classList.toggle('active')
    $$('.nav')[0].classList.toggle('open')
}

//hanlde search input open
$$('.user_search-search')[0].onclick = () => {
    const inputBox = $$('.inputbox')[0]
    inputBox.classList.toggle('open')
}
// hanlde checking login or not of the comment box
let moveInteral
$("#cmt-box").onfocus = () => {
    const iconCheck = `<a href="login.php" class="user-link"><i class="account-icon fa-solid fa-user"></i></a>`
    // not login yet
    if ($$('.account')[0].innerHTML === iconCheck) {
        $$('.modal-remind-login')[0].classList.add('open')
        $("#cmt-box").blur()
        // hanlde count down comment box when modal open
        let i = 10
        moveInteral = setInterval(() => {
            $("#count-down").innerHTML = i
            i--
            if (i < 1) {
                window.location.href = "login.php"
            }
        }, 1000);
    }
    // logged, allow user can comment 
    else {
        // hanlde logic to load user's cmt

    }
}
// handle clicking rating star when user not login yet
const starsCheck = document.querySelectorAll('.star');
starsCheck.forEach((star) => {
    star.onclick = () => {
        const iconCheck = `<a href="login.php" class="user-link"><i class="account-icon fa-solid fa-user"></i></a>`
        // not login yet
        if ($$('.account')[0].innerHTML === iconCheck) {
            $$('.modal-remind-login')[0].classList.add('open')
            // hanlde count down comment box when modal open
            let i = 10
            moveInteral = setInterval(() => {
                $("#count-down").innerHTML = i
                i--
                if (i < 1) {
                    window.location.href = "login.php"
                }
            }, 1000);
        }
        // logged, allow user can comment and rate star
        else {
            //handle hover rating start of the film
            const starts = Array.from($$('.fa-star'))
            starts[0].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "So bad !"
            }
            starts[1].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "Bad !"
            }
            starts[2].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "Not good !"
            }
            starts[3].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "Not very good !"
            }
            starts[4].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "Normal !"
            }
            starts[5].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "So so !"
            }
            starts[6].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "Looks good !"
            }
            starts[7].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "Good !"
            }
            starts[8].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "So good !"
            }
            starts[9].onmouseover = () => {
                $('#filmdetaile-infor-item-ratingstart-content').innerText = "Fantastic !"
            }
            const stars = document.querySelectorAll('.star');

            function handleStarHover(event) {
                const rating = event.target.dataset.rating;
                for (let i = 0; i < stars.length; i++) {
                    if (i < rating) {
                        stars[i].classList.add('active');
                    } else {
                        stars[i].classList.remove('active');
                        $('#rating-stars-response').innerText = ""
                    }
                }
            }
            stars.forEach(star => {
                star.addEventListener('mouseover', handleStarHover);
                star.onclick = () => {
                    $('#rating-stars-response').innerText = "Thanks for rating !"
                }
            })
        }
    }
})

// handle modal-remind's closing button
$$('.modal-remind-close')[0].onclick = () => {
    $$('.modal-remind-login')[0].classList.remove('open')
    clearInterval(moveInteral)
}
$$('.modal__remind-overlay')[0].onclick = () => {
    $$('.modal-remind-login')[0].classList.remove('open')
    clearInterval(moveInteral)
}

// resize comment box
function resizeTextarea() {
    var textarea = document.getElementById("myTextarea");
    textarea.style.height = "auto";
    textarea.style.height = (textarea.scrollHeight) + "px";
}
// handle getting parametre of the url
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const id = parseInt(urlParams.get("id"))

filmList.forEach((film) => {
    if (film.id === id) {
        const path = `./poster_slider/${film.path}`
        $("#film-img").src = path
        document.title = film.filmName
        $('#nameFilm').innerText = film.filmName
    }
})