/* Copyright 2013 Zachary Doll */
jQuery(document).ready(function($) {
  // Fade in.out on scroll
  $(window).scroll($.debounce(function() {
    if ($(this).scrollTop() > 100) {
      $('#JumpToTop').fadeIn();
    } else {
      $('#JumpToTop').fadeOut();
    }
	
	var ScrollOffset = $(document).height() - $(window).height() - 100;
	console.log(ScrollOffset);
	console.log($(this).scrollTop());
	if ($(this).scrollTop() > ScrollOffset) {
      $('#JumpToBottom').fadeOut();
    } else {
      $('#JumpToBottom').fadeIn();
    }
  }, 100, null, true, true));

  // scroll body to 0px on click
  $('#JumpToTop').click(function(event) {
    event.preventDefault();
    $('body, html').animate({scrollTop: 0}, 800);
  });
  
  // scroll body to bottom of page on click
  $('#JumpToBottom').click(function(event) {
    event.preventDefault();
	var ScrollOffset = $(document).height() - $(window).height();
    $('body, html').animate({scrollTop: ScrollOffset}, 800);
  });  
});
