
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

<h3 class="h1-white txt-center">Ви вийшли з облікового запису</h3>
<?php
// Очищення localStorage
echo '<script>';
echo 'localStorage.removeItem("client_id");';
echo 'localStorage.removeItem("first_name");';
echo 'localStorage.removeItem("last_name");';
echo '</script>';
?>

<script>
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

