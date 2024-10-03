<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASPOS Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #4A90E2;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .navbar .profile {
            display: flex;
            align-items: center;
        }

        .profile span {
            margin-right: 10px;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
        }

        .categories {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .categories ul {
            display: flex;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .categories ul li {
            margin-right: 20px;
            font-weight: bold;
        }

        .categories ul li a {
            text-decoration: none;
            color: #4A90E2;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            text-align: center;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product-card h4 {
            margin: 1rem 0;
            font-size: 1.1rem;
            color: #333;
        }

        .product-card p {
            font-weight: bold;
            color: #4A90E2;
        }

        .add-to-cart {
            background-color: #4A90E2;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete {
            background-color: #dc2020;
            color: white;
            border: none;
            padding: 0.5rem 0.5rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-to-cart:hover {
            background-color: #357ABD;
        }

        .cart {
            margin-top: 2rem;
            text-align: right;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .cart-total {
            color: #4A90E2;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>MASPOS</h1>
        <div class="profile">
            <span>Admin</span>
            <img src="https://th.bing.com/th/id/OIP.JIliOYMqHts-8Ug2cwtb0wHaFq?w=249&h=190&c=7&r=0&o=5&pid=1.7" alt="Admin" width="40">
        </div>
    </div>

    <div class="container">
        <div class="categories">
            <ul>
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
            </ul>
            <div>
                <button class="add-category">+ Add Category</button>
                <button class="add-products">+ Add Products</button>
            </div>
        </div>

        <div class="products">
            <div class="product-card">
                <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2019/10/2/44204563/44204563_86bccf50-c294-446e-a14f-b09144855797_554_554" alt="Rokok Gudang Garam Merah">
                <h4>Rokok Gudang Garam Merah</h4>
                <p>Rp. 22,000</p>
                <button class="add-to-cart">+ Add to Cart</button>
                <button class="delete">DELETE</button>
            </div>
            <div class="product-card">
                <img src="https://drivethru.klikindomaret.com/tz0m/wp-content/uploads/sites/23/2022/06/1_A6790930001073_20200427203856951.png" alt="Le Minerale">
                <h4>Le Minerale</h4>
                <p>Rp. 3,000</p>
                <button class="add-to-cart">+ Add to Cart</button>
                <button class="delete">DELETE</button>
            </div>
            <div class="product-card">
                <img src="https://cf.shopee.ph/file/e8529b05a8add861386baa38d9c93a86" alt="Sunlight">
                <h4>Sunlight</h4>
                <p>Rp. 3,000</p>
                <button class="add-to-cart">+ Add to Cart</button>
                <button class="delete">DELETE</button>
            </div>
            <div class="product-card">
                <img src="https://cf.shopee.co.id/file/b977c626567717264ecbb27811bba746" alt="gas LPG 3kg">
                <h4>gas LPG 3kg</h4>
                <p>Rp. 22,000</p>
                <button class="add-to-cart">+ Add to Cart</button>
                <button class="delete">DELETE</button>
            </div>
            <div class="product-card">
                <img src="https://id-test-11.slatic.net/p/a96927d1334060b47a4f44ecea9dc4eb.jpg" alt="Minyak Goreng">
                <h4>Minyak Goreng</h4>
                <p>Rp. 10,000</p>
                <button class="add-to-cart">+ Add to Cart</button>
                <button class="delete">DELETE</button>
            </div>
            <div class="product-card">
                <img src="https://th.bing.com/th/id/OIP.ynX7PdoNWLN_mqq3UXEV0QHaHa?rs=1&pid=ImgDetMain" alt="Indomie Goreng">
                <h4>Indomie Goreng</h4>
                <p>Rp. 3,000</p>
                <button class="add-to-cart">+ Add to Cart</button>
                <button class="delete">DELETE</button>
            </div>
            <div class="product-card">
                <img src="https://d3uzb2xkdr3e0f.cloudfront.net/palya/images/products/indomie_ayam_bawang-6pj5gnzM.jpg" alt="Indomie Kuah">
                <h4>Indomie Kuah</h4>
                <p>Rp. 3,000</p>
                <button class="add-to-cart">+ Add to Cart</button>
                <button class="delete">DELETE</button>
            </div>
            <div class="product-card">
                <img src="https://down-id.img.susercontent.com/file/d6a69d045fb430060fb8ddcbcf43c2ec" alt="kecap Bango">
                <h4>Kecap bango</h4>
                <p>Rp. 3,000</p>
                <button class="add-to-cart">+ Add to Cart</button>
                <button class="delete">DELETE</button>
            </div>
            <!-- Tambahkan produk lain sesuai kebutuhan -->
        </div>

        <div class="cart">
            Total Bill: <span class="cart-total">Rp. 0</span>
        </div>
    </div>
</body>
</html>
