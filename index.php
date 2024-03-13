 
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
       <a href="stock1" class="stock mr-5"><div><img src="/images/stocks/stock1.png" alt="Stock 1"></div></a>
       <a href="stock2" class="stock"><div><img src="/images/stocks/stock2.png" alt="Stock 2"></div></a>
       </div>
    </div>

    <div>    
    </div>

    <!-- популярні -->
    <div class="image-slider-container h-auto invisible-border"> 
       <div>
           <h1 class="h1-stock">Популярні</h1>
       </div>
       
       <div class="stock-container">
       <div onclick="addToCart('popular/popl1.png', 'iPhone 15 Pro Max 256Gb Natural Titanium', '51999')">
       <img class="d-max mr-5" src="images/popular/popl1.png" alt="foto">
       </div>
       
       <div onclick="addToCart('popular/popl2.png', 'iPad 10.2 (2021) Wi-Fi 64Gb Space Gray(MK2K3)', '12199')">
       <img class="d-max mr-5" src="images/popular/popl2.png" alt="foto">
       </div>
       
       <div onclick="addToCart('popular/popl3.png', 'MacBook Air 13 Apple M1/8Gb/256Gb SSD/...', '34599')">
       <img class="d-max mr-5" src="images/popular/popl3.png" alt="foto">
       </div>
       
       <div onclick="addToCart('popular/popl4.png', 'Ігрова приставка Sony PlayStation 5 Blue-Ray', '22799')">
       <img class="d-max mr-5" src="images/popular/popl4.png" alt="foto">
       </div>
       
       <div onclick="addToCart('popular/popl5.png', 'Навушники AirPods Pro(2Gen)', '9199')">
       <img class="d-max" src="images/popular/popl5.png" alt="foto">
       </div>
       </div>
    </div>

    <div>    
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
    <script>
        // блок слайдер 
document.addEventListener("DOMContentLoaded", function () {
    // Get the image slider element
    const imageSlider = document.querySelector(".image-slider");
    const toggleSwitch = document.getElementById("toggleSwitch");

    // слайд ефект
    function slideImages() {
        // Calculate the width of a single image
        const imageWidth = document.querySelector(".image-slider img").clientWidth;

        // Move the slider to the left by the width of one image
        imageSlider.style.transition = "transform 0.5s ease-in-out";
        imageSlider.style.transform = `translateX(-${imageWidth}px)`;

        // Reset the transition and move the first image to the end
        setTimeout(() => {
            imageSlider.style.transition = "none";
            imageSlider.style.transform = "translateX(0)";
            imageSlider.appendChild(imageSlider.firstElementChild);
        }, 500);
    }

    // Викликати the slideImages function кожні 4000 мілісекунд (4 секунд)
    setInterval(slideImages, 4000);

    toggleSwitch.addEventListener("change", function () {
        document.body.classList.toggle("night-mode", toggleSwitch.checked);
    });
});
    </script>