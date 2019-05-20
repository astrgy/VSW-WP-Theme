$(document).ready(function() {
    
    $('.close').click(function() {
        $('.contact').slideToggle();
    });

    $('.show-menu, .menu li').click(function() {
        $('.menu').toggle('slide');
    });

    $('.show-contact').click(function() {
        $('.contact').slideToggle();
    });



})