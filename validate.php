<?php 
$mysqli = new mysqli("localhost", "root", "", "coolfitteddb");
if(isset($_POST['orderid'])){
	$order = $mysqli->query("SELECT * FROM orders a LEFT JOIN order_item b ON a.idorders = b.orderid WHERE idorders=N'$_POST[orderid]'");
	$orderinfo = array();
	while ($row = mysqli_fetch_assoc($order)){
    	$orderinfo[] = $row;
	}
	print json_encode($orderinfo);
}
if(isset($_POST['zip'])){
	$tax = $mysqli->query("SELECT rate FROM taxes WHERE zip=N'$_POST[zip]'");
	if($tax === FALSE) { 
    	die(mysql_error()); // TODO: better error handling
	}
	while($row = mysqli_fetch_array($tax)){
		echo $row['rate'];
	}
}
if(isset($_POST['fname'])){
	if(!preg_match('/^[a-zA-Z-\' ]*$/', $_POST['fname'])){
		 die("*Please enter a valid first name");
	}
	else if(isset($_POST['lname']) && !preg_match('/^[a-zA-Z-\' ]*$/', $_POST['lname'])){
		 die("*Please enter a valid last name");
	}
	else if(isset($_POST['phone']) && !preg_match('/^[- +()]*[0-9][- +()0-9]*$/', $_POST['phone'])){
		 die("*Please enter a valid phone number");
	}
	else if(isset($_POST['street']) && !preg_match('/^[a-zA-Z0-9-,.# ]*$/', $_POST['street'])){
		 die("*Please enter a valid street address");
	}
	else if(isset($_POST['city']) && !preg_match('/^[a-zA-Z0-9-,. ]*$/', $_POST['city'])){
		 die("*Please enter a valid city");
	}
	else if(isset($_POST['creditzip']) && !preg_match('/^[a-zA-Z0-9-,.# ]*$/', $_POST['creditzip'])){
		 die("*Please enter a valid 5 digit zip code");
	}
	else if(isset($_POST['shipmethod']) && $_POST['shipmethod'] == "Choose shipping method"){
		 die("*Please pick a shipping method before submitting your order");
	}
	else if(isset($_POST['creditname']) && !preg_match('/^[a-zA-Z-\' ]*$/', $_POST['creditname'])){
		 die("*Please enter the name exactly as it appears on your credit card");
	}
	else if(isset($_POST['cardNumber']) && !preg_match('/^[0-9- ]*$/', $_POST['cardNumber'])){
		 die("*Please enter a valid credit card number");
	}
	else if(isset($_POST['cvv']) && !preg_match('/^[0-9]{3,4}$/', $_POST['cvv'])){
		 die("*Please enter a valid Security number (CVV)");
	}
	else if(isset($_POST['expMonth']) && date("Y") >= $_POST['expYear'] && date("M") >= $_POST['expMonth']) {	
	    die("*Oh, no! Looks like your card has expired, please verify the expiration date");
	}
	else{
		$insertquery = "INSERT INTO orders (firstname,lastname,phonenumber,email,shippingaddress,city,state,zipcode,shippingmethod,creditname,cardnumber,cvv,expirationdate,totalprice,quantity) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['street']."','".$_POST['city']."','".$_POST['state']."','".$_POST['creditzip']."','".$_POST['shipmethod']."','".$_POST['creditname']."','".$_POST['cardNumber']."','".$_POST['cvv']."','".$_POST['expMonth'].$_POST['expYear']."','".$_POST['total']."','".$_POST['quantity']."')";
		$selectquery = "SELECT idorders FROM orders order by idorders DESC";
		$result = $mysqli->query($insertquery);
		$sel = $mysqli->query($selectquery);
		$row = mysqli_fetch_row($sel);
		$jointtabquery = "INSERT INTO order_item (orderid,itemname) VALUES ('$row[0]','".$_POST['item']."')";
		$jre = $mysqli->query($jointtabquery);
		echo $row[0];
	}
}
mysqli_close($mysqli);
?>