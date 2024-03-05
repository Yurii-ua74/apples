
<div class="block-center">
<h3>ID: </h3>
<h3 class="h1-white" name="id" id="id">id</h3></div>
<div class="block-center">
<h3>ПІБ: </h3>
<h3 class="h1-white" name="name" id="name">name</h3>
<h3><span> . </span></h3>
<h3 class="h1-white" name="surname" id="surname">surname</h3></div>
<div class="block-center">
<h3>E-masl: </h3>
<h2 class="h1-white" name="email" id="email">email</h2></div>
<div class="block-center">
<h3>Назва товару: </h3>
<h2 class="h1-white" name="productName" id="productName">Назва товару</h2></div>
<div class="block-center">
<h3>Ціна товару: </h3>
<h2 class="h1-white" name="price" id="price">price</h2></div>
<div class="block-center">
<h3>Дата покупки: </h3>
<h2 class="h1-white" name="price" id="date">date</h2></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Отримати дані з локального сховища
    var client_id = localStorage.getItem("client_id");
    var first_name = localStorage.getItem("first_name");
    var last_name = localStorage.getItem("last_name");
    var email = localStorage.getItem("email");
    var cartProduct = localStorage.getItem("cartProduct");
    var cartPrice = localStorage.getItem("cartPrice");
    // Отримання поточної дати та часу
    var currentDate = new Date();
    var formattedDate = currentDate.toLocaleString();
    // Вивести дані на сторінку
    document.getElementById('id').innerText = client_id;
    document.getElementById('name').innerText = first_name;
    document.getElementById('surname').innerText = last_name;
    document.getElementById('email').innerText = email;
    document.getElementById('productName').innerText = cartProduct;
    document.getElementById('price').innerText = cartPrice + ' ₴';
    document.getElementById('date').innerText = formattedDate;
});
</script>