<?php  
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Green Horizzon</title>
    <link rel="stylesheet" href="home.css" />
  
  </head>
  <body>
    <header class="navbar">
      <nav id="navbar">
        <div id="logo">
          <a href="#"><img src="images/logo1.png" /></a>
          <a href="#"><p>GREEN HORIZZON</p></a>
          <!-- <img src="logo1.png" alt="green_horizzon.com">
            <P></P> -->
        </div>
        <!-- <P>REEN HORIZZON</P> -->
        <div class="search-box">
          <input type="text" placeholder="Search products..." />
          <button type="submit">Search</button>
        </div>

        <div class="profile_cart">
          <a href="Login.php"><img class="img_profile" src="images/profile3.jpeg" /></a>
          <a href="Wishlist.php"><img class="img_profile" src="images/heart.jpeg" /></a>

          <?php
            if(isset($_SESSION['cart'])){
              $count = count($_SESSION['cart']);
            }
           ?>
          <a href="Cart.php" class="cart-link" > <img class="img_profile" id="image_profile_plus" src="images/cart.jpeg">
          <?php
          if($count == 0){
        echo "<span class='green-text'>+</span>"; 
          }else{
        echo "<span class='green-text'>$count</span>"; 
            }
           ?>

          </a>
        
        </div>
      </nav>
    </header>
  <!-- slides of image -->
    <div class="slider">
            <div class="slides">
                <img src="Images/slide1.jpg" alt="Slide 1">
                <img src="Images/slide2.jpg" alt="Slide 2">
                <!-- <img src="Images/slide3.jpg" alt="Slide 3"> -->
                <img src="Images/slide4.jpg" alt="Slide 4">
                <img src="Images/slide5.jpg" alt="Slide 5">
            </div>
            <button class="prev" onclick="prevSlide()">Previous</button>
            <button class="next" onclick="nextSlide()">Next</button>
          </div>

      <!-- slides of image end -->

    <div>
      <div class="container">


        <!-- product1 -->

        <div class="box">
    <form action="manage_cart.php" method="POST" >
        <img class="img_product" src="images/p1.jpg" alt="Description of the image" />
        <p>Sunscreen</p>
        <p>Price: Rs 450 </p>
         
        <button class="button" type="submit" name="add_to_cart"  > Add to Cart</button>
        <input type="hidden" name="item_name" value="Sunscreen">
        <input type="hidden" name="price" value="450">
    </form>
    <form action="manage_wishlist.php" method="POST" >
        <button class="button" type="submit" name="add_to_wishlist">
           <!-- <img src="heart2.jpeg" alt="wishlist.com" class="heart_wishlist" > -->
          Add To Wishlist </button>
        <input type="hidden" name="item_name" value="Sunscreen">
        <input type="hidden" name="price" value="450">
    </form>
