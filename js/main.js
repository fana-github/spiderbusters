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
      var id = this.id;
      var idlength = id.length - 1;
      //Only class name by cutting the element number
      var tmp_name = id.substring(0,idlength);
      var classname = "."+tmp_name;
      //Hide element
      $(classname).removeClass("active");
      $(classname).fadeOut(500, function() {
        // Animation complete.
        //Show element by number of entry
        var entryindex = id.substring(idlength);
        $(classname).siblings(classname).eq(entryindex).fadeIn(500).addClass("active");
      });
  });
  
});
