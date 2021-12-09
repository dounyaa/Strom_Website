<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>


<header>
    <nav class="nav_bar">
        <ul>
            <li><a href="products_page.php?query=man" class="<?php echo($query == "man" ? "active" : "")  ?>">Man</a></li>
            <li><a href="products_page.php?query=women"class="<?php echo($query == "women" ? "active" : "")  ?>">Women</a></li>
            <li><a href="products_page.php?query=kids"class="<?php echo($query == "kids" ? "active" : "")  ?>">Kids</a></li>
        </ul>
    </nav>
    <div class="logo">
        <a href="home_page.php"><img src="images/logo.jpg" alt="Logo"></a>
    </div>
    
    
    <div class="search_bar">
        <form action="#">
            <input type="text" placeholder="Search.." name="search">
            <i class="fa fa-search"></i>
        </form>
    </div>
    <div class="cart_bar">
        <form action="#">
            <i class="fa fa-shopping-cart"></i>
        </form>
    </div>  
</header>

<body>
    <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="images/slide1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/slide3.jpg" style="width:100%">
          </div>
        <div class="mySlides fade">
          <img src="images/slide2.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)"></a>
        <a class="next" onclick="plusSlides(1)"></a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
<section class="category">
    <div class="title">
        <p>
            Our Category :
        </p>
    </div>
    <div class="categories">
        <div class="categorie">
            <a href="#"><img src="images/women_category.jpg" alt=""></a>
            <button onclick="document.location='women_page.php'">WEMEN</button>
        </div>
        <div class="categorie">
            <img src="images/men_category.jpg" alt="">
            <button onclick="document.location='men_page.php'">MEN</button>
        </div>
        <div class="categorie">
            <img src="images/kids_category.jpg" alt="">
            <button onclick="document.location='kids_page.php'">KIDS</button>
        </div>
        
    </div>
    </section>
    <section class="services">
        <div class="service">
            <i class="fa fa-truck"></i>
            <p class="service-details">Fast shipping</p>
        </div>
        <div class="service">
            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
            <p class="service-details">Secured piement</p>
        </div>
        <div class="service">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p class="service-details">Join Us</p>
        </div>
    </section>
</body>


<footer id="footer">
        <div class="contacts">
            <div class="desc">
                <h3>
                    <i class="fas fa-phone"></i> Phone
                </h3>
                <p>+(33) 6 213 549 27</p> 
            </div>
            <div class="desc">
                <h3>
                    <i class="fas fa-envelope-open-text"></i> Email
                </h3>
                <p>strom.contact@gmail.com</p> 
                
            </div>
            <div class="desc">
                <h3>
                    <i class="fas fa-map-marker-alt"></i> Address
                </h3>
                <p>543 TN, doula street <br> NY, New York</p> 
            </div>
        </div>
        <div class="socialMedia">
            <a href="#footer">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#footer">
                <i class="fab fa-twitter-square"></i>
            </a>
            <a href="#footer">
                <i class="fab fa-youtube-square"></i>
            </a>
    </footer>
<script src="script.js"></script>
</html>