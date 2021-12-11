function homeGroundSize(){
    var pourcentTop = 0.21;
    var pourcentHeight = 0.40;
    var illustrationHomeHeight = $('.home-illustration').height();
    var homeFormHeight = $('.home-form-container').height();
    var homeFormMarginTop;

    $('.home-ground').css({top:-(illustrationHomeHeight*pourcentTop)});
    //$('.home-ground').height((illustrationHomeHeight*pourcentHeight)*2);
    $('.home-form-container').css({top:((-illustrationHomeHeight*pourcentTop)-(homeFormHeight/2))});

    homeFormMarginTop = parseFloat($('.home-form-container').css('top'))
    $('.service').css('margin-top', homeFormMarginTop+30);

    /*$('.service').css({top:(-(illustrationHomeHeight*pourcentTop))-(homeFormHeight)});
    $('.conciergerie').css({top:(-(illustrationHomeHeight*pourcentTop))-(homeFormHeight)});
    $('.advantages').css({top:(-(illustrationHomeHeight*pourcentTop))-(homeFormHeight)});
    $('.step').css({top:(-(illustrationHomeHeight*pourcentTop))-(homeFormHeight)});
    $('.customer-comment').css({top:(-(illustrationHomeHeight*pourcentTop))-(homeFormHeight)});*/
}

function pageResize(){
    homeGroundSize();
}

$( ".form-select-service" ).change(function() {
    $(this).removeClass('text-muted');
});

$( ".form-select-city" ).change(function() {
    $(this).removeClass('text-muted');
});

$(window).resize(function() {
    pageResize();
});

$(document).ready(function() {
    pageResize();
});