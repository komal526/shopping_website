<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['add_to_wishlist'])) {

        if (isset($_SESSION['wishlist'])) {

            $my_items = array_column($_SESSION['wishlist'], 'item_name');

            if (in_array($_POST['item_name'], $my_items)) {
                echo "<script>   
                    alert('Item Already Added');
                    window.location.href='home.php';
                </script>";
            } else {
                // Add the new item to the cart
                $_SESSION['wishlist'][] = array(
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

            $_SESSION['wishlist'] = array(
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
        print_r($_SESSION['wishlist']);
    }

    if (isset($_POST['remove_item'])){
        foreach($_SESSION['wishlist'] as $key => $values){
            if($value['item_name'] == $_POST['item_name']){}
           unset($_SESSION['wishlist'][$key]);
           $_SESSION['wishlist']= array_values($_SESSION['wishlist']);
         echo " <script>
         alert('Item removed');
         window.location.href = 'Wishlist.php';
         </script>
         ";
        }
    } 
}
?>
