$(document).ready(function() {
	var count = $('.win-vote').length;
	//alert(count);
	for(i=1;i<=count;i++)
	{
  $('.example-'+i+'').ratings(10).bind('ratingchanged', function(event, data) {
    $('.example-rating-'+i+'').text(data.rating);
  });
	}
//	$('.example-1').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-1').text(data.rating);
//  });	
//  $('.example-2').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-2').text(data.rating);
//  });
//   $('.example-3').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-3').text(data.rating);
//  });
//   $('.example-4').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-4').text(data.rating);
//  });
//   $('.example-5').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-5').text(data.rating);
//  });
//   $('.example-6').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-6').text(data.rating);
//  });
//  $('.example-7').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-7').text(data.rating);
//  });
//  $('.example-8').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-8').text(data.rating);
//  });
//  $('.example-9').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-9').text(data.rating);
//  });
//  $('.example-10').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-10').text(data.rating);
//  });
//  $('.example-11').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-11').text(data.rating);
//  });
//  $('.example-12').ratings(10).bind('ratingchanged', function(event, data) {
//    $('.example-rating-12').text(data.rating);
//  });
});