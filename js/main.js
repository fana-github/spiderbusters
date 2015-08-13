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
        if($('#mainmenu:visible').length != 0)
        {
          $("#mainmenu").toggle(300);
        }
      }
      
  });
  
  /*Servuces-Choose: Zur Schnellauswahl der Geräte*/
  $(".services-choose-box-start").click(function(e){
      e.preventDefault();
      $(".services-choose-box-models").toggle(300);
      return false;
  });
  
  /*Services: Img-Switch bei Click auf Table-Einträge*/
  $(".services-description table tr").click(function(e){
      e.preventDefault();
      var id = this.id;
      var idlength = id.length - 1;
      //Only class name by cutting the element number
      var tmp_name = id.substring(0,idlength);
      var classname = "."+tmp_name;
      
      //Remove "Active Element" marker in table view
      $(this).siblings().removeClass("active");
      //Hide currently shown image
      $(classname).removeClass("active");
      $(classname).hide();
    
      // Animation complete.
      //Highlight clickey entry in table view (-> new "Active Element")
      $(this).addClass("active");
      //Show image of clicked entry in the table view (by id number: -> e.g. 0 in 'services-iphone4-entry0')
      var entryindex = id.substring(idlength);
      $(classname).siblings(classname).eq(entryindex).fadeIn(1000).addClass("active");
  });
  
});
