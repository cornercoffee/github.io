<?php
session_start();
require 'header/header.php';
?>
<form action="detail.php" method="post" style="float: right;" class="searchform">
  Course Search
  <input type="text" name="keyword">
  <input type="image" src="css/img/search.png" alt="Submit" width="18" height="18">
</form>
<?php
echo '<div class=table1><table>';

$pdo = new PDO( 'mysql:host=localhost;dbname=aidb;charset=utf8', 'root', '' );
if ( isset( $_REQUEST[ 'keyword' ] ) ) {
  $sql = $pdo->prepare( 'select * from courses where coursen like ?' );
  $sql->execute( [ '%' . $_REQUEST[ 'keyword' ] . '%' ] );

} else {
  $sql = $pdo->prepare( 'select * from courses' );
  $sql->execute( [] );
}
foreach ( $sql->fetchAll() as $row ) {
  $courseava = $row[ 'courseava' ];
  if ( $courseava == 1 ) {
    $courseava = "AVAILABLE";
  } else $courseava = "CLOSED";
  $cid = $row[ 'courseid' ];
  //		$cid=$row['cid'];
  echo '<tr>';
  echo '<td>', '<a href="course-show.php?cid=', $cid, '"><img src="css/img/', $row[ 'courseid' ], 'C.jpg" style="width:300px;300px;"></a>', '</td>';
  //		echo '<td>';
  //		echo '<a href="course-show.php?cid=', $cid, '">', $row['coursen'], '</a>';
  //		echo '</td>';
  echo '<td>', $row[ 'coursen' ], '</td>';
  echo '<td><div class="td3">&nbsp;&nbsp;', $courseava, '</div></td>';
  echo '</tr>';
}
echo '</table></div>';

if ( isset( $_SESSION[ 'user' ] ) ) {


  echo '<nav>';
  echo '<ul class="nav-links">';
  echo '<li> <a href="index.php">HOME</a> </li>';
  echo '<li> <a href="">PRODUCT</a> </li>';
  echo '<li> <a href="course.php">CLASS</a> </li>';
  
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

} else {


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
<?php require 'header/footer.php'; ?>
