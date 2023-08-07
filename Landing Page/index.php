<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Landing Page</title>
</head>
<body>
      <nav class="navbar">
          <div class="navbar-container container">
              <input type="checkbox" name="" id="">
              <div class="hamburger-lines">
                  <span class="line line1"></span>
                  <span class="line line2"></span>
                  <span class="line line3"></span>
              </div>
              <ul class="menu-items">
                  <li><a href="#">Page 1</a></li>
                  <li><a href="#">Page 2</a></li>
                  <li><a href="#">Page 3</a></li>
                  <li><a href="#">Page 4</a></li>
                  <li><a href="#">Page 5</a></li>
                  <li><form class="search-bar">
                      <input class="search-bar-input" placeholder="Search">
                      <button class="search-button" type="submit">Search</button>
                    </form>
                  </li>
              </ul>
              <a href="index.php"><img src="./assets/logo-2.png" height="40px" class="logo"></a>
          </div>
      </nav>

    <div class="banner">
        <img src="./assets/IMG-1.jpg" alt="banner">
        <div class="banner-text">
            <h1><span>2012</span> Mustang GT</h1>
            <h3>Tagline</h3>
            <button class="banner-button">Learn More</button>
        </div>
    </div>

    <div class="article">
        <div class="article-container">
            <h1>Title</h1>
            <p>&nbsp</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula. Morbi dapibus, arcu ac luctus gravida, nibh metus auctor justo, eget porttitor felis augue et dui. Donec sit amet tincidunt mi. Duis id tristique nibh. Suspendisse egestas lectus at malesuada posuere. Sed in hendrerit quam, ut efficitur justo. Aliquam ac tempus lectus, sit amet rhoncus nisl. 
            </p>
            <p>&nbsp</p>
            <p>Phasellus at orci posuere, cursus enim sit amet, bibendum nulla. Proin quis ultrices purus, eu luctus felis. Quisque quis orci vehicula, ultricies magna quis, sodales sapien. Phasellus efficitur ac quam eget sagittis. 
            Integer quis dui ut erat mollis finibus vitae at leo. Nuncin risus vel turpis pellentesque maximus a ac lectus. Mauris tincidunt mi et tellus feugiat sodales. Integer et magna non nulla posuere faucibus. Nullam iaculis ante convallis tellus facilisis accumsan. Mauris sollicitudin purus eget ullamcorper auctor. Etiam consectetur quam et mattis fermentum. Duis magna urna, dapibus vel lacinia et, laoreet in neque. Donec a elementum diam. Duis et ultrices odio, sit amet ornare neque. In hac habitasse platea dictumst. Aenean nec purus eu magna auctor finibus quis ac leo. Morbi urna sapien, hendrerit sit amet lacus posuere, cursus ultrices neque. Vivamus ullamcorper elit sit amet lorem consequat fringilla.
            </P>
            <p>&nbsp</p>
            <p>Morbi vel porta nulla, sit amet suscipit mi. Etiam ligula justo, rutrum at mauris et, tincidunt facilisis ante. In lacinia ut metus et imperdiet. Pellentesque accumsan ante id erat tincidunt finibus. Integer at ornare nibh. Duis faucibus purus ut orci scelerisque commodo. Maecenas mattis porta orci. Fusce lectus orci, volutpat at nibh vitae, posuere euismod quam. Integer id scelerisque nisl. Sed eleifend et orci in ornare. Phasellus id lectus vitae elit posuere fermentum. Nam cursus aliquam nisl, id fringilla ex pulvinar ac. Fusce et mi aliquet, ullamcorper.
            </p>
        </div>
    </div>
    <h1 class="category">Categories</h1>
    <div class="carousel" data-flickity='{ "autoPlay": true }'>
      <div class="carousel-cell">
        <img src="https://images.unsplash.com/photo-1533106418989-88406c7cc8ca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="img-1">
        <div class="text">
          <h2>Title 1</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button onclick="window.location.href='content.php'" class="card-button">Learn More</button>
        </div>
      </div>
      <div class="carousel-cell">
        <img src="https://images.unsplash.com/photo-1506610654-064fbba4780c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="img-1">
        <div class="text">
          <h2>Title 2</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button onclick="window.location.href='content.php'" class="card-button">Learn More</button>
        </div>
      </div>
      <div class="carousel-cell">
        <img src="https://images.unsplash.com/photo-1502161254066-6c74afbf07aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=871&q=80" alt="img-1">
        <div class="text">
          <h2>Title 3</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button onclick="window.location.href='content.php'" class="card-button">Learn More</button>
        </div>
      </div>
      <div class="carousel-cell">
        <img src="https://images.unsplash.com/photo-1595558884516-0a2eb78964e1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="img-1">
        <div class="text">
          <h2>Title 4</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button onclick="window.location.href='content.php'" class="card-button">Learn More</button>
        </div></div>
      <div class="carousel-cell">
        <img src="https://images.unsplash.com/photo-1617083278519-75734faa66b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="img-1">
        <div class="text">
          <h2>Title 5</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button onclick="window.location.href='content.php'" class="card-button">Learn More</button>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="footer-container">
        <div class="row">
          <div class="footer-col">
            <h4>Company</h4>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Services</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Affiliate Program</a></li>

            </ul>
          </div>
          <div class="footer-col">
            <h4>Get Help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Order Status</a></li>
              <li><a href="#">Payment Options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Online Shop</h4>
            <ul>
              <li><a href="#">SUV</a></li>
              <li><a href="#">Sport</a></li>
              <li><a href="#">MPV</a></li>
              <li><a href="#">Electric</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>


<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</html>