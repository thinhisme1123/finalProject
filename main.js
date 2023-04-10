const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

$$('.user_search-search')[0].onclick = () => {
    const inputBox = $$('.inputbox')[0]
    inputBox.classList.toggle('open')
}
const sliderImg = [
    {
        name:'bogia',
        namePath: 'bogia.jpg'
    },
    {
        name:'kingdom',
        namePath: 'kinhdom.jpg'
    },
    {
        name:'muoi',
        namePath: 'muoi.jpg'
    },
    {
        name:'macbiec',
        namePath: 'macbiec.jpg'
    },
]
const pathSlider = './poster_slider/'
var i = 1
var slideIndex = 0;
$$('.slider-container_img')[0].innerHTML = `<img id="img-0" class="slider-img transition-img" src="./poster_slider/bogia.jpg" alt=""></img>`
// hanlde auto slider
setInterval(() => {

    // console.log($$('.slider-img')[0])
    $$('.slider-container_img')[0].innerHTML = `<img id="img-${i}" class="slider-img transition-img" src="./poster_slider/${sliderImg[i].namePath}" alt="">`
    
    slideIndex = i
    i++;
    if(i === sliderImg.length)
    {
        i = 0
    }
},4000)
// Next/previous controls
function plusSlides(n) {
    let indexImg = slideIndex + n
    if(indexImg === sliderImg.length) {
        indexImg = 0
    }
    console.log(indexImg)
    
}
// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
    
}