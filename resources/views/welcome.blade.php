<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,500;0,900;1,200;1,400;1,600;1,700;1,900&display=swap');

*{
    font-family: 'Nunito',sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    border: none;
    text-transform: capitalize;
    transition: all .2s linear;
    
}
:root{
    --black:#20262E;
    --purple:#411530;
    --orange:#D1512D;
    --cream:##F5C7A9;
    --box-shadow:0 .5rem 1.5rem rgba(128, 126, 126, 0.1);
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
    
}

section{
    padding: 2rem 9%;
}
section:nth-child(even){
    background: var(--primary-color);
}
.sub-heading{
    text-align: center;
    color: var(--purple);
    font-size: 4rem;
    padding-top: 1rem;
}
.heading{
    text-align: center;
    color: var(--orange);
    font-size: 3rem;
    padding-bottom: 2rem;
    text-transform: uppercase;
}
.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color: #ffffffe0;
    background: var(--black);
    border-radius: 0.5rem;
    cursor: pointer;
    padding: 0.8rem 3rem;
}
.btn:hover{
    background: var(--orange);
    letter-spacing: 0.1rem;
    
}
header{
    position: fixed;
    top:0;left: 0;right: 0;
    background: #fff;
    padding: 1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: var(--box-shadow);
}
header .logo{
    color: var(--orange);
    font-size: 2.5rem;
    font-weight: bolder;
}
header .logo i {
    color: var(--cream);
  }
header .navbar a{
     font-size: 1.7rem;
     border-radius: 0.5rem;
     padding: .5rem 1.5rem;
     color: var(--orange);
}
header .navbar a.active,
header .navbar a:hover{
    color: #fff;
    background: var(--orange);
}

header .icons i,
header .icons a{
    cursor: pointer;
    margin-left: 0.5rem;
    height: 4.5rem;
    line-height: 4.5rem;
    width: 4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color: var(--orange);
    border-radius: 50%;
    background:#fff;
}
header .icons i:hover,
header .icons a:hover{
    color: var(--cream);
    transform: rotate(360deg);
}

header .icons #menu-bars{
    display: none;
}
#search-form{
    position: fixed;
    top:-110%;left: 0;
    height: 100%;
    width: 100%;
    z-index: 1004;
    background: rgba(0,0,0,0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 1rem;
}
#search-form.active{
    top: 0;
}
#search-form #search-box{
    width: 50rem;
    border-bottom: 0.1rem solid #fff;
    padding: 1rem 0;
    color: #fff;
    font-size: 3rem;
    text-transform: none;
    background:none;
}
#search-form #search-box::placeholder{
    color:var(--orange);
}
#search-form #search-box::-webkit-search-cancel-button{
    color:var(--orange);
    -webkit-appearance: none;
}
#search-form label{
    color: var(--orange);
    cursor: pointer;
    font-size: 3rem;
}
#search-form label:hover{
    color: var(--cream);
}
#search-form #close{
    position: absolute;
    color: #fff;
    cursor: pointer;
    top: 2rem; right: 3rem;
    font-size: 5rem;
}
/*Home Slider*/
.home .home-slider .slide{
    display: flex;
    align-items:center;
    flex-wrap: wrap;
    gap: 3rem;
    padding-top: 12rem;
}
.home .home-slider .slide .content{
    flex: 1 1 45rem;

}
.home .home-slider .slide .image{
    flex: 1 1 45rem;

}
.home .home-slider .slide .image img{
    width: 100%;
}
.home .home-slider .slide .content span{
    color: var(--purple);
    font-size: 4rem;
}
.home .home-slider .slide .content h3{
    color: var(--orange);
    font-size: 9rem;
}
.home .home-slider .slide .content p{
    color:#333033;
    font-size: 2rem;
    padding: 1rem 0;
}
.swiper-pagination-bullet-active{
    background:var(--purple);

}

