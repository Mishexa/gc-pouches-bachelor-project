<?php
include 'config.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - GC Pouches</title>

    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <header class="header">
        <div class="container navbar">
            <div class="logo">GC Pouches</div>

            <nav class="nav">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="products.php">Products</a>
                <a href="contact.php">Contact</a>
            </nav>
        </div>
    </header>

    <section class="page-banner">
        <div class="container">
            <h1>Products</h1>
        </div>
    </section>

    <section class="products-page">


        <div class="products-grid">

<?php while($row = mysqli_fetch_assoc($result)) { ?>

    <div class="product-card">

        <img src="assets/images/<?php echo $row['image']; ?>" alt="Product">

        <h3><?php echo $row['name']; ?></h3>

        <p><?php echo $row['flavor']; ?></p>

        <span><?php echo $row['strength']; ?></span>

    </div>

<?php } ?>

</div>





        <!-- <div class="container products-grid">

            <div class="product-card">
                <img src="assets/images/product1.jpg" alt="Velo Freezing Peppermint">
                <h3>Velo Freezing Peppermint</h3>
                <span>17mg</span>
            </div>

            <div class="product-card">
                <img src="assets/images/product2.jpg" alt="Zyn Black Cherry">
                <h3>Zyn Black Cherry</h3>
                <span>13.5mg</span>
            </div>

            <div class="product-card">
                <img src="assets/images/product3.jpg" alt="Velo Purple Grape Mini">
                <h3>Velo Purple Grape Mini</h3>
                <span>6mg</span>
            </div>

            <div class="product-card">
                <img src="assets/images/product4.jpg" alt="Zyn Red Fruits">
                <h3>Zyn Red Fruits</h3>
                <span>6mg</span>
            </div>

        </div> -->






    </section>

    <footer class="footer">
        <div class="container">
            <p>© 2026 GC Pouches. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>