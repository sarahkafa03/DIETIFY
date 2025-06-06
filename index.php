<?php
    session_start();    
    include 'koneksi.php';

    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">

    <title>
    Dietify : Eat Healthy
    </title>
    <style>
        /* Warna utama */
:root {
    --primary-color: #2E7D32;
    --secondary-color: #66BB6A;
    --background-color: #F1F8E9;
    --text-color: #333;
}

/* Reset dasar */
body {
    font-family: Arial, sans-serif;
    background-color: var(--background-color);
    color: var(--text-color);
    margin: 0;
    padding: 0;
}

/* Header */
.header {
    background-color: #1B5E20;
    color: white;
    padding: 10px;
    text-align: right;
}

.header a {
    color: white;
    text-decoration: none;
    margin-left: 10px;
}

/* Navbar */
.navbar {
    background-color: #9CCE24 !important;
    border-bottom: 3px solid #2e7d32;
}

.navbar-nav {
    list-style: none;
    padding: 0;
    margin: 0;
}

.navbar-nav li {
    display: inline-block;
}

.navbar-nav li a {
    color: white !important;
    font-weight: bold;
    padding: 15px 20px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.navbar-nav li a:hover, .navbar-nav .active a {
    background-color: #1b5e20 !important;
    color: #c8e6c9 !important;
}

/* Tombol */
.btn {
    display: inline-block;
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}

.btn-primary, .btn-cart {
    background-color: var(--primary-color);
    color: white;
}

.btn-primary:hover, .btn-cart:hover {
    background-color: var(--secondary-color);
}

.btn-cart {
    display: flex;
    align-items: center;
}

/* Produk */
.product-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
}

.product-card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 15px;
    padding: 15px;
    width: 250px;
    text-align: center;
    transition: transform 0.2s;
}

.product-card:hover {
    transform: scale(1.05);
}

.product-card img {
    width: 100%;
    border-radius: 5px;
}

.product-title {
    font-weight: bold;
    margin-top: 10px;
}

.product-stock {
    font-size: 14px;
    color: #666;
}

.product-price {
    font-size: 18px;
    color: var(--primary-color);
    font-weight: bold;
}

/* Keranjang Belanja */
#basket-overview a {
    background-color: #2e7d32 !important;
    border-color: #1b5e20 !important;
    color: white !important;
    font-weight: bold;
    transition: 0.3s ease-in-out;
}

#basket-overview a:hover {
    background-color: #1b5e20 !important;
}

/* Footer */
footer {
    text-align: center;
    padding: 10px;
    background-color: #1B5E20;
    color: white;
    margin-top: 20px;
}
.col-md-12 {
    color: green;
}
.col-md-12 h2 {
    color: green !important;
}
a[href="warung.php"] {
    color: green;
    text-decoration: none; /* Opsional: Menghilangkan garis bawah */
}

a[href="warung.php"]:hover {
    color: darkgreen; /* Warna lebih gelap saat hover */
}
.cek-hijau {
    color: #28a745 !important; /* Hijau Bootstrap */
    font-weight: bold;
    text-decoration: none;
}




</style>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="asset/css/font-awesome.css" rel="stylesheet">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/animate.min.css" rel="stylesheet">
    <link href="asset/css/owl.carousel.css" rel="stylesheet">
    <link href="asset/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="asset/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="asset/css/custom.css" rel="stylesheet">

    <script src="asset/js/respond.min.js"></script>

    <link rel="shortcut icon" href="logo.jpg">
</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
 <?php session_start(); ?>
