<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>

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



<!-- shopping cart  -->

<div class="shopping-cart">

    

    <a href="#" class="btn">Checkout</a>

</div>



<section class="heading">
    
    <h3><br>our shop</h3>
    
</section>

<section class="category">

    <h1 class="title"> <span>Our Categories</span> <a href="#">view all >></a> </h1>

    <div class="box-container" >

        <a href="http://127.0.0.1:8000/lamps" class="box">
            <img src="image/icons8-wall-lamp-100.png" alt="">
            <h3>Lamps</h3>
        </a>

        <a href="http://127.0.0.1:8000/chairs" class="box" >
            <img src="image/icons8-lounge-chair-100.png" alt="">
            <h3 >Chairs</h3>
        </a>

        <a href="http://127.0.0.1:8000/tables" class="box">
            <img src="image/icons8-coffee-table-100.png" alt="">
            <h3>Tables</h3>
        </a>

        <a href="http://127.0.0.1:8000/drawers" class="box" >
            <img src="image/icons8-bureau-100.png" alt="">
            <h3 >Drawers</h3>
        </a>

        <a href="http://127.0.0.1:8000/sofas" class="box" style="background-color: #244d4d; ">
            <img src="image/icons8-sofa-white.png" alt="">
            <h3 style="color: #fff">Sofas</h3>
        </a>
        <a href="http://127.0.0.1:8000/mirrors" class="box">
            <img src="image/icons8-mirror-100.png" alt="">
            <h3>Mirrors</h3>
        </a>

    </div>

</section>

<section class="products">

    <h1 class="title"> <span>our products</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/sofa-1.png')}}" alt=""style="height: 200px;width:250px ; margin-top:5rem;margin-left:3rem">
            </div>
            <div class="content">
                <div class="price">$150.00</div>
                <h3>Yellow Sofa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (45) </span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/sofa-2.png')}}" alt="" style="height: 200px;width:300px ; margin-top:5rem;margin-left:1rem">
            </div>
            <div class="content">
                <div class="price">$140.00</div>
                <h3>Modern Sofa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (50) </span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/sofa-3.png')}}" alt=""style="height: 200px;width:300px ; margin-top:5rem;margin-left:0rem">
            </div>
            <div class="content">
                <div class="price">$100.00</div>
                <h3>White Sofa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (50) </span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/sofa-4.png')}}" alt=""style="height: 200px;width:300px ; margin-top:5rem;margin-left:0rem">
            </div>
            <div class="content">
                <div class="price">$120.00</div>
                <h3>Stylish Sofa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (50) </span>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/sofa-5.png')}}"alt=""style="height: 200px;width:300px ; margin-top:5rem;margin-left:0rem">
            </div>
            <div class="content">
                <div class="price">$160.00</div>
                <h3>Sofa Bed Couch</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (50) </span>
                </div>
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