.dishes .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(28rem,1fr));
    gap: 1.5rem;

}
.dishes .box-container .box{
    padding: 2.5rem;
    background: #fff;
    border-radius: 0.5rem;
    border: 0.1rem solid rgba(0,0,0,0.2);
    box-shadow: var(--box-shadow);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.dishes .box-container .box .fa-heart,
.dishes .box-container .box .fa-eye{
    position: absolute;
    top: 1.5rem;
    background:var(--orange);
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    color: var(--cream);
}
.dishes .box-container .box .fa-heart:hover,
.dishes .box-container .box .fa-eye:hover{
    background: var(--cream);
    color:var(--orange);
}

.dishes .box-container .box .fa-heart{
    right: -15rem;
}
.dishes .box-container .box .fa-eye{
    left: -15rem;
}
.dishes .box-container .box:hover .fa-heart{
    right: 1.5rem;
}
.dishes .box-container .box:hover .fa-eye{
    left: 1.5rem;
}
.dishes .box-container .box img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes .box-container .box h3{
    color: var(--black);
    font-size: 2.5rem;
}

.dishes .box-container .box span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}
.dishes{
    background: var(--black);
}

.about .row{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    align-items: center;
}
.about .row .image{
    flex:1 1 45rem;

}
.about .row .image img{
    width: 100%;
}
.about .row .content{
    flex: 1 1 45rem;
}
.about .row .content .h3{
    color: var(--black);
    font-size: 4rem;
    padding: 0.5rem 0;
}
.about .row .content p{
    color: var(--black);
    font-size: 1.5rem;
    padding: 0.5rem 0;
    line-height: 2;
}
.about .row .content .icons-container{
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    padding: 1rem 0;
    margin-top: 0.5rem;
}
.about .row .content .icons-container .icons{
    background: #eee;
    border-radius: 0.5rem;
    border: 0.1rem solid rgba(0,0,0,0.2);
    display: flex;
    align-items: centre;
    justify-content: center;
    gap: 1rem;
    flex: 1 1 17rem;
    padding: 1.5rem 1rem
}
.about .row .content .icons-container .icons i{
    font-size:2.5rem ;
    color: var(--purple);
}
.about .row .content .icons-container .icons span{
    font-size:1.5rem ;
    color: var(--orange);
}
.menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem,0.3fr));
    gap: 1.5rem;
}
.menu .box-container .box{
    background: #fff;
    border: 0.1rem solid rgba(0,0,0,0.2);
    border-radius: 0.5rem;
    box-shadow: var(--box-shadow);
}
.menu .box-container .box .image{
    height: 25rem;
    width: 100%;
    padding: 1.5rem;
    overflow: hidden;
    position: relative;
}
.menu .box-container .box .image img{
    height: 100%;
    width: 100%;
    border-radius: 1.5rem;
    object-fit:cover;
}
.menu .box-container .box .image .fa-heart{
    position: absolute;
    top: 2.5rem;right: 2.5rem;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    text-align: center;
    font-size: 2rem;
    background: #fff;
    border-radius: 50%;
    color: var(--black);
}
.menu .box-container .box .image .fa-heart:hover{
    background-color: var(--black);
    color: var(--orange);
}
.menu .box-container .box .content{
    padding: 2rem;
    padding-top: 0;

}
.menu .box-container .box .content h3{
    color: var(--black);
    font-size: 2.5rem;
}
.menu .box-container .box .content p{
    color: var(--cream);
    font-size: 1.6rem;
    padding: 5rem 0;
    line-height: 1.5;

}
.menu .box-container .box .content .price{
    color: var(--orange);
    margin-left: 3rem;
    font-size: 2.5rem;
    margin-bottom: 20rem;
}
.review .slide{
    padding: 2rem;
    box-shadow: var(--box-shadow);
    border: 0.1rem solid rgba(0,0,0,0.2);
    border-radius: 0.5rem;
    position: relative;
}
.review .slide .fa-quote-right{
    position: absolute;
    top: 2rem; right: 2rem;
    font-size: 4rem;
    color: #ccc;
}
.review .slide .user{
    display: flex;
    gap: 1.5rem;
    align-items: center;
    padding-bottom: 1.5rem;

}
.review .slide .user img{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    object-fit: cover;
}
.review .slide .user h3{
    color: var(--black);
    font-size: 2rem;
    padding-bottom: .5rem;
}
.review .slide p{
    font-size: 1.5rem;
    line-height: 1.8;
}
.order form{
    max-width: 90rem;
    border-radius: 0.5rem;
    box-shadow: var(--box-shadow);
    border: .1rem solid rgba(0,0,0,0.2);
    background: #fff;
    padding: 1.5rem;
    margin: 0 auto;
}
.order form .inputBox{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.order form .inputBox .input{
    width: 49%;
}
.order form .inputBox .input span{
    display: block;
    padding: 0.5rem 0;
    font-size: 1.5rem;
    color: var(--orange);
}
.order form .inputBox .input input,
.order form .inputBox .input textarea
{
    background: #eee;
    border-radius: 0.5rem;
    padding: 1rem;
    font-size: 1.5rem;
    color: var(--black);
    text-transform: none;
    margin-bottom: 1rem;
    width: 100%;
}
.order form .inputBox .input input:focus,
.order form .inputBox .input textarea:focus{
    border: 0.1rem solid var(--orange);
}
.order form .inputBox .input textarea{
    height: 20rem;
    resize: none;
}
.order form .btn{
    margin-top: 0;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem,1fr));
    gap: 1.5rem;

}
.footer .box-container .box h3{
    padding: 1.5rem 0;
    font-size: 2rem;
    color: var(--black);
}
.footer .box-container .box a{
    display: block;
    padding: 0.5rem 0;
    font-size: 1.5rem;
    color: var(--cream);
}
.footer .box-container .box a:hover{
    color: var(--orange);
    text-decoration: underline;
}
.footer .credit{
    text-align:center;
    font-size: 1.5rem;
    color: var(--black);
    padding: 0.5rem;
    padding-top: 15rem;
    padding-bottom: 0;
    margin-top: 1.5rem;
    
}
.footer .credit span{
    color: var(--orange);

}

