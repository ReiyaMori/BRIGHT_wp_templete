let hash = location.hash;
$(function(){
    if(hash == null){return ;}
    let position = $(hash).offset().top - $('header').height() -25;
    let speed = 600;
    $("html,body").animate({scrollTop:position},speed);
});


// header
$(window).on('scroll',function(){
    if($(window).scrollTop() > 20){
        $('header').addClass('scrolled');
    }else{
        $('header').removeClass('scrolled');
    }
});

function changeMenu(){
    if($('.sp-menu').css('visibility') == 'visible'){
        $('.sp-menu').removeClass('tapped');
        $('.hamburger').removeClass('tapped');
    }else{
        $('.sp-menu').addClass('tapped');
        $('.hamburger').addClass('tapped');
    }
}

$('.hamburger').on('click',function(){
    changeMenu();
});
$('.sp-menu').on('click',function(){
    changeMenu();
});
// header end



$("#slick").slick({
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 1500,
    speed: 1500,
    fade: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
  

$('.top-btn.need').on('click',function(){
    let position = $('#about').offset().top - $('header').height();
    let speed = 600;
    $("html,body").animate({scrollTop:position},speed);
});
$('#to-scroll').on('click',function(){
    let position = $('#top-btn').offset().top - $('header').height();;
    let speed = 600;
    $("html,body").animate({scrollTop:position},speed);
});