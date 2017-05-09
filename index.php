<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'coolfitteddb';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) {
		die ('Connection failed to database');
	}

	$sql = "SELECT imagepath,imagename FROM images WHERE imagename LIKE '%ap1%' AND idimages > 47";
	$imagesquery = mysqli_query($conn, $sql);
	if (!$imagesquery){
		die ('Querying error');
	}

 ?>
<!DOCTYPE>
<html>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<head>
	<title>CoolFitted hats</title>
</head>
<body>
	<center>
		<div class='main'>
			<div class='content'>
				<div class='menubar'>
					<div class='name'>
						<a href="index.php" class='label compname'>CoolFitted</a>
					</div>
					<div id='men' class='menu'>
						<a href="index.php" class='label home active'>Home</a>
						<a href="newarr.php" class='label newarr'>New Arrivals</a>
						<a href="snapbacks.php" class='label snap'>Snapbacks</a>
						<a href="strapbacks.php" class='label strap'>Strapbacks</a>
						<a href="aboutus.html" class='label aboutus'>About us</a>
					</div>
				</div>
				<div class='slideshow'>
					<div class= "slides fade">
						<div class= "slidenumber"></div>
						<img src='Media/headwear.jpg' height="380" width="70%" style='margin-top: 3%'>
					</div>

					<div class= "slides fade">
						<div class= "slidenumber"></div>
						<img src='Media/headwear2.jpg' height="380" width="70%" style='margin-top: 3%'>
					</div>

					<div class= "slides fade">
						<div class= "slidenumber"></div>
						<img src='Media/headwear3.jpg' height="380" width="70%" style='margin-top: 3%'>
					</div>

					<div class= "slides fade">
						<div class= "slidenumber"></div>
						<img src='Media/headwear4.jpg' height="380" width="70%" style='margin-top: 3%'>
					</div>

					<div class= "slides fade">
						<div class= "slidenumber"></div>
						<img src='Media/headwear5.jpg' height="380" width="70%" style='margin-top: 3%'>
					</div>
				</div>
				<br/>
				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>
				</div>
				<script src="slides.js"></script>
				<div class='featcombo'>
					<div class='combocontent'>
						Featured Hats
					</div>
				</div>
				<table class='gridedhats'>
					<?php
						$col = 1;
					 	while ($row = mysqli_fetch_array($imagesquery)){
							if($col == 1){
								echo "<tr class = 'row'>";
							}
							$sql2 = "SELECT title,price FROM details WHERE imagename = '".$row['imagename']."'";
							$detailsquery = mysqli_query($conn, $sql2);
							$dets = mysqli_fetch_array($detailsquery);
							echo '	<td>
												<a class = "cell" id="cell" onClick="itemclicked("'.$row['imagename'].'");" href="details.html">
													<div class = "col-'.$col.'">
														<img src = "'.$row['imagepath'].'" width = "160" height = "120">
														<p>"'.$dets["title"].'"<span><br>"'.$dets["price"].'"</span></p>
													</div>
												</a>
											</td>';
							if($col == 4){
								echo "</tr>";
								$col -= 4;
							}
							$col++;
						}
					?>
