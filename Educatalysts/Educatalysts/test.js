$('.button').click(function() {
    var width = $('.content').width();
    if(width == 100) {
       $('.content').animate({width:"50"});
    } 
    else {
       $('.content').animate({width:"100%"});
    }
})