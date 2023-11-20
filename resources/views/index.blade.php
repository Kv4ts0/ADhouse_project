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
    <title>Home</title>
</head>
<body>
    <header>
        <a href="/index">
            <img src="./images/logo.svg" alt="Logo Image">
        </a>
        <nav>
            <li><a id="activeItem" href="/index">Home</a></li>
            <li><a href="/allproducts">Products</a></li>
            <li><a href="/index#contact">Contact</a></li>
            <li><a href="/faq">F.A.Q</a></li>
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
                        @foreach($slides->take(1) as $sl)
                        <div class="slide_text">
                            <h1>{{$sl->name}}</h1>
                            <p>{{$sl->description}}</p>
                            <input id="readMoreB" type="button" value="Read more">
                        </div>
                        <div class="slide-img">
                            <img src="storage/slide/{{$sl->image}}" alt="Service Image">
                        </div>
                        @endforeach
                    </div>    
                    
                    <div class="slide-col">
                        @foreach($slides->skip(1)->take(1) as $sl)
                        <div class="slide_text">
                            <h1>{{$sl->name}}</h1>
                            <p>{{$sl->description}}</p>
                            <input id="readMoreB" type="button" value="Read more">
                        </div>
                        <div class="slide-img">
                            <img src="storage/slide/{{$sl->image}}" alt="Service Image">
                        </div>
                        @endforeach
                    </div>    

                    <div class="slide-col">
                        @foreach($slides->skip(2)->take(1) as $sl)
                        <div class="slide_text">
                            <h1>{{$sl->name}}</h1>
                            <p>{{$sl->description}}</p>
                            <input id="readMoreB" type="button" value="Read more">
                        </div>
                        <div class="slide-img">
                            <img src="storage/slide/{{$sl->image}}" alt="Service Image">
                        </div>
                        @endforeach
                    </div>    
                </div>
            </div>
        </div>
    </div>
    
    <div class="second_sec">
        <div class="slidecont">
            <div class="indicator1">
                <span class="btn active"></span>
                <span class="btn"></span>
                <span class="btn"></span>
            </div>
            <div class="testimonial">
                <div class="slide-row" id="slide1">
                    <div class="slide-col">
                        @foreach($slides->skip(2)->take(1) as $sl)
                        <div class="slideLeft-img">
                            <img src="storage/slide/{{$sl->image}}" alt="Service Image">
                        </div>
                        <div class="slideRight_text">
                            <h1>{{$sl->name}}</h1>
                            <p>{{$sl->description}}</p>
                        </div>
                        @endforeach
                    </div>    
                    
                    <div class="slide-col">
                        @foreach($slides->skip(1)->take(1) as $sl)
                        <div class="slideLeft-img">
                            <img src="storage/slide/{{$sl->image}}" alt="Service Image">
                        </div>
                        <div class="slideRight_text">
                            <h1>{{$sl->name}}</h1>
                            <p>{{$sl->description}}</p>
                        </div>
                        @endforeach
                    </div>    

                    <div class="slide-col">
                        @foreach($slides->take(1) as $sl)
                        <div class="slideLeft-img">
                            <img src="storage/slide/{{$sl->image}}" alt="Service Image">
                        </div>
                        <div class="slideRight_text">
                            <h1>{{$sl->name}}</h1>
                            <p>{{$sl->description}}</p>
                        </div>
                        @endforeach
                    </div>    
                </div>
            </div>
        </div>
    </div>
   
    <div class="third_sec">
        <div class="container third">
            @foreach($products->take(6) as $pr)
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
    
    <div class="fourth_sec" id="contact">
        <img src="./images/map.png" class="radialImg" alt="">
        <div>
            <h1>Contact</h1>
            <p>Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. Lorem 
                Ipsum has been the industry's standard 
                dummy text ever since the 1500s, when an 
                unknown printer took a galley of type and 
                scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also 
                the leap into electronic typesetting, remaining 
                essentially unchanged.</p>
            <p><span class="material-symbols-outlined">call </span> 0322 - 38 - 20 - 23 </p>
            <p><span class="material-symbols-outlined">map </span> Tbilisi, Gldani, N 3 M.Nozadze St</p>
        </div>
    </div>

    <footer>
        <div class="company">
            <a href="./index">
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
                <li><a href="./index"><span style="font-size: 16px;" class="material-symbols-outlined">home </span> Home</a></li>
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