<!--
					<tr class='row'>
						<td>
							<a class="cell" onClick="itemclicked('47LAsnap')" href="details.html">
								<div class='col-1'>
									<img src='Media/47LAsnap1.jpg' class='image' width='120' height='120'/>
									<p>47 Brand Los Angeles Dodgers Snapback - Blue<span><br>$29.99</span></p>
								</div>

							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('47Navystrap')" href="details.html">
								<div class='col-2'>
									<img src='Media/47Navystrap1.jpg' width='120' height='120'>
									<p>47 Brand Cleanup Classic Dad Hat - Navy<span><br>$20.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('HUFHstrap')" href="details.html">
								<div class='col-3'>
									<img src='Media/HUFHstrap1.jpg' width='120' height='120'/>
									<p>HUF Classic H 6-Panel Strapback - Navy, Stone<span><br>$20.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('undef5strikesnap')" href="details.html">
								<div class='col-4'>
									<img src='Media/undef5strikesnap1.jpg' width='120' height='120'>
									<p>Undefeated 5 Strike Snapback Hat - Camo<span><br>$30.99</span></p>
								</div>
							</a>
						</td>
					</tr>
					<tr class='row' style="margin-top:1%;">
						<td>
							<a class="cell" onClick="itemclicked('RVCAsnap')" href="details.html">
								<div class='col-1'>
									<img src='Media/RVCAsnap1.jpg' width='120' height='120'>
									<p>RVCA Trucker Snapback - Black<span><br>$34.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('BMW90sm3strap')" href="details.html">
								<div class='col-2'>
									<img src='Media/BMW90sm3strap1.jpg' width='120' height='120'>
									<p>90's BMW M3 Embroidered Strapback - White<span><br>$35.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('BulldogWhitestrap')" href="details.html">
								<div class='col-3'>
									<img src='Media/BulldogWhitestrap1.jpg' width='120' height='120'>
									<p>Dog Limited English Bulldog Dad Hat - White<span><br>$28.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('CigaretteNaikestrap')" href="details.html">
							<div class='col-4'>
								<img src='Media/CigaretteNaikestrap1.jpg' width='160' height='120'>
								<p>Cigarette Naike Strapback Hat - Pink<span><br>$20.99</span></p>
							</div>
							</a>
						</td>
					</tr>
-->
				</table>
					<div class='footercombo'>
						<div class='combocontent' style="padding-top:1%; font-size: 20px">
							CoolFitted<span style='font-size: 13px'>&reg;</span> 2017 &#8209; All Rights Reserved
						</div>
					</div>
				<br/>
				<br/>
			</div>
		</div>
	</center>
