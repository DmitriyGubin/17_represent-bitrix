/**показать больше**/
//Create_More_Items_System(3, 3, '#more_items_box', '.play-video .similar-item', 'hide');

function Create_More_Items_System(number_initially_visible, delta_items, selector_button_parent, selector_item, hide_class)
{
	var all_elements = document.querySelectorAll(selector_item);
	var amount = all_elements.length;
	if(amount != 0)
	{
		if (amount  > number_initially_visible)
		{
			var j = 0;
			for (let item of all_elements)
			{
				j++;
				if(j > number_initially_visible)
				{
					item.classList.add(hide_class);
				}
			}

			var parent = document.querySelector(selector_button_parent);
			let div = document.createElement('div');
			div.id = 'more_items';
			div.innerHTML = 'УВИДЕТЬ БОЛЬШЕ';
			parent.appendChild(div);

			Click_Button_More_Items(delta_items, all_elements, div.id, 'hide');
		}
	}
}

function Click_Button_More_Items(num_records, elements_reff, id_button, hide_class)
{
	var button_id_selector = '#' + id_button;
	document.querySelector(button_id_selector).addEventListener("click", function(){
	    var num = 0;
	    for (let item of elements_reff)
	    {
	        if((item.classList.contains(hide_class)) && (num < num_records))
	        {
	            item.classList.remove(hide_class);
	            num++;
	        }
	    }
	    if (num == 0)
	    {
	        document.querySelector(button_id_selector).remove();
	    }
	});
}
/**показать больше**/

/**************для форм*********/
function Validate(form_ref, input_class)
{
	var err=0;

	var inputs = form_ref.querySelectorAll(input_class);

    for (let item of inputs)
    {
        var bool = ($(item).val() == '');

        if (bool)
        {
            err++;
            $(item).addClass("hasError");
        } 
        else 
        {
            $(item).removeClass("hasError");
        }
    }

    return err;
}

function Send_Form(form_ref,tipe_form,event)
{
	event.preventDefault();
	var err = Validate(form_ref, '.all-input');

	if (err == 0)
    {
    	var formData = new FormData(form_ref);

        $.ajax({
            type: "POST",
            url: '/ajax/common.php',
            data: formData,
            processData: false,
        	contentType: false,
            dataType: "json",
            success: function(data){

                if (data.status == true)
                {
                	//console.log(data);
                	form_ref.reset();
                	document.querySelector("#popup-order #popup_form").classList.add("hide");
                	document.querySelector("#popup-order .success").classList.remove("hide");
                	if(tipe_form == 'page_form')
                	{
                		$("#for_quest_form").click();
                	}
                }
            }
        });
    }
}
/**************для форм*********/