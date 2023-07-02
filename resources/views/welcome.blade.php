<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishok</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    
    <!-- favicon here  -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- favicon ends here  -->

</head>
<body>
    
    <header class="header">

        <a href="#" class="logo"> <img src="images/logo.png"></i> Krishok </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="{{'product_list'}}">product</a>
            <a href="#about">about</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <div id="cart-btn" class=""></div>
            <div id="login-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        <?php ?>
        <!-- shopping cart -->

        <div class="shopping-cart">

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="images/cart1.jpg" alt="">
                <div class="content">
                    <h3>Watermelon</h3>
                    <span class="price">₹115/kg</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="images/cart2.jpg" alt="">
                <div class="content">
                    <h3>Corn</h3>
                    <span class="price">₹30/kg</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="images/cart3.png" alt="">
                <div class="content">
                    <h3>Onion</h3>
                    <span class="price">₹21/kg</span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="images/cart4.jpg" alt="">
                <div class="content">
                    <h3>Potato</h3>
                    <span class="price">₹31/kg</span>
                </div>
            </div>
            <h3 class="total"> total: <span> ₹197</span></h3>
            <a href="#" class="btn">checkout</a>
        </div>

        <!-- end -->

        <!-- login -->

       <!--  <form action="{{ url('user/login')}}" method="POST" class="login-form">
            {{ csrf_field() }}
            <h3>login form</h3>

            <input type="email" placeholder="enter your email" name="user_email" class="box">
            <input type="password" placeholder="enter your password" name="user_password" class="box">

            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <button class="btn">Login</button>
            <p class="pt-3 text-center" style="font-size: 15px;">  
                <span class="text-muted"> Not a member? </span>  
                <a href="user/register"> Sign up </a>  
            </p>  

        </form> -->

    </header>

    <!-- login-Modal -->
    <!-- <div id="modal" class="modal">
        <div class="modal-content">
            <button id="btn1">Button 1</button>
            <button id="btn2">Button 2</button>
        </div>
    </div> -->
    <div class="modal" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="images/buyer_img.png" height="100" width="100">
                        <div class="clearfix"></div>
                        <hr>
                        <button class="btn btn-default" id="btn1" style="padding: 0.6rem 2rem !important;font-size: 1.6rem !important;">Are you want to Buy</button>
                    </div>
                    <div class="col">
                        <img src="images/farmer_img.jpg" height="100" width="100">
                        <div class="clearfix"></div>
                        <hr>
                        <button class="btn btn-default" id="btn2" style="padding: 0.6rem 1rem !important;font-size: 1.6rem !important;">Are you want to Sell</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <button type="button" class="btn btn-secondary" id="modal_close" data-dismiss="modal" style="padding: 0.6rem 1rem !important;font-size: 1.6rem !important; align-items: left !important;">Close</button>
        </div>
    </div>
    </div>
    </div>

    <!-- end -->

    <!-- home -->

    <section class="home" id="home" style="background-image: url('{{asset('images/home_bg.jpg')}}');">

        <div class="content">
            <h3> <span> </span></h3>
            <a href="{{'product_list'}}" class="btn"> Buy now </a>
        </div>

    </section>

    <!-- end -->

    <!-- banner -->

    <section class="banner-container">

        <div class="banner">
            <img src="images/banner1.png" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Vegetables</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/banner2.png" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>fruits</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/banner3.png" alt="">
            <div class="content">
                <span>limited sales</span>
                <h3>Combo basket</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

    </section>


    <!-- end -->

    <!-- product -->

    <section class="product" id="product">

        <h1 class="heading"> Top <span>products</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/product-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Potato</h3>
                    <div class="price">₹31/kg</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <!-- <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-eye"></i> -->
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/product-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Onion</h3>
                    <div class="price">₹21/kg</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <!-- <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-eye"></i> -->
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/product-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Corn</h3>
                    <div class="price">₹30/kg</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                   <!--  <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-eye"></i> -->
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/product-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Watermelon</h3>
                    <div class="price">₹115/kg</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                   <!--  <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-eye"></i> -->
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/product-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cucumber</h3>
                    <div class="price">₹35/kg</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <!-- <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-eye"></i> -->
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/product-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mushroom</h3>
                    <div class="price">₹64/kg</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <!-- <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-eye"></i> -->
                </div>
            </div>

        </div>

    </section>

    <!-- end -->

    <!-- about -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about </span> us </h1>

        <div class="row">

            <div class="content">
                <h3>We deliver organic fresh Vegetables and fruits from farm</h3>
                <div class="divider"></div>
                <p>Welcome to Krishok, the online platform where farmers can sell their fresh and delicious fruits and vegetables directly to customers without any intermediaries involved. At Krishok, we believe in empowering farmers by providing them with a platform to sell their produce directly to customers and earn a fair price for their hard work.

