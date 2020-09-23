
$('[data-toggle="tooltip"]').tooltip();

$('#mySlider').on('slide.bs.carousel', function (e) {

  var $e = $(e.relatedTarget);
  $e.removeClass('active-next');

  var $next = $e.next();
  if ($next.length===0){
    $next = $('.item').eq(0);
  }

  var $nextnext = $e.next().next();
  if ($nextnext.length===0){
    $nextnext = $('.item').eq(1);
  }

  console.log($('.item').length);
  console.log($next.index());

  if ($next.index() == 1) {
    $('.item').removeClass('col-md-push-4 col-md-push-8 col-md-pull-4 col-md-pull-8');
  }

  if ($next.index() == 0) {
    console.log("last");
    $('.item').eq(0).toggleClass('col-md-push-8 col-md-push-4');
    $('.item').eq(1).toggleClass('active-next col-md-push-4');
    $('.item').eq($('.item').length-1).toggleClass('col-md-pull-4 col-md-pull-8');
  }
  else if ($next.index() < ($('.item').length-1)) {
    $next.addClass('active-next');
    $nextnext.addClass('active-next');
  }
  else {
    console.log("2nd last");
    $('.item').eq($next.index()-1).addClass('col-md-pull-4');
    $next.addClass('active-next col-md-pull-4');
    $('.item').eq(0).addClass('active-next col-md-push-8');
  }

  $('.active,.active-next').addClass('transitioning');
  setTimeout(function(){
    $('.transitioning').removeClass('transitioning');
  },300)

});