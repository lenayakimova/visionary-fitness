<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Visionary fitness</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<section class="hero" id="hero">
		<div class="hero-slider">
			<div class="hero__sl1">
				<div class="hero__slide1 container">
					<a href="#hero">
						<picture class="hero__logo">
							<source srcset="img/logo.webp 1x" type="image/webp">
							<img src="img/logo.png" srcset="img/logo.png" alt="visionary fitness">
						</picture>
					</a>
					<ul class="hero-menu">
						<li class="hero-menu__list">
							<a href="catalog.php" class="hero-menu__item">Каталог</a>
						</li>
						<li class="hero-menu__list">
							<a href="#footer" class="hero-menu__item">Обратная связь</a>
						</li>
						<li class="hero-menu__list">
							<a href="question.php" class="hero-menu__item">Помощь</a>
						</li>
					</ul>
				</div>
				<div class="hero__slide2 container">
					<h1 class="hero__title">СКИДКИ до 25%</h1>
					<span class="hero__subtitle">на все модели до конца февраля</span>
					<a class="hero__button button" href="#catalog">КУПИТЬ</a>
				</div>
			</div>
			<div class="hero__sl2">
				<div class="hero__slide1 container">
					<a href="#">
						<picture class="hero__logo">
							<source srcset="img/logo.webp 1x" type="image/webp">
							<img src="img/logo.png" srcset="img/logo.png" alt="visionary fitness">
						</picture>
					</a>
					<ul class="hero-menu">
						<li class="hero-menu__list">
							<a href="#" class="hero-menu__item">Каталог</a>
						</li>
						<li class="hero-menu__list">
							<a href="#" class="hero-menu__item">Обратная связь</a>
						</li>
						<li class="hero-menu__list">
							<a href="#" class="hero-menu__item">Помощь</a>
						</li>
					</ul>
				</div>
				<div class="hero__slide2 container">
					<h1 class="hero__title">СКИДКА 25%</h1>
					<span class="hero__subtitle">на новые модели до конца февраля</span>
					<a class="hero__btn button" href="#catalog">КУПИТЬ</a>
				</div>
			</div>
		</div>
		<div class="hero-arrows container">
			<div class="hero-arrows__left">
				<img src="img/left-arrow.png" alt="">
			</div>
			<div class="hero-arrows__right">
				<img src="img/right-arrow.png" alt="">
			</div>
		</div>
	</section>

	<section class="catalog" id="catalog">
		<div class="container">
			<div class="catalog-block">
				<h2 class="catalog__title">Тренируйся в стильном и комфортном
					образе от Visionary Fitness</h2>
				<div class="catalog-cards">
					<div class="catalog__card">
						<img class="catalog__img" data-popup="true" href="#modal-1" src="img/card-1.jpg" alt="">
						<div id="rectangle">
							<span class="sale">-10%</span>
						</div>
						<div class="catalog__text">
							<h3 class="catalog__name">Костюм NON STOP</h3>
							<span class="catalog__subtitle">рашгард/лосины, оранжевый</span>
							<span class="catalog__line">4 190 руб</span>
							<span class="catalog__price">3 770 руб</span>
						</div>
					</div>
					<div class="catalog__card">
						<img class="catalog__img" data-popup="true" href="#modal-2" src="img/card-2.jpg" alt="">
						<div id="rectangle">
							<span class="sale">-10%</span>
						</div>
						<div class="catalog__text">
							<h3 class="catalog__name">Костюм COSMO</h3>
							<span class="catalog__subtitle">рашгард/топ/лосины, серый</span>
							<span class="catalog__line">5 200 руб</span>
							<span class="catalog__price">4 680 руб</span>
						</div>
					</div>
					<div class="catalog__card">
						<img class="catalog__img" data-popup="true" href="#modal-3" src="img/card-3.jpg" alt="">
						<div id="rectangle">
							<span class="sale">-10%</span>
						</div>
						<div class="catalog__text">
							<h3 class="catalog__name">Костюм POWER UP</h3>
							<span class="catalog__subtitle">рашгард/лосины, розовый</span>
							<span class="catalog__line">4 190 руб</span>
							<span class="catalog__price">3 770 руб</span>
						</div>
					</div>
				</div>
				<a href="catalog.php" class="catalog__button button">ВЕСЬ КАТАЛОГ</a>

				<div class="overlay"></div>
				<div class="popup" id="modal-1">
					<div class="popup__pop">
						<div class="close-btn">&times;</div>
						<div class="popup-image">
							<div class="popup__large">
								<img src="img/window-1-1.jpg" alt="" class="popup__photo">
							</div>
							<div class="popup__preview">
								<img src="img/prewiev-1.jpg" alt="" class="popup__little">
								<img src="img/prewiev-2.jpg" alt="" class="popup__little">
								<img src="img/prewiev-3.jpg" alt="" class="popup__little">
							</div>
						</div>
						<div class="popup-text">
							<div class="popup__title">
								<h3 class="popup__name">Костюм NON STOP</h3>
								<span class="popup__subtitle">рашгард/лосины, оранжевый</span>
								<span class="popup__line">4 190 руб</span>
								<span class="popup__price">3 770 руб</span>
							</div>
							<div class="popup__size">
								<span class="popup__dimension">Размер:</span>
								<a href="#" class="popup__button button">S</a>
								<a href="#" class="popup__button button">M</a>
							</div>
							<div class="popup__buy">
								<span class="popup__outline">Купить отдельно:</span>
								<div class="popup__block">
									<span class="popup__clothes">лосины – 2 490 руб</span>
									<span class="popup__clothes">рашгард – 2 990 руб</span>
								</div>
								<p class="popup__describe">Облегающий бесшовный крой с завышенной
									талией идеально садятся по фигуре,
									формируют силуэт и при этом в точности
									следуют за каждым движением вашего тела,
									обеспечивая неповторимое удобство
									на тренировках. Идеально подойдет для бега,
									фитнеса, йоги, работы в тренажерном зале
									и других видов физической активности.</p>
							</div>
							<form action="#" class="popup-form">
								<h3 class="popup-form__title">Оформление заказа</h3>
								<input type="text" name="name" class="popup-form__input" placeholder="Введите имя*" required>
								<input type="tel" name="phone" class="popup-form__input" placeholder="Введите телефон*" required>
								<input type="text" name="city" class="popup-form__city" placeholder="Введите Ваш город*" required>
								<textarea name="comment" cols="40" rows="3" placeholder="Пожелания к заказу" class="popup-form__text"></textarea>
								<input type="submit" value="Отправить" class="popup-form__button button">
							</form>
						</div>
					</div>
				</div>

				<div class="overlay"></div>
				<div class="popup" id="modal-2">
					<div class="popup__pop">
						<div class="close-btn">&times;</div>
						<div class="popup-image">
							<div class="popup__large">
								<img src="img/wind-2-1.jpg" alt="" class="popup__photo popup__photo-2">
							</div>
							<div class="popup__preview popup__preview-2">
								<img src="img/preview-2-1.jpg" alt="" class="popup__little">
								<img src="img/preview-2-2.jpg" alt="" class="popup__little">
								<img src="img/preview-2-3.jpg" alt="" class="popup__little">
								<img src="img/preview-2-4.jpg" alt="" class="popup__little">
								<img src="img/preview-2-5.jpg" alt="" class="popup__little">
							</div>
						</div>
						<div class="popup-text">
							<div class="popup__title">
								<h3 class="popup__name">Костюм COSMO</h3>
								<span class="popup__subtitle">рашгард/топ/лосины, серый</span>
								<span class="popup__line">5 200 руб</span>
								<span class="popup__price">4 680 руб</span>
							</div>
							<div class="popup__size">
								<span class="popup__dimension">Размер:</span>
								<a href="#" class="popup__button button">S</a>
								<a href="#" class="popup__button button">M</a>
							</div>
							<div class="popup__buy">
								<span class="popup__outline">Купить отдельно:</span>
								<div class="popup__block">
									<span class="popup__clothes">топ – 2 100 руб</span>
									<span class="popup__clothes">лосины – 2 490 руб</span>
									<span class="popup__clothes">рашгард – 2 990 руб</span>
								</div>
								<p class="popup__describe">Облегающий бесшовный крой с завышенной
									талией идеально садятся по фигуре,
									формируют силуэт и при этом в точности
									следуют за каждым движением вашего тела,
									обеспечивая неповторимое удобство
									на тренировках. Идеально подойдет для бега,
									фитнеса, йоги, работы в тренажерном зале
									и других видов физической активности.</p>
							</div>
							<form action="#" class="popup-form">
								<h3 class="popup-form__title">Оформление заказа</h3>
								<input type="text" name="name" class="popup-form__input" placeholder="Введите имя*" required>
								<input type="tel" name="phone" class="popup-form__input" placeholder="Введите телефон*" required>
								<input type="text" name="city" class="popup-form__city" placeholder="Введите Ваш город*" required>
								<textarea name="comment" cols="40" rows="3" placeholder="Пожелания к заказу" class="popup-form__text"></textarea>
								<input type="submit" value="Отправить" class="popup-form__button button">
							</form>
						</div>
					</div>
				</div>

				<div class="overlay"></div>
				<div class="popup" id="modal-3">
					<div class="popup__pop">
						<div class="close-btn">&times;</div>
						<div class="popup-image">
							<div class="popup__large">
								<img src="img/pink-l-1.jpg" alt="" class="popup__photo popup__photo-3">
							</div>
							<div class="popup__preview popup__preview-3">
								<img src="img/pink-p-1.jpg" alt="" class="popup__little">
								<img src="img/pink-p-2.jpg" alt="" class="popup__little">
								<img src="img/pink-p-3.jpg" alt="" class="popup__little">
							</div>
						</div>
						<div class="popup-text">
							<div class="popup__title">
								<h3 class="popup__name">Костюм POWER UP</h3>
								<span class="popup__subtitle">рашгард/лосины, розовый</span>
								<span class="popup__line">4 190 руб</span>
								<span class="popup__price">3 770 руб</span>
							</div>
							<div class="popup__size">
								<span class="popup__dimension">Размер:</span>
								<a href="#" class="popup__button button">S</a>
								<a href="#" class="popup__button button">M</a>
							</div>
							<div class="popup__buy">
								<span class="popup__outline">Купить отдельно:</span>
								<div class="popup__block">
									<span class="popup__clothes">лосины – 2 490 руб</span>
									<span class="popup__clothes">рашгард – 2 990 руб</span>
								</div>
								<p class="popup__describe">Облегающий бесшовный крой с завышенной
									талией идеально садятся по фигуре,
									формируют силуэт и при этом в точности
									следуют за каждым движением вашего тела,
									обеспечивая неповторимое удобство
									на тренировках. Идеально подойдет для бега,
									фитнеса, йоги, работы в тренажерном зале
									и других видов физической активности.</p>
							</div>
							<form action="#" class="popup-form">
								<h3 class="popup-form__title">Оформление заказа</h3>
								<input type="text" name="name" class="popup-form__input" placeholder="Введите имя*" required>
								<input type="tel" name="phone" class="popup-form__input" placeholder="Введите телефон*" required>
								<input type="text" name="city" class="popup-form__city" placeholder="Введите Ваш город*" required>
								<textarea name="comment" cols="40" rows="3" placeholder="Пожелания к заказу" class="popup-form__text"></textarea>
								<input type="submit" value="Отправить" class="popup-form__button button">
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="offer">
		<div class="container">
			<div class="offer-block">
				<div class="offer__item">
					<img src="img/production.png" alt="" class="offer__img">
					<div class="offer__text">
						<h3 class="offer__title">Своё производство</h3>
						<span class="offer__subtitle">Вы не переплатите за одежду,<br>
							у нас своё производство
							и нет посреднических наценок </span>
					</div>
				</div>
				<div class="offer__item">
					<div class="offer__image">
						<img src="img/first.png" alt="" class="offer__img">
					</div>
					<div class="offer__text">
						<h3 class="offer__title">Качество</h3>
						<span class="offer__subtitle">Используем инновационные
							технологичные ткани, чтобы
							обеспечить максимальную
							производительность во время
							тренировок.</span>
					</div>
				</div>
				<div class="offer__item">
					<div class="offer__image">
						<img src="img/delivery.png" alt="" class="offer__img">
					</div>
					<div class="offer__text text">
						<h3 class="offer__title">Бесплатная доставка</h3>
						<span class="offer__subtitle">При заказе от 4 000 ₽<br> доставка бесплатна</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="insta">
		<div class="container">
			<div id="instafeed"></div>
		</div>
	</section>

	<?php include 'footer.php'; ?>


	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/jquery.instagramFeed.min.js"></script>
	<script src="js/insta.js"></script>
</body>

</html>