

$(document).ready(function() {
  
  //Slide current photo to the left
  $("#currentPhoto").animate({
    left: '-=100%'
  }, 1000, function(){
    //When the sliding is done, fade the next photo in
    $('#nextPhoto').animate({
      opacity: 100
    }, 1000);
  });
  
  //Wait a bit
  
  //Change the IDs of the photos
  document.getElementById('nextPhoto').id = 'currentPhoto';
  document.getElementById('nextPhoto').style.opacity = 0;
  document.getElementById('nextPhoto').src = '../img/slider/3.jpg';
  
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