.loader-container{
    position: fixed;
    top: 0;left: 0;
    height: 100%;
    width: 100%;
    z-index: 100000;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.loader-container img{
    width: 35rem;
}

.loader-container.fade-out{
    top: 110%;
    opacity: 0;
}







/* media queries*/
@media(max-width:991px){
    html{
        font-size: 55%;
    }
    header{
        padding: 1rem 2rem;
    }
    section{
        padding:2rem;
    }
}
@media(max-width:768px){

    header .icons #menu-bars{
        display: inline-block;
    }
    header .navbar{
        position: absolute;
        top: 100%;left: 0;right: 0;
        background: #fff;
        border-top: 0.1rem solid rgba(0,0,0,0.2);
        border-bottom: .1rem solid rgba(0,0,0,0.2);
        padding: .1rem;
        clip-path: polygon(0 0, 100% 0, 100% 0,0 0);
    }

    header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%,0% 100%);
    }

    header .navbar a{
        display: block;
        padding: 1.5rem;
        margin: 1rem;
        font-size: 2rem;
        background: #eee;
    }
}
@media(max-width:450px){
    html{
        font-size: 50%;
    }
    .dishes .box-container .box img{
        height: auto;
        width: 100%;
    }
    
    .order form .inputBox .input{
        width: 100%;
        height: auto;
    }
}

        </style>
  
  
</head>
<body>
    <!--header section starts here-->
    <header>
        <a href="#" class="logo">🍄Punctual Pantry</a>
        
        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#dishes">dishes</a>
            <a href="http://127.0.0.1:8000/customer/create">Customer</a>
            <!-- <a href="http://127.0.0.1:8000/resturant/create">Resturant</a> -->
            <a href="http://127.0.0.1:8000/food/create">FOOD</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="http://127.0.0.1:8000/order/create">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>
    <!--header ends here-->
    <!--search form-->
    <form action="" id="search-form">
        <input type="search" placeholder="search here. . ." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!--search form ends-->

<!--home sections starts-->
<section class="home" id="home">
    <div class="swiper home-slider">

        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Discover our kitchen's secrets</span>
                    <h3>Pizza</h3>
                    <p>Good-quality, fresh food that is both healthy and delicious is available. Did you know a Pizza was Delivered in Space.</p>
                         <a href="http://127.0.0.1:8000/order/create" class="btn">order now</a>
                </div>
                <div class="img">
                    <img src="img3.png" alt="pizza">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Must-try bites on the menu</span>
                    <h3>Salmon Dish</h3>
                    <p>Grilled salmon and veggies make for a colorful and balanced seafood dinner.The grill turns the salmon flaky and moist while tenderizing the crispy pepper and onion pieces. Round out the meal with brown rice or quinoa.</p>
                         <a href="http://127.0.0.1:8000/order/create" class="btn">order now</a>
                </div>
                <div class="img">
                    <img src="img1.png" alt="salmon">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Platefuls of deliciousness</span>
                    <h3>Waffles</h3>
                    <p>A classic mouthwatering treat for midnight cravings and daytime snack. Nike's first pair of sneakers, Waffle Trainers, were made using a real waffle iron.</p>
                         <a href="http://127.0.0.1:8000/order/create" class="btn">order now</a>
                </div>
                <div class="img">
                    <img src="img2.png" alt="waffles">
                </div>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>

