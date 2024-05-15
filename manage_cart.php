<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['add_to_cart'])) {

        if (isset($_SESSION['cart'])) {

            $my_items = array_column($_SESSION['cart'], 'item_name');

            if (in_array($_POST['item_name'], $my_items)) {
                echo "<script>   
                    alert('Item Already Added');
                    window.location.href='home.php';
                </script>";
            } else {
                // Add the new item to the cart
                $_SESSION['cart'][] = array(
                    'item_name' => $_POST['item_name'],
                    'price' => $_POST['price'],
                    'quantity' => 1 
                );
                echo "<script>   
                    alert('Item Added');
                    window.location.href='home.php';
                </script>";
            }

        } else {

            $_SESSION['cart'] = array(
                array(
                    'item_name' => $_POST['item_name'],
                    'price' => $_POST['price'],
                    'quantity' => 1 
                )
            );

            echo "<script>   
            alert('Item Added');
            window.location.href='home.php';
          </script>";
        }

        // Print the contents of the cart for debugging purposes
        print_r($_SESSION['cart']);
    }

    if (isset($_POST['remove_item'])){
        foreach($_SESSION['cart'] as $key => $values){
            if($value['item_name'] == $_POST['item_name']){}
           unset($_SESSION['cart'][$key]);
           $_SESSION['cart']= array_values($_SESSION['cart']);
         echo " <script>
         alert('Item removed');
         window.location.href = 'Cart.php';
         </script>
         ";
        }
    } 
}
?>
