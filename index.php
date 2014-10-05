<!DOCTYPE html>

<html>
  
  <head>
    
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, user-scalable=no">-->
    
    <!-- Google Web Font - Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <!-- jQuery from Google CDN -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <script src='javascript/jquery211.js'></script>
    
    <!-- Style Sheets -->
    <link href='css/main.css' rel='stylesheet' />
    
    <!-- JavaScripts -->
    <script src='javascript/windowSizes.js'></script>
    <script src='javascript/scroll.js'></script>
    
    
 
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-33791842-3', 'auto');
	  ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>
    
  </head>
  
  <body>
    
    <div id='wrapper'>
    
      <div id='logo'>
        <img id='saw' src='img/Saw_only.png' />
        <img id='ninja' src='img/Saw_ninja.png' />
      </div>
      
      <div id='fakeHeader'></div>
      
      <div id='header'>
        <ul id='leftList'>
          <li onclick='goToAbout();'>About</li>
          <li onclick='goToOurWork();'>Our Work</li>
        </ul>
        <ul id='rightList'>
          <li onclick='goToNews();'>News</li>
          <li onclick='goToContact();'>Contact</li>
        </ul>
      </div>
      
      <div id='topImage' >
        <!-- TO DO get image from Jake for here -->
      </div>
      
      <div id='aboutSection' >
        <h1 align='center'>About</h1>
        
        <div align='center' id='jakeAbout'>
          <div id='jakeAboutPicture'>
          </div>
          <div id='jakeAboutTitle'>  <!--<img src='img/jakePhoto.png' />-->
            <h2>Jake Elford</h2>
           </div>
          
          
        </div>
        
        <div align='center' id='nickAbout'>
          <div id='nickAboutPicture'>
            <!--<img src='img/jakePhoto.png' />-->
          </div>
          <div id='nickAboutTitle'>
            <h2>Nick Switzer</h2>
          </div>
        </div>
      </div> <!--End of About Section -->
      
      <div id='ourWorkSection' >
        <h1 align='center'>Our Work</h1>
        
        <div id='workSlideShow'>
          
        </div>
      </div>
      
      <div id='newsSection' >
        <h1>News</h1>
      </div>
      
      <div id='contactSection' >
        <h1 align='center'>Send us a Message</h1>
        <div id='contactForm'>
          <form>
            <label for='name'>Full Name:</label><br />
            <input type='text' id='name' /><br />
            <label for='phone'>Phone Number:</label><br />
            <input type='text' id='phone'/><br />
            <label for='email'>Email:</label><br />
            <input type='text' id='email'/><br />
            <label for='message'>Message:</label><br />
            <textarea id='message'></textarea><br />
            <label for='drawings'>Send us a plan</label><br />
            <input type='file' accept="image/*;capture=camera" /><br />
            <input type='submit' id='submit' value='Submit' />
          </form>
        </div>
      </div> <!-- END of Contact Section -->
      
    </div> <!-- END wrapper -->
  </body>
  
</html>