// handle getting parametre of the url
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const input = urlParams.get("input")
document.title = input + " Film"