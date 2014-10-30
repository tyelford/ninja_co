//Functions that react when the page scrolls


$(document).ready(function(){
  
  $(function(){
    $('#header').data('size', 'big');
  });
  
  //Get the position of the window
  $(window).scroll(function() {
    var height = $(window).scrollTop();
  
    //If it is not at the very top, change the header
    if(height > 0){
      
      if($('#header').data('size') == 'big'){
        
        $('#header').data('size', 'small');
        
        //Animate the header
        $('#header').stop().animate({
          height:'40px',
          top: '-=15'
        },600);
        //Animate the fake header
        $('#fakeHeader').stop().animate({
          height:'40px',
          opacity: 100,
          top: '-=9'
        }, 600);  
        //Animate the logo
        $('#saw').animate({
          opacity: 0
        }, 600);
        $('#allTextOnly').stop().animate({
          opacity: 0
        }, 300); 
        $('#allTextOnly').css('z-index',0);
        $('#saw').css('z-index',0);    
      }
      
      //Put the NinjaOnly photo out
      //$('#ninjaOnly').show(600);
      
      
      //Shrink the header text
      $('#header').css('font-size', '0.75em');
    }
    
    //Put header back to normal when it is at the very top
    else{
      if($('#header').data('size') == 'small'){
        
        $('#header').data('size', 'big');
        
        //Animate the header bar
        $('#header').stop().animate({
          height:'100px',
          top: '+=15'
        },600);
        //Animate the fake Header
        $('#fakeHeader').stop().animate({
          height:'100px',
          opacity: 0,
          top: '+=9'
        }, 600);
        //Animate the saw
        /*
        $('#saw').animate({
          opacity: 100
        }, 600);
        */
       $('#saw').fadeTo('slow', 100);
        $('#allTextOnly').stop().animate({
          opacity: 100
        }, 600);
        $('#allTextOnly').css('z-index',11);
        $('#saw').css('z-index',10);  
      }
      
      //Put the NinjaOnly photo away
      //$('#ninjaOnly').hide();
      
      //Encrease the size of the header text
      $('#header').css('font-size', '1em');
    }
  });
});

