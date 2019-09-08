<?php require 'header/header.php'; ?>
<?php

$firstn = $lastn = $studentsex = $phonen = $email = $password = '';
if ( isset( $_SESSION[ 'students' ] ) ) {
  echo 'You have already login.';
} else {
  //	$firstn=$_SESSION['students']['firstn'];
  //	$lastn=$_SESSION['students']['lastn'];
  //	$studentsex=$_SESSION['students']['studentsex'];
  //	$phonen=$_SESSION['students']['phonen'];
  //	$email=$_SESSION['students']['email'];
  //	$password=$_SESSION['students']['password'];
  echo '<div class="box" id="boxx" style="margin-top:85px;"><form action="customer-output.php" method="post">';
  echo '<p>SIGN UP</p>';
  echo '<table>';
  echo '<tr><td>First name</td><td>';
  echo '<input type="text" name="firstn" value="', $firstn, '"required>';
  echo '</td></tr>';
  echo '<tr><td>Last name
</td><td>';
  echo '<input type="text" name="lastn" value="', $lastn, '"required>';
  echo '</td></tr>';
  echo '<tr><td>Sex</td><td>';
  echo '<input type="text" name="studentsex" value="', $studentsex, '"required>';
  echo '</td></tr>';
  echo '<tr><td>Phone
</td><td>';
  echo '<input type="text" name="phonen" value="', $phonen, '"required pattern="[0-9]{8}" placeholder="8 number of telephone">';
  echo '</td></tr>';
  echo '<tr><td>Email
</td><td>';
  echo '<input type="email" name="email" value="', $email, '" required>';
  echo '</td></tr>';
  echo '<tr><td>Password</td><td>';
  echo '<input type="password" name="password" value="', $password, '" required>';
  echo '</td></tr>';
  echo '</table>';
  echo '<input type="submit" value="Confirm">';
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
