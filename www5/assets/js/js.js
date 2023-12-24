$( ".input" ).focusin(function() {
    $( this ).find( "span" ).animate({"opacity":"0"}, 200);
  });
  
  $( ".input" ).focusout(function() {
    $( this ).find( "span" ).animate({"opacity":"1"}, 300);
  });
  
  $(".login").submit(function(){
    $(this).find(".submit i").removeAttr('class').addClass("fa fa-check").css({"color":"#fff"});
    $(".submit").css({"background":"#2ecc71", "border-color":"#2ecc71"});
    $(".feedback").show().animate({"opacity":"1", "bottom":"-80px"}, 400);
    $("input").css({"border-color":"#2ecc71"});
    return false;
  });
  let switchMode = document.getElementById("switchMode");

  switchMode.onclick = function () {
      let theme = document.getElementById("theme");
      
      if (theme.getAttribute("href") == "css/light-index.css") {
          theme.href = "css/dark-index.css";
  
      } else {
          theme.href = "css/light-index.css";
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
  });
  