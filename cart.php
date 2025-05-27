<?php
session_start();
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pid = $_POST['pid'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $pid;
}
header("Location: cart.php");
exit;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Cart</title>
</head>
<body>
  <h2>Your Cart</h2>
  <ul>
    <?php
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $result = mysqli_query($conn, "SELECT * FROM product WHERE pid = '$item'");
            $product = mysqli_fetch_assoc($result);
            echo "<li>{$product['pname']} - $ {$product['pprice']}</li>";
        }
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
  </ul>
  <a href="checkout.php"><button>Proceed to Checkout</button></a>
</body>
</html>
