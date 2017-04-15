<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<script src="static/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="static/css/materialize.css">
  <script src="static/js/materialize.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="Language" content="en" />
	<title>Buyitt</title>
  <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/shopping-glyphs-1/128/21-512.png">
	<meta name="description" content="Online Shopping Portal"/>
	<meta name="keywords" content="DBMS Project">
	<meta name="author" content="Abhinav Kumar">
</head>

<body>

<?php include 'nav.php';?>
<div class="container">
<div class="row">
<?php
  include 'db.php';
   if (isset($_GET["search"])) {
     $search = $_GET["search"];
     $search = htmlspecialchars($search);echo "<h5>Search Results for :-    ".$search."</h5>";
    //  $search = mysql_real_escape_string($search);
     $result = executeDB("select * from Items where I_name like '%".$search."%'");
     if($result->num_rows > 0){
       while ($row = $result->fetch_assoc()) {$search = NULL;
				 $old = executeDB("select * from search where Pid = '".$row["Id"]."'");
				 if($old->num_rows > 0){$o = $old->fetch_assoc();
					 $o["count"] ++;
					 executeDB("update search set count = ".$o["count"]." where Pid = ".$row["Id"]."");
				 }
				 else{
					 executeDB("insert into search values(".$row["Id"].", 1)");
				 }
         echo getCard($row["I_name"],$row["I_desc"],$row["I_price"],$row["Image"]);
       }
     }
   }

	 function getCard($name,$desc,$price,$image){
 		$html = '<div class="col s12 m3">
 			<div class="card">
 				<div class="card-image waves-effect waves-block waves-light">
 					<img class="activator" src="'.$image.'">
 				</div>
 				<div class="card-content">
 					<span class="card-title activator grey-text text-darken-3">'.$name.'<i class="material-icons right">more_vert</i></span>
 					<p>Rs. '.$price.'</p></br>
 					<p><form method="GET" action="cart.php"><button class="btn waves-effect waves-light" id="buy" type="submit" onclick="buynow()">Buy Now</button></form></p>
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
</body>
</html>
