<?php
session_start();
require 'header/header.php';
?>
<?php
$pdo = new PDO( 'mysql:host=localhost;dbname=test;charset=utf8', 'root', '' );

$sql = $pdo->prepare( 'select * from product ' );

$sql->execute();
//$cid = $_REQUEST[ 'cid' ];
//echo "$cid";
if ( !isset( $_SESSION[ 'user' ] ) ) {
  foreach ( $sql->fetchAll() as $row ) {

    //    echo '<div class="cform" style="padding-top:500px;"><form action="course-insert.php" method="post">';
    echo '<p>Product ID: ', $row[ 'productID' ], '</p>';
    echo '<p>Product Name: ', $row[ 'productName' ], '</p>';
    echo '<p>Product Type: ', $row[ 'productType' ], '</p>';
    echo '<p>Product Price: ', $row[ 'productPrice' ], '</p>';
    echo "<img src='data:image/jpeg;base64," . base64_encode( $row[ 'productImage' ] ) . "' width='140' height='140' >";
  }


} else {
  foreach ( $sql->fetchAll() as $row ) {

    echo '<p>Product ID: ', $row[ 'productID' ], '</p>';
    echo '<p>Product Name: ', $row[ 'productName' ], '</p>';
    echo '<p>Product Type: ', $row[ 'productType' ], '</p>';
    echo '<p>Product Price: ', $row[ 'productPrice' ], '</p>';
    echo "<img src='data:image/jpeg;base64," . base64_encode( $row[ 'productImage' ] ) . "' width='140' height='140' >";
  }
  echo '</select></p>';
  echo '<input type="hidden" name="cid" value="', $row[ 'productID' ], '">';
  echo '<input type="hidden" name="cday" value="', $row[ 'productName' ], '">';
  echo '<input type="hidden" name="ctime" value="', $row[ 'productType' ], '">';
  echo '<input type="hidden" name="clength" value="', $row[ 'productPrice' ], '">';


  echo '<p><input type="submit" value="Add To Cart" class="buttonsub" ></p>';
  echo '</form></div>';
}
?>
<nav>
  <ul class="nav-links">
    <li> <a href="index.php">HOME</a> </li>
    <li> <a href="">PRODUCT</a> </li>
    <li> <a href="course.php">CLASS</a> </li>
    <li><a href="login-input.php">LOGIN</a></li>
    <li><a href="customer-input.php">REGISTER</a></li>
    `
  </ul>
  <div class="burger">
    <div class="navline1"></div>
    <div class="navline2"></div>
    <div class="navline3"></div>
  </div>
</nav>
<div class="shoppingCart-cart"> </div>
<div class="icon-cart">
  <div class="cart-line-1" style="background-color: white"></div>
  <div class="cart-line-2" style="background-color: white"></div>
  <div class="cart-line-3" style="background-color: white"></div>
  <div class="cart-wheel" style=""></div>
  <div class="cart-wheel2" style=""></div>
</div>
<script src="javaS-lewis.js"></script>
<?php require 'header/footer.php'; ?>
