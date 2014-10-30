
//Sleep Function
function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

$(document).ready(function() {
  
  //Wait a second after the photo loads
  
  
  //Change the IDs of the photos
  document.getElementById('currentPhoto').id = 'lastPhoto';
  document.getElementById('nextPhoto').id = 'currentPhoto';
  document.getElementById('tmpPhoto').id = 'nextPhoto';
  //document.getElementById('currentPhoto').style.opacity = 0;
  document.getElementById('nextPhoto').src = '../img/slider/3.jpg';

  //Wait an additional 3 seonds - 4 seconds total
  
  //Slide current photo to the left
  $("#lastPhoto").animate({
    left: '-=100%'
  }, 1000, function(){
    //When the sliding is done, fade the next photo in
    $('#currentPhoto').animate({
      opacity: 100
    }, 1000);
  });
  
  
  
  //Wait a bit more
  //Slide in next Photos
});

/* 
 * The Plan for the slide show
 * 
 * Page loads with an image
 * Wait x time
 * Add new image to page
 * Slide first image to left and at same time fade second image in from back
 */

