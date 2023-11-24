<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Online Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #555;
        }

        .product {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .product-description {
            text-align: left;
            line-height: 1.6;
        }

        .category-title {
            background-color: #444;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Online Store</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#electronic">Electronics</a>
        <a href="#clothing">Clothing</a>
        <a href="#accessories">Accessories</a>
        <a href="#">Contact</a>
    </nav>

    <div id="electronic" class="category-title">Electronics</div>

    <div class="product">
        <img src="electronic-product1.jpg" alt="Electronic Product 1">
        <h2>Electronic Product 1</h2>
        <p class="product-description">
            This is the description of Electronic Product 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <p>Price: $199.99</p>
        <p>Availability: In Stock</p>
    </div>

    <!-- Add more electronic products as needed -->

    <div id="clothing" class="category-title">Clothing</div>

    <div class="product">
        <img src="clothing-product1.jpg" alt="Clothing Product 1">
        <h2>Clothing Product 1</h2>
        <p class="product-description">
            This is the description of Clothing Product 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <p>Price: $49.99</p>
        <p>Availability: Out of Stock</p>
    </div>

    <!-- Add more clothing products as needed -->

    <div id="accessories" class="category-title">Accessories</div>

    <div class="product">
        <img src="accessory-product1.jpg" alt="Accessory Product 1">
        <h2>Accessory Product 1</h2>
        <p class="product-description">
            This is the description of Accessory Product 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <p>Price: $29.99</p>
        <p>Availability: In Stock</p>
    </div>

    <!-- Add more accessory products as needed -->

</body>
</html>
