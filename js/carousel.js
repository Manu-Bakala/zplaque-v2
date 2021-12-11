$('.my-card').click(function() {
  $slide = $('.active').width();
  
  if ($(this).hasClass('next')) {
    $('.card-carousel').stop(false, true).animate({left: '-=' + $slide});
  } else if ($(this).hasClass('prev')) {
    $('.card-carousel').stop(false, true).animate({left: '+=' + $slide});
  }
  
  $(this).removeClass('prev next');
  $(this).siblings().removeClass('prev active next');
  
  $(this).addClass('active');
  $(this).prev().addClass('prev');
  $(this).next().addClass('next');

  /*if($(this).prev().length <= 0){
    $(this).next().addClass('next');
    $(this).next().next().addClass('prev');
  }
  else{
    $(this).next().addClass('next');
  }
 
  if($(this).next().length <= 0){
    $(this).prev().addClass('prev');
    $(this).prev().prev().addClass('next');
  }*/
});

// Keyboard nav
$('html body').keydown(function(e) {
    if (e.keyCode == 37) { // left
      $('.active').prev().trigger('click');
    }
    else if (e.keyCode == 39) { // right
      $('.active').next().trigger('click');
    }
});

  