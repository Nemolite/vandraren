/*слайдер*/

$(".fon-header").vegas({
    delay: 10000,
    transition: 'zoomOut',
    transitionDuration: 3000,
    slides: [
        { src: "https://vandraren.ru/wp-content/uploads/2021/03/fon1.jpg" },
        { src: "https://vandraren.ru/wp-content/uploads/2021/03/fon2.jpg" },
        { src: "https://vandraren.ru/wp-content/uploads/2021/03/fon3.jpg" },
        { src: "https://vandraren.ru/wp-content/uploads/2021/03/fon4.jpg" },
        { src: "https://vandraren.ru/wp-content/uploads/2021/03/fon5.jpg" }        
           
    ]
});

/*плавный переход по пунктам меню*/

$( ".btn-mobil" ).click(function() {
  $( ".nav-mobil" ).toggle(600);
});

/*плавный переход пунктов меню*/

 $(document).ready(function(){
    $(".nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});


/*скрытие меню при скорлинге вниз, 
открытие при скорлинге верх*/

var header = $('.head__nav'),
    scrollPrev = 0;

$(window).scroll(function() {
    var scrolled = $(window).scrollTop();
 
    if ( scrolled > 100 && scrolled > scrollPrev ) {
        header.addClass('out');
    } else {
        header.removeClass('out');
    }
    scrollPrev = scrolled;
}); 