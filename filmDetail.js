const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

var filmList = [
    {
        id : 1,
        path : 'bogia.jpg'
    },
    {
        id : 2,
        path : 'muoi.jpg'
    },
    {
        id : 3,
        path : 'kinhdom.jpg'
    },
    {
        id : 4,
        path : 'macbiec.jpg'
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
// hanlde checking login or not
$("#cmt-box").onfocus = () => {
    const iconCheck = `<i class="account-icon fa-solid fa-user"></i>`
    if($$('.user-link')[0].innerHTML === iconCheck) {
        console.log("not login")
    }
    else {
        console.log("logged")
    }
}
