let closer = document.querySelector('#closer');

closer.onclick = () =>{
    closer.style.display = 'none';
    
    cart.classList.remove('active');
    loginForm.classList.remove('active');
}



let cart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    closer.style.display = 'block';
    cart.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    closer.style.display = 'block';
    loginForm.classList.toggle('active');
}


window.onscroll = () =>{
    searchForm.classList.remove('active');
}

 

  
   // jquery for add to cart
  
  
   $(document).ready(function(){
  
    $("#cart").hide();
    
    $(".fa-shopping-cart").mouseenter(function(){
    $('#cart').show();
    })
    
    $("#cart").mouseleave(function(){
    $("#cart").hide();
    })
    
    
    var cart_item_count = 0;
    $('.icons').click(function(){
    cart_item_count++;
    var img_src = $(this).parents(".box").find(".image").find("img").attr("src");
    var titlte = $(this).parents(".box").find(".content").find(".title").text();
    var price = $(this).parents(".box").find(".content").find(".price").text();
    
    var cart_list= [img_src,titlte,price]
    var cart_item =  `
     
     <div class=" main d-flex p-3 border border-left-0 border-right-0 border-top-0">
      <div class="col-md-3 border border-left-0 border-top-0 border-bottom-0">
      <img src=${cart_list[0]} class="w-100" alt=""/>
      </div>
    
      <div id="title" class="col-md-3 d-flex flex-wrap align-content-center">
         <h6 style="font-size:13px;">${cart_list[1]}</h6>
      </div>
    
      <div class="col-md-3 d-flex flex-wrap align-content-center">
      <span class="mx-2"> 1 </span>
      </div>
    
      <div class="col-md-2 d-flex flex-wrap align-content-center" id="t_price">
        <h6 class="mt-2 d-flex"><span>  </span><span class="cart_item_price"> ${cart_list[2]} </span></h6>
      </div>
    
      <div class="col-md-1 d-flex flex-wrap align-content-center">
      <span class="close" style="cursor:pointer;font-size:25px;">&times;</span>
      </div>
    
     </div>
    
    `
     
     $("#order").append(cart_item);
    
     $("#cart_item_count").text(cart_item_count);
     $(".close").click(function(){
      $(this).parents(".main").remove();
    
      item_count();
     })
     item_count();
    })
    function item_count(){
    
    var res = $("#order").children().length;
    $("#cart_item_count").text(res);
    }
    
    })