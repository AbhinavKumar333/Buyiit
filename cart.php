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

<?php  include 'db.php'; include 'nav.php';	?>

<div class="container" id="cartItems">

<?php
		if(isset($_SESSION['email']) && isset($_GET['pid'])){
			$uid = executeDB("select id from users where email = '".$_SESSION['email']."'");
			$uid = $uid->fetch_assoc(); echo $uid["id"];
			executeDB("delete from cart where Pid = '".$_GET['pid']."' and Uid = '".$uid['id']."'");
		}

  if(isset($_SESSION['email'])){
		$rid = executeDB("select id from users where email like '".$_SESSION['email']."'");
		$r1 = $rid->fetch_assoc();

		if(isset($_GET['name'])){
	    $email = $_SESSION['email'];
	    $name = $_GET['name'];
	    $r2 = executeDB("select Id from Items where I_name = '".$name."'");
	    if($rid->num_rows >0 && $r2->num_rows >0){
	      $r2 = $r2->fetch_assoc();
				$c = executeDB("select count from cart where Uid = '".$r1["id"]."' and Pid = '".$r2["Id"]."'");echo $_SESSION['email'];
				$cn = $c->fetch_assoc();
				echo $c->num_rows;
				$count = $cn['count'] + 1;
				if($c->num_rows > 0){echo $count;
						executeDB("update cart set count = '".$count."' where Uid = '".$r1['id']."' and Pid='".$r2["Id"]."'");
				}
				else {
					executeDB("insert into cart values('".$r1["id"]."', '".$r2["Id"]."', '".$count."')");
				}
    	}
		}

		$result = executeDB("select * from cart where Uid = '".$r1["id"]."'");
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$r = executeDB("select * from Items where Id like '".$row["Pid"]."'");
				while($d = $r->fetch_assoc()){
					$name = $d["I_name"];	$price = $d["I_price"];	$desc = $d["I_desc"];	$image = $d["Image"];	$count = $row['count'];
					echo getCollection($name,$price,$desc,$image,$count,$d["Id"]);
				}
			}
		}
	}

		function getCollection($name,$price,$desc,$image,$count,$pid){
			$html = '<ul class="collection">
						    <li class="collection-item avatar">
						      <img src="'.$image.'" alt="" class="circle">
						      <span class="title">'.$name.'</span>
						      <p>Rs. '.$price.' <br>
						         '.$desc.'
										 <span class="new badge" data-badge-caption="">'.$count.'</span>
						      </p>
						      <a href="cart.php?action=deleteItem&pid='.$pid.'" class="secondary-content" id="delete"><i class="material-icons">close</i></a>
						    	</li>
							 </ul>';

		return $html;
		}
?>
</div>


</script>

</body>
</html>
