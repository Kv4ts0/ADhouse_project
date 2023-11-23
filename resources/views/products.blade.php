<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Products</title>
</head>
<body>
<header>
        <a href="/index">
            <img src="./images/logo.svg" alt="Logo Image">
        </a>
        
        <nav>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li><a id="activeItem" href="/index">Home</a></li>
                <li><a href="/allproducts">Products</a></li>
                <li><a href="/index#contact">Contact</a></li>
                <li><a href="/faq">F.A.Q</a></li>
                <div class="authorizationH">
                    <input type="button" value="Sign up">
                    <input type="button" value="Sign in">
                </div>
                <div class="closeMenu"><i class="fa fa-times"></i>
                <span class="icons">
                    <div class="languageH">
                        <img src="images/language.svg" alt="ENG language">
                    </div>
                </span>
            </ul>
            </div>
        </nav>
        <div class="authorization">
            <input type="button" value="Sign up">
            <input type="button" value="Sign in">
        </div>
        <div class="language">
            <img src="images/language.svg" alt="ENG language">
        </div>
    </header>
    <div class="first_sec">
    <div class="slidecont">
            <div class="indicator">
                <span class="btn active"></span>
                <span class="btn"></span>
                <span class="btn"></span>
            </div>
            <div class="testimonial">
                <div class="slide-row" id="slide">
                    <div class="slide-col">
                        @foreach($products->take(1) as $pr)
                        <div class="slide-img">
                            <img src="storage/post/{{$pr->image1}}" alt="Service Image">
                        </div>
                        <div class="slide_text">
                            <h1>{{$pr->name}}</h1>
                            <p>{{$pr->description}}</p>
                            <a href="{{ route('item',['id' => $pr->id]) }}">
                                <input id="readMoreB" type="button" value="Read more">
                            </a>
                        </div>

                        @endforeach
                    </div>    
                    
                    <div class="slide-col">
                        @foreach($products->skip(1)->take(1) as $pr)
                        <div class="slide-img">
                            <img src="storage/post/{{$pr->image1}}" alt="Service Image">
                        </div>
                        <div class="slide_text">
                            <h1>{{$pr->name}}</h1>
                            <p>{{$pr->description}}</p>
                            <a href="{{ route('item',['id' => $pr->id]) }}">
                                <input id="readMoreB" type="button" value="Read more">
                            </a>
                        </div>

                        @endforeach
                    </div>    

                    <div class="slide-col">
                        @foreach($products->skip(2)->take(1) as $pr)
                        <div class="slide-img">
                            <img src="storage/post/{{$pr->image1}}" alt="Service Image">
                        </div>
                        <div class="slide_text">
                            <h1>{{$pr->name}}</h1>
                            <p>{{$pr->description}}</p>
                            <a href="{{ route('item',['id' => $pr->id]) }}">
                                <input id="readMoreB" type="button" value="Read more">
                            </a>
                        </div>

                        @endforeach
                    </div>    
                </div>
            </div>
        </div>
    </div>
    
    <div class="products">
        <div class="filter">
            <div class="sort">
                <form action="{{ route('allproducts.all') }}" >
                <td><input type="text" name="name" value="{{$filters['name']}}" placeholder="Search"></td>
                <p>Categories</p>
                
                <ul>
                    <li><span class="material-symbols-outlined">brush </span><a href="{{ route('allproducts.all', ['category' => 'Inks']) }}"> Inks</a></li>
                    <li><span class="material-symbols-outlined">print </span><a href="{{ route('allproducts.all', ['category' => 'Printing Materials']) }}"> Printing Materials</a></li>
                    <li><span class="material-symbols-outlined">inventory </span><a href="{{ route('allproducts.all', ['category' => 'Accessories']) }}"> Accessories</a></li>
                </ul>
                <br>
                <hr>
                <p>Brands</p>
                <ul>
                    <li><span class="material-symbols-outlined">branding_watermark </span><a href="{{ route('allproducts.all', ['brand' => 'Folex']) }}"> Folex</a></li>
                    <li><span class="material-symbols-outlined">branding_watermark </span><a href="{{ route('allproducts.all', ['brand' => 'Sihl']) }}"> Sihl</a></li>
                    <li><span class="material-symbols-outlined">branding_watermark </span><a href="{{ route('allproducts.all', ['brand' => 'Avery Denission']) }}"> Avery Denission</a></li>
                    <li><span class="material-symbols-outlined">branding_watermark </span><a href="{{ route('allproducts.all', ['brand' => '3A Composites']) }}"> 3A Composites</a></li>
                </ul>
                <br>
                <hr>
                <p>Price range</p>
                
                <input type="number" value="Min" name="min_price" value="{{$filters['min_price']}}" placeholder="Min Price">
                <input type="number" value="Max" name="max_price" value="{{$filters['max_price']}}" placeholder="Max Price">
                <button type="submit"><span class="material-symbols-outlined">search</span></button>
            </div>
            
        </div>
        <div class="allProducts">
            @foreach($products->take(6) as $pr)
            <div class="card">
                <h3>{{$pr->name}}</h3>
                <p class="limitedp5">{{$pr->description}}</p>
                <a href="{{ route('item',['id' => $pr->id]) }}">
                    <input id="readMore" type="button" value="Read more">
                </a>
                <div></div>
                <img src="storage/post/{{$pr->image1}}" alt="Ink product image">
            </div>
            @endforeach
        </div>
    </div>
    <div class="third_sec rel">
        <h1>Related products</h1>
        <div class="container large">
        @foreach($products->skip(3)->take(3) as $pr)
            <div class="card">
                
                <h3>{{ $pr->name }}</h3>
                <p class="limitedp5">{{ $pr->description }}</p>
                <a href="{{ route('item',['id' => $pr->id]) }}">
                    <input id="readMore" type="button" value="Read more">
                </a>
                <div></div>
                <img src="storage/post/{{$pr->image1}}" alt="Ink product image">
            </div>
            @endforeach
        </div>
        <ul>
            
            <li id="active"></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <footer>
        <div class="company">
            <a href="/index">
                <img src="./images/logolight.svg" alt="Logo image">
            </a>
            <p>Lorem Ipsum is simply dummy text of the printing 
                and typesetting industry. Lorem Ipsum has been 
                the industry's standard dummy text ever since the 
                1500s, when an unknown printer took a galley 
                of type and scrambled it to make a type specimen 
                book. </p>
        </div>
        <nav>
            
            <ul>
                <li><p>Navigation</p></li>
                <li><a href="/index"><span style="font-size: 16px;" class="material-symbols-outlined">home </span> Home</a></li>
                <li><a href="/index#contact"><span style="font-size: 16px;" class="material-symbols-outlined">phone </span> Contact</a></li>
                <li><a href="/allproducts"><span style="font-size: 16px;" class="material-symbols-outlined">category </span> Products</a></li>
                <li><a href="/faq"><span style="font-size: 16px;" class="material-symbols-outlined">help </span> F.A.Q</a></li>
            </ul>
        </nav>
        <div class="switcher">
            <img src="./images/lightdark.svg" alt="Light / dark switcher">
            <img src="./images/Languagedark.svg" alt="Language switcher">
        </div>
    </footer>
    <script src="./js/index.js"></script>
</body>
</html>