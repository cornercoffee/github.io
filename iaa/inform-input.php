<?php
session_start();
$firstn = $lastn = $studentsex = $phonen = $email = $password = '';
if ( isset( $_SESSION[ 'students' ] ) ) {

  require 'header/header.php';
  ?>
<?php

$firstn = $_SESSION[ 'students' ][ 'firstn' ];
$lastn = $_SESSION[ 'students' ][ 'lastn' ];
$studentsex = $_SESSION[ 'students' ][ 'studentsex' ];
$phonen = $_SESSION[ 'students' ][ 'phonen' ];
$email = $_SESSION[ 'students' ][ 'email' ];
$password = $_SESSION[ 'students' ][ 'password' ];
echo '<div class="box" id="boxx"  style="margin-top:80px;"><form action="inform-output.php" method="post">';
echo '<table class=table6>';
	echo '<p style="font-size:23px;">Change personal information</p>';
echo '<tr><td>First name</td><td>';
echo '<input type="text" name="firstn" value="', $firstn, '">';
echo '</td></tr>';
echo '<tr><td>Last name
</td><td>';
echo '<input type="text" name="lastn" value="', $lastn, '">';
echo '</td></tr>';
echo '<tr><td>Sex</td><td>';
echo '<input type="text" name="studentsex" value="', $studentsex, '">';
echo '</td></tr>';
echo '<tr><td>Phone
</td><td>';
echo '<input type="text" name="phonen" value="', $phonen, '">';
echo '</td></tr>';
echo '<tr><td>Email
</td><td>';
echo '<input type="email" name="email" value="', $email, '">';
echo '</td></tr>';
echo '<tr><td>Password</td><td>';
echo '<input type="password" name="password" value="', $password, '">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="Submit" class="buttonsub2">';
echo '</form></div>';

echo '';
echo '<nav>';
echo '<ul class="nav-links">';
echo '<li> <a href="index.php">HOME</a> </li>';
echo '<li> <a href="">PRODUCT</a> </li>';
echo '<li> <a href="course.php">CLASS</a> </li>';

echo '';
echo '';
echo '';
echo '<li><a href="mycourse-show.php">MY COURSE</a></li>';
echo '<li><a href="logout-input.php">LOGOUT</a></li>';
echo '<li><a href="inform-input.php">CHANGE INFORMATION</a></li>';
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
