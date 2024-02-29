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

// блок слайдер 
document.addEventListener("DOMContentLoaded", function () {
        // Get the image slider element
        const imageSlider = document.querySelector(".image-slider");
        const toggleSwitch = document.getElementById("toggleSwitch");

        // Function to handle the sliding effect
        function slideImages() {
            // Calculate the width of a single image
            const imageWidth = document.querySelector(".image-slider img").clientWidth;

            // Move the slider to the left by the width of one image
            imageSlider.style.transition = "transform 0.5s ease-in-out";
            imageSlider.style.transform = `translateX(-${imageWidth}px)`;

            // Append the first image to the end of the slider
            // imageSlider.appendChild(imageSlider.firstElementChild);

            // Reset the transition and move the first image to the end
            setTimeout(() => {
                imageSlider.style.transition = "none";
                imageSlider.style.transform = "translateX(0)";
                imageSlider.appendChild(imageSlider.firstElementChild);
            }, 500);
        }

        // Call the slideImages function every 4000 milliseconds (4 seconds)
        setInterval(slideImages, 4000);

        toggleSwitch.addEventListener("change", function () {
            document.body.classList.toggle("night-mode", toggleSwitch.checked);
        });
    });

    //  обробка кліків верхнього навігатора
    // function handleButtonClick(buttonText) {
    //     window.location.href = "apples.php";
    // }