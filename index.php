
<?php
// =====================================
// SHOPSPHERE - PHP ECOMMERCE WEBSITE
// =====================================

$products = [
    [
        "id" => 1,
        "name" => "Premium Wireless Headphones",
        "category" => "Electronics",
        "price" => 2499,
        "old_price" => 3499,
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600",
        "rating" => 4.8
    ],
    [
        "id" => 2,
        "name" => "Classic Wrist Watch",
        "category" => "Fashion",
        "price" => 1899,
        "old_price" => 2599,
        "image" => "https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600",
        "rating" => 4.6
    ],
    [
        "id" => 3,
        "name" => "Modern Running Shoes",
        "category" => "Fashion",
        "price" => 2999,
        "old_price" => 3999,
        "image" => "https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600",
        "rating" => 4.7
    ],
    [
        "id" => 4,
        "name" => "Smart Digital Camera",
        "category" => "Electronics",
        "price" => 15999,
        "old_price" => 18999,
        "image" => "https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600",
        "rating" => 4.9
    ],
    [
        "id" => 5,
        "name" => "Stylish Backpack",
        "category" => "Accessories",
        "price" => 1299,
        "old_price" => 1799,
        "image" => "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600",
        "rating" => 4.5
    ],
    [
        "id" => 6,
        "name" => "Premium Sunglasses",
        "category" => "Accessories",
        "price" => 999,
        "old_price" => 1499,
        "image" => "https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=600",
        "rating" => 4.6
    ],
    [
        "id" => 7,
        "name" => "Minimalist Desk Lamp",
        "category" => "Home",
        "price" => 1499,
        "old_price" => 1999,
        "image" => "https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=600",
        "rating" => 4.7
    ],
    [
        "id" => 8,
        "name" => "Premium Smart Phone",
        "category" => "Electronics",
        "price" => 18999,
        "old_price" => 22999,
        "image" => "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600",
        "rating" => 4.8
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ShopSphere | Online Shopping</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #f8fafc;
    color: #172033;
}

header {
    background: #ffffff;
    padding: 18px 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 2px 12px #0000000d;
    position: sticky;
    top: 0;
    z-index: 100;
    gap: 20px;
}

.logo {
    font-size: 26px;
    font-weight: 800;
    color: #635bff;
}

.search-box {
    display: flex;
    width: 40%;
}

.search-box input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px 0 0 8px;
    outline: none;
}

.search-box button {
    padding: 12px 20px;
    border: none;
    background: #635bff;
    color: white;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
}

.cart-btn {
    border: none;
    background: #f0efff;
    padding: 12px 18px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    color: #635bff;
}

.hero {
    margin: 30px 7%;
    background: linear-gradient(120deg, #29235c, #7167ff);
    color: white;
    border-radius: 18px;
    padding: 65px 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    min-height: 280px;
}

.hero h1 {
    font-size: clamp(30px, 4vw, 46px);
    margin-bottom: 15px;
}

.hero p {
    font-size: 17px;
    margin-bottom: 25px;
    color: #e1e0ff;
}

.hero a {
    background: white;
    color: #635bff;
    padding: 13px 24px;
    text-decoration: none;
    border-radius: 7px;
    font-weight: bold;
}

.hero-icon {
    font-size: 110px;
}

.section {
    margin: 50px 7%;
}

.section-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    flex-wrap: wrap;
    gap: 15px;
}

.section-heading h2 {
    font-size: 27px;
}

.categories {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.category-btn {
    border: 1px solid #ddd;
    background: white;
    padding: 10px 19px;
    border-radius: 30px;
    cursor: pointer;
}

.category-btn.active,
.category-btn:hover {
    background: #635bff;
    color: white;
    border-color: #635bff;
}

.products {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}

.product {
    background: white;
    border-radius: 13px;
    overflow: hidden;
    box-shadow: 0 3px 15px #00000008;
    transition: 0.3s;
}

.product:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 25px #00000012;
}

.product img {
    width: 100%;
    height: 210px;
    object-fit: cover;
    background: #eee;
}

.product-info {
    padding: 17px;
}

.product-info small {
    color: #777;
}

.product-info h3 {
    font-size: 16px;
    margin: 9px 0;
}

.rating {
    color: #f59e0b;
    font-size: 14px;
}

.price {
    font-size: 20px;
    font-weight: bold;
    color: #635bff;
    margin: 12px 0;
}

.old-price {
    color: #999;
    text-decoration: line-through;
    font-size: 13px;
    margin-left: 7px;
}

.add-btn {
    width: 100%;
    background: #635bff;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 7px;
    cursor: pointer;
}

.add-btn:hover {
    background: #4941d8;
}

.empty {
    grid-column: 1/-1;
    padding: 40px;
    text-align: center;
    color: #777;
}

