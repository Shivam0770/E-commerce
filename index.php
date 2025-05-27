<?php
include 'includes/config.php';

$result = mysqli_query($conn, "SELECT * FROM product");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Art Store - Product List</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <h1>🎨 Kashtakala</h1>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div class="banner">
      <h2>Discover Unique Artworks</h2>
      <p>Curated by top artists around the world</p>
    </div>
  </header>

  <main class="product-list">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <div class="product">
        <img src="uploads/<?php echo htmlspecialchars($row['pimg']); ?>" alt="<?php echo htmlspecialchars($row['pname']); ?>" />
        <h3><?php echo htmlspecialchars($row['pname']); ?></h3>
        <p>$<?php echo htmlspecialchars($row['pprice']); ?></p>
        <a href="product_detail.php?id=<?php echo urlencode($row['pid']); ?>">View Details</a>
      </div>
    <?php } ?>
  </main>
</body>
</html>