We understand the importance of fresh and healthy produce, which is why we guarantee that all the fruits and vegetables sold on our platform are of the highest quality. We work closely with farmers to ensure that the produce is grown and harvested using the best practices and techniques. This not only ensures the quality of the produce but also helps in promoting sustainable farming practices.</p>
                <p>Our platform makes it easy for customers to browse through a wide range of fresh fruits and vegetables and place an order within minutes. We offer a seamless and hassle-free shopping experience, and customers can expect delivery within 24 hours of placing the order. Our delivery partners ensure that the produce is delivered fresh and in the best possible condition.

At Krishok, we are committed to promoting sustainable agriculture and supporting farmers in their efforts to grow healthy and nutritious produce. We believe in creating a fair and transparent system where both farmers and customers benefit. Join us in our mission to promote healthy eating and support local farmers.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="image">
                <img src="images/about1.png" alt="">
            </div>

            <div class="image">
                <img src="images/about2.png" alt="">
            </div>

        </div>

    </section>


    <!-- end -->

    <!-- review -->

    <section class="review" id="review">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut voluptatum sunt mollitia tempora, vitae consectetur.</p>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-1.png" alt="">
                        <div class="user-info">
                            <h3>Debobrata Karmakar</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut voluptatum sunt mollitia tempora, vitae consectetur.</p>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-1.png" alt="">
                        <div class="user-info">
                            <h3>Sambit Goswami</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut voluptatum sunt mollitia tempora, vitae consectetur.</p>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-1.png" alt="">
                        <div class="user-info">
                            <h3>Tiyasha Mukherjee</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut voluptatum sunt mollitia tempora, vitae consectetur.</p>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-1.png" alt="">
                        <div class="user-info">
                            <h3>Rajesh Kumar Pakal</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut voluptatum sunt mollitia tempora, vitae consectetur.</p>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-1.png" alt="">
                        <div class="user-info">
                            <h3>Krishna Kumar Sah</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut voluptatum sunt mollitia tempora, vitae consectetur.</p>
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review-1.png" alt="">
                        <div class="user-info">
                            <h3>Arkadeb Mondal</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- end -->
    <!-- contact -->

    <section class="contact" id="contact">

        <h1 class="heading"> contact <span> now </span> </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact.png" alt="">
            </div>

            <form action="">

                <div class="inputBox">
                    <input type="text" placeholder="first name">
                    <input type="text" placeholder="last name">
                </div>

                <div class="inputBox">
                    <input type="email" placeholder="email address">
                    <input type="number" placeholder="phone">
                </div>

                <textarea placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="submit" class="btn">
            </form>

        </div>

    </section>

    <!-- end -->

    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>find us here</h3>
                <p>Krishok "Buy and sell organic fruits and vegetables directly from the farm at lowest price".</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact us</h3>
                <p>+91 123456789</p>
                <a href="#" class="link">contactus@krishok.com</a>
            </div>

            <div class="box">
                <h3>address</h3>
                <p>398, Ramkrishnapur Rd,<br>
                 near Jagadighata Market,  <br>
                Barasat, Kolkata, West Bengal 700125 
                </p>
            </div>

        </div>

        <div class="credit">created by <span> Debobrata,Sambit,Rajesh,Tiyasha,Krishna,Arka </span> all rights reserved!</div>

    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
    let cart = document.querySelector('.shopping-cart');

        document.querySelector('#cart-btn').onclick = () =>{
        cart.classList.toggle('active');
        login.classList.remove('active');
        navbar.classList.remove('active');
        }

        let login = document.querySelector('.login-form');

        document.querySelector('#login-btn').onclick = () =>{
        // location.href = "http://localhost:8000/userloginView";
        document.querySelector('#modal').style.display = 'block';
        // login.classList.toggle('active');
        // cart.classList.remove('active');
        // navbar.classList.remove('active');
        }
        document.querySelector('#modal_close').onclick = () =>{
           document.querySelector('#modal').style.display = 'none'; 
        }

        document.querySelector('#btn1').onclick = function() {
            location.href = "http://localhost:8000/userloginView";
        };

        document.querySelector('#btn2').onclick = function() {
            location.href = "http://localhost:8000/farmer_login";
        };   

        let navbar = document.querySelector('.navbar');

        document.querySelector('#menu-btn').onclick = () =>{
        navbar.classList.toggle('active');
        cart.classList.remove('active');
        login.classList.remove('active');
        }

        window.onscroll = () =>{
        login.classList.remove('active');
        navbar.classList.remove('active');
        cart.classList.remove('active');
        }

        var swiper = new Swiper(".review-slider", {
        spaceBetween:20,
        centeredSlides: true,
        autoplay: {
            delay: 7500,
            disableOnInteraction: false,
        },
        loop: true,
        breakpoints: {
            0:{
            slidesPerView: 1,
            },
            768:{
            slidesPerView: 2,
            },
            991:{
            slidesPerView: 3,
            },
        },
        });
    </script>
</body>
</html>