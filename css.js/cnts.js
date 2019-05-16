// cnts.js
// vers:180209
$(function(){
  $(window).scroll(function(){
    $('.article').each(function(){
      var target = $(this).offset().top,
          scroll = $(window).scrollTop(),
          wHeight = $(window).height();
      if (scroll > target - wHeight + wHeight/5) {
        $(this).css('opacity','1');
      } else { $(this).css('opacity','0'); }
    });
  });
});