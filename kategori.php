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

        .navbar-nav li a:hover,
        .navbar-nav .active a {
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

        .btn-primary,
        .btn-cart,
        .navbar-btn {
            background-color: var(--primary-color) !important;
            color: white !important;
        }

        .btn-primary:hover,
        .btn-cart:hover,
        .navbar-btn:hover {
            background-color: var(--secondary-color) !important;
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

        /* Sidebar - Daftar Warung */
        .sidebar-menu {
            background-color: var(--primary-color) !important;
            color: white !important;
            border-radius: 5px;
            padding: 10px;
        }

        .sidebar-menu .panel-heading {
            background-color: var(--secondary-color) !important;
            color: white !important;
            font-weight: bold;
            text-align: center;
        }

        .sidebar-menu .nav-pills li a {
            color: white !important;
            padding: 10px;
            display: block;
            transition: background 0.3s ease-in-out;
        }

        .sidebar-menu .nav-pills li a:hover {
            background-color: #1B5E20 !important;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #1B5E20;
            color: white;
            margin-top: 20px;
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
                    <img src="UAS.png" class="visible-xs"><span class="sr-only">E-Del - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="cart.php">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Keranjang Belanja</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Home</a>
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
                <?php
                error_reporting(0);                     
                    if (!$_SESSION['keranjang']) {
                    ?>
                        <div class="navbar-collapse collapse right" id="basket-overview">
                            <a href="cart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Keranjang Belanja</span></a>
                        </div>
                    <?php        
                    }
                    else{
                    $item = count($_SESSION['keranjang']);
                    ?>
                        <div class="navbar-collapse collapse right" id="basket-overview">
                            <a href="cart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Keranjang Belanja (<?php echo $item;?>)</span></a>
                        </div>
                    <?php
                    }
                ?>
                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" name="search_query" id="search_query" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

                            <button type="submit" id="button_find" class="btn btn-primary"><i class="fa fa-search"></i></button>

                        </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***-->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Kategori</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <?php
                                $query = $conn->query("SELECT * FROM warung");

                                while ($data = $query->fetch_assoc()) {
                                ?>
                                    <li>
                                        <a href="kategori.php?id=<?php echo $data['id_warung']; ?>"><?php echo $data['nama_warung']; ?></a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h2>Kategori Pilihan :</h2>
                        <?php

if (isset($_GET['id'])) {
    $id_kategori = $_GET['id'];
    $query2 = $conn->query("SELECT * FROM warung WHERE id_warung=$id_kategori");
    $data2 = $query2->fetch_assoc();
    echo "<h1>" . $data2['nama_warung'] . "</h1>";
    echo "<p>" . $data2['alamat warung'] . "</p>";
} else {
    echo "<h1>Semua Menu</h1>";
    echo "<p>Berikut semua menu yang tersedia</p>";
}
?>

                    </div>
                    <div class="row products">
                    <?php
if (isset($_GET['id'])) {
    $id_kategori = $_GET['id'];
    $query3 = $conn->query("SELECT * FROM produk WHERE id_warung=$id_kategori");
} else {
    $query3 = $conn->query("SELECT * FROM produk");
}

while ($data3 = $query3->fetch_assoc()) {
?>

                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail_produk.php?id=<?php echo $data3['id_produk']; ?>">
                                                    <img src="foto_produk/<?php echo $data3['foto_produk']; ?>" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="detail_produk.php?id=<?php echo $data3['id_produk']; ?>">
                                                    <img src="foto_produk/<?php echo $data3['foto_produk']; ?>" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail_produk.php?id=<?php echo $data3['id_produk']; ?>" class="invisible">
                                        <img src="foto_produk/<?php echo $data3['foto_produk']; ?>" alt="" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><a href="detail_produk.php?id=<?php echo $data3['id_produk']; ?>"><?php echo $data3['nama_produk']; ?></a></h3>
                                        <p class="price">Stok : <?php echo $data3['stok']; ?></p>
                                        <p class="price">Rp.<?php echo number_format($data3['harga_produk']); ?></p>
                                        <p class="buttons">
                                            <a href="detail_produk.php?id=<?php echo $data3['id_produk']; ?>" class="btn btn-default">View detail</a>
                                            <a href="buy.php?id=<?php echo $data3['id_produk']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                    <!-- /.text -->
                                </div>
                                <!-- /.product -->
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- /.products -->
                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
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