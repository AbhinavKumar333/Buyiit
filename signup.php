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
	<script>
	function validateForm(formId)
			{
					var inputs, index;
					var form=document.getElementById(formId);
					inputs = form.getElementsByTagName('input');
					for (index = 0; index < inputs.length; ++index) {
							// deal with inputs[index] element.
							if (inputs[index].value==null || inputs[index].value=="")
							{
									alert("Field is empty");
									return false;
							}
					}
			}
	</script>

<?php
include 'db.php';
include 'nav.php';

if (isset($_GET["email"])){
	$email = $_GET["email"];
	$name = $_GET["username"];
	if ($_GET["conpass"] != $_GET["pass"]){echo 'Password doesn`t match'; die();}
	$r = executeDB("select * from users where email = '".$email."'");
	if($r->num_rows > 0){echo "Email already exists."; die();}
	$pass = hash("sha256",$_GET["pass"]);
	$result = executeDB("insert into users values(0,'".$name."','".$email."','".$pass."')");
	echo "<script>window.location.href = \"account.php?email=".$email."&pass=".$_GET["pass"]."\";</script>";
}
 ?>
<div class="center-align">
  <div class="row">
    <div class="col s12 m6" style="margin: 20px auto; float: none;">
      <h2>Sign Up</h2>
      <div class="card">
        <form name="register" id="register" class="col s12" action="signup.php" method='get' onsubmit="return validateForm('register');">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="username" type="text">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" type="email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="pass" type="password">
                            <label for="pass">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="conpass" type="password">
                            <label for="conpass">Confirm Password</label>
                        </div>
                    </div>

                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Sign Up</button>
                            </p>
                        </div>
                    </div>
                </form>
      </div>
    </div>
  </div>
</div>



</body>
</html>
