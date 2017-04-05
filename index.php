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
  <!-- Navigation_Starts -->
          <nav style="background-color: #6929AE;">
            <div class="container">
              <div class="nav-wrapper">
                <a href='index.php' class="brand-logo"><i class="material-icons">shop</i>Buyitt</a>
                <ul class="right hide-on-med-and-down">

                   <li><label class="label-icon" for="search"><i class="material-icons">search</i></label></li>

                   <li><input id="search" type="search" required></li>

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
									<li><a class='dropdown-button' href='#' data-activates='dropdown1' data-beloworigin="true">Filter</a>
									  <ul id='dropdown1' class='dropdown-content'>
									    <li><a href="#!">one</a></li>
									    <li><a href="#!">two</a></li>
									  </ul>
        					</li>
                  <li><a href="account.php">Account</a></li>
                  <li><a href="cart.php"><i class="material-icons left">shopping_cart</i>Cart</a></li>
                </ul>
              </div>
            </div>
            </nav>
  <!-- Navigation_Ends -->

</br>
</br>

  <div class="row">
    <div class="col s12 m2">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="static/images/img1.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Item_1<i class="material-icons right">more_vert</i></span>
          <p>Desc_1</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>

    <div class="col s12 m2">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="static/images/img2.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Item_2<i class="material-icons right">more_vert</i></span>
          <p>Desc_2</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
  </div>






</body>



</html>
