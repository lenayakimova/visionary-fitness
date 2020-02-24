$(document).ready(function () {
	var modal = $('#modal-1'),
		overlay = $('.overlay'),
		img = $('img[href="#modal-1"]'),
		close = $('.close-btn')
	img.on('click', function() {
		overlay.show();
		modal.show();
	});
	close.click (function () {  
		overlay.hide();
		modal.hide();
	});
	$('.popup__preview').delegate('img', 'click', function () {
		$('.popup__photo').attr('src', $(this).attr('src').replace('prewiev', 'window-1'));
	});
});

$(document).ready(function () {
	var ml = $('#modal-2'),
		overlay = $('.overlay'),
		link = $('img[href="#modal-2"]'),
		close = $('.close-btn')
	link.on('click', function () {
		overlay.show();
		ml.show();
	});
	close.click(function () {
		overlay.hide();
		ml.hide();
	});
	$('.popup__preview-2').delegate('img', 'click', function () {
		$('.popup__photo-2').attr('src', $(this).attr('src').replace('preview-2', 'wind-2'));
	});
});

$(document).ready(function () {
	var ml = $('#modal-3'),
		overlay = $('.overlay'),
		link = $('img[href="#modal-3"]'),
		close = $('.close-btn')
	link.on('click', function () {
		overlay.show();
		ml.show();
	});
	close.click(function () {
		overlay.hide();
		ml.hide();
	});
	$('.popup__preview-3').delegate('img', 'click', function () {
		$('.popup__photo-3').attr('src', $(this).attr('src').replace('pink-p', 'pink-l'));
	});
});


