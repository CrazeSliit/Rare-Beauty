<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- Navbar -->
     <header>
        <!-- Search Box -->
        
        <a href="Untitled-1.html" class="logo">
            <img src="Img Home/1000a862-8bd9-4d81-94a9-d4af72342ae9.jpeg" alt="">
        </a>
       
       
        <!-- Links -->
         <ul class="navbar">
            <li><a href="home.php">Home</a></li>
            <li><a href="Productlog.php">products</a></li>
            <li><a href="#about">About Us</a></li>
            
            <li><a href="#customers">customers</a></li>
        </ul>
        <!-- Icon -->
        
        <div class="header-buttons" style="margin-left: 700px;">
        </div>

            <div>

        <a href="table.php" class="bx bx-user" style="margin-left: 100px; font-size: 24px;"></a>
        </div>
            
        <div>  <button class="btn" onclick="window.location.href='home.php'">LOG OUT</button>
        </div>
        
        <div class="header-icon">
            <a href="cart.php" class="bx bx-cart-alt"></a>
        </div>
       
     </header>
     <br><br><br><br> <br><br><br>

    <div class="container">
        <div class="cart">
            <h2>Shopping Cart</h2>
            <h4 id="total-items">3 Items</h4>

            <table>
                <thead>
                    <tr>
                        <th>Product Details</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                    <tr data-price="44.00">
                        <td>
                            <img src="Product Img/WhatsApp Image 2024-09-02 at 21.56.22_21fdba7a.jpg" alt="Fifa 19">
                            <span>Fifa 19</span><br>
                            <span>PS4</span><br>
                            <a href="#" class="remove">Remove</a>
                        </td>
                        <td>
                            <button class="quantity-button decrease">-</button>
                            <input type="text" class="quantity" name="quantity" value="2">
                            <button class="quantity-button increase">+</button>
                        </td>
                        <td>$ 44.00</td>
                        <td class="total-price">$ 88.00</td>
                    </tr>
                    <tr data-price="249.99">
                        <td>
                            <img src="Product Img/WhatsApp Image 2024-09-02 at 21.56.23_eba9d67b.jpg" alt="PS4 Glacier White">
                            <span>Glacier White 500GB</span><br>
                            <span>PS4</span><br>
                            <a href="#" class="remove">Remove</a>
                        </td>
                        <td>
                            <button class="quantity-button decrease">-</button>
                            <input type="text" class="quantity" value="1">
                            <button class="quantity-button increase">+</button>
                        </td>
                        <td>$249.99</td>
                        <td class="total-price">$ 249.99</td>
                    </tr>
                    <tr data-price="119.99">
                        <td>
                            <img src="Product Img/WhatsApp Image 2024-09-02 at 21.56.20_ed1a30d3.jpg" alt="Platinum Headset">
                            <span>Platinum Headset</span><br>
                            <span>PS4</span><br>
                            <a href="#" class="remove">Remove</a>
                        </td>
                        <td>
                            <button class="quantity-button decrease">-</button>
                            <input type="text" class="quantity" value="1">
                            <button class="quantity-button increase">+</button>
                        </td>
                        <td>$ 119.99</td>
                        <td class="total-price">$ 119.99</td>
                    </tr>
                </tbody>
            </table>

            <a href="productlog.php" class="continue-shopping">← Continue Shopping</a>
        </div>

        <div class="summary">
            <h3>Order Summary</h3>
            <p id="items-count">Items: 3</p>
            <p>Subtotal: <span id="subtotal">$ 457.98</span></p>
            <p>Shipping: 
                <select>
                    <option>Standard Delivery - $ 5.00</option>
                </select>
            </p>
            <p>Promo Code: 
                <input type="text" placeholder="Enter your code">
                <button class="apply-button">APPLY</button>
            </p>
            <h4>Total Cost: <span id="total-cost">$ 462.98</span></h4>
            <button class="checkout-button" onclick="alert(' ORDER SUCCECCFUL')">Checkout</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            updateCart();

            // Update quantity and price calculations
            document.querySelectorAll('.quantity-button').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const quantityInput = row.querySelector('.quantity');
                    let quantity = parseInt(quantityInput.value);
                    
                    if (this.classList.contains('increase')) {
                        quantity++;
                    } else if (this.classList.contains('decrease')) {
                        if (quantity > 1) {
                            quantity--;
                        }
                    }
                    quantityInput.value = quantity;
                    updateRowTotal(row);
                    updateCart();
                });
            });

            // Update the total when quantity input is changed manually
            document.querySelectorAll('.quantity').forEach(input => {
                input.addEventListener('input', function() {
                    const row = this.closest('tr');
                    updateRowTotal(row);
                    updateCart();
                });
            });
        });

        function updateRowTotal(row) {
            const price = parseFloat(row.getAttribute('data-price'));
            const quantity = parseInt(row.querySelector('.quantity').value);
            const totalPrice = (price * quantity).toFixed(2);
            row.querySelector('.total-price').innerText = `$ ${totalPrice}`;
        }

        function updateCart() {
            let totalItems = 0;
            let subtotal = 0;

            document.querySelectorAll('#cart-items tr').forEach(row => {
                const quantity = parseInt(row.querySelector('.quantity').value);
                const price = parseFloat(row.getAttribute('data-price'));
                totalItems += quantity;
                subtotal += price * quantity;
            });

            document.getElementById('total-items').innerText = `${totalItems} Items`;
            document.getElementById('items-count').innerText = `Items: ${totalItems}`;
            document.getElementById('subtotal').innerText = `$ ${subtotal.toFixed(2)}`;
            document.getElementById('total-cost').innerText = `$ ${(subtotal + 5).toFixed(2)}`; // Adding £5 for shipping
        }
    </script>
</body>
</html>
