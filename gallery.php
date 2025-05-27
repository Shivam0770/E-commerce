<!DOCTYPE html>
<html>
<head>
  <title>Gallery - Kashtakala</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <nav class="navbar">
    <h1>🎨 Kashtakala</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <div class="banner">
    <h2>Gallery</h2>
    <p>Explore all artistic collections</p>
  </div>
  <main class="product-list">
    <!-- Show all products here like in index.php -->
    <?php
    include 'includes/config.php';
    $result = mysqli_query($conn, "SELECT * FROM product");
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='product'>
              <img src='uploads/{$row['pimg']}' alt='{$row['pname']}' />
              <h3>{$row['pname']}</h3>
              <p>\${$row['pprice']}</p>
            </div>";
    }
    ?>
  </main>
</body>
</html>
