<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">


</head>
<body>

<!-- header section starts  -->

<header class="header" style="margin-top: -40px; height:100px">
    <a href="" class="logo"> <i class=""><img src="{{asset('image/brand-logo.png')}}" alt="" width="100px" height="80px" class="d-inline-block align-text-top"style="margin-top: 15px;" ></i> </a>
    
    <a href="http://127.0.0.1:8000/dashboard" class="logo" style="margin-left:-500px">  Home </a>
    <a href="http://127.0.0.1:8000/shop" class="logo" style="margin-left:-500px">  Shop </a>
    <a href="http://127.0.0.1:8000/about" class="logo" style="margin-left:-500px">  About </a>
    <a href="http://127.0.0.1:8000/contact" class="logo" style="margin-left:-500px">  Contact Us </a>

    

    

    <div class="icons">
        
        <div id="menu-btn" class="fa fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"> {{ Auth::user()->name }}</div>
        


        
    </div>

</header>

<!-- header section ends  -->

<!-- closer btn  -->

<div id="closer" class="fas fa-times"></div>




<section class="heading">
    <h3 > <br> about us</h3>
    
</section>

<section class="about">

    <div class="image">
        <img src="{{asset('image/about-img.jpg')}}" alt="">
    </div>

    <div class="content">
        <span>Welcome to Comfy Living Furniture Shop</span>
        <h3>We make your home more astonishing</h3>
        <p>Think of comfortable furniture – Think of us.</p>
        
        <a href="#" class="btn">read more</a>
    </div>

</section>

<section class="services">

    <h1 class="title"> <span>our services</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/serv-1.svg" alt="">
            <h3>product selling</h3>
            <p>We proudly design and develop our entire range of furniture products.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/serv-2.svg" alt="">
            <h3>product designing</h3>
            <p>We combine creativity and craftsmanship to create furniture suited for discerning customers.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/serv-3.svg" alt="">
            <h3>24 / 7 support</h3>
            <p>We hear our loyal customers and we are more than happy to assist you at any time of the day</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>




<section class="team">

    <h1 class="title"> <span>our team</span>  </h1>

    <div class="box-container">
        

        
        <div class="box" style="width: 400px; margin-left:20rem">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
            <div class="image">
                <img src="image/atiq.jpg" alt="">
            </div>
            <div class="user">
                <h3>Muhammad Atiq Abdullah</h3>
                <span>FullStack Developer</span>
            </div>
        </div>

        <div class="box" style="width: 400px;">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
            <div class="image">
                <img src="image/uzi.jpeg" alt="" >
            </div>
            <div class="user">
                <h3>Muhammad Uzair</h3>
                <span>FullStack Developer</span>
            </div>
        </div>

        



    </div>

</section>















<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Company</h3>
            <a href="home.html"><i></i>   About us</a>
            <a href="shop.html"><i></i>   Career</a>
            <a href="about.html"> <i></i>  Services</a>
            
            <a href="contact.html"><i></i>  contact</a>
        </div>

        <div class="box">
            <h3>Other Info</h3>
            <a href="#"><i></i>  Terms & Conditions</a>
            <a href="#"> <i></i>  Privacy Policy</a>
            <a href="#"> <i></i>  License</a>
            
        </div>

        <div class="box">
            <h3>Media</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" placeholder="Enter your email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

</section>

<section class="credit">

</section>

<!-- custom js file link  -->
<script src="{{asset('frontend/js/script.js')}}"></script>
    
</body>
</html>