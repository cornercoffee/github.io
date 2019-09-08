<?php
session_start();
$pdo = new PDO( 'mysql:host=localhost;dbname=aidb;', 'root', '' );
if ( isset( $_SESSION[ 'students' ] ) ) {
  header( "Location: index.php" );

  require 'header/header.php';
  ?>
<script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>
<?php


$studentid = $_SESSION[ 'students' ][ 'studentid' ];
//	$email=$_SESSION['students']['email'];
//	echo "$studentid";
//	echo "$email";
$sql = $pdo->prepare( 'select * from students where studentid!=? and email=?' );


$sql->execute( [ $studentid, $_REQUEST[ 'email' ] ] );

if ( empty( $sql->fetchAll() ) ) {
  $sql = $pdo->prepare( 'update students set firstn=?, lastn=?, 
			studentsex=?, phonen=?, email=?, password=? where studentid=?' );

  $_SESSION[ 'students' ] = [ 'studentid' => $studentid,
    'firstn' => $_REQUEST[ 'firstn' ],
    'lastn' => $_REQUEST[ 'lastn' ], 'studentsex' => $_REQUEST[ 'studentsex' ], 'phonen' => $_REQUEST[ 'phonen' ], 'email' => $_REQUEST[ 'email' ],
    'password' => $_REQUEST[ 'password' ]
  ];

  $sql->execute( [
    $_REQUEST[ 'firstn' ], $_REQUEST[ 'lastn' ], $_REQUEST[ 'studentsex' ], $_REQUEST[ 'phonen' ], $_REQUEST[ 'email' ], $_REQUEST[ 'password' ], $studentid
  ] );


  header( "Location: index.php" );
}
}
?>
<?php require 'header/footer.php'; ?>
