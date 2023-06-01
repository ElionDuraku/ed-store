<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="./images/s.jpg">
    <title>EDSTORE</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!--!-------------------------------- HEADER SECTION STARTS ----------------------------------------------------->



<!--!-------------------------------- NAVBAR SECTION STARTS ------------------->
<header class="header">

    <a href="#" class="logo"> <i class="fas fa-cart-plus "></i> EDSTORE </a>

    <nav class="navbar">
        <a href="home.html">home</a>
        <!-- <a href="features.html">features</a> -->
        <a href="hotdeal.html">hot deal</a>
        <a href="apple.html">apple</a>
        <a href="samsung.html">samsung</a>
        <a href="computers.html">computers</a>
        <a href="tv.html">TV</a>
        <a href="watches.html">Watches</a>
        <a href="contact.html">contact</a>
       
    </nav>

<!--!-------------------------------- NAVBAR SECTION ENDS ------------------->



 <!-- search & login &darkmode  icon section starts -->
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
        <div class="fas fa-moon" id="theme-toggler"></div>
    </div>
 <!-- search & login icon section ends -->

    
<!--  search section starts -->
     <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form> 
<!-- search section ends -->


    
<!-- login form section starts -->
    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form> 
<!-- login form section ends -->

</header>

<!--!-------------------------------- HEADER SECTION ENDS ----------------------------------------------------->



<!--!-------------------------------- BANNER SECTION STARTS --------------------------------------------------->

<section class="home" id="home">

    <div class="content">
        <h3>ED <span>STORE</span> DEALS</h3>
        <p>Welcome to our online store, here you can find different types of technological products such as
            : mobile, computers, laptops, smart TV, smart watches etc ..</p>
        <!-- <a href="#" class="btn">shop now</a> -->
        

    </div>

</section>

<!--!-------------------------------- BANNER SECTION ENDS ----------------------------------------------------->




<!--!-------------------------------- HOTDEALS SECTION STARTS ----------------------------------------------------->

 <section class="products" id="hotdeals">

    <h1 class="heading"> hot <span>deal</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone12ProMax.png" alt="">
                <h3>iphone 12 Pro Max</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone13.png" alt="">
                <h3>iphone 13 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/samsung/s21.jpg" alt="">
                <h3>samsung s21 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/mac.png" alt="">
                <h3>mac</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/airpods.jpg" alt="">
                <h3>airpods</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/watches/smartwatch-w.png" alt="">
                <h3>smart watch</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone12ProMax.png" alt="">
                <h3>iphone 12 Pro Max</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone13.png" alt="">
                <h3>iphone 13 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/samsung/s21.jpg" alt="">
                <h3>samsung s21 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/mac.png" alt="">
                <h3>mac</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/airpods.jpg" alt="">
                <h3>airpods</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/watches/smartwatch-w.png" alt="">
                <h3>smart watch</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone12ProMax.png" alt="">
                <h3>iphone 12 Pro Max</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone13.png" alt="">
                <h3>iphone 13 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/samsung/s21.jpg" alt="">
                <h3>samsung s21 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/mac.png" alt="">
                <h3>mac</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/airpods.jpg" alt="">
                <h3>airpods</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/watches/smartwatch-w.png" alt="">
                <h3>smart watch</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone12ProMax.png" alt="">
                <h3>iphone 12 Pro Max</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone13.png" alt="">
                <h3>iphone 13 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/samsung/s21.jpg" alt="">
                <h3>samsung s21 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/mac.png" alt="">
                <h3>mac</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/airpods.jpg" alt="">
                <h3>airpods</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/watches/smartwatch-w.png" alt="">
                <h3>smart watch</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone12ProMax.png" alt="">
                <h3>iphone 12 Pro Max</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone13.png" alt="">
                <h3>iphone 13 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/samsung/s21.jpg" alt="">
                <h3>samsung s21 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/mac.png" alt="">
                <h3>mac</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/airpods.jpg" alt="">
                <h3>airpods</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/watches/smartwatch-w.png" alt="">
                <h3>smart watch</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone12ProMax.png" alt="">
                <h3>iphone 12 Pro Max</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/AppleiPhone13.png" alt="">
                <h3>iphone 13 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/samsung/s21.jpg" alt="">
                <h3>samsung s21 </h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/mac.png" alt="">
                <h3>mac</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/apple/appleOthers/airpods.jpg" alt="">
                <h3>airpods</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/watches/smartwatch-w.png" alt="">
                <h3>smart watch</h3>
                <!-- <div class="price"> $0 </div> -->
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">shop now</a>
            </div>

        </div>

    </div>

</section> 

<!--!-------------------------------- HOTDEALS SECTION ENDS ----------------------------------------------------->


<!--!-------------------------------- FOOTER SECTION STARTS ------------------------------------------------------------>
<section class="footer" id="footer">
    

    <div class="box-container">

        <div class="box">
            <h3> EDSTORE <i class="fas fa-cart-plus"></i> </h3>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <!-- <a href="#" class="fab fa-twitter"></a> -->
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-github"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> eliondurku11@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Prishtine, Kosovo</a>
        </div>

        <div class="box">
            <h3>more contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +383 (49) 246-606 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +383 (49) 246-606 </a>
        </div>
    

        <!-- <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> contact </a>
        </div> -->
        <!-- <div class="box">
            <h3>contact on email</h3>
            <form id="fr1">
                <form method="post" action="mailto:email.com?subject=subject&message=message"></form>
                <input type="text" id="tb1" />
                <input type="text" id="tb2" />
                <input type="button" id="bt1" value="click" />
            </form>
        </div> -->

    </div>

    <div class="credit"> created by <span> <b>ED </b><i class="fa fa-laptop"></i> </span> | all rights reserved </div>

</section>

<!--!-------------------------------- FOOTER SECTION ENDS ---------------------------------------------->



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script defer src="js/script.js"></script>

</body>
</html>