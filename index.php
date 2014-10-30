<!DOCTYPE html>

<html>
  
  <head>
    
    <title>Ninja Construction Inc</title>
    
    <meta charset="utf-8">
    <meta name='description' content='With over 15 years of construction experience, Ninja Construction Inc. is prepared for all of your building needs.  We specialize in residential homes, particularly single family and multi-family new builds.'>
    <meta name='keywords' content='builders, Calgary, Alberta, Ninja, Construction, experience, framing' >
      
    <!--<meta name="viewport" content="width=device-width, user-scalable=no">-->
    
    <!-- Google Web Font - Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <!-- jQuery from Google CDN -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--<script src='javascript/jquery211.js'></script>-->
    
    <!-- Style Sheets -->
    <link href='css/main.css' rel='stylesheet' />
    
    <!-- JavaScripts -->
    <script src='javascript/windowSizes.js'></script>
    <script src='javascript/scroll.js'></script>
    
    <!--bxslider-->
    <script src='bxslider/jquery.bxslider.min.js'></script>
    <link href='bxslider/jquery.bxslider.css' rel='stylesheet' />
    
 
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
        <img id='saw' src='img/logo/SawOnly_small.png' />
        <img id='allTextOnly' src='img/logo/AllTextOnly_small.png' />
      </div>
      
      <div id='fakeHeader'>
      </div>
      
      <div align='center' id='ninjaOnly'>
        <img src='img/logo/NinjaOnly_small.png' onclick='goToTop();'/>
      </div>
      
      <div id='header'>
        <ul id='leftList'>
          <li onclick='autoScrollToSection("aboutSection");'>About</li>
          <li onclick='autoScrollToSection("ourWorkSection");'>Our Work</li>
        </ul>
        <ul id='rightList'>
          <li onclick='autoScrollToSection("newsSection");'>News</li>
          <li onclick='autoScrollToSection("contactSection");'>Contact</li>
        </ul>
      </div>
      
      
      <div id='topImage' >
        <!--<img src='img/topImage2.jpg' alt='Ninja Construction Inc' />-->
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
            <h2>Nicholas Switzer</h2>
          </div>
        </div>
        
        <div id='aboutText'>
          <p>Our goal is simple.  We strive to build homes for our clients, not houses.  Our finished projects leave our clients happy and relaxed knowing they have a home that will create memories for a lifetime.  We take a lot of pride in our craftsmanship as well as our employees.  This helps us to ensure the proper care, knowledge and prestige is placed into each of our projects.</p>
        </div>
      </div> <!--End of About Section -->
      
      <div id='ourWorkSection' >
        <h1 align='center'>Our Work</h1>
        
        <div class='ourWorkText'>
          <p>With so many options and so much competition available these days we know we have to stand high amongst the rest.  We’ve achieved this goal by maintaining our efficiency and integrity without compromising our quality.</p>
        </div>
        
        <div id='workSlideShow'>
          <ul class='bxslider'>
            <li><img src='img/slider/1.jpg' /></li>
            <li><img src='img/slider/2.jpg' /></li>
            <li><img src='img/slider/3.jpg' /></li>
            <li><img src='img/slider/4.jpg' /></li>
          </ul>
        </div>
        <script>
          $(document).ready(function(){
            $('.bxslider').bxSlider({
              auto: true,
              pager: false
            });
          });
        </script>
        
        <div class='ourWorkText' >
          <p>As our company continues to prosper and expand, our standards will never diminish.  Whether it’s a quaint bungalow or an incredible estate home, we will constantly retain our level of craftsmanship and work ethic while always searching for opportunities for improvement.</p>
        </div>
        
    </div> <!--End Our Work Section-->
      
      <div id='newsSection' >
        <h1>News</h1>
      </div>
      
      <div id='contactSection' >
        <h1 align='center'>Send us a Message</h1>
        <div id='contactForm'>
          <form method='post' action='index.php'>
            <?php include "inc/processForm.php"; ?>
            <div id='leftForm'>
              <label for='name'>Name</label><br />
              <input type='text' id='name' name='name'/><br />
              <label for='phone'>Number</label><br />
              <input type='text' id='phone' name='phone'/><br />
              <label for='email'>Email</label><br />
              <input type='text' id='email' name='email'/>
            </div>
            <div id='rightForm'>
              <label for='message'>Message</label><br />
              <textarea id='message' name='message'></textarea>
            </div>
            <div id='bottomForm'>
              <label for='drawings'>Send us a plan</label><br />
              <input type='file' accept='image/*,application/pdf;capture=camera' name='plans' /><br />
              <input type='submit' id='submit' value='Submit It' style='margin-top: 10px;' />
            </div>
          </form>
        </div>
        
        <div id='contactText'>
          <p>While contemplating the company for your next project, consider us.  We won’t just build your future home - we’ll help you create it.</p>
          <p>“The whole difference between construction and creation is exactly this: that a thing constructed can only be loved after it is constructed; but a thing created is loved before it exists.”<br><span style='margin-left:50px'>-Charles Dickens</span></p>
        </div>
      </div> <!-- END of Contact Section -->  
      
    </div> <!-- END wrapper -->
  </body>
  
</html>