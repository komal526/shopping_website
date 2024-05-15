<?php  
session_start();
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wishlist</title>
    <style> 
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* background-color: #70e000; */
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
   /* Styles for container */

.mywishlist{
    margin-top: 80px;
   margin-bottom: 30px;
   font-size: 2.5rem;
   font-weight: bold;
   color: #277c00;
}

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

    </style>
</head>
<body>        
<button class="top-right-button"> <a href="home.php" >BACK</a></button>  
      <div class= "mywishlist">
        <h1>My Wishlist</h1>
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
                        if (isset($_SESSION['wishlist'])) {
                            foreach ($_SESSION['wishlist'] as $key => $value) {
                              
                                $total += $value['price'];
                                echo "

                                <tr>
                                    <td>" . ($key + 1) . "</td>
                                    <td>{$value['item_name']}</td>
                                    <td>{$value['price']}</td>
                                    <td><input class='text-center' type='number' value='{$value['quantity']}' min='1' max='10'></td>
                                    <td>
                                        <form action='manage_wishlist.php' method='POST'>
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


                </div>
            </div>
        </div>
    </div>
</body>
</html>
