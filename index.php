<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./resources/scss/style.css">
    <link rel="stylesheet" type="text/css" href="./resources/reset.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>CoolFarm</title>
  </head>
  <body>
    <header>

      <div class="container headerIntro">

        <div class="intro">
          <a href="#"><img src="./resources/images/coolfarm_logo_white.png"/></a>
          <h1>EMPOWERING INDOOR FARMING</h1>
          <p>With flexible, integrated, intuitive and intelligent solutions to achieve maximum efficiency, quality and profitability.</p>
          <a href="#">Become a Reseller</a>
        </div>

        <div class="menu">
          <?php include 'menu.php';?>
        </div>

      </div>

    </header>

    <div class="container">

      <div class="logo">
        <a id="inStore"></a>
        <a href="#"><img src="./resources/images/coolfarm-logo-green.png"/></a>
      </div>

      <div class="product">

        <div class="productImage">
          <img src="./resources/images/instore-min.jpeg"/>
        </div>

        <div class="productText">
          <p>Turnkey solution to grow local, fresh, nutritious and delicious food all year round with minimum waste and maximum safety! The system is automatic from A to Z, it is customizable and modular, meaning that it is highly scalable, both vertically and horizontally, providing a quick return of investment.</p>
          <a href="#">Know More</a>
        </div>

      </div>

      <div class="logo logoEnd">
        <a id="inControl"></a>
        <a href="#"><img src="./resources/images/coolfarm-logo-green.png"/></a>
      </div>

      <div class="product productReverse">

        <div class="productImage">
          <img src="./resources/images/incontrol-min.jpeg"/>
        </div>

        <div class="productText">
          <p>The all-in-one greenhouse/warehouse control system centered on plants needs! Growers are now able to monitor and control all their farms at once, anywhere and anytime, through the most intuitive dashboard ever. Crop production is optimized due to artificial intelligence and machine learning algorithms, resulting in more efficient management of resources.</p>
          <a href="#">Know More</a>
        </div>

      </div>

      <div class="logo">
        <a id="Eye"></a>
        <a href="#"><img src="./resources/images/coolfarm-logo-green.png"/></a>
      </div>

      <div class="product">

        <div class="productImage">
          <img src="./resources/images/coolfarm-eye-min.png"/>
        </div>

        <div class="productText">
          <p>The Eye is an innovative cloud based optical sensor made to capture plants' area and plant greenness, monitoring crops through time. Using the Eye, growers can make wiser and straight forward decisions to achieve the best results.</p>
          <a href="#">Know More</a>
        </div>

      </div>

      <div class="vision">
        <a id="company"></a>
        <div class="motto">
          <h1>WORKING TO DELIVER THE BEST!</h1>
        </div>

        <div class="mottoExpanded">
          <p>CoolFarm team is working day by day along with commercial greenhouses and warehouses, testing all kinds of plants and environments to deliver to growers the most advanced solutions to grow plants. Besides CoolFarm labs and the partnerships with the best Universities in Portugal, the company is working with two main test sites: 20.000 square meters of flowers inside a commercial greenhouse in Portugal and more than 500 square meters of salads, herbs and fish inside a vertical commercial aquaponics warehouse in the UK.</p>
        </div>
      </div>

    </div> <!-- container -->

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 2</div>
        <img src="./resources/images/funnycow.jpg" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">2 / 2</div>
        <img src="./resources/images/coolcow.jpg" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
    </div>
        
    <footer>
    <?php include 'footer.php';?>
      
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.0.min.js" integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="./resources/script.js"></script>
  </body>
</html>