<?php
session_start();
include 'includes/config.php';

// Handle Add to Cart
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['pid'])) {
    $pid = $_POST['pid'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $pid;

    // Redirect to avoid resubmission
    header("Location: cart.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Your Cart - Kashtakala</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <h1>🛒 Kashtakala - Cart</h1>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div class="banner">
      <h2>Your Cart</h2>
    </div>
  </header>

  <main class="page">
    <?php
    if (!empty($_SESSION['cart'])) {
        $total = 0;
        echo "<ul>";
        foreach ($_SESSION['cart'] as $item) {
            $result = mysqli_query($conn, "SELECT * FROM product WHERE pid = '$item'");
            if ($product = mysqli_fetch_assoc($result)) {
                $total += $product['pprice'];
                echo "<li class='cart-item'>{$product['pname']} - ₹{$product['pprice']}</li>";
            }
        }
        echo "</ul>";
        echo "<h3>Total: ₹" . number_format($total, 2) . "</h3>";
        echo "<a href='checkout.php'><button>Buy Now</button></a>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
  </main>
</body>
</html>
