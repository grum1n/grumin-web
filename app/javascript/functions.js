/*menu button*/
function openNav() {
    document.getElementById("menu").style.width = "250px";
  }
function closeNav() {
    document.getElementById("menu").style.width = "0";
}

//Get the button:
var mybutton = document.getElementById("myBtn");
var scrollHeader = document.getElementById("dark-header");
// When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
    scrollHeader.style.backgroundColor = "#11162efa";
  } else {
    mybutton.style.display = "none";
    scrollHeader.style.backgroundColor = "#101426b2";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}