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