<?php
session_start();
if ( isset( $_SESSION[ 'students' ] ) ) {
  unset( $_SESSION[ 'students' ] );
  header( "Location: index.php" );
  require 'header/header.php';
  ?>
<?php


echo '<nav>';
echo '<ul class="nav-links">';
echo '<li> <a href="index.php">HOME</a> </li>';
echo '<li> <a href="">PRODUCT</a> </li>';
echo '<li> <a href="course.php">CLASS</a> </li>';

echo '';
echo '';
echo '';
echo '<li><a href="login-input.php">LOGIN</a></li>';
echo '<li><a href="customer-input.php">REGISTER</a></li>';
echo '`';
echo '';
echo '';
echo '</ul>';
echo '<div class="burger">';
echo '<div class="navline1"></div>';
echo '<div class="navline2"></div>';
echo '<div class="navline3"></div>';
echo '</div>';
echo '</nav>';

}
else {

  echo '';
  echo '<nav>';
  echo '<ul class="nav-links">';
  echo '<li> <a href="index.php">HOME</a> </li>';
  echo '<li> <a href="">PRODUCT</a> </li>';
  echo '<li> <a href="course.php">CLASS</a> </li>';

  echo '';
  echo '';
  echo '';
  echo '<li><a href="logout-input.php">LOGOUT</a></li>';
  echo '';
  echo '`';
  echo '';
  echo '';
  echo '</ul>';
  echo '<div class="burger">';
  echo '<div class="navline1"></div>';
  echo '<div class="navline2"></div>';
  echo '<div class="navline3"></div>';
  echo '</div>';
  echo '</nav>';

}
?>
<div class="shoppingCart-cart"> </div>
<div class="icon-cart">
  <div class="cart-line-1" style="background-color: white"></div>
  <div class="cart-line-2" style="background-color: white"></div>
  <div class="cart-line-3" style="background-color: white"></div>
  <div class="cart-wheel" style=""></div>
  <div class="cart-wheel2" style=""></div>
</div>
<script src="javaS-lewis.js"></script>
<?php require 'header/footer.php';?>
