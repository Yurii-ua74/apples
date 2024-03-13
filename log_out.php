
<!-- прогресс бар -->
<div class="center-block">
<div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper center">
          <div class="circle"></div>
        </div>
      </div>

   <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
</div>

    <style>
        h1 {
            text-align: center;
        }
        .center-block {
              display: flex;
              justify-content: center;
              align-items: center;
              height: 80vh;
            }
    </style>
<?php
// Отримання значення імені з localStorage та передача його в JavaScript
echo '<script>';
echo 'var fname = localStorage.getItem("first_name");'; // Зберігаю ім'я в змінну fname
echo '</script>';
?>
<div class="text-center">
<h2 class="h1-white txt-center">До побачення, <span id="namePlaceholder"></span></h2><br>
<h3 class="h1-white txt-center">Ви вийшли з облікового запису</h3>
</div>
<?php
// Очищення localStorage
echo '<script>';
echo 'localStorage.removeItem("client_id");';
echo 'localStorage.removeItem("first_name");';
echo 'localStorage.removeItem("last_name");';
echo 'localStorage.removeItem("email");';
echo 'localStorage.removeItem("cartItems");';
// Очищення кошика
echo 'var cartItems = [];'; // Очищаємо кошик
echo 'localStorage.setItem("cartItems", JSON.stringify(cartItems));'; // Зберігаємо пустий кошик в localStorage
echo '</script>';
?>


<script>
  // Вставка імені в текст до побачення
  document.getElementById("namePlaceholder").textContent = fname;
    // асинхронна затримка щоб побачити прогрес бар
    // Функція для асинхронної затримки
    function asyncDelay(ms, callback) {
        setTimeout(callback, ms);
    }

    // Виклик асинхронної затримки перед перенаправленням
    asyncDelay(2000, function() {
        window.location.href = '/';
    });
</script>

