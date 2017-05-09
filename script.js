function addquantity(){
	alert('here');
	var divtotal = document.getElementById('subtotal');
	divtotal.innerHTML = "$"+parseFloat(divtotal.innerHTML.substring(1))*parseInt(document.getElementById('quantity').value);
	document.getElementById('shipmethod').selectedIndex = 0;
	var divtotal = document.getElementById('total');
	divtotal.innerHTML = "$"+(parseFloat((document.getElementById('subtotal').innerHTML).substring(1))+parseFloat((document.getElementById('tax').innerHTML).substring(2))).toFixed(2);

}
function itemclicked(name){
	sessionStorage.setItem("item", name);
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
