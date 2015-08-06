$(document).ready(function() {

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
  $("a[href^=#]").click(function(e){
      e.preventDefault();
      var href = $(this).attr('href').substring(1);
      $('html, body').animate({
          scrollTop:$("div[id="+href+"]").offset().top
      },'slow');
    
      //Nach dem Sprung soll das Menü geschlossen werden
      if($('#trigger:visible').length != 0)
      {
        //mobile Ansicht => Komplettes Menü ausblenden
        $("#mainmenu").toggle(300);
      }
      
  });
  
    /*Services: Img-Switch bei Click auf Table-Einträge*/
  $(".services-description table tr").click(function(e){
      e.preventDefault();
      alert(this.id);
      var tmp_class = $(this).parent().attr("class");
      alert(tmp_class);
      alert("."+tmp_class+".active");
      alert(".services-img ."+tmp_class);
      $("."+tmp_class+".active").hide(300);
      
      $(".services-img ."+tmp_class).show(300);
  });
  
});
