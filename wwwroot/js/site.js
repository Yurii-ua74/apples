// поле Каталог товарів - випадаючий список
function openProductList() {
    var navBlock = document.querySelector('.btn_center-d');
    navBlock.style.border = '1px solid yellow';
    var customElement = document.getElementById('productList');
    // var overlay = document.querySelector('.overlay');
    
    customElement .style.display = 'block';
    // overlay.style.display = 'block';
}

function closeProductList() {
    var customElement  = document.getElementById('productList');
    // var overlay = document.querySelector('.overlay');

    customElement .style.display = 'none';
    // overlay.style.display = 'none';

    var navBlock = document.querySelector('.btn_center-d');
    navBlock.style.border = ''; // відновлення стандартного бордера
}


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