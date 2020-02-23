(function ($) {
	$(window).on('load', function () {
		$.instagramFeed({
			'username': 'vsn_fitness', //Имя пользователя
			'container': "#instafeed", //Контейнер для изображений
			'display_profile': false, //Отображение профиля
			'display_biography': false, //Отображение биографии
			'display_gallery': true, //Отображение галереи
			'styling': true, //Стандартные стили библиотеки
			'items': 8, //Количество изображений в галереи
			'items_per_row': 4, //Количество изображений в ряд
			'margin': 0.5 //Отступ между изображениями
		});
	});
})(jQuery);