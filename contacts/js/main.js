/************карта**********/
var ofice_x = $('.map_point #x_coord').html();
var ofice_y = $('.map_point #y_coord').html();
var addres = $('.map_point #ballon').html();

ymaps.ready(init);

function init () 
{
			var myMap = new ymaps.Map("cont_map", {
				center: [ofice_x,ofice_y],
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


/************карта**********/