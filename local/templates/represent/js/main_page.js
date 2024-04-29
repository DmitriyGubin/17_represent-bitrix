/********скроллинг*********/

Scroll_to_elements('.smoth_link');

function Scroll_to_elements(selector)
{
	var smoothLinks = document.querySelectorAll(selector);

	for (let item of smoothLinks)
	{
		item.addEventListener('click', function (e) 
	    {
	    	if(mobile_menu.classList.contains('active'))
	    	{
	    		Toggle_Mobile_Menu();
	    	}
	    	
	        e.preventDefault();
	        var id = item.getAttribute('href');

	        document.querySelector(id).scrollIntoView({
	            behavior: 'smooth',
	            block: 'start'
	        });
	    });
	}
}

/********скроллинг*********/ 

if(screen.width < 750)
{
	$('.serv-slider').slick({
		dots: false,
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<div class="prev-photo"><svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 0.999999L2 9L10 17" stroke="white" stroke-width="1.6" stroke-linecap="round"/></svg></div>',
		nextArrow: '<div class="next-photo"><svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17L9 9L1 0.999999" stroke="white" stroke-width="1.6" stroke-linecap="round"/></svg></div>'
	});
}


