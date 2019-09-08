<?php
session_start();

if ( !isset( $_SESSION[ 'students' ] ) ) {
  header( "location:index.php" );
} else {
  
  $pdo = new PDO( 'mysql:host=localhost;dbname=aidb;charset=utf8', 'root', '' );
  $studentid = $_SESSION[ 'students' ][ 'studentid' ];
  $cid = $_REQUEST[ 'cid' ];

  $sql = $pdo->prepare( 'select * from enrollment where studentid=? and cid=?' );
  $sql->execute( [
    $_SESSION[ 'students' ][ 'studentid' ], $_REQUEST[ 'cid' ]
  ] );

  if ( !empty( $sql->fetchAll() )  ) {
//    echo '<script language="javascript">';
//echo 'alert("message successfully sent")';
//echo '</script>';
 header( "location:index.php" );
  } else {


    $sql = $pdo->prepare( 'insert into enrollment (studentid,cid)values(?,?)' );

    $sql->execute( [
      $_SESSION[ 'students' ][ 'studentid' ], $_REQUEST[ 'cid' ]
    ] );
//    echo '<script language="javascript">';
//echo 'alert("Insert successfully")';
//echo '</script>';
header( "location:index.php" );
  }
}
 
?>
<?php


echo '';
echo '<nav>';
echo '<ul class="nav-links">';
echo '<li> <a href="">HOME</a> </li>';
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