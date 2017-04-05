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
  <!-- Navigation_Starts -->
          <nav style="background-color: #6929AE;">
            <div class="container">
              <div class="nav-wrapper">
                <a href='index.php' class="brand-logo"><i class="material-icons">cloud</i>Buyitt</a>
                <ul class="right hide-on-med-and-down">

                   <!-- <li><label class="label-icon" for="search"><i class="material-icons">search</i></label></li>

                   <li><input id="search" type="search" required></li> -->

                  <!-- <li>
                    <a href='#' data-activates='dropdown1'><i class="material-icons">more_vert</i></a>
                    <ul id='dropdown1' class='dropdown-content'>
                      <li><a href="#!">Account</a></li>
                      <li><a href="#!">123</a></li>
                    </ul><script>
                    $(document).ready(function(){
                      $('.dropdown-button').dropdown('open');
                    }

                    );
                    </script>
                  </li> -->
									<li><a href="account.php">Account</a></li>
                  <li><a href="cart.php"><i class="material-icons left">shopping_cart</i>Cart</a></li>
                </ul>
              </div>
            </div>
            </nav>
  <!-- Navigation_Ends -->

<div class="center-align">
  <div class="row">
    <div class="col s12 m6" style="margin: 20px auto; float: none;">
      <h2>Login</h2>
      <div class="card">
        <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="password" class="validate">
                            <label for="pass">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <p>
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn btn-large waves-effect waves-light" type="button" name="action">Login</button>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m12">
                            <p class="left-align">
                                <button class="btn btn-large waves-effect waves-light" type="button" name="action">Register</button>
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
