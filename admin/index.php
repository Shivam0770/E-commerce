<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pdesc = $_POST['pdesc'];
    $pimg = $_FILES['pimg']['name'];

    // Upload image to /uploads
    if (move_uploaded_file($_FILES['pimg']['tmp_name'], "../uploads/" . $pimg)) {
        mysqli_query($conn, "INSERT INTO product (pname, pprice, pdesc, pimg) VALUES ('$pname', '$pprice', '$pdesc', '$pimg')");
        $message = "✅ Product added successfully!";
    } else {
        $message = "❌ Failed to upload image.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Kashtakala</title>
  <link rel="stylesheet" href="../style.css" />
</head>
<body>

  <!-- ✅ Navbar -->
  <nav class="navbar">
    <h1>🎨 Kashtakala Admin</h1>
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../gallery.php">Gallery</a></li>
      <li><a href="../contact.php">Contact</a></li>
    </ul>
  </nav>

  <!-- ✅ Banner-style section -->
  <div class="banner">
    <h2>Add New Product</h2>
    <p>Upload artwork to the store</p>
  </div>

  <!-- ✅ Product Form -->
  <main style="padding: 2rem;">
    <?php if (isset($message)) echo "<p>$message</p>"; ?>
    <form method="POST" enctype="multipart/form-data">
      <input type="text" name="pname" placeholder="Product Name" required style="padding: 0.5rem; width: 100%; margin-bottom: 1rem;"><br>
      <input type="number" name="pprice" placeholder="Price" required style="padding: 0.5rem; width: 100%; margin-bottom: 1rem;"><br>
      <textarea name="pdesc" placeholder="Description" required style="padding: 0.5rem; width: 100%; margin-bottom: 1rem;"></textarea><br>
      <input type="file" name="pimg" required style="margin-bottom: 1rem;"><br>
      <button type="submit">Add Product</button>
    </form>
  </main>

</body>
</html>
