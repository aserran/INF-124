<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'coolfitteddb';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) {
		die ('Connection failed to database');
	}

	$sql = "SELECT imagepath,imagename FROM images WHERE imagename LIKE '%snap1%'";
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
						<a href="newarr.php" class='label newarr'>New Arrivals</a>
						<a href="snapbacks.php" class='label snap  active'>Snapbacks</a>
						<a href="strapbacks.php" class='label strap'>Strapbacks</a>
						<a href="aboutus.html" class='label aboutus'>About Us</a>
					</div>
				</div>
				<div class='jumbo'>
					<img src='Media/SnapbacksLettering.png' height="180" width="70%" style='margin-top: 3%'>
				</div>
				<div class='featcombo'>
					<div class='combocontent'>
						Featured Snapbacks
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
							<a class="cell" onClick="itemclicked('47LAsnap')" href="details.html">
								<div class='col-1'>
									<img src='Media/47LAsnap1.jpg' width='160' height='120'>
									<p>47 Brand Los Angeles Dodgers Snapback - Blue<span><br>$29.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('Hundredsbluesnap')" href="details.html">
								<div class='col-2'>
									<img src='Media/Hundredsbluesnap1.jpg' width='160' height='120'>
									<p>Los Angeles Hundreds Snapback - Blue<span><br>$26.99</span></p>
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
						<td>
							<a class="cell" onClick="itemclicked('undef5strikesnap')" href="details.html">
								<div class='col-4'>
									<img src='Media/undef5strikesnap1.jpg' width='160' height='120'>
									<p>Undefeated 5 Strike Snapback - Camo<span><br>$30.99</span></p>
								</div>
							</a>
						</td>
					</tr>
					<tr class='row' style="margin-top:1%;">
						<td>
							<a class="cell" onClick="itemclicked('RVCAsnap')" href="details.html">
								<div class='col-1'>
									<img src='Media/RVCAsnap1.jpg' width='160' height='120'>
									<p>RVCA Trucker Snapback - Black<span><br>$34.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('BrixtonGradesnap')" href="details.html">
								<div class='col-2'>
									<img src='Media/BrixtonGradesnap1.jpg' width='160' height='120'>
									<p>Brixton Grade Snapback Heather Gray, Maroon<span><br>$34.99</span></p>
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
							<a class="cell" onClick="itemclicked('PinkDolphinsnap')" href="details.html">
								<div class='col-4'>
									<img src='Media/PinkDolphinsnap1.jpg' width='160' height='120'>
									<p>Pink Dolphin Gradient Snapback - Black<span><br>$29.99</span></p>
								</div>
							</a>
						</td>
					</tr>
					<tr class='row' style="margin-top:1%;">
						<td>
							<a class="cell" onClick="itemclicked('TravisMathewCauthensnap')" href="details.html">
								<div class='col-1'>
									<img src='Media/TravisMathewCauthensnap1.jpg' width='160' height='120'>
									<p>Travis Mathew California Snapback - Navy<span><br>$29.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('HundredsGlobeSnap')" href="details.html">
								<div class='col-2'>
									<img src='Media/HundredsGlobeSnap1.jpg' width='160' height='120'>
									<p> The Hundreds Globe Snapback - Black, Gold<span><br>$25.99</span></p>
								</div>
							</a>
						</td>
						<td>
							<a class="cell" onClick="itemclicked('47SFgiantssnap')" href="details.html">
								<div class='col-3'>
									<img src='Media/47SFgiantssnap1.jpg' width='160' height='120'>
									<p>47 Brand San Francisco Giants Snapback - Black<span><br>$29.99</span></p>
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
-->
					</table>
					<div class='footercombo'>
						<div class='combocontent' style="padding-top:1%; font-size: 20px">
							CoolFitted<span style='font-size: 13px'>&reg;</span> 2017 &#8209; All Rights Reserved
						</div>
					</div>
				</div>
				<br/>
				<br/>
			</div>
		</div>
	</center>
</body>
</html>
