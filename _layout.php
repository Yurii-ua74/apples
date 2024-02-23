<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   🍏 YABLUKA.ua | Мережа магазинів техніки Apple в Україні — найкраща ціна на товари Apple </title>
    <link rel="stylesheet" href="/css/site.css"/>

</head>
<body>
     <!-- Верхній навігатор  -->
    <nav>
        <div class="container">
            <div class="block-left">
                <a href="/" class="brand-logo left"><img src="/images/logo.png" alt="YABLUKA Logo" class="logo-img ml-10"></a>
            </div>
            
            <div class="block-center">
                <button class="btn_center">Магазини</button>
                <button class="btn_center">Yabluka|Прокат</button>
                <button class="btn_center">Розпродаж Б/У</button>
                <button class="btn_center">Yabluka|Обмін</button>
            </div>
            <!-- перемикач мови -->
            <div class="block-right">          
                <div class="small-select-wrapper">
                        <div class="select select-language border-radius-4 color-grey-light background-primary-black d-flex py-4 pl-4 pr-3 mr-4">
                            <div class="lang-emoji"><img src="/images/emoji-ua.ico" alt="YABLUKA Logo" class="select-ico"></div>
                            <span class="select-language-text">UA</span>
                        </div>
                        <div class="custom-options-list languages-options-list d-none border-radius-1 background-primary-black p-2 mt-2">
                            <div class="option-item cursor-pointer" data-path="/rus/" data-locale="ru_RU">
                                <div class="lang-emoji"><img src="/images/emoji-ru.ico" alt="YABLUKA Logo" class="select-ico"></div>
                                <span class="option-item-text">RU</span>
                            </div>
                            <div class="option-item cursor-pointer" data-path="/" data-locale="uk_UA">
                                <div class="lang-emoji"><img src="/images/emoji-ua.ico" alt="YABLUKA Logo" class="select-ico"></div>
                                <span class="option-item-text">UA</span>
                            </div>
                        </div> 
                </div>
            <div>
            <!-- перемикач заднього фону -->
            <label class="--switch mr-10">
                <input id="toggleSwitch" class="" type="checkbox" checked="checked">
                <span class="--slider">
                <span class="icon day-icon mt-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="">
                    <image href="/images/day-r.ico" width="20" height="20" class="ml-1"/>
                    </svg>
                </span>
                <span class="icon night-icon mt-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="">
                    <image href="/images/night-r.ico" width="20" height="20" />
                    </svg>
                </span>
                </span>
            </label>
            </div>
            </div>
        </div>    
    </nav>
    <!-- нижній навігатор -->
    <nav>
        <!-- кнопка каталог товарів -->
    <div class="container-d">
        <div class="block-left ml-12">
            <button class="btn_center-d with-image" onmouseover="openProductList()" onmouseout="closeProductList()"></button>
            <div class="list" id="productList">
            <div class="dropdown-content">
                <!-- Add your product list content here -->
                <h4><img class="ht-3 mr-4" src="/images/list/apple-r.ico" alt="Apple">Apple</h4>
                <h4><img class="ht-3 mr-4" src="/images/list/apple-old-r.ico" alt="Apple-old">Apple Б/У</h4>
                <h4><img class="ht-3 mr-4" src="/images/list/accessories-r.ico" alt="Apple Аксессуари">Apple Аксессуари</h4>
                <h4><img class="ht-3 mr-4" src="/images/list/smartphones-r.ico" alt="Смартфони">Смартфони</h4>
                <h4><img class="ht-3 mr-4" src="/images/list/headphones-r.ico" alt="Навушники та Аудіо">Навушники та Аудіо</h4>
                <h4><img class="ht-3 mr-4" src="/images/list/console-game-r.ico" alt="Ігрові консолі">Ігрові консолі</h4>
                <h4><img class="ht-3 mr-4" src="/images/list/photo-video-r.ico" alt="Фото та Відео">Фото та Відео</h4>
                <h4><img class="ht-3 mr-4" src="/images/list/home-technics-r.ico" alt="Побутова техніка">Побутова техніка</h4>
            </div>
            </div>
        </div>
        <!-- поле для вводу пошуку -->
        <div class="block-center-d">
            <div class="search-container">
                <a href="body.php"><img class="ht-2 search-icon pr-5" src="/images/search-r.ico" alt="Пошук по сайту"></a>
                <input type="text" placeholder=" Пошук по сайту" class="search-input pl-4">           
            </div>
        </div>
        <!-- лівий блок навігатора з трьома іконками -->
        <div class="block-right-d ht mr-10">
            <a href="body.php"><img class="ht-3 mr-4" src="/images/body.ico" alt="Особистий кабінет"></a>
            <a href="egual-php"><img class="ht-3 mr-4" src="/images/equal-r.ico" alt="Порівняння товарів"></a>
            <a href="cestino-r.php"><img class="ht" src="/images/cestino-r.ico" alt="Кошик"></a>
        </div>
    </div>
    </nav>
    <!-- блок слайдер -->
    <div class="image-slider-container h-calc invisible-border">
        <div class="image-slider">
            <img src="/images/sliders/slider1.png" alt="Image 1">
            <img src="/images/sliders/slider2.png" alt="Image 2">
            <img src="/images/sliders/slider3.png" alt="Image 3">
            <img src="/images/sliders/slider4.png" alt="Image 4">
            <img src="/images/sliders/slider5.png" alt="Image 5">
            <img src="/images/sliders/slider6.png" alt="Image 6">            
        </div>
    </div>

    <div>
        
    </div>
    <!-- блок акції -->
    <div class="image-slider-container h-auto invisible-border">
       <div>
           <h1 class="h1-stock">Акції</h1>
       </div>
       <div class="stock-container">
           <div class="stock mr-5"><img src="/images/stocks/stock1.png" alt="Stock 1"></div>
           <div class="stock"><img src="/images/stocks/stock2.png" alt="Stock 2"></div>
       </div>
    </div>

    <div>    
    </div>

  <!-- futer -->
  <footer>
        <div class="footer-content image-slider-container h-calc invisible-border">
        <img src="/images/futer.png" alt="Stock 1">
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Your Website. All Rights Reserved.</p>
        </div>
    </footer>
    


<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/site.js"></script>
</body>
</html>