.benefits {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.benefit {
    background: white;
    padding: 25px;
    border-radius: 12px;
    text-align: center;
}

.benefit span {
    font-size: 30px;
}

.benefit h3 {
    margin: 12px 0;
}

footer {
    background: #171b32;
    color: white;
    text-align: center;
    padding: 35px 15px;
    margin-top: 70px;
}

footer p {
    margin-top: 12px;
    color: #b8b9c9;
}

/* CART DRAWER */

.overlay {
    position: fixed;
    inset: 0;
    background: #0008;
    z-index: 200;
    display: none;
}

.overlay.show {
    display: block;
}

.cart-panel {
    position: fixed;
    right: -450px;
    top: 0;
    width: min(420px, 100%);
    height: 100%;
    background: white;
    z-index: 201;
    padding: 25px;
    transition: 0.3s;
    overflow-y: auto;
}

.cart-panel.open {
    right: 0;
}

.cart-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
}

.close-btn {
    border: none;
    background: #eee;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 5px;
}

.cart-item {
    display: flex;
    gap: 12px;
    margin: 18px 0;
    border-bottom: 1px solid #eee;
    padding-bottom: 15px;
}

.cart-item img {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 7px;
}

.cart-item-info {
    flex: 1;
}

.qty {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 8px;
}

.qty button {
    padding: 3px 9px;
    cursor: pointer;
}

.remove {
    color: #e11d48;
    background: none;
    border: none;
    cursor: pointer;
}

.cart-total {
    border-top: 1px solid #ddd;
    padding-top: 20px;
    margin-top: 20px;
    font-size: 21px;
    font-weight: bold;
}

.checkout-btn {
    width: 100%;
    margin-top: 20px;
    padding: 14px;
    background: #635bff;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
}

