<?php
session_start();
include 'includes/config.php';

$total = 0;

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $result = mysqli_query($conn, "SELECT * FROM product WHERE pid = '$item'");
        if ($product = mysqli_fetch_assoc($result)) {
            $total += $product['pprice'];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout - Kashtakala</title>
</head>
<body>
  <h2>Checkout Total: ₹<?= $total ?></h2>

  <form action="payment_success.php" method="POST">
    <script
      src="https://checkout.razorpay.com/v1/checkout.js"
      data-key="rzp_test_HQMqsXywhJssGD"
      data-amount="<?= $total * 100 ?>"
      data-currency="INR"
      data-name="Kashtakala"
      data-description="Order Payment"
      data-image="images/banner.jpg"
      data-prefill.name="Your Name"
      data-prefill.email="you@example.com"
      data-theme.color="#222"
      data-callback_url="payment_success.php"
      data-cancel_url="payment_failed.php">
    </script>
  </form>
</body>
</html>
