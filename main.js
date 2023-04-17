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
// hanlde slider automatic
var counter = 1
setInterval(() => {
    document.getElementById('radio' + counter).checked = true;
    counter++
    if(counter > 4) counter = 1
}, 4000);
// hanlde clicing film detail

Array.from($$('.watch-btn')).forEach((item) => {
    item.onclick = (e) => {
        const id = parseInt(e.srcElement.attributes[0].value)
        filmList.forEach((film) => {
            if(id === film.id) {
                window.location.href = `filmDetail.php?id=${id}`
            }
        })
        
    }
})



