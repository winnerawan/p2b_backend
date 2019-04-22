/*---
Author: Marvlous
Author URL: http://marvlous.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
    });
}
$(document).ready(function(){   
    $('.toggle-wrapper').click(function(){
        $('.sidebar-menu').toggleClass('active');
        $('.toggle-header').toggleClass('active');
        $('.coverbg').toggleClass('active');
    });
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        draggable:false,        
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        draggable:false,
        prevArrow:"<div class='position-absolute nav-icon nav-icon-left'><i class='la la-angle-left'></i></div>",
        nextArrow:"<div class='position-absolute nav-icon nav-icon-right'><i class='la la-angle-right'></i></div>"  
      });         
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        $('.navbar-brand').toggleClass('text-dark');
    });
    $("i[data-page='scroll']").click(function(){
        $.fn.fullpage.moveSectionDown();
    });
    $(document).ready(function() {
        $('#fullpage').fullpage({
            controlArrows: true,
            css3: true,
            scrollBar: true,
            loopHorizontal: false
        });
        $('.fp-prev').append('<i class="la la-angle-double-left"></i>');
        $('.fp-next').append('<i class="la la-angle-double-right"></i>');
    });
    
    $("button[data-hamburger='burger']" ).on('click', function(){
        $(this).toggleClass('active');
        $("div[data-list='menu']").toggleClass('active');
    }); 
    // var scroll = new SmoothScroll('a[href*="#"]',{
        // offset: 77
    // });    
    var getHeaderHeight = $('.navbar-expand-lg').outerHeight();
    $(window).scroll(function(){
    if($(window).scrollTop() > getHeaderHeight){
        $('.navbar-expand-lg').addClass('navbar-new');
    }
    else{
        $('.navbar-expand-lg').removeClass('navbar-new');
    }
    });
    $('#owl-testi').owlCarousel({
        nav:true,
        dots:true,
        margin:20,
        center:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })
    $('#owl-one').owlCarousel({
        nav:false,
        dots:false,
        stagePadding: 50,
        margin:15,
        rtl:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('#owl-two').owlCarousel({
        nav:false,
        dots:false,
        stagePadding: 50,
        margin:15,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('#owl-testimonial').owlCarousel({
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    var htmlLicense = 
    "<div class='footer-license pt-2 pb-2 bg-white'>"+
        "<div class='container'>"+
            "<div class='row no-gutters'>"+
                "<div class='col-sm-6'>"+
                    "© 2017 All rights reserved"+
                    "<a href='https://marvlous.com' class='text-dark'>"+
                        " Marvlous.com"+
                    "</a>"+
                "</div>"+
                "<div class='col-sm-6 text-right'>"+
                    "<ul class='list-inline m-0'>"+
                        "<li class='facebook list-inline-item'>"+
                            "<a href='https://www.facebook.com/marvlouscom/' target='_blank'>"+
                                "<i class='fab fa-facebook-f'></i>"+
                            "</a>"+
                        "</li>"+
                        "<li class='twitter list-inline-item'>"+
                            "<a href='https://twitter.com/marvlouscom/' target='_blank'>"+
                                "<i class='fab fa-twitter'></i>"+
                            "</a>"+
                        "</li>"+
                        "<li class='instagram list-inline-item'>"+
                            "<a href='https://www.instagram.com/marvlouscom/' target='_blank'>"+
                                "<i class='fab fa-instagram'></i>"+
                            "</a>"+
                        "</li>"+
                    "</ul>"+
                "</div>"+
            "</div>"+
        "</div>"+
    "</div>"
$('footer').after(htmlLicense);
});