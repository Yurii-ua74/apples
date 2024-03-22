  <div class="txt-center">
    <div id="responseFromPHP" class="h1-white"></div>
  </div>
    
    <script>
        // Отримання даних з локального сховища
        var shopData = localStorage.getItem("shopData");
        // console.log("Data from local storage:", shopData);

        // Виконання AJAX-запиту для передачі даних з JavaScript до PHP
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log("Response from PHP:", this.responseText);
                document.getElementById("responseFromPHP").innerHTML = this.responseText; 
            }
        };
        // Передача даних через POST-запит
        xhr.open("POST", "postData", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("shopData=" + encodeURIComponent(shopData));

    </script>

