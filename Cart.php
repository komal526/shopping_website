<?php  
session_start();
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<!-- css starts here -->

<style>
    body{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    /* background-color: green; */
}

.top-right-button {
  position: fixed;
  height: 40px;
  width: 90px;
  top: 20px; /* Adjust the top position as needed */
  right: 20px; /* Adjust the right position as needed */
  padding: 10px 20px;
  background-color: #319801;
  color: black;
  font-weight: bolder;
  border: none;
  border-radius: 5px;
  z-index: 999; /* Ensure the button is above other content */
}
.top-right-button:hover{
    background-color: #277c00;
}
.top-right-button a{
    text-decoration: none;
    color: black;
  font-weight: bolder;
}

.mycart{
   margin-top: 80px;
   margin-bottom: 30px;
   font-size: 2.5rem;
   font-weight: bold;
   color: #277c00;
}


.total_cart{
    text-align: center;
}
    /* Styles for container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: #70e000;
}

/* Styles for heading */
h1 {
    text-align: center;
    margin-bottom: 20px;
}

/* Styles for table */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: whitesmoke;
}

.table th,
.table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* Styles for input number */
input[type="number"] {
    width: 60px;
    text-align: center;
}

/* Styles for remove button */
.btn-remove {
    background-color: transparent;
    border: none;
    color: red;
    cursor: pointer;
}

.btn-remove:hover {
    text-decoration: underline;
}
.border{
    border: 1px solid #ddd;
}

.bg-light {
    background-color: #f9f9f9;
}

.rounded {
    border-radius: 5px;
}

.p-4 {
    padding: 16px;
}

/* Styles for radio buttons */
.btn-group{
    text-align: center;
}
.btn-group label {
    margin-right: 5px;
}

/* Styles for make purchase button */
.btn-make-purchase {
    margin-top: 20px;
}
.makepurchage{
    margin-top: 30px;
    padding: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: bold;
    color: green;
}
.makepurchage-form{
    text-align: center;
    margin-top: 20px;
    padding: 10px;
    text-align: center;
   
}
    </style>
    
<!-- css ends here -->

<body>        
<button class="top-right-button"> <a href="home.php" >BACK</a></button>  
      <div class= "mycart">
        <h1>My Cart</h1>
            </div>
    <div class="container">
        <div class="row">


            <div class="col-lg-9">
                <!-- table start here -->
                <table class="table">
                    <thead> 
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                              
                                $total += $value['price'];
                                echo "

                                <tr>
                                    <td>" . ($key + 1) . "</td>
                                    <td>{$value['item_name']}</td>
                                    <td>{$value['price']}</td>
                                    <td><input class='text-center' type='number' value='{$value['quantity']}' min='1' max='10'></td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <button name='remove_item' class='btn btn-small bt-outline-danger' >Remove</button>
                                            <input type='hidden' name='item_name' value='{$value['item_name']}' >
                                        </form>
                                    </td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <!-- table ends here -->
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4 total_cart" >
                    <h2>Total:
                    <?php echo $total ?></h2>
                    <br>
                    <!-- radio button start -->
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btnradio1">Bank Pyment</label> 

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Cash On Delivery</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">Credit Card</label>
                    </div>
                    <!-- radio button ends -->
                    <form class="makepurchage-form" >
                        <button class="btn btn-primary btn-block  " ><a href="Order_place.php" class="makepurchage"> Place Order</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
