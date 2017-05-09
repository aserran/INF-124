<?php
	$dbhost = 'http://sylvester-mccoy-v3.ics.uci.edu/';
	$dbuser = 'inf124-db-002';
	$dbpass = 'K5GLfG5ho!!t';
	$dbname = 'inf124-db-002';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) {
		die ('Connection failed to database');
	}

	$sql = "SELECT imagepath,imagename FROM images WHERE imagename LIKE '%strap1%'";
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
						<a href="snapbacks.php" class='label snap'>Snapbacks</a>
						<a href="strapbacks.php" class='label strap active'>Strapbacks</a>
						<a href="aboutus.html" class='label aboutus'>About us</a>
					</div>
				</div>
				<div class='jumbo'>
					<img src='Media/strapbanner.jpg' height="200" width="70%" style='margin-top: 3%'>
				</div>
				<div class='featcombo'>
					<div class='combocontent'>
						Featured Strapbacks
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
