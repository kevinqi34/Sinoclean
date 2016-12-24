
function mob_nav() {



  $('#mob-nav').click(function() {


    var checker = $('.mob-elem').is(":visible");
    if (checker == false) {
      $('.mob-elem').show();
    } else {
      $('.mob-elem').hide();
    }


  });


$( window ).resize(function() {
  var width = $( window ).width();
  if (width > 900) {
    $('.mob-elem').hide();

  }

});

}




$( document ).ready(function() {
  // init mob nav
  mob_nav();


});