</body>
<script>
	window.onload = function(){
		sessionStorage.setItem("47LAsnap1.jpg",["47 Brand Los Angeles Dodgers Snapback - Blue","29.99","- Royal Blue Crown & Visor","- Gray Undervisor","- Embroidered Dodgers Team Logo on the Front Panel","- 85% Acrylic & 15% Wool"]);
		sessionStorage.setItem("47SFgiantssnap1.jpg",["47 Brand SF Giants Snapback - Navy","29.99","- Black Crown & Visor","- Team Logo Embroidered on Front in Orange","- Snapback Adjustable","- 100% Cotton"]);
		sessionStorage.setItem("47Navystrap1.jpg",["47 Brand Cleanup Classic Dad Hat - Navy","20.99","- Navy Crown & Visor","- Brand Logo Embroidered on Front in White","- Strapback Adjustable","- 100% Cotton"]);
		sessionStorage.setItem("BMW90sm3strap1.jpg",["90's BMW M3 Embroidered Strapback - White","35.99","- BMW M3 Logo Embroidered on Front","- Strapback Adjustable","- 100% Cotton"]);
		sessionStorage.setItem("CaliBearwhitestrap1.jpg",["Cali Bear Dad Hat - White","23.99","- White Crown","- Embroidered Cali Bear Logo","- 100% Cotton"]);
		sessionStorage.setItem("HundredsGlobeSnap1.jpg",["The Hundreds Los Angeles Snapback - Royal & Red & Black","25.99","- Silk Like Black Crown & Visor","- Green Undervisor","- Embroidered Script Logo","- 100% Polyester"]);
		sessionStorage.setItem("HundredsPlayersnap1.jpg",["The Hundreds Los Angeles Snapback - Maroon & Teal","25.99","- Silk Like Teal Crown & Visor","- Green Undervisor","- Embroidered Script Logo","- 100% Polyester"]);
		sessionStorage.setItem("HUFHstrap1.jpg",["HUF Classic H 6-Panel Strapback - Navy & Stone","20.99","- Navy Crown","- Stone Visor","- Green Undervisor","- HUF Classic Logo","- 80% Acrylic & 20% Wool"]);
		sessionStorage.setItem("undef5strikesnap1.jpg",["Undefeated 5 Strike Snapback Hat - Camo","30.99","- Green Undervisor","- Embroidered 5 Strike Logo","- 80% Acrylic & 20% Wool"]);
		sessionStorage.setItem("RVCAsnap1.jpg",["RVCA Trucker Snapback - Black","34.99","- Black Front Panel, Visor, & Undervisor","- Black Mesh Backing","- Embroidered RVCA Script Logo","- 100% Polyester"]);
		sessionStorage.setItem("BulldogWhitestrap1.jpg",["Dog Limited English Bulldog Dad Hat - White","28.99","- White Crown & Visor","- Embroidered English Bulldog Logo","- 100% Cotton"]);
		sessionStorage.setItem("CigaretteNaikestrap1.jpg",["Cigarette Naike Strapback Hat - Pink","20.99","- Pink Crown & Visor","- Embroidered Naike Logo","- 100% Cotton"]);
		sessionStorage.setItem("CaliBearblackstrap1.jpg",["Cali Bear Dad Hat - Black","24.99","- Black Crown, Visor, & Undervisor","- Embroidered Cali Bear Logo","- 100% Cotton"]);
		sessionStorage.setItem("Hundredsbluesnap1.jpg",["The Hundreds Globe Los Angeles Snapback - Royal & Red & White","26.99","- Silk Like Royal Blue Crown & Visor","- Green Undervisor","- Embroidered Script Logo","- 100% Polyester"]);
		sessionStorage.setItem("LAblacksnap1.jpg",["47 Brand Los Angeles Dodgers Snapback - Black","29.99","- Royal Blue Crown & Visor","- Gray Undervisor","- Embroidered Dodgers Team Logo on the Front Panel","- 85% Acrylic & 15% Wool"]);
		sessionStorage.setItem("LARamssnap1.jpg",["New Era 9Fifty Los Angeles Rams Snapback - Black & Royal & Gold","28.99","- Black Crown & Visor","- Green Undervisor","- Embroidered Team Script Logo","- 100% Wool"]);
		sessionStorage.setItem("PinkDolphinsnap1.jpg",["Pink Dolphin Gradient Snapback - Black","29.99","- Black Visor with yellow and green gradient pattern","- Printed Pink Dolphin Flag in green & yellow","- 100% Polyester"]);
		sessionStorage.setItem("TravisMathewCauthensnap1.jpg",["Travis Mathew Cauthen Snapback Hat - Navy","30.99","- Navy Crown & Visor","- Brand Logo Embroidered on Front","- 60% Bamboo & 40% Cotton"]);
		sessionStorage.setItem("MLBstrap1.jpg",["New Era 9Twenty MLB Umpire Dad Hat - Denim","28.99","- Denim Undervisor","- Official MLB Logo Embroidered on Front","- 100% Cotton"]);
		sessionStorage.setItem("NBAstrap1.jpg",["New Era 9Twenty NBA Logo Dad Hat - Denim","28.99","- Navy Denim Crown & Visor","- Navy Denim Undervisor- Official NBA Logo Embroidered on Front","- 100% Cotton"]);
		sessionStorage.setItem("NikeCamostrap1.jpg",["Nike Army Dad Hat - Camo","28.99","- Camo Crown, Visor, & Undervisor","- Embroidered Naike Logo on Front","- 100% Cotton"]);
		sessionStorage.setItem("StussyMWstrap1.jpg",["Stussy Melton Wool Strapback - Burgundy","30.99","- Tan Visor & Undervisor","- Brand Logo Embroidered on Front","- 50% Wool & 30% Polyester & 10% Acrylic & 10% Nylon"]);
		sessionStorage.setItem("TupacBearstrap1.jpg",["By Any Meme Tupac Bear Dad Hat - White","29.99","- White Crown, Visor, & Undervisor","- Embroidered Tupac Bear Logo","- 100% Cotton"]);
	};
	$(document).ready(function(){
		$("#cell").click(function(){ itemclicked(this.val()); });
	});
</script>
</html>
