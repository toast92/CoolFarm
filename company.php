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
          <h1></h1>
          <p></p>
        </div>

        <div class="menu">
          <?php include 'menu.php';?>
        </div>

      </div>

    </header>

    <div class = "container companyHeader">
      <h1>COMPANY</H1>
      <div class="product">

        <div class="productImage">
          <img src=""/>
        </div>

        <div class="productText companyDescription">
          <p>CoolFarm unites a highly skilled and motivated team of horticulturists and biologists; software and hardware engineers; web, mobile and product designers; marketing and business experts; to create solutions for the indoor farming needs.</p>
          <p>With horizontal, vertical and aquaponic test sites, the company is able to deliver to the growers a robust technology thought for them and focused on crops, improving the efficiency of the production and increasing the profitability of the farm.</p>
          <p>CoolFarm has been recognized worldwide as an innovative technological company with an extremely inspired brand that brings people close to global concerns and challenges regarding farm sustainability, food needs and transparency demands.</p>
        </div>

      </div>

    </div>

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
    <script type="text/javascript" src="./resources/script.js"></script>
  </body>
</html>