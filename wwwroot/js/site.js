// підтвердження покупки
function addToCart(img, product, price) {
    // Зберегти дані в локальному сховищі браузера
    localStorage.setItem('cartImg', img);
    localStorage.setItem('cartProduct', product);
    localStorage.setItem('cartPrice', price);

    // Перейти на сторінку корзини
    window.location.href = 'cestino';
}
// поле Каталог товарів - випадаючий список
// перевірка де знаходиться мишка
function isMouseInButtonOrWindow(event) {
    var button = document.querySelector('.btn_center-d');
    var productList = document.getElementById('productList');
    
    var buttonRect = button.getBoundingClientRect();
    var productListRect = productList.getBoundingClientRect();
    
    // Перевірка, чи миша в межах кнопки або вікна з додатковим відступом
    var isInButton = (
        event.clientX >= buttonRect.left - 15 &&
        event.clientX <= buttonRect.right + 15 &&
        event.clientY >= buttonRect.top - 15 &&
        event.clientY <= buttonRect.bottom + 15
    );
    return isInButton ;
}

// відкриття списку
function openProductList() {
    var navBlock = document.querySelector('.btn_center-d');
    navBlock.style.border = '1px solid yellow';
    var customElement = document.getElementById('productList');
    customElement .style.display = 'block';
}

// закриття списку
function closeProductList(event) {
    var customElement  = document.getElementById('productList');
    // Перевірка чи фокус миші на кнопці або вікні dropdown-content
    if (!isMouseInButtonOrWindow(event)) {
        customElement.style.display = 'none';  
        var navBlock = document.querySelector('.btn_center-d');
        navBlock.style.border = '';  
    }   
}

// Додавання обробника подій для dropdown-content
var dropdownContent = document.querySelector('.dropdown-content');
dropdownContent.addEventListener('mouseleave', closeProductList);
///////////////
//////////////////////////////////////////////////////////////////
///////////////

    //  обробка кліків верхнього навігатора
    // function handleButtonClick(buttonText) {
    //     window.location.href = "apples.php";
    // }