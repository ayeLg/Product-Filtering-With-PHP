<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumpstart Mobile Store</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!--    jquery ui css-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />-->
    <link href = "jqueryui/jquery-ui.css" rel = "stylesheet">
    <!--    Jquery Ui js-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>-->
<!--    <script src="jqueryui/jquery-ui.js"></script>-->

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php 
    // require functions php file
    require('functions.php');
   ?>
</head>

<body>

    <!-- Start #header -->
    <header id="header">


        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Jumpstart Mobile Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik ">
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="products.php">Products</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="#">About us </a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="#">Contect Us</a>
                        </li>

                    </ul>
                    <form action="" class="font-size-14 font-rale">
                        <a href="cart.php" class="py-2 rounded-pill color-primary-bg">

                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py2 rounded-pill text-dark bg-light"><?php echo count( $product->getData('cart')) ?></span>

                        </a>
                    </form>
                    <div class="strip px-4 py-1 ">

                        <div class="font-rale font-size-14">
                            <a href="#" class="px-3 border-end border-start text-dark">Whishlist (0) </a>
                            <?php
                                if(isset($_SESSION['email'])) {
                                    $user_data = $user->check_login();
//                                    var_dump($user_data);
                                    ?>
                                    <a href="Template/user/_logout.php" class="px-3 border-end border-start text-dark"> <?php echo $user_data["first_name"] ?></a>

                            <?php
                                } else {
                                    ?>


                                    <a href="user.php" class="px-3 border-end border-start text-dark">login</a>

                                  <?php
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Primary Navigation -->
    </header>
    <!-- !Start #header -->

    <!-- start #main-site  -->
    <main id="main-site">