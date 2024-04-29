<section class="map" id="y_map">
	<div class="cont_box">
		<h2 class="title">
			Как нас найти
		</h2>

		<div class="all-cont">
			<div class="cont_line">
				<span class="cont_title">
					Адрес: 
				</span>
				<span class="cont_text">
					<?= $GLOBALS['contacts']['ADDRESS']['VALUE']; ?>
				</span>
			</div>

			<div class="cont_line">
				<span class="cont_title">
					Телефон: 
				</span>
				<span class="cont_text">
				<?php $phone = $GLOBALS['contacts']['PHONE']['VALUE']; ?>
					<a href="tel:<?= $phone; ?>">
						<?= $phone; ?>
					</a>
				</span>
			</div>

			<div class="cont_line">
				<span class="cont_title">
					Время работы: 
				</span>
				<span class="cont_text">
					<?= $GLOBALS['contacts']['WORK_TIME']['VALUE']; ?>
				</span>
			</div>
		</div>

		<div class="social">
			<a target="_blank" class="social_item" href="<?= $GLOBALS['contacts']['VK_REF']['VALUE']; ?>">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/vkontakte.svg">
			</a>

			<a class="social_item" href="mailto:<?= $GLOBALS['contacts']['MAIL']['VALUE']; ?>">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/email.svg">
			</a>

			<a target="_blank" class="social_item" href="https://wa.me/<?= $GLOBALS['contacts']['WATSAPP']['VALUE']; ?>">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/whatsapp.svg">
			</a>
		</div>
	</div>
</section>

<div class="map_point" style="display: none;">
	<div id="x_coord"><?= $GLOBALS['contacts']['X_COORD']['VALUE']; ?></div>
	<div id="y_coord"><?= $GLOBALS['contacts']['Y_COORD']['VALUE']; ?></div>
	<div id="ballon"><?= $GLOBALS['contacts']['BALLON']['VALUE']; ?></div>
</div>

<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?apikey=2750cb15-81ed-4ea8-a8d2-e1e7c2d7e5e2&lang=ru_RU"></script>

<script type="text/javascript">
/************карта**********/
	var ofice_x = Number($('.map_point #x_coord').html());
	var ofice_y = Number($('.map_point #y_coord').html());
	var addres = $('.map_point #ballon').html();

	var delta_x = 0;
	var delta_y = 0;
	if(screen.width > 750)
	{
		delta_y = 0.01;
	}
	else
	{
		delta_x = 0.003;
	}

	ymaps.ready(init);

	function init () 
	{
				var myMap = new ymaps.Map("y_map", {
					center: [ofice_x + delta_x,ofice_y - delta_y],
					zoom: 15,
					controls: [],//без элементов управления
				}, {
					searchControlProvider: 'yandex#search'
				}),
	    // Создание макета содержимого хинта.
	    // Макет создается через фабрику макетов с помощью текстового шаблона.
	    HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
	    	"{{ properties.address }}" +
	    	"</div>", {
	                // Определяем метод getShape, который
	                // будет возвращать размеры макета хинта.
	                // Это необходимо для того, чтобы хинт автоматически
	                // сдвигал позицию при выходе за пределы карты.
	                getShape: function () {
	                	var el = this.getElement(),
	                	result = null;
	                	if (el) {
	                		var firstChild = el.firstChild;
	                		result = new ymaps.shape.Rectangle(
	                			new ymaps.geometry.pixel.Rectangle([
	                				[0, 0],
	                				[firstChild.offsetWidth, firstChild.offsetHeight]
	                				])
	                			);
	                	}
	                	return result;
	                }
	            }
	            );

	    
	    function Add_point(adress, x, y)
	    {
	        var myPlacemark = new ymaps.Placemark([x, y], 
	        { 
	            iconContent: '',
	            balloonContent: adress
	        },
	        {  
	            iconLayout: 'default#imageWithContent',
	            iconImageHref: '/local/templates/represent/img/map-point.png',
	            iconImageSize: [32, 46],
	            iconImageOffset: [-16, -23],
	            iconContentOffset: [0, 0]
	        });
	        myMap.geoObjects.add(myPlacemark);
	    }

	    Add_point(addres, ofice_x, ofice_y);
	}
</script>