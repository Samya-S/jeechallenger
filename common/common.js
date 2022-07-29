function toggleNavOpen() {
  document.querySelector("nav").classList.toggle("nav--open");
}
function toggleNavClose() {
  document.querySelector("nav").classList.toggle("nav--open");
}

  
document.onkeydown = function(e) {
  if (e.ctrlKey && 
    (e.keyCode === 67 || 
    e.keyCode === 86 || 
    e.keyCode === 85 || 
    e.keyCode === 117)) {
    //alert('not allowed');
    return false;
  } 
  else {
    return true;
  }
};




//hide navbar when scroll down

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
	document.getElementById("navbar").style.top = "0";
} 
else {
	document.getElementById("navbar").style.top = "-100px";
}
prevScrollpos = currentScrollPos;
}






// redirect from GitHub pages to Heroku app

// if (window.location == "https://samya-s.github.io/jeechallenger/") {
//   window.location.href = 'https://jeechallenger.herokuapp.com/'; 
// }