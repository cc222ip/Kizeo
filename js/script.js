function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("corps").style.WebkitFilter = "blur(5px)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("corps").style.WebkitFilter = "none";
}

$(document).ready(function() {
    $('.menu-label').on('click', function() {
        var page = $(this).attr('href');
        var speed = 750;
        $('html, body').animate({
            scrollTop: $(page).offset().top
        }, speed);
        return false;
    });
});