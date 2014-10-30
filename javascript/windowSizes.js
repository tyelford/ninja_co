
//Function to get the width of the viewport
function getScreenWidth(){
  return Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
}

//Function to get the height of the viewport
function getScreenHeight(){
  return Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
}

function autoScrollToSection(section){
  $("html, body").animate({ scrollTop: $('#' + section).offset().top - 30 }, 1000);
}
function goToTop(){
  $('html, body').animate({ scrollTop: 0, scrollLeft: 0}, 1000);
}

/*
function goToAbout(){
  /*
   var h = getScreenHeight();
   $('html, body').animate({
    scrollTop: h - 30,
    scrollLeft: 0
  }, 1000);
  
}

function goToOurWork(){
  $("html, body").animate({ scrollTop: $('#ourWorkSection').offset().top }, 1000);
}

function goToNews(){
  /*
   var h = getScreenHeight();
   $('html, body').animate({
    scrollTop: 3 * h - 30,
    scrollLeft: 0
  }, 1000);
  
}

function goToContact(){
  /*
   var h = getScreenHeight();
   $('html, body').animate({
    scrollTop: 4 * h - 30,
    scrollLeft: 0
  }, 1000);
  
}


*/


$(document).ready(function() {
/*  
  //Find the size of the viewPort
  var w = getScreenWidth();
  var h = getScreenHeight();
  */
  //Set top image to size of opening screen
  //$('#topImage').css('width', w);
  $('#topImage').css('height', getScreenHeight());
  
  $('#logo').css('left', (getScreenWidth() / 2) - (213 / 2));
  /*
  //Set the about section size
  $('#aboutSection').css('top', h + "px");
  $('#aboutSection').css('width', w);
  $('#aboutSection').css('height', h);
  
  //Set the our work section size
  $('#ourWorkSection').css('top', (2 * h) + "px");
  $('#ourWorkSection').css('width', w);
  $('#ourWorkSection').css('height', h);
  
  //Set the news section size
  $('#newsSection').css('top', (3 * h) + "px");
  $('#newsSection').css('width', w);
  $('#newsSection').css('height', h);
  
  //Set the contact section size
  
  $('#contactSection').css('top', (4 * h) + "px");
  //$('#contactSection').css('width', w);
  //$('#contactSection').css('height', h - 30);
*/  
});

