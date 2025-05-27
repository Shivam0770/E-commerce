<?php
include 'includes/config.php';

if (isset($_GET['id'])) {
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  $query = "SELECT * FROM product WHERE pid = '$id'";
  $result = mysqli_query($conn, $query);
  $product = mysqli_fetch_assoc($result);
} else {
  die("Product not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Art Store - Product Detail</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <h1>🎨 Kashtakala</h1>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div class="banner">
      <h2>Artwork Detail</h2>
    </div>
  </header>

  <main class="product-detail">
    <img src="uploads/<?php echo htmlspecialchars($product['pimg']); ?>" alt="<?php echo htmlspecialchars($product['pname']); ?>" />
    <div class="info">
      <h2><?php echo htmlspecialchars($product['pname']); ?></h2>
      <p><strong>Price:</strong> $<?php echo htmlspecialchars($product['pprice']); ?></p>
      <p><?php echo htmlspecialchars($product['pdesc']); ?></p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="pid" value="<?php echo $product['pid']; ?>">
        <button type="submit">Add to Cart</button>
      </form>
    </div>
  </main>
</body>
</html>

