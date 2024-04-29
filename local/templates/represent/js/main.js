
/******мобильное меню*******/
var mobile_burger = document.querySelector(".mobile-burger");
var mobile_menu = document.querySelector("header .for-mobile");
var mobile_shade = document.querySelector("header .mobile_shade");
var body = document.querySelector("body");

mobile_burger.addEventListener('click', Toggle_Mobile_Menu);
mobile_shade.addEventListener('click', Toggle_Mobile_Menu);

function Toggle_Mobile_Menu()
{
	mobile_menu.classList.toggle('active');
	body.classList.toggle('overflow');
	$(mobile_shade).fadeToggle(300);

	mobile_burger.classList.toggle('active');
}
/******мобильное меню*******/

$(".phone").mask("+7(999) 999-9999");

$('[data-src="#popup-order"]').fancybox({

    afterLoad : function(){
    		$("#popup-order").removeClass('fadeOutDown animated');
            $("#popup-order").addClass('fadeInUp animated');
        },
    beforeClose : function(){
    		$("#popup-order").removeClass('fadeInUp animated');
            $("#popup-order").addClass('fadeOutDown animated');
        }
});

/****************формы*******************/
var succes_ref = document.querySelector("#popup-order .success");
var popup_form_butt = document.querySelector("#popup-order #send_order_popup");
var popup_form = document.querySelector("#popup-order #popup_form");
popup_form_butt.addEventListener('click',() => Send_Form(popup_form,'popup',event));

$('.popup').on('click', function() {
	succes_ref.classList.add("hide");
	popup_form.classList.remove("hide");
});

/***разделение форм попапа******/
//service all
var del_popup = $('#popup_delimeter');
var serv_inp = $('#service_name');

$('.popup.all').on('click', function() {
	del_popup.val('Заявка на пошив');
	serv_inp.val('');
});

$('.popup.service').on('click', function() {
	del_popup.val('Заявка на услугу');
	serv_inp.val(this.dataset.service);
});
/***разделение форм попапа******/


/****************формы*******************/







