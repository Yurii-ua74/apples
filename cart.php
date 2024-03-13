   <div id="cartItems"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Отримати дані з локального сховища
    var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Отримати дані з локального сховища
    var img = localStorage.getItem('cartImg');
    var product = localStorage.getItem('cartProduct');
    var price = localStorage.getItem('cartPrice');
    // Отримати дані з локального сховища
    var firstName = localStorage.getItem('first_name');
    var lastName = localStorage.getItem('last_name');

// Створення об'єкту з даними
var data = {
    img: img,
    product: product,
    price: price
};

if (firstName && lastName) {
// Додавання нового товару до кошика
cartItems.push(data);
//////////////////////////////////////////////////////////////////////////////////
// Оновлення даних у локальному сховищі
localStorage.setItem('cartItems', JSON.stringify(cartItems));

if (img && product && price && data) {
     // Проходження по кожному товару у кошику
     cartItems.forEach(function(item) {
        var newItem = document.createElement('div');
        newItem.classList.add('container-st3', 'ml-10');
        newItem.innerHTML = `
            <div class="left-block">
                <img src="/images/${item.img}" alt="${item.product}">
            </div>
            <div class="right-block">
                <h2 class="h1-white">${item.product}</h2>
                <hr>
                <h2 class="h1-white">${item.price} ₴</h2>
                <p class="h1-stock">________________________</p>
                <a href="#" class="oval-button" onclick="confirmPurchase()">Підтвердити покупку </a>
                <a href="#" class="oval-button bgc-red" onclick="cencel(this)"> X </a>
                </div>
        `;
        // Додати новий товар до списку товарів у кошику
        document.getElementById('cartItems').appendChild(newItem);
      });
    }
}else{
    alert("Увійдіть або зареєструйтеся");
}
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

function cencel(button) {
    var item = button.parentNode.parentNode; // Отримання батьківського блоку від кнопки
    item.remove(); // Видалення блоку з DOM
}
</script>
