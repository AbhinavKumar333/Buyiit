<!-- Navigation_Starts -->
      <div class="navbar-fixed">
        <nav style="background-color: #6929AE;">
          <div class="container">
            <div class="nav-wrapper">
              <a href='index.php' class="brand-logo"><i class="material-icons">shop</i>Buyitt</a>
              <ul class="right hide-on-med-and-down">

                 <li><label class="label-icon" for="search"><i class="material-icons">search</i></label></li>

                 <li><input id="search" type="search" required></li>
                <li><a class='dropdown-button' href='#' data-activates='dropdown1' data-beloworigin="true">Filter</a>
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                  </ul>
                </li>

                <?php
                if(isset($_SESSION["email"])){
                  echo '<li><a href="account.php?action=logout">Logout</a></li>';
                }
                else {echo '<li><a href="account.php">Login</a></li>';}
                ?>

                <li><a href="cart.php"><i class="material-icons left">shopping_cart</i>Cart</a></li>
              </ul>
            </div>
          </div>
          </nav>
        </div>
<!-- Navigation_Ends -->
