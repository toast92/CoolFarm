<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./resources/scss/style.css">
    <link rel="stylesheet" type="text/css" href="./resources/reset.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
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

    <div class="container">
        <div class="contacts">
            <h1>CONTACTS</h1>
            <ul>
                <a href=#><li>contact@cool-farm.com</li></a>
                <a href=#><li>+351 916 496 104 (EU)</li></a>
                <a href=#><li>+351 916 467 882 (EU)</li></a>
            </ul>
        </div>
        
    <div class="product productContact">

        <div class="productImage contactImage">
            <img src="./resources/images/coolfarm-tn.jpg"/>
        </div>

        <div class="productText contactText">
            <h3>TORRES NOVAS</h3>
            <h4>Headquarters & Labs</h4>
            <ul>
                <li>CoolFarm S.A.</li>
                <li>Farben Business Center</li>
                <li>Zona Industrial - Casal das Mós</li>
                <li>2350-483 Torres Novas, Portugal</li>
            </ul>
            <span>GPS: <a href="#">39.462203, -8.546321</a></span>
        </div>

    </div>

    <div class="product contactProductReverse">

      <div class="productText contactText">
          <h3>COIMBRA</h3>
          <h4>Office</h4>
          <ul>
              <li>CoolFarm S.A.</li>
              <li>Instituto Pedro Nunes</li>
              <li>Rua Pedro Nunes, Bloco C, Sala 2.23</li>
              <li>3030-199 Coimbra, Portugal</li>
          </ul>
          <span>GPS: <a href="#">39.462203, -8.546321</a></span>
      </div>

      <div class="productImage contactImage contactReverse">
          <img src="./resources/images/coolfarm-coimbra.jpg"/>
      </div>

    </div>

    <div class="product productContact">

      <div class="productImage contactImage">
          <img src="./resources/images/coolfarm-lx.jpg"/>
      </div>

      <div class="productText contactText">
          <h3>LISBON</h3>
          <h4>Business Meetings</h4>
          <ul>
              <li>CoolFarm S.A.</li>
              <li>Rua Mártires de Timor, 30 Quinta Figo Maduro</li>
              <li>2685-331 Prior Velho, Lisbon - Portugal</li>
          </ul>
          <span>GPS: <a href="#">39.462203, -8.546321</a></span>
      </div>

    </div>


    </div>
    <footer class="newsFooter">
            <?php include 'footer.php';?>
    </footer>

  </body>
</html>