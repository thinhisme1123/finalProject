let myInput = document.getElementById("username-input");

myInput.addEventListener("change", function() {
  let inputValue = myInput.value;
  localStorage.setItem("myInputValue", inputValue);
});

let savedValue = localStorage.getItem("myInputValue");
if (savedValue) {
  myInput.value = savedValue;
}