<div id="top">
    <div class="container">
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li>
                    <?php if (isset($_SESSION['login'])): ?>
                        <a href="profile.php">Welcome, <?php echo $_SESSION['login']['nama_pelanggan']; ?></a>
                    <?php else: ?>
                        <a href="login.php">Silakan Login</a>
                    <?php endif; ?>
                </li>
                <?php if (isset($_SESSION['login'])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>


    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

 <div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="UAS.png" class="hidden-xs">
                    <img src="UAS.png" class="visible-xs"><span class="sr-only"> go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li> <a href="kategori.php">Menu</a>
                    </li>
                    
                    <li> <a href="contact.php">Contact Us</a>
                    </li>
                    <li> <a href="pesanan_saya.php">Pesanan Saya</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">
    <div class="navbar-collapse collapse right" id="basket-overview">
        <?php if (!isset($_SESSION['login'])): ?>
            <a href="login.php" class="btn btn-primary navbar-btn" onclick="alert('Silakan login terlebih dahulu untuk melihat keranjang!')">
                <i class="fa fa-shopping-cart"></i>
                <span class="hidden-sm">Keranjang Belanja</span>
            </a>
        <?php else: ?>
            <?php
                $item = isset($_SESSION['keranjang']) ? count($_SESSION['keranjang']) : 0;
            ?>
            <a href="cart.php" class="btn btn-primary navbar-btn">
                <i class="fa fa-shopping-cart"></i>
                <span class="hidden-sm">Keranjang Belanja (<?php echo $item; ?>)</span>
            </a>
        <?php endif; ?>
    </div>
</div>

     </div>
     <!-- /.container -->
 </div>
 <!-- /#navbar -->

 <!-- *** NAVBAR END *** -->



 <div id="all">

    <div id="content">

        <div class="container">
            <div class="col-md-12">
                <div id="main-slider">
                    <?php 
                    $q_slider=$conn->query("SELECT * FROM produk ORDER BY RAND() LIMIT 5");
                    while ($slider=$q_slider->fetch_assoc()) {
                        ?>
                        <div class="item">
                            <img src="foto_produk/<?php echo $slider['foto_produk']; ?>" style="height:553px;width:1200px;" class="img-responsive">
                        </div>
                        <?php
                    }
                    ?>  
                </div>
                <!-- /#main-slider -->
            </div>
        </div>

<!-- *** ADVANTAGES HOMEPAGE ***
_________________________________________________________ -->
<div id="advantages">

    <div class="container">
        <div class="same-height-row">
            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon"><i class="fa fa-star"></i>
                    </div>
                    <h3>Rating</h3>
                    <p>Berikan bintang kepada makanan yang kamu sukai</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon"><i class="fa fa-map-marker"></i>
                    </div>
                    <h3>Spesial untuk Kamu yang Lagi Diet</h3>
                    <p>Aplikasi ini di khususkan untuk informasi makanan, minuman, dan snack yang Lezat, Sehat, Tanpa Rasa Bersalah!</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon"><i class="fa fa-thumbs-up"></i>
                    </div>
                    <h3>Informasi Lengkap</h3>
                    <p>Aplikasi ini akan memberikan informasi lengkap dan terpecaya untuk kamu pejuang diet</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /#advantages -->

<!-- *** ADVANTAGES END *** -->

<!-- *** HOT PRODUCT SLIDESHOW ***
_________________________________________________________ -->
<div id="hot">

    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>Menu Favorit</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-slider">
            <?php  
            $query=$conn->query("SELECT*FROM produk ORDER BY likes DESC");
            while ($data=$query->fetch_assoc()) {
                ?>
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <a href="detail_produk.php?id=<?php echo $data['id_produk']; ?>">
                                        <img src="foto_produk/<?php echo $data['foto_produk'];?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="detail_produk.php?id=<?php echo $data['id_produk']; ?>">
                                        <img src="foto_produk/<?php echo $data['foto_produk'];?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="detail_produk.php?id=<?php echo $data['id_produk']; ?>" class="invisible">
                            <img src="foto_produk/<?php echo $data['foto_produk'];?>" alt="" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="detail_produk.php?id=<?php echo $data['id_produk']; ?>"><?php echo $data['nama_produk']; ?></a></h3>
                            <p class="price">Rp.<?php echo number_format($data['harga_produk']); ?></p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
                <?php
            }
            ?>
        </div>
        <!-- /.product-slider -->
    </div>
    <!-- /.container -->

</div>
<!-- /#hot -->

<!-- *** HOT END *** -->

<div class="box text-center" data-animate="fadeInUp">
    <div class="container">
        <div class="col-md-12">
            <h3 class="text-uppercase"> DIETIFY  </h3>

            <p class="lead">Penasaran dengan produk - produk kami? 
  <a href="all-menu.php" class="cek-hijau">Cek sekarang juga!</a>
</p>

        </div>
    </div>
</div>

<div class="container">

    <div class="col-md-12" data-animate="fadeInUp">

    </div>

</div>
<!-- /#blog-homepage -->
</div>
</div>
<!-- /.container -->

<!-- *** BLOG HOMEPAGE END *** -->


</div>
<!-- /#content -->

        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
 <div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">©DIETIFY </p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">UAS PEMWEB by PTI D
            </p>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END *** -->

</div>
<!-- /#all -->
    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
 <script src="asset/js/jquery-1.11.0.min.js"></script>
 <script src="asset/js/bootstrap.min.js"></script>
 <script src="asset/js/jquery.cookie.js"></script>
 <script src="asset/js/waypoints.min.js"></script>
 <script src="asset/js/modernizr.js"></script>
 <script src="asset/js/bootstrap-hover-dropdown.js"></script>
 <script src="asset/js/owl.carousel.min.js"></script>
 <script src="asset/js/front.js"></script>


</body>

</html>