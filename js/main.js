function getRandomArbitrary(min, max) {
  return parseInt(Math.random() * (max - min) + min);
}

$(document).ready(function(){
  $('#start_btn').click(function(){
    $('#heroimage').fadeOut();
  });

  $('#heroimage_content').fadeIn();

  var random_start_likes = getRandomArbitrary(0, 2000);
  var random_start_followers = getRandomArbitrary(0, 500);

  $('#likes').html(random_start_likes);
  $('#followers').html(random_start_followers);

  $('#likes').delay(667).queue(function() {

    $(this).animateNumber({ number: getRandomArbitrary(50000, 200000) });

    $(this).dequeue();

 });

 $('#followers').delay(667).queue(function() {

  $(this).animateNumber({ number: getRandomArbitrary(2000, 70000) });

  $(this).dequeue();
  });


});