@media(max-width: 900px) {
    .products {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media(max-width: 600px) {
    header {
        padding: 15px;
        flex-wrap: wrap;
    }

    .logo {
        font-size: 21px;
    }

    .search-box {
        width: 100%;
        order: 3;
    }

    .hero {
        margin: 20px 15px;
        padding: 35px 25px;
    }

    .hero-icon {
        display: none;
    }

    .section {
        margin: 35px 15px;
    }

    .products {
        gap: 12px;
    }

    .product img {
        height: 145px;
    }

    .product-info {
        padding: 12px;
    }

    .product-info h3 {
        font-size: 14px;
    }

    .price {
        font-size: 17px;
    }

    .benefits {
        grid-template-columns: 1fr;
    }
}
</style>
</head>

<body>

<header>
    <div class="logo">ShopSphere.</div>

    <div class="search-box">
        <input type="text" id="search"
        placeholder="Search products...">
        <button onclick="renderProducts()">Search</button>
    </div>

    <button class="cart-btn" onclick="openCart()">
        🛒 Cart (<span id="cart-count">0</span>)
    </button>
</header>

<section class="hero">
    <div>
        <h1>Discover Your<br>Perfect Style.</h1>
        <p>Shop the latest products at amazing prices.</p>
        <a href="#shop">Explore Collection →</a>
    </div>

    <div class="hero-icon">🛍️</div>
</section>

<section class="section" id="shop">

    <div class="section-heading">
        <h2>Explore Products</h2>
        <span>Premium products. Best prices.</span>
    </div>

    <div class="categories">
        <button class="category-btn active"
        onclick="setCategory('All',this)">All</button>

        <button class="category-btn"
        onclick="setCategory('Electronics',this)">Electronics</button>

        <button class="category-btn"
        onclick="setCategory('Fashion',this)">Fashion</button>

        <button class="category-btn"
        onclick="setCategory('Accessories',this)">Accessories</button>

        <button class="category-btn"
        onclick="setCategory('Home',this)">Home</button>
    </div>

    <div class="products" id="products" style="margin-top:25px">
    </div>

</section>

<section class="section">
    <div class="section-heading">
        <h2>Why Shop With Us?</h2>
    </div>

    <div class="benefits">
        <div class="benefit">
            <span>🚚</span>
            <h3>Free Delivery</h3>
            <p>Free shipping on orders above ₹999.</p>
        </div>

        <div class="benefit">
            <span>🔒</span>
            <h3>Secure Shopping</h3>
            <p>Your shopping experience matters to us.</p>
        </div>

        <div class="benefit">
            <span>💬</span>
            <h3>Customer Support</h3>
            <p>We are here to help you.</p>
        </div>
    </div>
</section>

<footer>
    <h2>ShopSphere.</h2>
    <p>Your destination for quality shopping.</p>
    <p>© <?php echo date("Y"); ?> ShopSphere. All Rights Reserved.</p>
</footer>

<!-- CART -->

<div class="overlay" id="overlay" onclick="closeCart()"></div>

<div class="cart-panel" id="cart-panel">

    <div class="cart-header">
        <h2>Shopping Cart</h2>
        <button class="close-btn" onclick="closeCart()">✕</button>
    </div>

    <div id="cart-items"></div>

    <div class="cart-total">
        Total: ₹<span id="cart-total">0</span>
    </div>

    <button class="checkout-btn" onclick="checkout()">
        Proceed to Checkout →
    </button>

</div>

<script>
// Product data generated by PHP
const products = <?php echo json_encode($products); ?>;

let cart = JSON.parse(localStorage.getItem("shop_cart") || "[]");
let selectedCategory = "All";

function money(amount) {
    return Number(amount).toLocaleString("en-IN");
}

// DISPLAY PRODUCTS

function renderProducts() {

    const search = document.getElementById("search")
        .value.toLowerCase();

    const container = document.getElementById("products");

    const filtered = products.filter(product => {

        const categoryMatch =
            selectedCategory === "All" ||
            product.category === selectedCategory;

        const searchMatch =
            product.name.toLowerCase().includes(search) ||
            product.category.toLowerCase().includes(search);

        return categoryMatch && searchMatch;
    });

    if (filtered.length === 0) {
        container.innerHTML =
            '<div class="empty">No products found.</div>';
        return;
    }

    container.innerHTML = filtered.map(product => `

        <div class="product">

            <img src="${product.image}"
            alt="${product.name}"
            loading="lazy">

            <div class="product-info">

                <small>${product.category}</small>

                <h3>${product.name}</h3>

                <div class="rating">
                    ★★★★★ ${product.rating}
                </div>

                <div class="price">
                    ₹${money(product.price)}
                    <span class="old-price">
                        ₹${money(product.old_price)}
                    </span>
                </div>

                <button class="add-btn"
                onclick="addToCart(${product.id})">
                    Add to Cart +
                </button>

            </div>
        </div>

    `).join("");
}

// CATEGORY FILTER

function setCategory(category, button) {

    selectedCategory = category;

    document.querySelectorAll(".category-btn")
        .forEach(btn => btn.classList.remove("active"));

    button.classList.add("active");

    renderProducts();
}

// ADD TO CART

function addToCart(id) {

    const existing = cart.find(item => item.id === id);

    if (existing) {
        existing.quantity++;
    } else {
        cart.push({
            id: id,
            quantity: 1
        });
    }

    saveCart();

    alert("Product added to cart!");
}

// SAVE CART

function saveCart() {

    localStorage.setItem("shop_cart", JSON.stringify(cart));

    updateCart();
}

// UPDATE CART

function updateCart() {

    const count = cart.reduce(
        (sum, item) => sum + item.quantity, 0
    );

    document.getElementById("cart-count").innerText = count;

    let total = 0;

    const container = document.getElementById("cart-items");

    if (cart.length === 0) {
        container.innerHTML = "<p>Your cart is empty.</p>";
    } else {

        container.innerHTML = cart.map(item => {

            const product = products.find(p => p.id === item.id);

            if (!product) return "";

            total += product.price * item.quantity;

            return `
                <div class="cart-item">

                    <img src="${product.image}" alt="">

                    <div class="cart-item-info">

                        <strong>${product.name}</strong>

                        <p>₹${money(product.price)}</p>

                        <div class="qty">

                            <button onclick="changeQty(${item.id},-1)">-</button>

                            ${item.quantity}

                            <button onclick="changeQty(${item.id},1)">+</button>

                            <button class="remove"
                            onclick="removeItem(${item.id})">
                                Remove
                            </button>

                        </div>

                    </div>
                </div>
            `;
        }).join("");
    }

    document.getElementById("cart-total").innerText =
        money(total);
}

// CHANGE QUANTITY

function changeQty(id, change) {

    const item = cart.find(item => item.id === id);

    if (!item) return;

    item.quantity += change;

    if (item.quantity <= 0) {
        cart = cart.filter(item => item.id !== id);
    }

    saveCart();
}

// REMOVE PRODUCT

function removeItem(id) {

    cart = cart.filter(item => item.id !== id);

    saveCart();
}

// OPEN CART

function openCart() {

    document.getElementById("cart-panel")
        .classList.add("open");

    document.getElementById("overlay")
        .classList.add("show");

    updateCart();
}

// CLOSE CART

function closeCart() {

    document.getElementById("cart-panel")
        .classList.remove("open");

    document.getElementById("overlay")
        .classList.remove("show");
}

// CHECKOUT DEMO

function checkout() {

    if (cart.length === 0) {
        alert("Your shopping cart is empty!");
        return;
    }

    alert(
        "Your cart is ready! Checkout and payment integration " +
        "will be added in the next development phase."
    );
}

// LIVE SEARCH

document.getElementById("search")
    .addEventListener("input", renderProducts);

// INITIALIZE

renderProducts();
updateCart();

</script>

</body>
</html>
