(function(){
  $(".snapped").html($(".nav-main").html());
  var $height = $(window).outerHeight()/2;

  $(window).scroll(function(){

    var s = $(window).scrollTop();
    if(s >= $height){

      if(!$(".snapped").hasClass("unstick")){

        $(".snapped").addClass("unstick");

      }

    } else {
      if($(".snapped").hasClass("unstick")){

        $(".snapped").removeClass("unstick");

      }
    }


  });








})();
