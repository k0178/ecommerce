@extends('layout.app')
@section('content')

{{-- Benefits Section --}}
<div class="d-flex benefits justify-content-center">
    <div class="d-flex align-items-center gap-2 px-5 py-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.219 3.375 8 7.399 4.781 3.375A1.002 1.002 0 0 0 3 4v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V4a1.002 1.002 0 0 0-1.781-.625L16 7.399l-3.219-4.024c-.381-.474-1.181-.474-1.562 0zM5 19v-2h14.001v2H5zm10.219-9.375c.381.475 1.182.475 1.563 0L19 6.851 19.001 15H5V6.851l2.219 2.774c.381.475 1.182.475 1.563 0L12 5.601l3.219 4.024z"></path></svg>
        <label for="">Exclusive Deals for VIP 2 and up!</label>
    </div>

    <div class="d-flex align-items-center gap-2 px-5 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m6.516 14.323-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107zm2.853-4.326a.998.998 0 0 0 .832-.586L12 5.43l1.799 3.981a.998.998 0 0 0 .832.586l3.972.315-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603 1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962 4.09-.326z"></path></svg>
        <label for="">Weekly New Arrivals</label>
    </div>

    <div class="d-flex align-items-center gap-2 px-5 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title>truck-delivery</title><path d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z" /></svg>
        <label for="">Free Shipping On Orders Over $100</label>
    </div>

    <div class="d-flex align-items-center gap-2 px-5 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m12 17 1-2V9.858c1.721-.447 3-2 3-3.858 0-2.206-1.794-4-4-4S8 3.794 8 6c0 1.858 1.279 3.411 3 3.858V15l1 2zM10 6c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2z"></path><path d="m16.267 10.563-.533 1.928C18.325 13.207 20 14.584 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.416 1.675-2.793 4.267-3.51l-.533-1.928C4.197 11.54 2 13.623 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-2.377-2.197-4.46-5.733-5.437z"></path></svg>
        <label for="">Track Your Order</label>
    </div>

    <div class="d-flex align-items-center gap-2 px-5 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M13.707 3.293A.996.996 0 0 0 13 3H4a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l8 8a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-8-8zM12 19.586l-7-7V5h7.586l7 7L12 19.586z"></path><circle cx="8.496" cy="8.495" r="1.505"></circle></svg>
        <label for="">10% Off On Your First Order!</label>
    </div>
</div>
{{-- Benefits Section --}}


{{-- Hero Section --}}
    <div class="hero">
    </div>
{{-- Hero Section --}}


{{-- Deals Section --}}
<div class="site-wide-deals d-flex align-items-center justify-content-center justify-content-between">
    <div>
        <div class="d-flex align-items-center justify-content-center gap-3">
            <div><h1 class="montserrat-600">$5</h1></div>
            <div><h4 class="montserrat-600">OFF</h4></div>
        </div>
        <div><label for="" class="deals-label">ON ORDERS ABOVE $50</label></div>
    </div>

    <div>
        <div class="d-flex align-items-center justify-content-center gap-3">
            <div><h1 class="montserrat-600">$15</h1></div>
            <div><h4 class="montserrat-600">OFF</h4></div>
        </div>
        <div><label for="" class="deals-label">ON ORDERS ABOVE $75</label></div>
    </div>

    <div>
        <div class="d-flex align-items-center justify-content-center gap-3">
            <div><h1 class="montserrat-600">$20</h1></div>
            <div><h4 class="montserrat-600">OFF</h4></div>
        </div>
        <div><label for="" class="deals-label">ON ORDERS ABOVE $150</label></div>
    </div>

    <div>
        <div class="d-flex align-items-center justify-content-center gap-3">
            <div><h1 class="montserrat-600">$30</h1></div>
            <div><h4 class="montserrat-600">OFF</h4></div>
        </div>
        <div><label for="" class="deals-label">ON ORDERS ABOVE $200</label></div>
    </div>

    <div>
        <button class="button-black">check out all site-wide deals</button>
    </div>
</div>
{{-- Deals Section --}}

