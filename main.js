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

//handle scroll film list
    // const arrowsRight = document.querySelectorAll(".arrow-newest-list-right")
    // const arrowsLeft = document.querySelectorAll(".arrow-newest-list-left")
    // const movieLists = document.querySelectorAll(".movie-newest-list")

    // arrowsRight.forEach((arrow, i) => {
    //     const itemNumber = movieLists[i].querySelectorAll("img").length
    //     let clickCount = 0
    //     arrow.addEventListener("click", () => {
    //         clickCount++
    //         if (itemNumber - (6 + clickCount) >= 0) {
    //             movieLists[i].style.transform = `translateX(${movieLists[i].computedStyleMap().get("transform")[0].x.value - 220}px)`
    //         } else {
    //             movieLists[i].style.transform = "translateX(0)"
    //             clickCount = 0
    //         }
            
    //     })
    // })

    // arrowsLeft.forEach((arrow, i) => {
    //     const itemNumber = movieLists[i].querySelectorAll("img").length
    //     let clickCountLeft = 0
    //     arrow.addEventListener("click", () => {
    //         clickCountLeft++
    //         if (itemNumber - (6 + clickCountLeft) >= 0) {
    //             movieLists[i].style.transform = "translateX(0)"
    //             clickCountLeft = 0
    //             // movieLists[i].style.transform = `translateX(${movieLists[i].computedStyleMap().get("transform")[0].x.value + 220}px)`
    //         } else {
    //             // movieLists[i].style.transform = "translateX(0)"
    //             // clickCountLeft = 0
    //             movieLists[i].style.transform = `translateX(${movieLists[i].computedStyleMap().get("transform")[0].x.value + 220}px)`
    //         }
            
    //     })
    // })

const movieItem = document.querySelector(".movie-newest-list")
const dragging = (e) => {
    movieItem.scrollBy = e.pageX;
    
}
movieItem.addEventListener("mousemove", dragging)