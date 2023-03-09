<?php
	require_once 'logic.php';
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>...</title>

	<!-- Bootstrap CSS (jsDelivr CDN) -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Bootstrap Bundle JS (jsDelivr CDN) -->
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

	<nav class="py-2 bg-light border-bottom">
	    <div class="container d-flex flex-wrap">
	      <ul class="nav me-auto">
	        <li class="nav-item"><h3 href="#" class="nav-link link-dark px-2 active" aria-current="page">Дело в рыбе</h3></li>
	        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>Волгоград</u></a></li>
	        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>RU</u></a></li>
	        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>Настройки</u></a></li>
	      </ul>
	      <ul class="nav">
	        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">+7 (961) 079-39-19</a></li>
	        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>Войти</u></a></li>
	      </ul>
	    </div>
	</nav>
	<header class="py-3 mb-4 border-bottom">
	    <div class="container d-flex flex-wrap justify-content-center">
	      <ul class="nav me-auto">
	        <li class="nav-item"><h3 href="#" class="nav-link link-dark px-2 active" aria-current="page">Выберите район</h3></li>
	      </ul>
	      <ul class="nav">
	        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>Изменить</u></a></li>
	        <li class="nav-item"><a href="sushi.php" class="nav-link link-dark px-2">Доставка</a></li>
	        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Самовывоз</a></li>
	      </ul>
	    </div>
	 </header>	

<div class="container">
    <ul class="nav me-auto">
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>Главная</u></a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>Акции</u></a></li>
	    <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>Отзывы</u></a></li>
	    <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><u>О нас</u></a></li>
    </ul>

	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="images/carousel1.png" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="images/carousel2.png" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="images/carousel3.png" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Предыдущий</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Следующий</span>
	  </button>
	</div>


</div>

<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><u>Пользовательское соглашение</u></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><u>Лицензионное соглашение</u></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><u>Условия акций сервиса</u></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><u>Политика конфиденциальности</u></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><u>Правила оплаты</u></a></li>
    </ul>
</footer>

</body>

