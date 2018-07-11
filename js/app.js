$('.slider-for').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
 slidesToShow: 8,
 slidesToScroll: 1,
 asNavFor: '.slider-for',
 dots: true,
 centerMode: true,
 focusOnSelect: true
});

$('.slider-for2').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.slider-nav2'
});
$('.slider-nav2').slick({
 slidesToShow: 8,
 slidesToScroll: 1,
 asNavFor: '.slider-for2',
 dots: true,
 centerMode: true,
 focusOnSelect: true
});

$('.slider-for3').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.slider-nav3'
});
$('.slider-nav3').slick({
 slidesToShow: 8,
 slidesToScroll: 1,
 asNavFor: '.slider-for3',
 dots: true,
 centerMode: true,
 focusOnSelect: true
});


$('.slider-nav img').click(function(){
  if ($('.affiche').hasClass('affiche-cacher')) {
    $('.affiche').removeClass('affiche-cacher');
  }
});
$('.croix').click(function(){
  $('.affiche').addClass('affiche-cacher');
})


$('.slider-nav2 img').click(function(){
  if ($('.affiche2').hasClass('affiche-cacher')) {
    $('.affiche2').removeClass('affiche-cacher');
  }
});
$('.croix2').click(function(){
  $('.affiche2').addClass('affiche-cacher');
})


$('.slider-nav3 img').click(function(){
  if ($('.affiche3').hasClass('affiche-cacher')) {
    $('.affiche3').removeClass('affiche-cacher');
  }
});
$('.croix3').click(function(){
  $('.affiche3').addClass('affiche-cacher');
})
