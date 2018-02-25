function trim(string)
{
	return string.replace(/(^\s+)|(\s+$)/g, "");
}

function isRegNumValid(regnum)
{
   regnum = trim(regnum);
	
   if (regnum.length > 12)	return false;
	
   var validChars = "0123456789.";
   var isNumber=true;
   var ch;
   var numbersCount = 0;
   
   for (i = 0; i < regnum.length && isNumber == true; i++) 
   { 
      ch = regnum.charAt(i); 
      if (validChars.indexOf(ch) == -1) 
         isNumber = false;
      else
    	 numbersCount++;
   }

   if (!isNumber || numbersCount==0)
	   return false;
   
   return true;  
}



function doCheck() {
	var rn = document.check.rn.value;

	if (!isRegNumValid(rn))
	{
		alert("Неверный регистрационный номер");
		return;
	}
	
	var btn = document.getElementById("check-btn");
	if (btn) {
		btn.disabled = true;
		btn.innerHTML = 'Пожалуйста, подождите';
	}

	$.getScript("http://1c.ru/rus/support/its/js-check-subscribe.jsp?rn=" + escape(rn), function() {startResult();});
}

function ajaxCheck(rn, result, result2) {
	var message;

	message = '';
	
	if (result2 == "NEED") 
	{
		if (result == "OK") 
			swal("Подписка отсутствует!", "Есть действующая подписка ИТС.", "success");
		else
		{ 
			swal("Подписка отсутствует!", "По данному регистрационному номеру подписка на ИТС не зарегистрирована. Для сопровождения обязательна подписка на ИТС", "error");
		}
	}
	else
	{ 
		if (result == "OK") 
			swal("Подписка отсутствует!", "Есть действующая подписка ИТС.", "success");
		else
		{ 
			swal("Подписка отсутствует!", "По данному регистрационному номеру подписка на ИТС не зарегистрирована. Допускается сопровождение без подписки на ИТС.", "error");
		}
	}


	var d = document.getElementById("check-mess");
	if (d) d.innerHTML = message;
	var btn = document.getElementById("check-btn");
	if (btn) {
		btn.disabled = false;
		btn.innerHTML = "проверить";
	}
}
