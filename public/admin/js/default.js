$(document).ready(function(){
    $("a[data-toggle='.fill']").click(function() {
      var toggle_el = $(this).data("toggle");
      $(toggle_el).toggleClass("open-sidebar");
      return false;      
    });
     $(".swipe-area").swipe({
          swipeStatus:function(event, phase, direction, distance, duration, fingers)
              {
                  if (phase=="move" && direction =="right") {
                       $(".fill").addClass("open-sidebar");
                       return false;
                  }
                  if (phase=="move" && direction =="left") {
                       $(".fill").removeClass("open-sidebar");
                       return false;
                  }
              }
      }); 
  });
$(document).ready(function(){        
    var parts = window.location.href.split('/');
    var lastSegment = parts.pop() || parts.pop();  // handle potential trailing slash
    console.log(lastSegment);
    if(lastSegment == 'index.html' || lastSegment == 'index.html#' ){
        $("li[data-sidebar='dashboard']").addClass('active');
    }else if(lastSegment == 'widgets.html' || lastSegment == 'widgets.html#'){
        $("li[data-sidebar='widgets']").addClass('active');        
    }else if(lastSegment == 'charts.html' || lastSegment == 'charts.html#'){
        $("li[data-sidebar='charts']").addClass('active');        
    }else if(lastSegment == 'elements.html' || lastSegment == 'elements.html#'){
        $("li[data-sidebar='elements']").addClass('active');        
    }else if(lastSegment == 'forms.html' || lastSegment == 'forms.html#'){
        $("li[data-sidebar='forms']").addClass('active');        
    }else if(lastSegment == 'tables.html' || lastSegment == 'tables.html#'){
        $("li[data-sidebar='tables']").addClass('active'); 
    }

    var htmlLicense = 
    "<div class='footer-license pt-2 pb-2 bg-white'>"+
        "<div class='container'>"+
            "<div class='row no-gutters'>"+
                "<div class='col-sm-6'>"+
                    "© 2017 All rights reserved"+
                    "<a href='https://marvlous.com' class='text-dark'>"+
                    "Marvlous.com"+
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
    $('.main-content .dashboard').after(htmlLicense);
});