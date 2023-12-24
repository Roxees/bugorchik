let switchMode = document.getElementById("switchMode");

switchMode.onclick = function () {
    let theme = document.getElementById("theme");
    
    if (theme.getAttribute("href") == "assets/style/light-index.css") {
        theme.href = "assets/style/dark-index.css";

    } else {
        theme.href = "assets/style/light-index.css";
    }
}

let likebtn = document.querySelector('#likebtn');
let dislikebtn = document.querySelector('#dislikebtn');
let input1 = document.querySelector('#input1');
let input2 = document.querySelector('#input2');

likebtn.addEventListener('click', ()=>{
    input1.value = parseInt(input1.value) + 1;
    input1.style.color = "#000000";
})

dislikebtn.addEventListener('click', ()=>{
    input2.value = parseInt(input2.value) + 1;
    input2.style.color = "#000000";
})

