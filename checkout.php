<?php
session_start();
include 'includes/config.php';

$total = 0;
$items = [];

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $result = mysqli_query($conn, "SELECT * FROM product WHERE pid = '$item'");
        $product = mysqli_fetch_assoc($result);
        $total += $product['pprice'];
        $items[] = $product['pname'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
  <h2>Checkout</h2>
  <p>Total: $<?php echo $total; ?></p>
  <button id="rzp-button1">Pay Now</button>
  <script>
    var options = {
        "key": "YOUR_RAZORPAY_KEY", 
        "amount": "<?php echo $total * 100; ?>", 
        "currency": "INR",
        "name": "Artify Store",
        "description": "<?php echo implode(', ', $items); ?>",
        "handler": function (response){
            alert('Payment Successful. Payment ID: ' + response.razorpay_payment_id);
        }
    };
    var rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function(e){
        rzp1.open();
        e.preventDefault();
    }
  </script>
</body>
</html>
