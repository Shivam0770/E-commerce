--The Products we need
CREATE TABLE IF NOT EXISTS product (
    pid INT AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(100) NOT NULL,
    pprice DECIMAL(10, 2) NOT NULL,
    pdesc TEXT,
    artist VARCHAR(100) NOT NULL,
    pimg VARCHAR(255)
);

INSERT INTO product (pname, pprice, pdesc,artist, pimg) VALUES
('Durga Miniature Earring', 120.00, 'Handcrafted wooden earring featuring Goddess Durga riding a tiger, painted in traditional Varanasi style using vibrant colors. Made from Gular wood for its paint-friendly surface. Reflects cultural and spiritual themes. A unique blend of fashion and heritage.','Dhanshyam Sharma', 'art1a.jpg,art1b.jpg'),
('Wooden Sculpture of Goddess Ganga', 650.0, 'Exquisitely hand-carved from Kaima wood, this detailed sculpture represents Goddess Ganga riding a crocodile (Makara). The level of precision in the carving reflects elite craftsmanship, with no use of paint to preserve the fine natural finish. Ideal for collectors, art lovers, and spiritual decor.','Nandlal Sharma', 'art2a.jpg,art2b.jpg,art2c.jpg,art2d.jpg'),
('Wooden Sculpture of Goddess Kali', 720.0, 'Handcrafted from premium Kaima wood, this striking sculpture of Goddess Kali captures the fierce energy and mythological richness of the deity. With precise carvings, natural wood grain, and no paint, this piece is a testament to master-level detailing. Ideal for art collectors and spiritual decor.','Gobind Sharma', 'art3a.jpg,art3b.jpg,art3c.jpg'),
('Hand-Painted Wooden Scooter', 150.0, 'A vibrant, retro-style miniature scooter crafted from solid wood and hand-painted in rich traditional colors and patterns. This quirky collectible adds a pop of desi charm to any decor shelf or workspace. Lightweight and entirely handmade.','Ramdas Sharma', 'art4a.jpg,art4b.jpg'),
('Handcrafted Lord Shiva Idol', 450.0, 'A majestic hand-painted wooden sculpture of Lord Shiva, adorned with intricate ornaments, vivid facial features, and detailed weaponry. The idol stands on a decorative base featuring attendants and mythological elements. Perfect for temples, home altars, or as a centerpiece in spiritual decor.','Ravindra Joshi', 'art5a.jpg,art5b.jpg,art5c.jpg,art5d.jpg,art5e.jpg'),
('Seated Shiva in Meditation', 380.0, 'A finely detailed wooden sculpture of Lord Shiva seated on Mount Kailash. The serene posture, trident, Damaru (drum), Nandi (bull), and surrounding figures highlight divine symbolism. Ideal for pooja rooms or collectors of sacred art.','Ravindra Joshi', 'art6a.jpg,art6b.jpg,art6c.jpg,art6d.jpg,art6e.jpg'),
('Panchamukha Shiva Idol', 420.0, 'A rare and powerful wooden sculpture of Lord Shiva with five faces and ten arms, each hand holding a symbolic item. The intricate detailing reflects divine multiplicity and strength. A unique collectible or altar piece.','Ravindra Joshi', 'art7.jpg'),
('Hand-Painted Wooden Toy Truck', 850, 'A lively and colorful wooden toy truck, hand-painted with traditional Indian motifs including a parrot and flower. Perfect as a quirky decor item or a childs plaything.','Sundar Lal', 'art8.jpg'),
('Wooden Elephant Head Carving', 800, 'This intricate wooden carving depicts an elephants head, showcasing the foundational skill of Varanasis master craftsmen. Made from natural wood (likely Gular, Kadam, or Kaima depending on the intended finish), this piece is a testament to the initial stages of traditional wood carving, preserving centuries-old techniques. It serves as a beautiful decorative item as is, or can be further embellished with paint or intricate detailing to become a finished masterpiece, reflecting the cultural and artistic heritage of Banaras.','Gobind Sharma', 'art9.jpg'),
('Set of 4 Hand-Painted Mythological Figurines', 1200.0, 'This vibrant set of four hand-painted wooden figurines embodies the rich mythological and cultural narratives of Varanasi. Each figure is meticulously crafted and adorned with bright, traditional colors, reflecting the distinctive artistic style passed down through generations. Made from Gular wood, which is ideal for painting, these figures represent characters from ancient Indian texts and legends. They are not only decorative pieces but also symbols of local identity and craftsmanship, perfect for educational display or adding a touch of traditional Indian art to any space.','Ravindra Joshi', 'art10.jpg');





-- The Login User
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL -- hashed
);

-- Insert a test user (password: test123)
INSERT INTO users (email, password)
VALUES ('student@example.com', MD5('test123'));