{{-- VIP Section --}}
<div class="vip">
    <div class="d-flex px-5  justify-content-between">
        <p class="montserrat-800 bfe pt-3">BLACK FRIDAY EXCLUSIVE</p>
        <p class="fs-6 montserrat-600 bfe pt-3">FREE SHIPPING ON ALL ORDERS FOR <br> VIP 2 AND UP!</p>
        <button class="button-white my-3">shop now</button>
    </div>
</div>
{{-- VIP Section --}}


{{-- Trending Section --}}
<div class="text-center" style="margin-top: 40px;">
    <h2 class="montserrat-800" style="padding: 20px;">Now Trending</h2>
    <p style="padding: 20px;">See what everyone’s wearing right now</p>
</div>

{{-- Gallery --}}
<div class="container">
    <div class="row">
        <div class="col">
            <div class="trending-card">
                <div class="trending-img">
                    <img src="{{asset('img/winter.png')}}" alt="">
                </div>   
                <label for="" class="montserrat-600" style="font-size: 24px;">WINTER FASHION</label>
            </div>
        </div>
        <div class="col">
            <div class="trending-card">
                <div class="trending-img">
                    <img src="{{asset('img/boots.png')}}" alt="">
                </div> 
                <label for="" class="montserrat-600" style="font-size: 24px;">BOOTS</label>  
            </div>
        </div>
        <div class="col">
            <div class="trending-card">
                <div class="trending-img">
                    <img src="{{asset('img/night.png')}}" alt="">
                </div>  
                <label for="" class="montserrat-600" style="font-size: 24px;">NIGHT OUT</label>   
            </div>
        </div>
        <div class="col">
            <div class="trending-card">
                <div class="trending-img">
                    <img src="{{asset('img/holidays.png')}}" alt="">
                </div>   
                <label for="" class="montserrat-600" style="font-size: 24px;">HOLIDAYS</label>  
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="trending-card">
                <div class="trending-img">
                    <img src="{{asset('img/outer.png')}}" alt="">
                </div>   
                <label for="" class="montserrat-600" style="font-size: 24px;">OUTERWEAR</label>  
            </div>
        </div>
        <div class="col">
            <div class="trending-card">
                <div class="trending-img">
                    <img src="{{asset('img/white.png')}}" alt="">
                </div>  
                <label for="" class="montserrat-600" style="font-size: 24px;">WHITE DRESSES</label>   
            </div>
        </div>
        <div class="col">
            <div class="trending-card">
                <div class="trending-img">
                    <img src="{{asset('img/sweaters.png')}}" alt="">
                </div>   
                <label for="" class="montserrat-600" style="font-size: 24px;">SWEATERS</label>  
            </div>
        </div>
        <div class="col">
            <div class="trending-card">
                <div class="trending-img">
                    <img src="{{asset('img/party.png')}}" alt="">
                </div> 
                <label for="" class="montserrat-600" style="font-size: 24px;">PARTY</label>    
            </div>
        </div>
    </div>
</div>
{{-- Gallery --}}


<div class="hashtag-container ">
    <div class="hashtag">
        #Thanksgiving
    </div>
    <div class="hashtag">
        #NewYears
    </div>
    <div class="hashtag">
        #Knitted
    </div>
    <div class="hashtag">
        #Pajamas
    </div>
    <div class="hashtag">
        #WFH
    </div>
    <div class="hashtag">
        #FallFashion
    </div>
</div>


{{-- Trending Section --}}


{{-- New In Section --}}
    <div class="new-in">
        <div class="d-flex justify-content-between align-items-center">
            <div></div>
            <div style="margin-top: 47px; margin-right:148px;">
                <div>
                    <h1 class="na-header montserrat-800">new <br> arrivals</h1>
                </div>
                <div>
                    <p for="montserrat-600" style="font-size:28px;">Get ready for the holidays with us!</p>
                </div>
                <div>
                    <button class="button-white">Shop Now</button>
                </div>
            </div>
        </div>
    </div>

{{-- New In Section --}}



{{-- Recently Bought Section --}}

<div class="text-center" style="margin-top: 40px;">
    <h2 class="montserrat-800" style="padding: 20px;">Recently Bought</h2>
