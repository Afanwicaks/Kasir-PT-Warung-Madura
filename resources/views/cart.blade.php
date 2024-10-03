<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: center;
        }

        th, td {
            padding: 10px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-danger {
            background-color: #e74c3c;
            color: white;
        }

        .btn-primary {
            background-color: #3498db;
            color: white;
        }

        .btn-success {
            background-color: #2ecc71;
            color: white;
        }

        .btn-secondary {
            background-color: #95a5a6;
            color: white;
        }

        .qty-btn {
            padding: 5px 10px;
            font-size: 16px;
        }

        .total-container {
            text-align: right;
            margin-top: 20px;
        }

        .total-container h3 {
            margin: 0;
        }

        .cart-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Shopping Cart</h1>

        <!-- Tabel Produk dalam Keranjang -->
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Item Pertama -->
                <tr>
                    <td>
                        <img src="path-to-image/product1.jpg" width="50" alt="Product Image">
                        <strong>Product Name 1</strong>
                        <p>Rp. 10,000</p>
                    </td>
                    <td>
                        <form action="/cart/update" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <button type="submit" name="action" value="decrease" class="btn btn-secondary qty-btn">-</button>
                            <span>2</span>
                            <button type="submit" name="action" value="increase" class="btn btn-secondary qty-btn">+</button>
                        </form>
                    </td>
                    <td>Rp. 20,000</td>
                    <td>
                        <form action="/cart/remove" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <button type="submit" class="btn btn-danger">Remove Item</button>
                        </form>
                    </td>
                </tr>

                <!-- Item Kedua -->
                <tr>
                    <td>
                        <img src="path-to-image/product2.jpg" width="50" alt="Product Image">
                        <strong>Product Name 2</strong>
                        <p>Rp. 20,000</p>
                    </td>
                    <td>
                        <form action="/cart/update" method="POST">
                            <input type="hidden" name="product_id" value="2">
                            <button type="submit" name="action" value="decrease" class="btn btn-secondary qty-btn">-</button>
                            <span>2</span>
                            <button type="submit" name="action" value="increase" class="btn btn-secondary qty-btn">+</button>
                        </form>
                    </td>
                    <td>Rp. 40,000</td>
                    <td>
                        <form action="/cart/remove" method="POST">
                            <input type="hidden" name="product_id" value="2">
                            <button type="submit" class="btn btn-danger">Remove Item</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Total Harga -->
        <div class="total-container">
            <h3>Total: Rp. 60,000</h3>
        </div>

        <!-- Tombol Aksi -->
        <div class="cart-actions">
            <a href="/" class="btn btn-primary">Back to Home</a>
            <a href="/cart/pay" class="btn btn-success">Pay Bill</a>
        </div>
    </div>
</body>
</html>