</section>
<!--dishes section-->
<section class="dishes" id="dishes">
    <h3 class="sub-heading">Dishes Served</h3>
    <h3 class="heading">Dishes In The Spotlight</h3>
    <div class="box-container">
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="dish-1.png" alt="dish-1">
            <h3>Biryani</h3>
            <div class="stars">
                <p>⭐⭐⭐⭐⭐</p>
            </div>
            <span>₹350</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="dish-2.png" alt="dish-2">
            <h3>Burgers</h3>
            <div class="stars">
                <p>⭐⭐⭐⭐⭐</p>
            </div>
            <span>₹200</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="dish-3.png" alt="dish-3">
            <h3>Rolls</h3>
            <div class="stars">
                <p>⭐⭐⭐⭐⭐</p>
            </div>
            <span>₹150</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="dish-4.png" alt="dish-4">
            <h3>Thali</h3>
            <div class="stars">
                <p>⭐⭐⭐⭐</p>
            </div>
            <span>₹300</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="dish-5.png" alt="dish-5">
            <h3>Dessert</h3>
            <div class="stars">
                <p>⭐⭐⭐⭐</p>
            </div>
            <span>₹400</span>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="dish-6.png" alt="dish-6">
            <h3>South-Indian</h3>
            <div class="stars">
                <p>⭐⭐⭐⭐</p>
            </div>
            <span>₹270</span>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div>
</section>

<!--dishes section end-->
<!--About section-->

<section class="about" id="about">
    <h3 class="sub-heading">about us</h3>
    <h1 class="heading">Why choose us?</h1>
    <div class="row">
        <div class="image">
            <img src="about-img.png" alt="">
        </div>
        <div class="content">
            <h3>Best Food In The Country!</h3>
            <p>At punctual Pantry we strive to deliver the best food at the fastest speed possible!<br>
            Expect only the tastiest and the freshest food, arriving on time.
            </p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 customer care</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

</section>

<!--About section end-->

<!--menu section-->
<section class="menu" id="menu">
    <h3 class="sub-heading">La Carte</h3>
    <h1 class="heading">Chef's Special</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="menu-1.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>Every bite is bursting with flavor and the perfect combination of chewy, cheesy, and savory. We offer a variety of toppings, including classic options like pepperoni, mushrooms, and sausage, as well as unique options like artichokes, sun-dried tomatoes, and feta cheese.</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹300</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="menu-2.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>The vegetables are mashed together to create a creamy and flavorful mixture that is served hot with soft buttered pav buns. Each bite is a burst of spicy and tangy flavors</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹150</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="menu-3.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>Every bite is a perfect blend of tender meat or vegetables, aromatic spices, and soft dough, creating a mouthwatering taste that will leave you craving for more.</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹80</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="menu-4.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>Every bite is a perfect blend of tender meat or vegetables, aromatic spices, and soft dough, creating a mouthwatering taste that will leave you craving for more.</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹80</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="menu-5.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>succulent and flavorful chicken that is bursting with spices and is perfect for any occasion. Our tandoori chicken is served with a side of mint chutney</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹450</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="menu-6.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>golden-brown vada that is crispy on the outside and fluffy on the inside, with a satisfying crunch that will leave you wanting more. Our vada is served with a side of coconut chutney and sambar</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹45</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="menu-7.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>fragrant and savory dish that is bursting with flavor and aroma. Each spoonful is a perfect blend of fluffy rice, tender vegetables, and savory sauces that will tantalize your taste buds</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹200</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="menu-8.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>Each bite is a perfect balance of sweet and savory, with a delicate texture that is sure to satisfy your cravings.</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹320</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="menu-10.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <h3>Delicious food</h3>
                <p>We use only the finest quality ingredients, and our chefs take pride in creating delicious and satisfying chicken dishes that will leave you craving for more.</p>
                     <a href="#" class="btn">add to cart</a>
                     <span class="price">₹350</span>
            </div>
        </div>

    </div>
</section>

<!--menu section ends-->