</div>


<div class="container">
    <div class="d-flex">
        <div class="col">
            <div class="recent-card">
                <div class="recent-img">
                    <img src="{{asset('img/festive.png')}}" alt="">
                </div>   
                <div class="recent-product-name">
                    <label for="" class="" style="">Festive Looks Rust Red Ribbed Velvet Long Sleeve Bodysuit</label>  
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <label for="" class="montserrat-600" style="">$38</label> 
                    <div>
                        <button class="button-black"><i class='bx bx-shopping-bag' ></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="recent-card">
                <div class="recent-img">
                    <img src="{{asset('img/chevron.png')}}" alt="">
                </div> 
                <div class="recent-product-name">
                    <label for="" class="" style="">Chevron Flap Crossbody Bag</label>  
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="montserrat-800 text-danger" style="color:#C1272D">$5.77</label> 
                        <label for="" class="montserrat-600 text-decoration-line-through" style="">$7.34</label> 
                    </div>
                    <div>
                        <button class="button-black"><i class='bx bx-shopping-bag' ></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="recent-card">
                <div class="recent-img">
                    <img src="{{asset('img/manilla.png')}}" alt="">
                </div>  
                <div class="recent-product-name">
                    <label for="" class="" style="">Manilla Tan Multi Plaid Oversized Fringe Scarf</label>  
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="montserrat-800 " style="color:#C1272D">$29</label> 
                        <label for="" class="montserrat-600 text-decoration-line-through" style="">$39</label> 
                    </div> 
                    <div>
                        <button class="button-black"><i class='bx bx-shopping-bag' ></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="recent-card">
                <div class="recent-img">
                    <img src="{{asset('img/diamante.png')}}" alt="">
                </div>   
                <div class="recent-product-name">
                    <label for="" class="" style="">Diamante Puff Sleeve Dress - Black</label>  
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <label for="" class="montserrat-600" style="">$45.99</label> 

                    <div>
                        <button class="button-black"><i class='bx bx-shopping-bag' ></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="recent-card">
                <div class="recent-img">
                    <img src="{{asset('img/banneth.png')}}" alt="">
                </div>   
                <div class="recent-product-name">
                    <label for="" class="" style="">Banneth Open Front Formal Dress in Black</label>  
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <label for="" class="montserrat-800 " style="color:#C1272D">$69</label> 
                        <label for="" class="montserrat-600 text-decoration-line-through" style="">$99.95</label> 
                    </div> 

                    <div>
                        <button class="button-black"><i class='bx bx-shopping-bag' ></i></button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

{{-- Recently Bought Section --}}



{{-- Insta Section --}}


<div class="" style="background: #F2F2F2;">
    <div class="text-center" style="margin-top: 40px;">
        <h2 class="montserrat-800" style="padding: 20px;">Your Next Inspo</h2>
        <p style="padding: 20px;">Checkout who’s wearing what by using #THREADEDInspo on Instagram</p>
    </div>
    <div class="d-flex align-items-center justify-content-center gap-5 text-center">
        <img src="{{asset('img/Rectangle 10.png')}}" alt="">
        <img src="{{asset('img/Rectangle 12.png')}}" alt="">
        <img src="{{asset('img/Rectangle 13.png')}}" alt="">
        <img src="{{asset('img/Rectangle 14.png')}}" alt="">
        <img src="{{asset('img/Rectangle 11.png')}}" alt="">
    </div>
    <div class="text-center">
        <button class="button-black m-5">view all posts</button>
    </div>
</div>


{{-- Insta Section --}}


{{-- Newsletter Section --}}
    <div class="bg-black d-flex justify-content-center gap-5">
        <h2 class="montserrat-800 text-white" style="padding: 20px;">SIGN UP FOR EXCLUSIVE DEALS AND UPDATES</h2>
        <div class="d-flex align-items-center">
            <input type="text" name="" id="" class="search" placeholder="Your Email Address">
            <button class="button-white" style="height: 35px;"><i class='bx bx-chevron-right' ></i></button>
        </div>
    </div>
{{-- Newsletter Section --}}

@endsection