<!DOCTYPE html>
<?php 
    require_once "config.php";
    
    $id = $_GET['id'];
        
?>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: LIBRARIA ::..</title>

        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Responsive Table -->
        <link rel="stylesheet" type="text/css" href="css/responsivetable.css" />

        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="index-2.html">
                                                <img src="images/libraria-logo-v1.png" alt="LIBRARIA" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                                <span>/</span>
                                                <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="topbar-links">
                                                <a href="signin.html"><i class="fa fa-lock"></i>Login / Register</a>
                                                <span>|</span>
                                                <div class="header-cart dropdown">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <small>0</small>
                                                    </a>
                                                    <div class="dropdown-menu cart-dropdown">
                                                        <ul>
                                                            <li class="clearfix">
                                                                <img src="images/header-cart-image-01.jpg" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#">                                           
                                                                        </a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong><?php echo $row['Autore'];?> </div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                            <li class="clearfix">
                                                                <img src="images/header-cart-image-02.jpg" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#"><?php echo $row['Titolo'] . "\n";?></a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                            <li class="clearfix">
                                                                <img src="images/header-cart-image-03.jpg" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#">The Great Gatsby</a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="cart-total">
                                                            <div class="title">SubTotal</div>
                                                            <div class="price">$30.00</div>
                                                        </div>
                                                        <div class="cart-buttons">
                                                            <a href="cart.html" class="btn btn-dark-gray">View Cart</a>
                                                            <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index-2.html">Home</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-2.html">Home V1</a></li>
                                                <li><a href="home-v2.html">Home V2</a></li>
                                                <li><a href="home-v3.html">Home V3</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="books-media-list-view.html">Books &amp; Media</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                                <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                                <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                                <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                                <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="news-events-list-view.html">News &amp; Events</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                                <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="signin.html">Signin/Register</a></li>
                                                <li><a href="404.html">404/Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.html">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog.html">Blog Grid View</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home V1</a></li>
                                            <li><a href="home-v2.html">Home V2</a></li>
                                            <li><a href="home-v3.html">Home V3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="books-media-list-view.html">Books &amp; Media</a>
                                        <ul>
                                            <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                            <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                            <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                            <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                            <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="news-events-list-view.html">News &amp; Events</a>
                                        <ul>
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signin.html">Signin/Register</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Books & Media Listing</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li>Books & Media</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>What are you looking for at the library?</h3>
                                            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">Search by Keyword</label>
                                                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="catalog" id="catalog" class="form-control">
                                                            <option>Search the Catalog</option>
                                                            <option>Catalog 01</option>
                                                            <option>Catalog 02</option>
                                                            <option>Catalog 03</option>
                                                            <option>Catalog 04</option>
                                                            <option>Catalog 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="category" id="category" class="form-control">
                                                            <option>All Categories</option>
                                                            <option>Category 01</option>
                                                            <option>Category 02</option>
                                                            <option>Category 03</option>
                                                            <option>Category 04</option>
                                                            <option>Category 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit" value="Search">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                                <!-- End: Search Section -->
                            </div>
                            <?php
                                $query = "";
                                if (isset($id)){
                                    $query = "SELECT * FROM libri_mario WHERE ID=".$id."";
                                } else {
                                    // $query = "SELECT * FROM libri_mario ORDER BY rand() LIMIT 1";
                                    $query = "SELECT * FROM libri_mario LIMIT 1";
                                }
                                $stmt = $pdo->query($query);

                                while ($row = $stmt->fetch()) {
                            ?>                    
                            <div class="booksmedia-detail-box">
                                <div class="detailed-box">
                                    <div class="col-xs-12 col-sm-5 col-md-3">
                                        <div class="post-thumbnail">
                                            <div class="book-list-icon blue-icon"></div>
                                            <img src="images/books-media/detail-page/detail-page-image.jpg" alt="Book Image">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6">
                                        <div class="post-center-content">
                                            <h2><?php echo $row['Titolo'];?></h2>
                                            <p><strong>Author:</strong> <?php echo $row['Autore'];?></p>
                                            <p><strong>ISBN:</strong> <?php echo $row['ISBN'];?></p>
                                            <p><strong>Rating:</strong> </p>
                                            <p><strong>Edition:</strong> First edition</p>
                                            <p><strong>Publisher:</strong> <?php echo $row['Editore'];?></p>
                                            <p><strong>Length:</strong> <?php echo $row['Numero di pagine'];?> pages.</p>
                                            <p><strong>Format:</strong> DVD</p>
                                            <p><strong>Language Note:</strong> Icelandic dialogue; English subtitles.</p>
                                            <p><strong>Genre :</strong> Feature films, Fiction films, Drama</p>
                                            <p><strong>Topics:</strong> Friendship, Bullies, Pranks, School</p>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Add To Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Mail">
                                                            <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 ">
                                        <div class="post-right-content">
                                            <h4>Available now</h4>
                                            <p><strong>Total Copies:</strong> 01</p>
                                            <p><strong>Available:</strong> 019780062419385</p>
                                            <p><strong>Holds:</strong>  01</p>
                                            <p><strong>On the shelves now at:</strong> Lawrence Public Library</p>
                                            <p><strong>Call #:</strong> 747 STRUTT C</p>
                                            <a 
                                            <a href="#." class="btn btn-dark-gray">Place a Hold</a> 
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>

                                <!--MGN 16/04/2020 Prova recensione da Bootstrap 4 trovato in internet - INIZIO -->
                                <div class="container" style="display:none;">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid">
                                                        <p class="text-secondary text-center">15 Minutes Ago</p>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>
                                                            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                                       </p>
                                                       <div class="clearfix"></div>
                                                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        <p>
                                                            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                                       </p>
                                                    </div>
                                                </div>
                                                        <div class="card card-inner">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid">
                                                                <p class="text-secondary text-center">15 Minutes Ago</p>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                                                                <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                                <p>
                                                                    <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                                                                    <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                                               </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                            </div>
                                        </div>
                                </div>                                
                                <div class="table-tabs" id="responsiveTabs">
                                    <ul class="nav nav-tabs">
                                            <div id="hormenu">
                                                <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Reviews</a></li>
                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB"> Summary </a></li>
                                    </ul> 
    <!--MGN 16/04/
                                    <div class="tab-content">
                                        <div id="sectionA" class="tab-pane fade in active">
                                             2020 Prova recensione da Bootstrap 4 trovato in internet - FINE -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--
Author : Maniruzzaman Akash
Email  : manirujjamanakash@gmail.com
-->

<!--To Work with icons-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="container">
	
	
	<div class="card">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
        	        <p class="text-secondary text-center">15 Minutes Ago</p>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span> <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

        	       </p>
        	       <div class="clearfix"></div>
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        	        <p>
        	            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
        	            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
        	       </p>
        	    </div>
	        </div>
	        	<div class="card card-inner">
            	    <div class="card-body">
            	        <div class="row">
                    	    <div class="col-md-2">
                    	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                    	        <p class="text-secondary text-center">15 Minutes Ago</p>
                    	    </div>
                    	    <div class="col-md-10">
                    	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                    	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    	        <p>
                    	            <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                    	            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    	       </p>
                    	    </div>
                        </div>
            	    </div>
	        </div>
	    </div>
	</div>
</div>
                                            <table class="table table-bordered">
                                            </table>
                                        </div>
                                        <div id="sectionB" class="tab-pane fade in">
                                            <h5>Lorem Ipsum Dolor</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                        <div id="sectionC" class="tab-pane fade in">
                                            <h5>Lorem Ipsum Dolor</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                        <div id="sectionD" class="tab-pane fade in">
                                            <h5>Lorem Ipsum Dolor</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>                                                    
                                        <div id="sectionE" class="tab-pane fade in">
                                            <h5>Lorem Ipsum Dolor</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>                                                    
                                        <div id="sectionF" class="tab-pane fade in">
                                            <h5>Lorem Ipsum Dolor</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
          
        <div class="booksmedia-fullwidth">
            <div class="container">
                <h2 class="section-title text-center">Popular Items</h2>
                    <span class="underline center"></span>
                    <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="popular-items-detail-v2">
                         <?php
                                
                                    // $query = "SELECT * FROM libri_mario ORDER BY id() LIMIT 6";
                                    $query = "SELECT * FROM libri_mario ORDER BY id LIMIT 6";
                               
                                $stmt = $pdo->query($query);

                                while ($row = $stmt->fetch()) {
                            ?> 
                            <li>
                                <div class="book-list-icon blue-icon"></div>
                                <figure>
                                    <img src="images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                                    <figcaption>
                                        <header>
                                            <h4><a href="http://dsglab.netsons.org/books-media-detail-v2.php?id=<?php echo $row['ID'];?>"><?php echo $row['Titolo'];?></a></h4><href=h>
                                            <p><strong>Author:</strong>  <?php echo $row['Autore'];?></p>
                                            <p><strong>ISBN:</strong>  <?php echo $row['ISBN'];?></p>
                                        </header>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                        <i class="fa fa-print"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                        <i class="fa fa-share-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>                                                
                            </li>
                          
                            <?php
                                
                            }
                                
                            ?>
                          
                        </ul>
            </div>
        </div>
       
        <!-- Start: Social Network -->
        <section class="social-network section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Follow Us</h2>
                    <span class="underline center"></span>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <ul>
                    <li>
                        <a class="facebook" href="#" target="_blank">
                            <span>
                                <i class="fa fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="#" target="_blank">
                            <span>
                                <i class="fa fa-twitter"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="google" href="#" target="_blank">
                            <span>
                                <i class="fa fa-google-plus"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="rss" href="#" target="_blank">
                            <span>
                                <i class="fa fa-rss"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" href="#" target="_blank">
                            <span>
                                <i class="fa fa-linkedin"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" href="#" target="_blank">
                            <span>
                                <i class="fa fa-youtube"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End: Social Network -->

        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">About Libraria</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking.
                                </div>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>21 King Street, Melbourne, Victoria 3000 Australia</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:support@libraria.com">support@libraria.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:012-345-6789">+ 012-345-6789</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="footer-widget-title">Quick Links</h3>
                                <span class="underline left"></span>
                                <div class="menu-quick-links-container">
                                    <ul id="menu-quick-links" class="menu">
                                        <li><a href="#">Library News</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Meet Our Staff</a></li>
                                        <li><a href="#">Board of Trustees</a></li>
                                        <li><a href="#">Budget</a></li>
                                        <li><a href="#">Annual Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                        <div class="col-md-2 col-sm-6 widget-container">
                            <div id="text-4" class="widget widget_text">
                                <h3 class="footer-widget-title">Timing</h3>
                                <span class="underline left"></span>
                                <div class="timming-text-widget">
                                    <time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
                                    <time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
                                    <time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
                                    <time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
                                    <ul>
                                        <li><a href="#">Closings</a></li>
                                        <li><a href="#">Branches</a></li>
                                    </ul>
                                </div>
                            </div>			
                        </div>
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div class="widget twitter-widget">
                                <h3 class="footer-widget-title">Latest Tweets</h3>
                                <span class="underline left"></span>
                                <div id="twitter-feed">
                                    <ul>
                                        <li>
                                            <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                        </li>
                                        <li>
                                            <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>			
                        </div>
                    </div>
                </div>                
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-text col-md-3">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="col-md-9 pull-right">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="books-media-list-view.html">Books &amp; Media</a></li>
                                <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                                <li><a href="#">Kids &amp; Teens</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End: Footer -->

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>


</html>