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
    <title>Products</title>
</head>
<body>
    <header>
        <a href="/index">
            <img src="./images/logo.svg" alt="Logo Image">
        </a>
        <nav>
            <li><a href="/index">Home</a></li>
            <li><a id="activeItem" href="/allproducts">Products</a></li>
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
        <div class="container">
            <h1>Neon lights</h1>
            <p>The process begins with a design or concept for the neon 
                sign. This could be a business logo, a piece of artwork, or any 
                other visual representation.
                
                Electrodes, typically made of pure iron or coated with special 
                materials, are attached to each end of the glass tube. These 
                electrodes facilitate the flow of electric current through 
                the neon gas.
            </p>
            <input type="button" value="Read more">
            <ul>
                <li id="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <img src="./images/neonimg.jpg" class="rectangleIMG" alt="">
    </div>
    <div class="products">
        <div class="filter">
            <div class="sort">
                <input type="text" placeholder="Search">
                <p>Categories</p>
                <ul>
                    <li><span class="material-symbols-outlined">brush </span><a href=""> Inks</a></li>
                    <li><span class="material-symbols-outlined">print </span><a href=""> Printing Materials</a></li>
                    <li><span class="material-symbols-outlined">inventory </span><a href="">Accessories</a></li>
                </ul>
                <br>
                <hr>
                <p>Brands</p>
                <ul>
                    <li><span class="material-symbols-outlined">branding_watermark </span><a href=""> Folex</a></li>
                    <li><span class="material-symbols-outlined">branding_watermark </span><a href=""> Sihl</a></li>
                    <li><span class="material-symbols-outlined">branding_watermark </span><a href=""> Avery Dennison</a></li>
                    <li><span class="material-symbols-outlined">branding_watermark </span><a href=""> 3A Composites</a></li>
                </ul>
                <br>
                <hr>
                <p>Price range</p>
                <input type="number" value="Min"><br>
                <input type="number" value="Max">
            </div>
            
        </div>
        <div class="allProducts">
            <div class="card">
                <h3>Colored bank paper</h3>
                <p>All Varieties of Bank
                    Paper</p>
                <div></div>
                <img src="./images/pic2.jpg" alt="Ink product image">
            </div>
            <div class="card">
                <h3>Colored bank paper</h3>
                <p>All Varieties of Bank
                    Paper</p>
                <div></div>
                <img src="./images/pic2.jpg" alt="Ink product image">
            </div>
            <div class="card">
                <h3>Colored bank paper</h3>
                <p>All Varieties of Bank
                    Paper</p>
                <div></div>
                <img src="./images/pic2.jpg" alt="Ink product image">
            </div>
            <div class="card">
                <h3>Colored bank paper</h3>
                <p>All Varieties of Bank
                    Paper</p>
                <div></div>
                <img src="./images/pic2.jpg" alt="Ink product image">
            </div>
            <div class="card">
                <h3>Colored bank paper</h3>
                <p>All Varieties of Bank
                    Paper</p>
                <div></div>
                <img src="./images/pic2.jpg" alt="Ink product image">
            </div>
            <div class="card">
                <h3>Colored bank paper</h3>
                <p>All Varieties of Bank
                    Paper</p>
                <div></div>
                <img src="./images/pic2.jpg" alt="Ink product image">
            </div>
        </div>
    </div>
    <div class="third_sec">
        <h1>Popular products</h1>
        <div class="container large">
            <div class="card">
                <h3>Sp600 Ink (Toner)</h3>
                <p>Sp600 Ink; Yellow, 
                    Cyan, Magenta, Black</p>
                <div></div>
                <img src="./images/pic3.jpg" alt="Ink product image">
            </div>
            <div class="card">
                <h3>Sp600 Ink (Toner)</h3>
                <p>Sp600 Ink; Yellow, 
                    Cyan, Magenta, Black</p>
                <div></div>
                <img src="./images/pic3.jpg" alt="Ink product image">
            </div>
            <div class="card">
                <h3>Sp600 Ink (Toner)</h3>
                <p>Sp600 Ink; Yellow, 
                    Cyan, Magenta, Black</p>
                <div></div>
                <img src="./images/pic3.jpg" alt="Ink product image">
            </div>
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
</body>
</html>