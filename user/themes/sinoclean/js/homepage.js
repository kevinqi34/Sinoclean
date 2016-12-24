
var check_mobile = false;
var timer = 1;
var timer2 = 1;


function display(photo_id) {
  $('img.background').hide();
  $(photo_id).show();


}




function photo_slide() {

  window.setInterval(function(){
    if (check_mobile == false) {
    var picture = $('img.background');
    if (timer%4==1) {
      display('#slide2');
    } else if (timer%4==2) {
      display('#slide3');
    } else if (timer%4==3) {
      display('#slide4');
    } else if (timer%4==0) {
      display('#slide1');
    } else {
      console.log("photo_slider error.");
    }
  }
    timer++;
  }, 3500);




}


function photo_slide_mob() {

  window.setInterval(function(){

    var picture = $('img.background');
      if (check_mobile == true) {
        if (timer2%4==1) {
          display('#slidem2');
        } else if (timer2%4==2) {
          display('#slidem3');
        } else if (timer2%4==3) {
          display('#slidem4');
        } else if (timer2%4==0) {
          display('#slidem1');
        } else {
          console.log("photo_slider error.");
        }
      }

    timer2++;
  }, 3500);




}


$( document ).ready(function() {
  // init photo slide
  var width = $( window ).width();
    if (width < 1000) {
      display('#slidem1');
      check_mobile = true;
    } else {
      display('#slide1');
    }

    photo_slide();
    photo_slide_mob();

    // resize

    $( window ).resize(function() {
      var width = $( window ).width();
      if (width > 1000) {
          display('#slide1');
        check_mobile = false;
      } else {
        display('#slidem1');
        check_mobile = true;
      }

    });


});
