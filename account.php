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

					<?php
					include 'db.php'; include 'nav.php';

					if (isset($_GET["action"])){
						if ($_GET["action"]=='logout')
								session_destroy();
								echo "<script>window.location.href = \"account.php\";</script>";
					}

					if (isset($_SESSION["email"])){
						// echo "User is Logged in!";
						//redirect to accounts page
						echo "<script>window.location.href = \"index.php\";</script>";
					}


					if (isset($_GET["email"])){
						$email = $_GET["email"];
						$pass = hash("sha256",$_GET["pass"]);
						$result = executeDB("select * from users where email='".$email."' and password='".$pass."'");
						if ($result->num_rows>0){
							//perform Login
							// echo "User authenticated!";
							$_SESSION["email"] = $email;
							//redirect to accounts page
							echo "<script>window.location.href = \"index.php\";</script>";
							die();
						}
					}
					?>

<div class="center-align">
  <div class="row">
    <div class="col s12 m6" style="margin: 20px auto; float: none;">
      <h2>Login</h2>
      <div class="card">
        <form class="col s12" action="account.php" method="get">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="pass" type="password" class="validate">
                            <label for="pass">Password</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn btn-large waves-effect waves-light" type="submit">Login</button>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <p class="left-align">
                                <a href="signup.php"><button class="btn btn-large waves-effect waves-light" type="button">Register</button></a>
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
