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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <script src="jquery.js"></script>
  

</head>
<body>

<!-- header section starts  -->


<header class="header" style="margin-top: -40px; height:100px">
    <a href="" class="logo"> <i class=""><img src="{{asset('image/brand-logo.png')}}" alt="" width="100px" height="80px" class="d-inline-block align-text-top"style="margin-top: 15px;" ></i> </a>
    
    <a href="http://127.0.0.1:8000/dashboard" class="logo" style="margin-left:-500px">  Home </a>
    <a href="http://127.0.0.1:8000/shop" class="logo" style="margin-left:-500px">  Shop </a>
    <a href="http://127.0.0.1:8000/about" class="logo" style="margin-left:-500px">  About </a>
    <a href="http://127.0.0.1:8000/contact" class="logo" style="margin-left:-500px">  Contact Us </a>

    

    

    <div class="icons" >
        
    
        <div id="menu-btn" class="fa fa-search" ></div>
            <!-- <div id="cart-btn" class="fas fa-shopping-cart"></div> -->
        <div id="cart-btn" class="fas fa-shopping-cart " >
            <span class="badge badge-success mt-0 align-self-start" id="cart_item_count" style="margin-left: -15px; font-size:small">0</span>
        </div> 
        <div id="login-btn" class="fas fa-user"> {{ Auth::user()->name }}</div>
        
    </div>

</header>

<!-- header section ends  -->

<!-- closer btn  -->

<div id="closer" class="fas fa-times"></div>



<!-- shopping cart  -->

<div>

    
<div class="row pr-md-5 d-flex justify-content-center justify-content-md-end bg-info">
  <div class="col-md-6 col-lg-4 mr-lg-5 border p-3 pb-4 rounded-lg bg-white ml-md-0" id="cart" style="position: absolute;z-index: 1;top: 100px;overflow: auto;">

    <div class="d-flex">
      <div class="col-md-3">
         <h5>Product</h5>        
      </div>
      <div class="col-md-3 d-flex flex-wrap align-content-center">
        <h5>Title</h5>
      </div>
      <div class="col-md-3 d-flex flex-wrap align-content-center">
        <h5>Qty</h5>
      </div>
      <div class="col-md-2 d-flex flex-wrap align-content-center">
        <h5>Price</h5>
      </div>
      <div class="col-md-1"></div>
      
    </div>

    <div id="order" style="overflow: auto;height: 250px;">
      
    </div>
    <div id="cart_footer">
  <div id="order_btn" class="text-center text-white w-100 p-2 font-weight-bold" style="letter-spacing: 1.2px;font-size: 20px; background-color:#244d4d">
    Order
  </div>      
    </div>
    
  </div>
   
 </div>
</div>

 <!-- End -->

    

    




<section class="heading">
    
    <h3><br>our shop</h3>
    
    
 
    
</section>

<section class="category">

    <h1 class="title"> <span>Our Categories</span> <a href="#">view all >></a> </h1>

    <div class="box-container" >

        <a href="http://127.0.0.1:8000/lamps" class="box"style="background-color: #244d4d; ">
            <img src="image/icons8-wall-lamp-white.png" alt="">
            <h3 style="color: #fff" >Lamps</h3>
        </a>

        <a href="http://127.0.0.1:8000/chairs" class="box" >
            <img src="image/icons8-lounge-chair-100.png" alt="">
            <h3>Chairs</h3>
        </a>

        <a href="http://127.0.0.1:8000/tables" class="box">
            <img src="image/icons8-coffee-table-100.png" alt="">
            <h3>Tables</h3>
        </a>

        <a href="http://127.0.0.1:8000/drawers" class="box">
            <img src="image/icons8-bureau-100.png" alt="">
            <h3>Drawers</h3>
        </a>

        <a href="http://127.0.0.1:8000/sofas" class="box">
            <img src="image/icons8-sofa-100.png" alt="">
            <h3>Sofas</h3>
        </a>
        <a href="http://127.0.0.1:8000/mirrors" class="box">
            <img src="image/icons8-mirror-100.png" alt="">
            <h3>Mirrors</h3>
        </a>

    </div>

</section>

<section class="products">

    <h1 class="title"> <span>our products</span> <a href="http://127.0.0.1:8000/testing" target="_blank">view all >></a> </h1>

    <div class="box-container">
   
        <div class="box">
        <form action="{{url('upload_post')}}" method="POST" >
        @csrf
            <div class="icons">

                
                
                <input type="submit" name="" id="cart_btn" class="btn" value="Add to Cart">
                
            </div>
            <div class="image">
                <img src="{{asset('image/pngwing-1.png')}}" alt=""style="height: 200px;width:200px ; margin-top:5rem;margin-left:5rem">
            </div>
            <div class="content">
                <div class="price">$150.00</div>
                <h3 class="title">Lighting Lamp</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (45) </span>
                </div>
                
            </div>
        <form>
            
           
        </div>
       



        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" ></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/pngwing.com.png')}}" alt="" style="height: 200px;width:200px ; margin-top:5rem;margin-left:5rem">
            </div>
            <div class="content">
                <div class="price">$140.00</div>
                <h3 class="title">Table Lamp</h3>
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
                <a href="#" class="fas fa-shopping-cart" id="cart_btn"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/pngwing-2.png')}}" alt=""style="height: 200px;width:200px ; margin-top:5rem;margin-left:5rem">
            </div>
            <div class="content">
                <div class="price">$100.00</div>
                <h3 class="title">Tripod Wood Lamp</h3>
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
                <a href="#" class="fas fa-shopping-cart" id="cart_btn"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/led-lamp.png')}}" alt=""style="height: 200px;width:200px ; margin-top:5rem;margin-left:5rem">
            </div>
            <div class="content">
                <div class="price">$120.00</div>
                <h3 class="title">LED Lamp</h3>
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
                <a href="#" class="fas fa-shopping-cart" id="cart_btn"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/pngwing-4.png')}}"alt=""style="height: 200px;width:200px ; margin-top:5rem;margin-left:5rem">
            </div>
            <div class="content">
                <div class="price">$160.00</div>
                <h3 class="title">Modern Lamp</h3>
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
                <a href="#" class="fas fa-shopping-cart" id="cart_btn"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{asset('image/lamp-6.png')}}" alt=""style="height: 250px;width:200px ; margin-top:1rem;margin-left:5rem">
            </div>
            <div class="content">
                <div class="price">$200.00</div>
                <h3 class="title">Hanging Lamp</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (30) </span>
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