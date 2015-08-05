/* NAV Menu*/
$( "#trigger" ).click(function() {
  $("#submenu-services").hide();
  $("#mainmenu").toggle(300);
});

$("#mainmenu-services").click(function() {
  $("#submenu-services").toggle(300);
});

$(window).resize(function() {
  if(window.matchMedia('(max-width: 960px)').matches) {
    $("#mainmenu").hide();
  } else {
    $("#mainmenu").show();
  }
});

/*Anchor Tags Sprungfunktion*/
$(document).ready(function() {
  alert("test");
$("a[href^=#]").click(function(e){
        e.preventDefault();
    
    var href = $(this).attr('href').substring(1);
    $('html, body').animate({
        scrollTop:$("a[name="+href+"]").offset().top
    },'slow');

  
    //$('html,body').animate({ scrollTop: 500 }, 300);
});
});