</div>



        <!-- product2 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p2.jpg"
            alt="Description of the image" />
          <p>Bottles</p>
          <p>Price: Rs 239 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Bottles" >
          <input type="hidden" name="price" value="239" >
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Bottles">
        <input type="hidden" name="price" value="239">
    </form>
        </div>

        <!-- product3 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p3.jpg"
            alt="Description of the image" />
          <p>Comb</p>
          <p>Price: Rs 79 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Comb" >
          <input type="hidden" name="price" value="79" >
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Comb">
        <input type="hidden" name="price" value="79">
    </form>
        </div>

        <!-- product4 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p4.jpg"
            alt="Description of the image" />
          <p>Hair serum</p>
          <p>Price: Rs 459 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Sunscreen" >
          <input type="hidden" name="price" value="459" >
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Hair Serum">
        <input type="hidden" name="price" value="459">
    </form>
        </div>

        <!-- product5 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p5.jpg"
            alt="Description of the image" />
          <p>Face Serum</p>
          <p>Price: Rs 499 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Sunscreen" >
          <input type="hidden" name="price" value="499" >
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Sunscreen">
        <input type="hidden" name="price" value="499">
    </form>
        </div>

        <!-- product6 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p6.jpg"
            alt="Description of the image" />
          <p>Face Cream</p>
          <p>Price: Rs 250 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Face Cream" >
          <input type="hidden" name="price" value="250" >
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Face Cream">
        <input type="hidden" name="price" value="250">
    </form>
        </div>

        <!-- product7 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p7.jpeg"
            alt="Description of the image" />
          <p>Wooden Toothbrush</p>
          <p>Price: Rs 50 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Wooden Toothbrush" >
          <input type="hidden" name="price" value="50" >
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Wooden Toothbrush">
        <input type="hidden" name="price" value="50">
        </form>
        </div>

        <!-- product8 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p8.jpg"
            alt="Description of the image" />
          <p>Hair Oil</p>
          <p>Price: Rs 399 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Hair oil" >
          <input type="hidden" name="price" value="399" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Hair oil">
        <input type="hidden" name="price" value="399">
        </form>
        </div>

        <!-- product9 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p9.jpg"
            alt="Description of the image" />
          <p>Soap</p>
          <p>Price: Rs 80 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Soap" >
          <input type="hidden" name="price" value="80" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Soap">
        <input type="hidden" name="price" value="80">
        </form>
        </div>

        <!-- product10 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p10.jpg"
            alt="Description of the image" />
          <p>Hair Serum</p>
          <p>Price: Rs 349 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Hair Serum" >
          <input type="hidden" name="price" value="349" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Hair Serum">
        <input type="hidden" name="price" value="349">
        </form>
        </div>

        <!-- product11 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p11.jpg"
            alt="Description of the image" />
          <p>Body Lotion</p>
          <p>Price: Rs 470 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Body Lotion" >
          <input type="hidden" name="price" value="470" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Body Lotion">
        <input type="hidden" name="price" value="470">
        </form>
        </div>

        <!-- product12 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p12.jpg"
            alt="Description of the image" />
          <p>Shampoo</p>
          <p>Price: Rs 650 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Shampoo" >
          <input type="hidden" name="price" value="650" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Shampoo">
        <input type="hidden" name="price" value="650">
        </form>
        </div>

        <!-- product13 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p13.jpg"
            alt="Description of the image" />
          <p>Sunscreen</p>
          <p>Price: Rs 369 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Sunscreen" >
          <input type="hidden" name="price" value="369" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Sunscreen">
        <input type="hidden" name="price" value="369">
        </form>
        </div>

        <!-- product14 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p14.jpg"
            alt="Description of the image" />
          <p>Bath Brush</p>
          <p>Price: Rs 129 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Bath Brush" >
          <input type="hidden" name="price" value="129" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Bath Brush">
        <input type="hidden" name="price" value="129">
        </form>
        </div>

        <!-- product15 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p15.jpg"
            alt="Description of the image" />
          <p>Dustbin</p>
          <p>Price: Rs 80 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Dustbin" >
          <input type="hidden" name="price" value="80" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Dustbin">
        <input type="hidden" name="price" value="80">
        </form>
        </div>

        <!-- product16 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p16.jpg"
            alt="Description of the image" />
          <p>Shaving Brush</p>
          <p>Price: Rs 100</p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Shaving Brush" >
          <input type="hidden" name="price" value="100" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Shaving Brush">
        <input type="hidden" name="price" value="100">
        </form>
        </div>

        <!-- product17 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p17.jpg"
            alt="Description of the image" />
          <p>Body Wash</p>
          <p>Price: Rs 450 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Body Wash" >
          <input type="hidden" name="price" value="450" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Body Wash">
        <input type="hidden" name="price" value="450">
        </form>
        </div>

        <!-- product18 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p18.jpeg"
            alt="Description of the image" />
          <p>Face wash</p>
          <p>Price: Rs 350 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Face wash" >
          <input type="hidden" name="price" value="350" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Face wash">
        <input type="hidden" name="price" value="350">
        </form>
        </div>

        <!-- product19 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p19.jpeg"
            alt="Description of the image" />
          <p>Aloe vera Gel</p>
          <p>Price: Rs 460 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Aloe vera Gel" >
          <input type="hidden" name="price" value="460" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Aloe vera Gel">
        <input type="hidden" name="price" value="460">
        </form>
        </div>

        <!-- product20 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p20.jpeg"
            alt="Description of the image" />
          <p>Toothpaste</p>
          <p>Price: Rs 150 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Toothpaste" >
          <input type="hidden" name="price" value="150" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Toothpaste">
        <input type="hidden" name="price" value="150">
        </form>
        </div>

        <!-- product21 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p21.jpeg"
            alt="Description of the image" />
          <p>Lip Balm</p>
          <p>Price: Rs 60 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Lip Balm" >
          <input type="hidden" name="price" value="60" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Lip Balm">
        <input type="hidden" name="price" value="60">
        </form>
        </div>

        <!-- product22 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p22.jpeg"
            alt="Description of the image" />
          <p>Face Scrub</p>
          <p>Price: Rs 380 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Face Scrub" >
          <input type="hidden" name="price" value="380" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Face Scrub">
        <input type="hidden" name="price" value="380">
        </form>
        </div>

        <!-- product23 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p23.jpeg"
            alt="Description of the image" />
          <p>Hair Brush</p>
          <p>Price: Rs 150 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Hair Brush" >
          <input type="hidden" name="price" value="150" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Hair Brush">
        <input type="hidden" name="price" value="150">
        </form>
        </div>

        <!-- product24 -->
        <div class="box">
          <form action="manage_cart.php" method="POST">
          <img
            class="img_product" src="images/p24.jpeg"
            alt="Description of the image" />
          <p>Lip serum</p>
          <p>Price: Rs 350 </p>
          <button type="submit" name="add_to_cart" class="btn-cart" >Add to Cart</button>
          <input type="hidden" name="item_name" value="Lip serum" >
          <input type="hidden" name="price" value="350" >
          </form>
          </form>
          <form action="manage_wishlist.php" method="POST">
        <button type="submit" name="add_to_wishlist" >Add to Wishlist</button>
        <input type="hidden" name="item_name" value="Lip serum">
        <input type="hidden" name="price" value="350">
        </form>

        </div>
      
    </div>

    <footer>
      <p>Email: <a href="mailto:your@email.com">green_horizzon@gmail.com</a></p>
      <div class="social-links">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
        <a href="#">LinkedIn</a>
      </div>
      <div class="copyright">&copy; 2024 Your Green Horizzon</div>
    </footer>
   <script  src="home.js" >  </script>
  </body>
</html>
