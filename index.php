<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<script src="static/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="static/css/materialize.css">
  <script src="static/js/materialize.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="Language" content="en" />
	<title>Buyitt</title>
  <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/shopping-glyphs-1/128/21-512.png">
	<meta name="description" content="Online Shopping Portal"/>
	<meta name="keywords" content="DBMS Project">
	<meta name="author" content="Abhinav Kumar">
</head>

<body>
				<?php include 'db.php'; include "nav.php"; ?>

				<!-- Items starts -->
				<br>
				<br>
					<div class="container">
				  <div class="row" id="trending">
					<h5>Trending Phones</h5>

				<?php
					 initDB();
					 $result = executeDB("select * from Items");
					 if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()){
							if ($row["I_type"] == "trending") {
								echo getCard($row["I_name"],$row["I_desc"],$row["I_price"],$row["Image"]);
							}
						}
					}

				function getCard($name,$desc,$price,$image){
					echo '<script>var name = "'.$name.'"; </script>';
					$html = '<div class="col s12 m3">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="'.$image.'">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-3">'.$name.'<i class="material-icons right">more_vert</i></span>
								<p>Rs. '.$price.'</p></br>
								<p><button class="btn waves-effect waves-light" id="buy">Buy Now</button></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">'.$name.'<i class="material-icons right">close</i></span>
								<p>'.$desc.'</p>
							</div>
						</div>
					</div>';
				return $html;
				}
				?>



				</div>
				</div>

				<script type="text/javascript">
				$(document).ready(function(){
					$("#popular").find('div div p #buy').click(function(e){
						alert($(this).parent().parent().find("span").html().split("<i")[0]);
						var r = $(this).parent().parent().find("span").html().split("<i")[0];
						window.location.href = "cart.php?action=addItem&name="+r;
					});
					$("#trending").find('div div p #buy').click(function(e){
						alert($(this).parent().parent().find("span").html().split("<i")[0]);
						var r = $(this).parent().parent().find("span").html().split("<i")[0];
						window.location.href = "cart.php?action=addItem&name="+r;
					});
				});

				</script>


				<br>
				<br>
				<div class="container">
					<div class="row" id="popular">
						<h5>Popular Phones</h5>
				<?php
						$result = executeDB("select * from Items");
						if ($result->num_rows > 0) {
						 while($row = $result->fetch_assoc()){
							 if ($row["I_type"] == "popular") {
								 echo getCard($row["I_name"],$row["I_desc"],$row["I_price"],$row["Image"]);
							 }
						 }
						}
						$dlink->close();
				?>

			</div>
			</div>



</body>
</html>
