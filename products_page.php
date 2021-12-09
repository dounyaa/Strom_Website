   
<?php
    $products = array();
    // $products[0] = array("title" => "Regular Print Heart Casual", "price" => "39.21 $", "image" => "images/women1.jpg");
    // $products[1] = array("title" => "Faux Fur Fashion Wrap", "price" => "30.99 $", "image" => "images/women2.jpg");
    // $products[2] = array("title" => "Faux Fur Wedding Shawl", "price" => "19.21 $", "image" => "images/women3.jpg");
    // $products[3] = array("title" => "One Shoulder Sleeveles Dresses", "price" => "19.21 $", "image" => "images/women4.jpg");
    // $products[4] = array("title" => "Little Black Party Dresses", "price" => "25.21 $", "image" => "images/women5.jpg");
    // $products[5] = array("title" => "Sleeves Casual Skater Dresses", "price" => "9.21 $", "image" => "images/women6.jpg");
    // $products[6] = array("title" => "Casual Long Sleeves", "price" => "29.21 $", "image" => "images/women7.jpg");
    // $products[7] = array("title" => "Regular Fitted Sequins ", "price" => "19.29 $", "image" => "images/women8.jpg");
    // $products[8] = array("title" => "Moonstone skirt 12864 ", "price" => "19.29 $", "image" => "images/women9.jpg");
    // $products[9] = array("title" => "Nola t-n 7355 ", "price" => "79.29 $", "image" => "images/women10.jpg");
    // $products[10] = array("title" => "Falcon coat 11104 ", "price" => "49.29 $", "image" => "images/women11.jpg");
    // $products[11] = array("title" => "Jaci turtleneck 12757 ", "price" => "129.29 $", "image" => "images/women12.jpg");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = 'STROM';
   // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   if(!empty($_GET["search"]))
   {
        $search = $_GET["search"];
        // Recherche
        // Filter by query string $_GET["search"]
        $sql = "SELECT * FROM `product` WHERE title LIKE \"%" . $search . "%\"";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) 
        {

        // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                array_push($products, array("title" => $row["title"], "price" => $row["price"], "image" => $row["pic"]));
            }
        }

   }

    else if(!empty($_GET['select'])) 
    {
        $selected = $_GET['select'];
        $sql = "SELECT * FROM `product` ORDER BY price " . $selected;

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) 
        {

        // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                array_push($products, array("title" => $row["title"], "price" => $row["price"], "image" => $row["pic"]));
            }
        }
    }   
    else if (!empty($_GET["filterMin"]))
        {
            $filterMin = $_GET["filterMin"];
            $filterMax = $_GET["filterMax"];

            $sql = "SELECT * FROM `product` WHERE price BeTWeeN ". $filterMin ." and ". $filterMax ."";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) 
            {

            // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    array_push($products, array("title" => $row["title"], "price" => $row["price"], "image" => $row["pic"]));
                }
            }
        }
   else
   {
        // Sans parametre
        // All product
        if(empty($_GET["query"]))
        {
            $sql = "SELECT * FROM `product`";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0) 
            {

            // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    array_push($products, array("title" => $row["title"], "price" => $row["price"], "image" => $row["pic"]));
                }
            }
        }
        // Categorie
        // By category $_GET["query"]
        else
        {
            $query = $_GET["query"];
            $sql = "SELECT product.title, product.price, product.pic FROM `product`, `category` WHERE product.categoryId = category.id AND category.title = '". $query ."'";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0) 
            {

            // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    array_push($products, array("title" => $row["title"], "price" => $row["price"], "image" => $row["pic"]));
                }
            }
        }
   }
?>
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
        <form>
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

<section class = "Content">
    <div class="filtres">
        <div class="select">
            <form action="">
                <label for="select"><h3>Sorted by</h3></label>
                <select name="select" id="sort-select" onchange="this.form.submit()">
                    <option></option>
                    <option value="ASC" selected = <?php ($selected ="ASC") ? "SELECTED" : "" ?>>Price : Low to High</option>
                    <option value="DESC" selected = <?php ($selected ="DESC") ? "SELECTED" : "" ?>>Price : High to Low</option>
                </select>

            </form>
        </div>
        <div class="filtre">
            <form action="">
                <h3>Price</h3>
                <input name="filterMin" type="number" placeholder="Min" value="<?php echo ($filterMin)?>">
                <input name="filterMax" type="number" placeholder="max"value="<?php echo ($filterMax)?>">
                <button type="submit">Apply</button>
            </form>
        </div>
    </div>

    <div class="products">
    <?php
        
        for($i=0; $i< count($products); $i++) 
        {
            
            echo "<div class='product'>
                <div class='product_container'>
                    <div class='product_details'>
                        <img src='" .  $products[$i]["image"] . "' alt='photo'>
                        <p>" .  $products[$i]["title"] . "</p>
                        <h3>" .  $products[$i]["price"] . "</h3>
                    </div>
                    <div class='view_product'>
                        <button>View Product</button>
                    </div>
                </div>
            </div>";
        }
    ?>

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