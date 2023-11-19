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
    <title>F.A.Q</title>
</head>
<body>
    <header>
        <a href="/index">
            <img src="./images/logo.svg" alt="Logo Image">
        </a>
        <nav>
            <li><a href="/index">Home</a></li>
            <li><a href="/allproducts">Products</a></li>
            <li><a href="/index#contact">Contact</a></li>
            <li><a id="activeItem" href="/faq">F.A.Q</a></li>
        </nav>
        <div class="authorization">
            <input type="button" value="Sign up">
            <input type="button" value="Sign in">
        </div>
        <div class="language">
            <img src="images/language.svg" alt="ENG language">
        </div>
    </header>
    <div class="fourth_sec faq">
        <div class="qa">
            <div class="qaH">
                <h1>Frequently asked question</h1>
                <p>Have a Question?</p>
            </div>
            <div class="qacard">
                <h3>Question #1</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's</p>
            </div>
            <div class="qacard">
                <h3>Question #2</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's</p>
            </div>
            <div class="qacard">
                <h3>Question #3</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's</p>
            </div>
        </div>
        <img src="./images/bilboards.svg" alt="Bilboards">
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
    
</body>
</html>