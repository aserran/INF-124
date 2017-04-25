function addquantity(){
	var divtotal = document.getElementById('total');
	divtotal.innerHTML = "$"+sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1]*parseInt(document.getElementById('quantity').value);
	document.getElementById('shipmethod').selectedIndex = 0;
}
function itemclicked(name){
	sessionStorage.setItem("item", name);
}

function select(value){
	if(value == 'overnight'){
		var divtotal = document.getElementById('total');
		divtotal.innerHTML = "$"+((parseFloat(sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1])*parseInt(document.getElementById('quantity').value))+24.00).toFixed(2);
	}
	else if(value == 'onetothree'){
		var divtotal = document.getElementById('total');
		divtotal.innerHTML = "$"+((parseFloat(sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1])*parseInt(document.getElementById('quantity').value))+10.00).toFixed(2);
	}
	else if(value == 'standard'){
		var divtotal = document.getElementById('total');
		divtotal.innerHTML = "$"+sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1]*parseInt(document.getElementById('quantity').value);
	}
}
