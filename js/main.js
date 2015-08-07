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
      alert(this.siblings());
      this.siblings().css( "color", "yellow" );
      //var element_to_hide = ".services-img."+this.className+".active";
      //alert(element_to_hide);
      //$(element_to_hide).removeClass("active");
      //$(element_to_hide).hide(300);
      //alert(element_index);
      //var element_to_show = ".services-img."+this.className+":nth-child("+element.index+")";
      //alert(element_to_hide);
      //alert(element_to_show);

      //$(element_to_show).addClass("active");
      //$(element_to_show).show(300);
  });
  
});
