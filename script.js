function itemclicked(name){
	sessionStorage.setItem("item", name);
}
function validateform(){
	
}
function select(value){
	if(value == 'overnight'){
		var divtotal = document.getElementById('total');
		divtotal.innerHTML = "$"+(parseFloat(sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1])+24.00).toFixed(2);
	}
	else if(value == 'onetothree'){
		var divtotal = document.getElementById('total');
		divtotal.innerHTML = "$"+(parseFloat(sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1])+10.00).toFixed(2);
	}
	else{
		var divtotal = document.getElementById('total');
		divtotal.innerHTML = "$"+sessionStorage.getItem(sessionStorage.getItem("item")+"1.jpg").split(",")[1];

	}
}
