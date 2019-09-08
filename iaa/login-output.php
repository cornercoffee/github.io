<?php
session_start();
$pdo = new PDO( 'mysql:host=localhost;dbname=aidb;charset=utf8', 'root', '' );
$sql = $pdo->prepare( 'select * from students where email=? and password=?' );
$sql->execute( [ $_REQUEST[ 'email' ], $_REQUEST[ 'password' ] ] );
foreach ( $sql->fetchAll() as $row ) {
  $_SESSION[ 'students' ] = [
    'studentid' => $row[ 'studentid' ], 'firstn' => $row[ 'firstn' ],
    'lastn' => $row[ 'lastn' ], 'studentsex' => $row[ 'studentsex' ],
    'phonen' => $row[ 'phonen' ],

    'email' => $row[ 'email' ],
    'password' => $row[ 'password' ]
  ];}
  if ( isset( $_SESSION[ 'students' ] ) ) {
    header( "location: index.php" );
  }

else {
	require 'header/header.php';
  echo 'Login id or password is invalid.';
}

?>
<nav>
  <ul class="nav-links">
    <li> <a href="index.php">HOME</a> </li>
    <li> <a href="">PRODUCT</a> </li>
    <li> <a href="course.php">CLASS</a> </li>
    <li><a href="login-input.php">LOGIN</a></li>
    <li><a href="customer-input.php">REGISTER</a></li>
  </ul>
  <div class="burger">
    <div class="navline1"></div>
    <div class="navline2"></div>
    <div class="navline3"></div>
  </div>
</nav>
<div class="shoppingCart-cart">
  <h2 style="border-bottom: 2px solid #333333; padding-bottom: 12px; margin-left: 30px">YOUR CART(22)</h2>
  <div class="productInfo">
    <div class="productImg"><img src="img/c1.png" alt=""></div>
    <div class="productDesc"> </div>
  </div>
  <input type="button" class="viewCart" onclick="location.href='shoppingCart.php';" value="VIEW CART">
</div>
<div class="icon-cart">
  <div class="cart-line-1" style="background-color: white"></div>
  <div class="cart-line-2" style="background-color: white"></div>
  <div class="cart-line-3" style="background-color: white"></div>
  <div class="cart-wheel" style=""></div>
  <div class="cart-wheel2" style=""></div>
</div>
<script src="javaS-lewis.js"></script>
<?php require 'header/footer.php'; ?>
