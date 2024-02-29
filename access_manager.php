<?php

// echo '<pre>' ;
// print_r($_SERVER) ;
// echo $_SERVER ['REQUEST_URI'] ;
// Зберігає значення URI запиту в змінну $uri
$uri = $_SERVER['REQUEST_URI'] ;
// якщо у запиті є "?" то відрізаємо після нього
$pos = strpos( $uri, '?' ) ;
if( $pos > 0 ) {
	$uri = substr( $uri, 1, $pos ) ;
}
else {
	$uri = substr( $uri, 1 ) ;
}
// $uri не порожній рядок.
if( $uri != "" ) {
	// Збирає шлях до файлу на основі $uri
	$filename = "./wwwroot/{$uri}" ;
	// без зазначення типу контенту файли можуть бути ігноровані
	// а також з метою обмеження прямого доступу до деяких файлів
	// аналізуємо розширення файлу
	// Перевіряє, чи файл за зазначеним шляхом читабельний
	if( is_readable( $filename ) ) {   // запит URI - існуючий файл
		$ext = pathinfo( $filename, PATHINFO_EXTENSION ) ;
	// echo $ext ; exit ;
		unset( $content_type ) ;
		// Аналізує розширення файлу і встановлює відповідний тип контенту для HTTP-відповіді
		switch( $ext ) {
			case 'ico':
			case 'png': 
			case 'bmp':
			case 'gif': 
				$content_type = "image/{$ext}" ; break ;
			case 'jpg':
			case 'jpeg':
				$content_type = "image/jpeg" ; break ;
			case 'js':
				$content_type = "text/javascript" ; break ;
			case 'css':
			case 'html':
				$content_type = "text/{$ext}" ; break ;
		}
		if( isset( $content_type ) ) {
			// Встановлює заголовок HTTP для типу контенту.
			header( "Content-Type: {$content_type}" ) ;			
			readfile( $filename ) ;   // передає тіло файлу до НТТР-відповіді
		// Якщо файл не знайдено або не встановлено тип контенту, то 
		// генерується відповідний HTTP-відгук (404 Not Found або інший) і виводиться відповідне повідомлення.
		}
		else {
			http_response_code( 404 ) ;
			echo "Not found" ;
		}
		// Якщо обробка файлу завершилася успішно, виконується exit
		exit ;   // кінець роботи РНР скрипта (повний вихід)
	}
}

// Створюється масив $routes для визначення маршрутів (URI => файл).
// створюємо маршрутизацію
$routes = [
	''         => 'index.php',
    'stores'   => 'stores.php',
	'noleggiare'   => 'rent.php',
	'saldi'      => 'sales.php',
	'scambio' => 'exchange.php',
	'apples'   => 'apples.php',
	'applesused' => 'applesused.php',
	'accessories' => 'accessories.php',
	'smartphones' => 'smartphones.php',
	'headphones' => 'headphones.php',
	'gameconsole' => 'gameconsole.php',
	'photovideo' => 'photovideo.php',
	'hometechnics' => 'hometechnics.php',
	'privato' => 'private.php',
	'equal' => 'equal.php',
	'cestino' => 'cart.php',
	'stock1' => 'stock1.php',
	'stock2' => 'stock2.php',
	'popular1' => 'popl1.php',
	'popular2' => 'popl2.php',
	'popular3' => 'popl3.php',
	'popular4' => 'popl4.php',
	'popular5' => 'popl5.php',
] ;
// Перевіряє, чи існує зазначений URI в масиві маршрутів.
if( isset( $routes[ $uri ] ) ) {   // у маршрутах є відповідний запис
	// Якщо такий маршрут існує, то встановлюється змінна $page_body 
	// і включається файлик _layout.php
	$page_body = $routes[ $uri ] ;
	include '_layout.php' ;
}
else {	
	// Якщо маршрут не знайдено у визначених, то перевіряється, чи існує контролер для даного URI.
	// перевіряємо, чи є такий контролер - [Uri]Controller
	$uri_name = ucfirst($uri) ;   // перша літера переводиться у UpperCase: test -> Test
	$controller_name = "{$uri_name}Controller" ;  // TestController
	$controller_path = "./controllers/{$controller_name}.php" ;  // ./controllers/TestController.php
	if( is_readable( $controller_path ) ) {   // є контролер
		include $controller_path ;   // означення класу контролера
		$controller_object = new $controller_name() ;  // new TestController()
		$controller_object->serve() ;
	}
	else {
		echo "$uri not found" ;
	}
}
