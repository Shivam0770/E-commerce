<!DOCTYPE html>
<html>
<head>
  <title>Gallery - Kashtakala</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Import Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #222;
      padding: 1rem 2rem;
    }

    .navbar h1 {
      color: #fff;
      font-size: 1.5rem;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
    }

    .navbar ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
      padding: 0.5rem 1rem;
      transition: background 0.3s, color 0.3s;
      border-radius: 5px;
    }

    .navbar ul li a:hover {
      background-color: #fff;
      color: #222;
    }

    .banner {
      text-align: center;
      background: linear-gradient(135deg, #e3f2fd, #bbdefb);
      padding: 3rem 1rem;
    }

    .banner h2 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .banner p {
      font-size: 1.1rem;
      color: #555;
    }

    .product-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 2rem;
    }

    .product {
      background-color: #fff;
      border: none;
      padding: 1rem;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .product:hover {
      transform: translateY(-5px);
    }

    .product img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
    }

    .product h3 {
      font-size: 1.2rem;
      margin: 0.5rem 0;
      color: #333;
    }

    .product p {
      color: #4CAF50;
      font-weight: bold;
      font-size: 1rem;
    }
  </style>
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
