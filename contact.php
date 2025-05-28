<!DOCTYPE html>
<html>
<head>
  <title>Contact - Kashtakala</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Import Google Font -->
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
      background: linear-gradient(135deg, #ffe0b2, #ffcc80);
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

    main {
      padding: 2rem;
      max-width: 600px;
      margin: auto;
    }

    form {
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    input, textarea {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
    }

    button {
      padding: 0.75rem 1.5rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #43a047;
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
    <h2>Contact Us</h2>
    <p>We'd love to hear from you!</p>
  </div>

  <main>
    <form>
      <input type="text" placeholder="Your Name" required>
      <input type="email" placeholder="Your Email" required>
      <textarea placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </main>
</body>
</html>
