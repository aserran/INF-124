function addquantity(){
	var divtotal = document.getElementById('subtotal');
	divtotal.innerHTML = "$"+sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1]*parseInt(document.getElementById('quantity').value);
	document.getElementById('shipmethod').selectedIndex = 0;
	var divtotal = document.getElementById('total');
	divtotal.innerHTML = "$"+(parseFloat((document.getElementById('subtotal').innerHTML).substring(1))+parseFloat((document.getElementById('tax').innerHTML).substring(2))).toFixed(2);

}
function itemclicked(name){
	sessionStorage.setItem("item", name);
}
function validateform() {
	var error = document.getElementById('error');
	var body = 
	error.innerHTML = "";
	var ship = document.getElementById('shipmethod');
	if(!(/^[- +()]*[0-9][- +()0-9]*$/).test(document.getElementById('phone').value)) {
    	error.innerHTML = "*Please enter a valid phone number";
    	document.getElementById('phone').focus();
    	return false;
	}
	else if(!(/^[a-zA-Z0-9-,.# ]*$/).test(document.getElementById('street').value)){
		error.innerHTML = "*Please enter a valid Street Address";
		document.getElementById('street').focus();
		return false;
	}
	else if(!(/^[a-zA-Z0-9-. ]*$/).test(document.getElementById('city').value)){
		error.innerHTML = "*Please enter a valid City";
		document.getElementById('city').focus();
		return false;
	}
	else if(!(/\b\d{5}\b/).test(document.getElementById('zip').value)){
		error.innerHTML = "*Please enter a valid 5-digit Zip Code";
		document.getElementById('zip').focus();
		return false;
	}
	else if (ship.value == "Choose"){
		error.innerHTML = "*Please make sure you choose a shipping method";
		return false;
	}
	else if(!(/^[a-zA-Z-' ]*$/).test(document.getElementById('owner').value)){
		error.innerHTML = "*Please enter the name exactly as it appears on your credit card";
		document.getElementById('owner').focus();
		return false;
	}
	else if(!(/^[0-9- ]*$/).test(document.getElementById('cardNumber').value)){
		error.innerHTML = "*Please enter a valid card number";
		document.getElementById('cardNumber').focus();
		return false;
	}
	else if(!(/^[0-9]{3,4}$/).test(document.getElementById('cvv').value)){
		error.innerHTML = "*Please enter a valid Security number (CVV)";
		document.getElementById('cvv').focus();
		return false;
	}
	if(localStorage.getItem("orderid") === null){
		localStorage.setItem("orderid",1);
	}
	alert("Your order has been placed. In a few minutes you will receive an email with details. Thank you");
	var body_message = "Hello%20"+document.getElementById('fname').value+",%0D%0AHere%20are%20your%20order%20details:%0D%0A-----------------------%0D%0AOrder%20#"+localStorage.getItem("orderid")+"%0D%0AShipping%20Address:%20"+document.getElementById('street').value+"%20"+document.getElementById('city').value+",%20"+document.getElementById('state').value+"%20"+document.getElementById('zip').value+"%0D%0AShipping%20method:%20"+document.getElementById('shipmethod').options[document.getElementById('shipmethod').selectedIndex].text+"%0D%0A-----------------------%0D%0APurchased%20with%20credit%20card%20ending%20in%20****"+document.getElementById('cardNumber').value.substr(document.getElementById('cardNumber').value.length-4)+".%0D%0AThank%20you%20for%20for%20your%20purchase!%0D%0A%0D%0A%0D%0A%0D%0AThe%20CoolFitted%20team";
	var mailto_link = 'mailto:' + document.getElementById('email').value + '?subject=Order #' + localStorage.getItem("orderid") + ' Details' + '&body=' + body_message;
	win = window.open(mailto_link, 'emailWindow');
	localStorage.setItem("orderid",parseInt(localStorage.getItem("orderid"))+1);
	return true;
}
function select(value){
	if(value == 'overnight'){
		var divtotal = document.getElementById('subtotal');
		divtotal.innerHTML = "$"+((parseFloat(sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1])*parseInt(document.getElementById('quantity').value))+24.00).toFixed(2);
	}
	else if(value == 'onetothree'){
		var divtotal = document.getElementById('subtotal');
		divtotal.innerHTML = "$"+((parseFloat(sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1])*parseInt(document.getElementById('quantity').value))+10.00).toFixed(2);
	}
	else if(value == 'standard'){
		var divtotal = document.getElementById('subtotal');
		divtotal.innerHTML = "$"+sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1]*parseInt(document.getElementById('quantity').value);
	}
	var divtotal = document.getElementById('total');
	divtotal.innerHTML = "$"+(parseFloat((document.getElementById('subtotal').innerHTML).substring(1))+parseFloat((document.getElementById('tax').innerHTML).substring(2))).toFixed(2);
}
