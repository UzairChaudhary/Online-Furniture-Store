<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    
</head>
<body>

<!-- header section starts  -->

<header class="header" style="margin-top: -40px; height:100px">
    <a href="" class="logo"> <i class=""><img src="{{asset('image/brand-logo.png')}}" alt="" width="100px" height="50px" class="d-inline-block align-text-top"style="margin-top: 4rem;" ></i> </a>
    
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

    <div class="box">
        <i class="fas fa-times"></i>
        <img src="image/cart-img-1.jpg" alt="">
        <div class="content">
            <h3>morden furniture</h3>
            <span class="quantity"> 1 </span>
            <span class="multiply"> x </span>
            <span class="price"> $140.00 </span>
        </div>
    </div>

    <div class="box">
        <i class="fas fa-times"></i>
        <img src="image/cart-img-2.jpg" alt="">
        <div class="content">
            <h3>morden furniture</h3>
            <span class="quantity"> 1 </span>
            <span class="multiply"> x </span>
            <span class="price"> $140.00 </span>
        </div>
    </div>

    <div class="box">
        <i class="fas fa-times"></i>
        <img src="image/cart-img-3.jpg" alt="">
        <div class="content">
            <h3>morden furniture</h3>
            <span class="quantity"> 1 </span>
            <span class="multiply"> x </span>
            <span class="price"> $140.00 </span>
        </div>
    </div>

    <div class="box">
        <i class="fas fa-times"></i>
        <img src="image/cart-img-4.jpg" alt="">
        <div class="content">
            <h3>morden furniture</h3>
            <span class="quantity"> 1 </span>
            <span class="multiply"> x </span>
            <span class="price"> $140.00 </span>
        </div>
    </div>

    <h3 class="total"> total : <span>$560.00</span> </h3>

    <a href="#" class="btn">checkout cart</a>

</div>

<!-- login form  -->

<div class="login-form">

<div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400" >
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

</div>

<!-- home section starts  -->

<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
                <span style="color: black;">A Home is not a Home <br> Without 
                  <div id="furniture_div">
                    &nbsp&nbsp Furniture &nbsp&nbsp
                  </div>  
                </span>
                <br><br><br><br><br><br><br>
                <div class="content">
                    
                    <a href="#" class="btn">shop now</a>
                </div>
            </div>
            <div class="image">
                <img src="{{asset('image/home-img-2.png')}}" alt="">
            </div>
        </div>

        

    </div>

   

</section>

<!-- home section ends -->
<br><br>
<!-- banner section starts  -->
<center>
<h1 style="font-weight: bolder;font-size:xx-large;">Featured Products</h1>
</center>

<section class="banner-container">
    
    <div class="banner">
        <img src="image/banner-1.jpg" alt="">
        <div class="content">
            <span>limited offer</span>
            <h3>upto 50% off</h3>
            <a href="http://127.0.0.1:8000/shop" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/banner-2.jpg" alt="">
        <div class="content">
            <span>limited offer</span>
            <h3>upto 50% off</h3>
            <a href="http://127.0.0.1:8000/shop" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/banner-3.jpg" alt="">
        <div class="content">
            <span>limited offer</span>
            <h3>upto 50% off</h3>
            <a href="http://127.0.0.1:8000/shop" class="btn">shop now</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- Category search section starts -->

<center>
<h1 style="font-weight: bolder;font-size:xx-large;">Shop By Category</h1>
</center>

<section class="banner-container">
    
    <div class="banner" style="height: 50rem;">
        <img src="{{asset('image/category-4.jpg')}}" alt="" >
        <div class="content">
    
            <a href="http://127.0.0.1:8000/lamps" class="btn" style="margin-left: 150px;margin-top:400px;">Lamps</a>


        </div>
    </div>

    <div class="banner"style="height: 50rem;">
        <img src="{{asset('image/category-5.jpg')}}" alt="">
        <div class="content">
    
            <a href="http://127.0.0.1:8000/chairs" class="btn" style="margin-left: 150px;margin-top:400px;">Chairs</a>


        </div>
    </div>

    <div class="banner"style="height: 50rem;">
        <img src="{{asset('image/category-6.jpg')}}" alt="">
        <div class="content">
    
            <a href="http://127.0.0.1:8000/tables" class="btn" style="margin-left: 150px;margin-top:400px;">Tables</a>


        </div>
    </div>

</section>

<section class="banner-container" style="margin-top: -5rem;">
    
    <div class="banner"style="height: 50rem;">
        <img src="{{asset('image/category-1.jpg')}}" alt="" >
        <div class="content">
    
            <a href="http://127.0.0.1:8000/drawers" class="btn" style="margin-left: 150px;margin-top:400px;">Drawers</a>


        </div>
    </div>

    <div class="banner"style="height: 50rem;">
        <img src="{{asset('image/category-2.jpg')}}" alt="">
        <div class="content">
    
            <a href="http://127.0.0.1:8000/sofas" class="btn" style="margin-left: 150px;margin-top:400px;">Sofas</a>


        </div>
    </div>

    <div class="banner"style="height: 50rem;">
        <img src="{{asset('image/category-3.jpg')}}" alt="">
        <div class="content">
    
            <a href="http://127.0.0.1:8000/mirrors" class="btn" style="margin-left: 150px;margin-top:400px;">Mirrors</a>


        </div>
    </div>

</section>
<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Company</h3>
            <a href="http://127.0.0.1:8000/about"><i></i>   About us</a>
            <a href="shop.html"><i></i>   Career</a>
            <a href="about.html"> <i></i>  Services</a>
            
            <a href="http://127.0.0.1:8000/contact"><i></i>  contact</a>
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
</x-app-layout>
