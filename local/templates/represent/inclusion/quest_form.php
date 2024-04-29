<section class="quest">
	<div class="wrap">
		<div class="quest_text">
			<h2 class="title">
				Остались вопросы?
			</h2>
			<p class="form_text">
				Оставьте заявку на сайте и наш менеджер перезвонит вам в ближайшее время, и ответит на все интересующие
				Вас вопросы
			</p>
		</div>

		<form id="quest_form">
			<input placeholder="Ваше имя" type="text" name="name">
			<input class="phone all-input" placeholder="Телефон*" type="text" name="phone">
			<input type="hidden" value="Форма остались вопросы" name="delimiter">
			<a class="univ-butt" href="#" id="send_form_butt">
				Оставить заявку
			</a>

			<div class="polite">
				Нажимая кнопку “отправить” вы соглашаетесь
				с условиями <a href="#">Политики Конфиденциальности</a>
			</div>
		</form>
	</div>
</section>

<a id="for_quest_form" data-fancybox="" data-src="#popup-order" href="javascript:;" class="hide">
	вызов попапа				
</a>

<script type="text/javascript">
	var popup_form = document.querySelector("#popup-order #popup_form");
	var succes_ref = document.querySelector("#popup-order .success");

	var quest_form = document.querySelector(".quest #quest_form");
	var form_butt = document.querySelector(".quest #send_form_butt");

	form_butt.addEventListener('click',() => Send_Form(quest_form,'page_form',event));

	// $('[data-src="#popup-order"]').on('click', function() {
	// 	succes_ref.classList.add("hide");
	// 	popup_form.classList.remove("hide");
	// });
</script> 