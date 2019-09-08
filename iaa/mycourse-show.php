<?php
session_start();
if ( !isset( $_SESSION[ 'user' ] ) ) {
  echo 'Please sign in.';

} else {
  require 'header/header.php';
  ?>

<?php

echo '<div class="table2"><table>';
echo '<th>Class Code</th><th>Date</th><th>Time</th><th>Length</th><th>Price</th>';
$pdo = new PDO( 'mysql:host=localhost;dbname=test;', 'root', '' );
$studentid = $_SESSION[ 'user' ][ 'userID' ];
$sql = $pdo->prepare( 'select * from enrollment, coursesection where userID=? and enrollment.cid=coursesection.cid' );
//$cid=$_REQUEST['cid'];
$sql->execute( [ $_SESSION[ 'user' ][ 'useID' ] ] );
//	$sql->execute([$_SESSION['enrollment']['cid']]);

//echo "$studentid";

foreach ( $sql->fetchAll() as $row ) {
  $cid = $row[ 'cid' ];
  echo '<tr>';
  echo '<td>', $cid, '</td>';
  echo '<td>', $row[ 'cday' ], '</a></td>';

  //		echo '<td>', $row['cday'], '</td>';
  echo '<td>', $row[ 'ctime' ], '</td>';
  echo '<td>', $row[ 'clength' ], '</td>';
  echo '<td>', $row[ 'cprice' ], '</td>';

  echo '</tr>';
}


}


?>
</div>
<nav>
  <ul class="nav-links">
    <li> <a href="index.php">HOME</a> </li>
    <li> <a href="">PRODUCT</a> </li>
    <li> <a href="course.php">CLASS</a> </li>
    <li><a href="mycourse-show.php">MY COURSE</a></li>
    <li><a href="logout-input.php">LOGOUT</a></li>
    <li><a href="inform-input.php">CHANGE INFORMATION</a></li>
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
