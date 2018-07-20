//faire apparaitre le form contact rapide au clic.

function slideTel() {
  if ($('.text').hasClass('cache')) {
    $('.text').removeClass('cache');
  } else {
    $('.text').addClass('cache');
  }
}

//menu appBurger

function cacher() {
  $('.navBurger2').toggleClass('cache--burger2');
}

$('#menuSlide2 .menu--ss').click(function() {
  $(this).children('ul').toggleClass('hide-ss-menu');
})

//faire apparaitre le contact rapide + nav scroll
var head = document.getElementById("head");
var tel = document.getElementById("tel");
var nav = document.getElementById("tailleNav");
var logo = document.getElementById("logoNav");
var tailleHead = head.offsetHeight;
var a = document.getElementsByTagName("a");


window.onscroll = function() {

  if (document.documentElement.scrollTop > tailleHead) {
    tel.style.display = 'block';
    nav.style.top = "0";
    nav.style.left = "0";
    $(nav).addClass('nav--js');
    logo.style.fontSize = "0px";
    for (var i = 0; i < a.length; i++) {
      a[i].className = "backup back:hover";
    }
  } else {
    tel.style.display = "none";
    nav.style.top = "5%";
    nav.style.left = "5%";
    $(nav).removeClass('nav--js');
    logo.style.fontSize = "60px";
    for (var i = 0; i < a.length; i++) {
      a[i].className = "#menuSlide li li:hover";
    }
  }

};
