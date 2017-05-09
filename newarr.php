<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'coolfitteddb';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) {
		die ('Connection failed to database');
	}

	$sql = "SELECT imagepath,imagename FROM images WHERE imagename LIKE '%ap1%' AND idimages < 36";
	$imagesquery = mysqli_query($conn, $sql);
	if (!$imagesquery){
		die ('Querying error');
	}

 ?>
<!DOCTYPE>
<html>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script.js"></script>
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
					<div class='menu'>
						<a href="index.php" class='label home'>Home</a>
						<a href="newarr.php" class='label newarr active'>New Arrivals</a>
						<a href="snapbacks.php" class='label snap'>Snapbacks</a>
						<a href="strapbacks.php" class='label strap'>Strapbacks</a>
						<a href="aboutus.html" class='label aboutus'>About us</a>
					</div>
				</div>
				<div class='jumbo'>
					<img src='Media/newarrpic.jpg' height="200" width="70%" style='margin-top: 3%'>
				</div>
				<div class='featcombo'>
					<div class='combocontent'>
						New Arrivals
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

							echo "	<td>
												<a class = 'cell' onClick='itemclicked('".substr($row['imagename'], 0, -1)."')' href = 'details.php?id=".$row['imagename']."'>
													<div class = 'col-".$col."'>
														<img src = '".$row['imagepath']."' width = '160' height = '120'>
														<p>".$dets['title']."<span><br>".$dets['price']."</span></p>
													</div>
												</a>
											</td>";
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
							<a class="cell" onClick="itemclicked('BMW90sm3strap')" href="details.html">
								<div class='col-4'>
									<img src='Media/BMW90sm3strap1.jpg' width='160' height='120'>
									<p>90's BMW M3 Strapback- White<span><br>$35.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('HUFHstrap')" href="details.html">
								<div class='col-2'>
                	<img src='Media/HUFHstrap1.jpg' width='120' height='120'>
									<p>HUF Classic H 6-Panel Strapback - Navy, Stone<span><br>$20.99</span></p>
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
            	<a class="cell" onClick="itemclicked('HundredsPlayersnap')" href="details.html">
								<div class='col-4'>
									<img src='Media/HundredsPlayersnap1.jpg' width='160' height='120'>
									<p>The Hundreds Player Snapback - Teal, Maroon<span><br>$25.99</span></p>
								</div>
							</a>
						</td>
					</tr>
					<tr class='row' style="margin-top:1%;">
						<td>
							<a class="cell" onClick="itemclicked('CaliBearblackstrap')" href="details.html">
								<div class='col-1'>
									<img src='Media/CaliBearblackstrap1.jpg' width='160' height='120'>
									<p>Cali Bear Strapback - Black<span><br>$24.99</span></p>
								</div>
							</a>
						</td>
						<td>
            	<a class="cell" onClick="itemclicked('LARamssnap')" href="details.html">
								<div class='col-3'>
									<img src='Media/LARamssnap1.jpg' width='160' height='120'>
									<p>Los Angeles Rams Snapback - Black<span><br>$28.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('MLBstrap')" href="details.html">
								<div class='col-3'>
									<img src='Media/MLBstrap1.jpg' width='160' height='120'>
									<p>Major League Baseball Strapback - Dark Denim<span><br>$28.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('NBAstrap')" href="details.html">
								<div class='col-4'>
									<img src='Media/NBAstrap1.jpg' width='160' height='120'>
									<p>Basketball Association Strapback - Dark Denim<span><br>$28.99</span></p>
								</div>
							</a>
						</td>
					</tr>
					<tr class='row'>
						<td>
							<a class="cell" onClick="itemclicked('NikeCamostrap')" href="details.html">
								<div class='col-1'>
									<img src='Media/NikeCamostrap1.jpg' width='160' height='120'>
									<p>Nike Army Strapback - Camo<span><br>$28.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('StussyMWstrap')" href="details.html">
								<div class='col-2'>
									<img src='Media/StussyMWstrap1.jpg' width='160' height='120'>
									<p>Stussy MW Strapback - Burgundy, Tan<span><br>$30.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('TupacBearstrap')" href="details.html">
								<div class='col-3'>
									<img src='Media/TupacBearstrap1.jpg' width='160' height='120'>
									<p>Tupac Bear Strapback - White<span><br>$29.99</span></p>
								</div>
							</a>
						</td>
						<td>
            	<a class="cell" onClick="itemclicked('LAblacksnap')" href="details.html">
								<div class='col-3'>
									<img src='Media/LAblacksnap1.jpg' width='160' height='120'>
									<p>National Los Angeles Dodgers Snapback - Black<span><br>$28.99</span></p>
								</div>
							</a>
						</td>
					</tr>
-->
				</table>
					<div class='footercombo'>
						<div class='combocontent' style="padding-top:1%; font-size: 20px">
							CoolFitted&reg; 2017 &#8209; All Rights Reserved
						</div>
					</div>
				<br/>
				<br/>
			</div>
		</div>
	</center>
</body>
</html>
