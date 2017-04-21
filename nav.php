

<!-- Navigation_Starts -->
      <div class="navbar-fixed">
        <nav style="background-color: #6929AE;">
          <div class="container">
            <div class="nav-wrapper">
              <a href='index.php' class="brand-logo"><i class="material-icons">shop</i>Buyitt</a>
              <ul class="right hide-on-med-and-down">
                 <li><label class="label-icon" for="search"><i class="material-icons">search</i></label></li>
                 <li><form method="GET" action="search.php"><input name="search" type="text" placeholder="Search Products"></form></li>

                <li><a class='dropdown-button' href='#' data-activates='dropdown1' data-beloworigin="true">Filter</a>
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="search.php?action=filter&sort=asc">Price Low to High</a></li>
                    <li><a href="search.php?action=filter&sort=desc">Price High to Low</a></li>
                  </ul>
                </li>

                <li><a href="cart.php"><i class="material-icons left">shopping_cart</i>Cart</a></li>
                <?php
                  session_start();
                  if(isset($_SESSION["email"])){
                  echo '<li><a href="account.php?action=logout">Logout</a></li>';
                }
                else {echo '<li><a href="account.php">Login</a></li>';}
                ?>

              </ul>
            </div>
          </div>
          </nav>
        </div>
<!-- Navigation_Ends -->