<!--review section -->
<section class="review" id="review">
    <h3 class="sub-heading">customer's review</h3>
    <h1 class="heading">what they say</h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="pic-1.jpg" alt="">
                    <div class="user-info">
                        <h3>John Doe</h3>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>The cheese was melted to perfection and the tomato sauce was tangy and delicious. I highly recommend the pizza!</p>
                    </div>
                </div>
            </div>
       

    
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="pic-2.jpg" alt="">
                    <div class="user-info">
                        <h3>Jennie</h3>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p>The vada from this restaurant was crispy on the outside and fluffy on the inside. It came with a flavorful coconut chutney and spicy sambar sauce. Perfect snack!</p>
                    </div>
                </div>
            </div>
        

    
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="pic-3.jpg" alt="">
                    <div class="user-info">
                        <h3>Lisa</h3>
                        <p>⭐⭐⭐⭐</p>
                        <p>The tandoori chicken was juicy and tender with a perfectly charred exterior. The spices were well balanced and the dish was served with a side of tangy raita. Great flavor!</p>
                    </div>
                </div>
            </div>
        

    
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="pic-4.jpg" alt="">
                    <div class="user-info">
                        <h3>Sam Dobrey</h3>
                        <p>⭐⭐⭐⭐</p>
                        <p>The pav bhaji had a perfect blend of vegetables and spices, and the buttered pav was soft and delicious. This dish is a must-try for Indian food lovers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        


    
</section>
<!--review section -->

<!--Order section-->
<section class="order" id="order">
    <h3 class="sub-heading">Order now</h3>
    <h1 class="heading">Lightning speed delivery</h1>
    
    <form action="">
        <div class="inputBox">
            <div class="input">
                <span>Your Name</span>
                <input type="text" placeholder="enter your name">
            </div>

            <div class="input">
                <span>Your Contact No.</span>
                <input type="number" placeholder="enter your number">
            </div>

            <div class="input">
                <span>Your Order</span>
                <input type="text" placeholder="enter your food item">
            </div>

            <div class="input">
                <span>Extras</span>
                <input type="text" placeholder="additional items">
            </div>

            <div class="input">
                <span>Quantity</span>
                <input type="number" placeholder="How many orders">
            </div>

            <div class="input">
                <span>date and time</span>
                <input type="datetime-local">
            </div>

            <div class="input">
                <span>Your address</span>
                <textarea name="" placeholder="enter your address" cols="30" rows="10"></textarea>
            </div>

            <div class="input">
                <span>Your Message</span>
                <textarea name="" placeholder="Additional Delivery Instruction" cols="30" rows="10"></textarea>
            </div>

        </div>
        <input type="submit" value="order now" class="btn">
    </form>
</section>
<!--Order section end-->

<!--footer section-->
<section class="footer" id="footer">
    <div class="box-container">
        <div class="box">
            <h3>locations</h3>
            <a href="#">Pakistan</a>
            <a href="#">Japan</a>
            <a href="#">South Korea</a>
            <a href="#">USA</a>
            <a href="#">UK</a>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#">Home</a>
            <a href="#">Dishes</a>
            <a href="#">About</a>
            <a href="#">Menu</a>
            <a href="#">Review</a>
            <a href="#">Order</a>
        </div>

        <div class="box">
            <h3>Contact Us</h3>
            <a href="#">+92 3115958434</a>
            <a href="#">+92 3105048904</a>
            <a href="#">wah@punctual.com</a>
            <a href="#">Wah, Pakistan -47020</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>
        <div class="credit">
            copyright @ 2023 by <span>beta_tech</span>
        </div>

    </div>
</section>

<!--footer ends-->

<!--Loader-->
<div class="loader-container">
    <img src="images/loader.gif" alt="loader">
</div>




<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<!--home sections ends-->
    <script >let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}




window.onscroll = () =>{

    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    
}

document.querySelector('#search-icon').onclick = () =>{
    document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () =>{
    document.querySelector('#search-form').classList.remove('active');
}
/*Slider for header*/

var swiper = new Swiper(".home-slider", {
    
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
    observer: true,
    observeParents: true,
  });
/*Slider for reviews*/

var swiper = new Swiper(".review-slider", {
    
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  }
});
function loader(){
  document.querySelector('.loader-container').classList.add('fade-out');
}
function fadeOut(){
  setInterval(loader,3000);
}
window.onload=fadeOut;
</script>
</body>
</html>