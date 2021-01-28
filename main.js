$(document).ready(function(){

    const viewportSize = $( window ).height();

    //changes the highlighted navbar item by adding an active class to it.
    //compares current Y position of page element to current scroll position
    $(window).on('scroll',function(){
           
        let currentPos = $(this).scrollTop();

        $("div[id*='page']").each(function(i){
            if ($(this).position().top <= currentPos + viewportSize/2){

                $('.navbar-nav a.active').removeClass('active');
                $('.navbar-nav a').eq(i).addClass('active');
            }
        });

    });



});