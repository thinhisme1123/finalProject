const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

var filmList = [
    {
        id : 1,
        path : 'bogia.jpg',
        filmName: "Bố già"
    },
    {
        id : 2,
        path : 'muoi.jpg',
        filmName: "Mười"
    },
    {
        id : 3,
        path : 'kinhdom.jpg',
        filmName: "King Dom"
    },
    {
        id : 4,
        path : 'macbiec.jpg',
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
    const iconCheck = `<a href="login.php" class="user-link"><i class="ccount-icon fa-solid fa-user"></i></a>`
    if($$('.account')[0].innerHTML === iconCheck) {
        $$('.modal-remind-login')[0].classList.add('open')
        $("#cmt-box").blur()
        // hanlde count down comment box when modal open
        let i = 10
        moveInteral = setInterval(() => {
            $("#count-down").innerHTML = i
            i--
            if(i < 1) 
            {
                window.location.href = "login.php"
            }
        }, 1000);
    }
    else {
        console.log("logged")
    }
}
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
    if(film.id === id)
    {
        const path = `./poster_slider/${film.path}`
        $("#film-img").src = path
        document.title = film.filmName
        $('#nameFilm').innerText = film.filmName
    }
})



  
  
