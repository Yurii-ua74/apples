
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>   🍏 YABLUKA.ua | Мережа магазинів техніки Apple в Україні — найкраща ціна на товари Apple </title>
    <link rel="stylesheet" href="/css/site.css"/>

<style>
.container-f {
  display: grid;
}

.footer-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 20px; /* відступ між блоками */
}

.footer-block {
  color: white;
}
</style>
</head>

<body>

<!-- Верхній навігатор  -->
<nav>
        <div class="container">
            <div class="block-left">
                <a href="/" class="brand-logo left"><img src="/images/logo.png" alt="YABLUKA Logo" class="logo-img ml-10"></a>
            </div>
            
            <div class="block-center">
                <button class="btn_center"><a href="stores">Магазини</a></button>
                <button class="btn_center"><a href="noleggiare">Yabluka|Прокат</a></button>
                <button class="btn_center"><a href="sales">Розпродаж Б/У</a></button>
                <button class="btn_center"><a href="scambio">Yabluka|Обмін</a></button>
                <div id="user-info" class="user-info ml-4"></div>
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
                <a href="apples"><h4><img class="ht-3 mr-4"       src="/images/list/apple-r.ico"         alt="Apple              ">Apple             </h4></a> 
                <a href="applesused"><h4><img class="ht-3 mr-4"   src="/images/list/apple-old-r.ico"     alt="Apple-old          ">Apple Б/У         </h4></a>
                <a href="accessories"><h4><img class="ht-3 mr-4"  src="/images/list/accessories-r.ico"   alt="Apple Аксессуари   ">Apple Аксессуари  </h4></a>
                <a href="smartphones"><h4><img class="ht-3 mr-4"  src="/images/list/smartphones-r.ico"   alt="Смартфони          ">Смартфони         </h4></a>
                <a href="headphones"><h4><img class="ht-3 mr-4"   src="/images/list/headphones-r.ico"    alt="Навушники та Аудіо ">Навушники та Аудіо</h4></a>
                <a href="gameconsole"><h4><img class="ht-3 mr-4"  src="/images/list/console-game-r.ico"  alt="Ігрові консолі     ">Ігрові консолі    </h4></a>
                <a href="photovideo"><h4><img class="ht-3 mr-4"   src="/images/list/photo-video-r.ico"   alt="Фото та Відео      ">Фото та Відео     </h4></a>
                <a href="hometechnics"><h4><img class="ht-3 mr-4" src="/images/list/home-technics-r.ico" alt="Побутова техніка   ">Побутова техніка  </h4></a>
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
        <!-- правий блок навігатора з трьома іконками -->
        <div class="block-right-d ht mr-10">
            <a href="private"><img class="ht-3 mr-4" src="/images/body.ico" alt="Особистий кабінет"></a>
            <a href="equal"><img class="ht-3 mr-4" src="/images/equal-r.ico" alt="Порівняння товарів"></a>
            <a href="cestino"><img class="ht" src="/images/cestino-r.ico" alt="Кошик"></a>
        </div>
    </div>
    </nav>

    <!-- вставка сторінки -->
    <div class="container_layout">
       <?php include $page_body ; ?>
    </div>

    <!-- footer -->
  <footer class="page-footer night-mode">
  <div class="container-f">
    <div class="footer-grid">
      <!-- Логотип зверху -->
      <div class="block-left">
        <a href="/" class="brand-logo left"><img src="/images/logo.png" alt="YABLUKA Logo" class="logo-img ml-10"></a>        
        <div class="footer-block ml-10">
        <h3>Call-Центр</h3>
        <p>0(800)333-333</p>
        <p>гаряча лінія</p>
        <p>0(800)555-555</p>
        <p>Оформлення замовлення</p>
        <p>orders@yabloki.ua</p>
        <p>Працюємо щодня<br>c 9:00 до 22:00</p>
    </div>
    </div>

      <!-- Перший блок -->
      <div class="footer-block">
        <h3>Каталог</h3>
        <p>iPhone</p>
        <p>iPad</p>
        <p>Apple Watch</p>
        <p>Навушники</p>
        <p>Аксесуари</p>
        <p>Периферія</p>
        <p>Акустика</p>
      </div>

      <!-- Другий блок -->
      <div class="footer-block">
        <h3>Популярне</h3>
        <p>iPhone 15</p>
        <p>iPhone 15 Plus</p>
        <p>iPhone 15Pro</p>
        <p>iPhone 15Pro Max</p>
        <p>iPhone 14Pro Max</p>
        <p>Apple Watch SE</p>
        <p>Apple Watch Series 9</p>
        <p>Apple Watch Ultra 2</p>
      </div>

      <!-- Третій блок -->
      <div class="footer-block">
        <h3>Компанія</h3>
        <p>Про компанію</p>
        <p>Вакансії</p>
        <p>Гарантія і сервіс</p>
        <p>Оплата і доствка</p>
        <p>Кредит та розстрочка</p>
        <p>Обмін і повернення</p>
        <p>Yabluka Прокат</p>
      </div>

      <!-- Четвертий блок -->
      <div class="footer-block">
        <h3>Сервіс</h3>
        <p>Наші магазини</p>
        <p>Наші сервісні центри</p>
        <p>Обслуговування клієнтів</p>
      </div>

    </div>

    <div class="block-left ml-12">
    <a href="https://uk-ua.facebook.com/" target="_blank">
       <img class="ht-3 mr-4" src="/images/social_network/fsbk-r.ico" alt="facebook">
    </a>
    <a href="https://www.instagram.com/" target="_blank">
        <img class="ht-3 mr-4" src="/images/social_network/insta-r.ico" alt="instagram">
    </a>
    <a href="https://web.telegram.org/k/" target="_blank">
        <img class="ht-3" src="/images/social_network/telegr-r.ico" alt="telegram">
    </a>
    <a href="https://twitter.com/?lang=en" target="_blank">
        <img class="ht-3" src="/images/social_network/tvit-r.ico" alt="twiter">
    </a>
    <a href="https://www.youtube.com/" target="_blank">
        <img class="ht-3" src="/images/social_network/yout-r.ico" alt="youtube">
    </a>
    </div>
    <div class="w-100 height-3">
       <img class="ht-3" src="/images/ftr-of-ftr.png" alt="footer of footer">
    </div>
  </div>
</footer>
    
<!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/site.js"></script>
<script>
// Отримання даних з localStorage
var client_id = localStorage.getItem("client_id");
var first_name = localStorage.getItem("first_name");
var last_name = localStorage.getItem("last_name");

// Виведення даних у навігаторі
var userInfoDiv = document.getElementById("user-info");
if (client_id && first_name && last_name) {
    userInfoDiv.innerHTML = '<a href="log_out">' + first_name + ' ' + last_name + '</a>';
}
</script>
</body>
</html>



