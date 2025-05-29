<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
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

// Prepare images (assume comma-separated filenames)
$images = array_map('trim', explode(',', $product['pimg']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Art Store - Product Detail</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .product-gallery {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }
    .product-gallery img {
      max-width: 200px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .info {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      max-width: 600px;
    }
  </style>
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

  <main class="product-detail" style="padding: 20px;">
    <div class="product-gallery">
      <?php foreach ($images as $img) { ?>
        <img src="uploads/<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($product['pname']); ?>">
      <?php } ?>
    </div>

    <div class="info">
      <h2><?php echo htmlspecialchars($product['pname']); ?></h2>
      <p><strong>Artist:</strong> <?php echo htmlspecialchars($product['artist']); ?></p>
      <p><strong>Price:</strong> Rs.<?php echo htmlspecialchars($product['pprice']); ?></p>
      <p><?php echo nl2br(htmlspecialchars($product['pdesc'])); ?></p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="pid" value="<?php echo $product['pid']; ?>">
        <button type="submit">Add to Cart</button>
      </form>
    </div>
  </main>
</body>
</html>
