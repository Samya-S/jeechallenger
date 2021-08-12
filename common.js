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


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
	document.getElementById("navbar").style.top = "0";
} else {
	document.getElementById("navbar").style.top = "-100px";
}
prevScrollpos = currentScrollPos;
}