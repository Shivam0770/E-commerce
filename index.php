<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

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
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div class="banner">
      <h2>Discover Unique Artworks</h2>
      <p>Curated by top artists around the world</p>
    </div>

    <div style="padding: 20px; max-width: 900px; margin: 0 auto; text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333;">
      <h2 style="font-size: 24px; margin-bottom: 10px;">Crafts from the Heart of Uttar Pradesh</h2>
      <p style="font-size: 16px; line-height: 1.6;">
        Our store proudly showcases handcrafted toys and traditional crafts from the vibrant city of Varanasi and other parts of Uttar Pradesh.
        Known for its rich heritage in stone and wooden crafts, Uttar Pradesh is a land where art meets spirituality and tradition.
        The toys and items we offer reflect ancient practices and are deeply rooted in the cultural and spiritual values of the local communities.
      </p>
      <p style="font-size: 16px; line-height: 1.6;">
        From the intricate Chikankari embroidery of Lucknow to the world-renowned Banarasi silk of Varanasi, each piece is a testament to the region’s diverse craftsmanship.
        These unique creations are not only beautiful but also carry stories of heritage, identity, and artistry passed down through generations.
      </p>
    </div>
  </header>

  <main class="product-list">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <div class="product">
        <?php
          $imageList = explode(',', $row['pimg']);
          $firstImage = trim($imageList[0]);
        ?>
        <img src="uploads/<?php echo htmlspecialchars($firstImage); ?>" alt="<?php echo htmlspecialchars($row['pname']); ?>" />
        <h3><?php echo htmlspecialchars($row['pname']); ?></h3>
        <p>Rs.<?php echo htmlspecialchars($row['pprice']); ?></p>
        <a href="product_detail.php?id=<?php echo urlencode($row['pid']); ?>">View Details</a>
      </div>
    <?php } ?>
  </main>
</body>
</html>
