<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Informasi Sederhana</title>
    <style>
     body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #f0f0f0;
      padding: 10px;
    }

    .container {
      width: 90%;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .search-bar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .search-bar input[type="text"] {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 300px;
    }

    .search-bar button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .cart {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    nav {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    nav a {
      padding: 10px 20px;
      color: #333;
      text-decoration: none;
      margin: 0 10px;
      border-bottom: 2px solid transparent;
    }

    nav a:hover {
      border-bottom: 2px solid #007bff;
    }

    .hero {
      background-image: url('download.jpg');
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      font-size: 24px;
      background-size: cover;
    }

    .featured-products {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
    }

    .product {
        background-image: url('BlackInk.jpg');
        border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      text-align: center;
      width: 30%;
    }

    .product h3 {
      margin: 10px 0;
    }

    .product p {
      font-size: 18px;
      color: #007bff;
    }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="container">
      <h1>Cartridge Kings</h1>
      <div class="search-bar">
        <input type="text" placeholder="Search for your printer...">
        <button type="button">Search</button>
        <button class="cart">Cart (0)</button>
      </div>
    </div>
  </header>
  <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="inkcatridge.php">INK CATRIDGE</a></li>
                <li><a href="tonercatridge.php">TONER CATRIDGE</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href="login register.php">LOGIN/REGISTER</a></li>
            </ul>
        </nav>
  <div class="hero">
    Find the Right Cartridges For Your Printer
  </div>
       
        <div class="container">
    <h2>Featured Products</h2>
    <div class="featured-products">
      <div class="product">
        <h3>HP 62 Black Ink Cartridge</h3>
        
        <p>$9.49</p>
      </div>
      <div class="product">
        <h3>Canon MF-3110 Toner</h3>
        <p>$36.45</p>
      </div>
      <div class="product">
        <h3>HP 62 Black Ink Cartridge</h3>
        <p>$5.99</p>
      </div>
    </div>
  </div>
    
</body>
</html>