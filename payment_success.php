<?php
session_start();

// You can also clear the cart here if needed
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Success - Kashtakala</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <h1>✅ Kashtakala</h1>
    </nav>
    <div class="banner">
      <h2>Payment Successful</h2>
    </div>
  </header>

  <main class="page">
    <p>Thank you for your purchase! Your order has been successfully placed.</p>
    <a href="index.php"><button>Return to Home</button></a>
  </main>
</body>
</html>
