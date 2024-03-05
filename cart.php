<div class="container-st3 ml-10">
        <div class="left-block">
            <img id="productImage" src="/images/stocks/" alt="Stock 4">
        </div>
        
        <div class="right-block">
            <h2 class="h1-white" id="productName">Назва товару</h2>
            <hr>
            <h2 class="h1-white" id="productPrice">Ціна</h2>
            <p class="h1-stock">________________________</p>
            <a href="#" class="oval-button" onclick="confirmPurchase()">Підтвердити покупку </a>
            <hr>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Отримати дані з локального сховища
    var img = localStorage.getItem('cartImg');
    var product = localStorage.getItem('cartProduct');
    var price = localStorage.getItem('cartPrice');

// Створення об'єкту з даними
var data = {
    img: img,
    product: product,
    price: price
};

    // Вивести дані на сторінку
    document.getElementById('productImage').src = '/images/iPhons/' + img;
    document.getElementById('productName').innerText = product;
    document.getElementById('productPrice').innerText = price + ' ₴';
});

 function confirmPurchase() {
    //  підтвердження покупки
    //alert('Покупка підтверджена!');

    // Очищення локального сховища
    // localStorage.removeItem('cartImg');
    // localStorage.removeItem('cartProduct');
    // localStorage.removeItem('cartPrice');

    // Перенаправлення на сторінку корзини або іншу потрібну сторінку
    window.location.href = 'do_sale';
} 
</script>
