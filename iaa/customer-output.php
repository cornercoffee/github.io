<?php
session_start();

echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
header( "Location: index.php" );
require 'header/header.php';
?>
<?php

$pdo = new PDO( 'mysql:host=localhost;dbname=test;charset=utf8',
  'root', '' );
if ( isset( $_SESSION[ 'students' ] ) ) {
  $email = $_SESSION[ 'students' ][ 'email' ];
  $sql = $pdo->prepare( 'select * from user where email=? and password=?' );
  $sql->execute( [ $email, $_REQUEST[ 'password' ] ] );
} else {
  $sql = $pdo->prepare( 'select * from students where password=?' );
  $sql->execute( [ $_REQUEST[ 'password' ] ] );
}
if ( empty( $sql->fetchAll() ) ) {

  $sql = $pdo->prepare( 'insert into students (firstn, lastn, studentsex, phonen, email, password)values(?,?,?,?,?,?)' );
  $sql->execute( [
    $_REQUEST[ 'firstn' ], $_REQUEST[ 'lastn' ],
    $_REQUEST[ 'studentsex' ], $_REQUEST[ 'phonen' ], $_REQUEST[ 'email' ], $_REQUEST[ 'password' ]
  ] );


  //
} else {
  echo 'The Email you have entered has already been registered.';
}
?>
<?php
require 'header/footer.php';
?>
