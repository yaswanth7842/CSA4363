<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content (same as before) -->
    <style>
        /* Add your CSS styles here */
        .cart {
            float: right;
            margin-right: 20px;
        }

        .cart-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cart-content {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            padding: 10px;
        }

        .cart-item {
            margin-bottom: 10px;
        }

        /* Additional styles for product listings */
        .product {
            margin-bottom: 20px;
        }

        .add-to-cart-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Online Store</h1>
    </header>

    <nav>
        <a href="#electronic">Electronics</a>
        <a href="#clothing">Clothing</a>
        <a href="#accessories">Accessories</a>
        <a href="#" id="cartButton" class="cart-button">Cart</a>
        <a href="#contact">Contact</a>
    </nav>

    <div id="electronic" class="category-title">Electronics</div>
    <div class="product">
        <p>Product: Smartphone</p>
        <p>Price: $500</p>
        <button class="add-to-cart-button" onclick="addToCart('Smartphone', 500)">Add to Cart</button>
    </div>

    <!-- Add more product listings for Electronics, Clothing, Accessories as needed -->

    <div id="clothing" class="category-title">Clothing</div>
    <div class="product">
        <p>Product: T-Shirt</p>
        <p>Price: $20</p>
        <button class="add-to-cart-button" onclick="addToCart('T-Shirt', 20)">Add to Cart</button>
    </div>

    <div id="accessories" class="category-title">Accessories</div>
    <div class="product">
        <p>Product: Watch</p>
        <p>Price: $100</p>
        <button class="add-to-cart-button" onclick="addToCart('Watch', 100)">Add to Cart</button>
    </div>

    <div id="cart" class="cart">
        <div id="cartContent" class="cart-content"></div>
    </div>

    <div id="contact">
        <h2>Contact Us</h2>
        <p>Please feel free to reach out to us for any inquiries or assistance.</p>
    </div>

    <script>
        document.getElementById('cartButton').addEventListener('click', toggleCart);

        function toggleCart() {
            var cartContent = document.getElementById('cartContent');
            cartContent.style.display = (cartContent.style.display === 'block' ? 'none' : 'block');
        }

        function addToCart(productName, price) {
            var cartContent = document.getElementById('cartContent');

            var cartItem = document.createElement('div');
            cartItem.className = 'cart-item';
            cartItem.innerHTML = productName + ' - $' + price.toFixed(2);
            cartContent.appendChild(cartItem);

            updateTotal();
        }

        function updateTotal() {
            var cartContent = document.getElementById('cartContent');
            var cartItems = cartContent.getElementsByClassName('cart-item');
            var total = 0;

            for (var i = 0; i < cartItems.length; i++) {
                var itemPrice = parseFloat(cartItems[i].innerHTML.split('$')[1]);
                total += itemPrice;
            }

            // Remove previous total display
            var existingTotal = cartContent.querySelector('.total');
            if (existingTotal) {
                cartContent.removeChild(existingTotal);
            }

            // Display the total price
            var totalElement = document.createElement('p');
            totalElement.className = 'total';
            totalElement.innerHTML = '<strong>Total: $' + total.toFixed(2) + '</strong>';
            cartContent.appendChild(totalElement);
        }
    </script>
</body>
</html>
