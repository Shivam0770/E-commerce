--The Products we need
CREATE TABLE IF NOT EXISTS product (
    pid INT AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(100) NOT NULL,
    pprice DECIMAL(10, 2) NOT NULL,
    pdesc TEXT,
    pimg VARCHAR(255)
);

INSERT INTO product (pname, pprice, pdesc, pimg) VALUES
('Abstract Beauty', 120.00, 'A stunning abstract artwork.', 'art1.jpg'),
('Colorful Chaos', 150.00, 'A vivid splash of color and emotion.', 'art2.jpg'),
('Minimal Zen', 90.00, 'Peaceful minimalistic artwork.', 'art3.jpg');


-- The Login User
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL -- hashed
);

-- Insert a test user (password: test123)
INSERT INTO users (email, password)
VALUES ('student@example.com', MD5('test123'));
