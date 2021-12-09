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
            <li><a href="products_page.php">Man</a></li>
            <li><a href="products_page.php">Women</a></li>
            <li><a href="products_page.php">Kids</a></li>
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


<section class = "product_Content">
    <div class="image">
        <img src="images/women2.jpg" alt="">
    </div>
    <div class="product_details">
        <div class="title">
            <h3>Regular Print Heart Casual</h3>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
        </div>
        <div class="price">
            <p>39.21 $</p>
        </div>
        <div class="color">
            <h3>COLOR : </h3>
            <input type='checkbox' name="color1"/>
            <input type='checkbox' name="color2"/>
            <input type='checkbox' name="color3"/>
            <input type='checkbox' name="color4"/>
        </div>
        <div class="size">
            <h3>SIZE : </h3>
                <input type="radio" name="size" class="size" id="small" >
                <label for="small">Small</label>
                <input type="radio" name="size" class="size" id="medium" >
                <label for="medium">Medium</label>
                <input type="radio" name="size" class="size" id="large" >
                <label for="large">Large</label>
        </div>
        <div class="quantity">
            <h3>QUANTITY : </h3>
            <form id='myform' method='POST' class='quantity' action='#'>
                <input type='button' value='-' class='qtyminus minus' field='quantity' />
                <input type='text' name='quantity' value='0' class='qty' />
                <input type='button' value='+' class='qtyplus plus' field='quantity' />
            </form>       
        </div>
        <div class="button">
            <button>Add To Cart</button>
        </div>
    </div>
    
</section>
<section class="commentaires">
    <h4>Customer Reviews : </h4>
    <div class="commentaire">
        <div class="commentaire_info">
            <h3>Luci</h3>
            <p>15/06/2021</p>
        </div>
        <div class="commentaire_details">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>Best dress In The World</p>
        </div>
    </div>
    <div class="commentaire">
        <div class="commentaire_info">
            <h3>Kevin</h3>
            <p>15/06/2021</p>
        </div>
        <div class="commentaire_details">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>I am in love with this piece</p>
        </div>
    </div>
    <div class="commentaire">
        <div class="commentaire_info">
            <h3>Alber</h3>
            <p>15/06/2021</p>
        </div>
        <div class="commentaire_details">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>it's a great dress that i never had</p>
        </div>
    </div>
</section>

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