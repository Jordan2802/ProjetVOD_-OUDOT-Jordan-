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
