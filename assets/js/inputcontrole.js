function checkForm(form)
{	
	if(form.inputPassword1.value == form.inputPassword2.value) {
		if(form.inputPassword1.value.length < 6) {
			form.inputPassword1.setCustomValidity("Wachtwoord moet minstens 6 karakters zijn.");
			form.inputPassword1.focus();
			return false;
		}
	}else {
		form.inputPassword2.setCustomValidity("Wachtwoord komt niet overeen.");
		form.inputPassword2.focus();
		return false;
    }

    return true;
}