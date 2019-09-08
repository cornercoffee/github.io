<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="css/style2.css">
<?php
session_start();


require 'header/header.php';
?>
<script>
function myFunction() {
  alert("login first");
}
</script>
<?php
$pdo = new PDO( 'mysql:host=localhost;dbname=aidb;charset=utf8', 'root', '' );

$sql = $pdo->prepare( 'select * from coursesection where cid=?' );

$sql->execute( [ $_REQUEST[ 'cid' ] ] );
$cid = $_REQUEST[ 'cid' ];
//echo "$cid";
if ( !isset( $_SESSION[ 'students' ] ) ) {
  foreach ( $sql->fetchAll() as $row ) {
    echo '<div class="main" style="padding-top:0px;">
  <div class="sideb">
    <div class="header"><i class="fa fa-angle-left" aria-hidden="true"></i><span><span class="month"> </span><span class="year"></span></span><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    <div class="calender">
      <table>
        <thead>
          <tr class="weedays">
            <th data-weekday="sun" data-column="0">Sun</th>
            <th data-weekday="mon" data-column="1">Mon</th>
            <th data-weekday="tue" data-column="2">Tue</th>
            <th data-weekday="wed" data-column="3">Wed</th>
            <th data-weekday="thu" data-column="4">Thu</th>
            <th data-weekday="fri" data-column="5">Fri</th>
            <th data-weekday="sat" data-column="6">Sat</th>
          </tr>
        </thead>
        <tbody>
          <tr class="days" data-row="0">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="1">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="2">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="3">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="4">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="5">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="showDate"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
  </div>
  <div class="right-wrapper">
    <div class="header"><span></span></div>
    <span class="day"></span><span class="month"></span> </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script  src="function.js"></script>';
    echo '<div class="cform" style="padding-top:500px;"><form action="course-insert.php" method="post">';
    echo '<p>Class Code: ', $row[ 'cid' ], '</p>';
    echo '<p>Date: ', $row[ 'cday' ], '</p>';
    echo '<p>Time: ', $row[ 'ctime' ], '</p>';
    echo '<p>Length: ', $row[ 'clength' ], '</p>';
    echo '<p>Price: ', $row[ 'cprice' ], '</p>';
  }

  echo '</select></p>';
  echo '<input type="hidden" name="cid" value="', $row[ 'cid' ], '">';
  echo '<input type="hidden" name="cday" value="', $row[ 'cday' ], '">';
  echo '<input type="hidden" name="ctime" value="', $row[ 'ctime' ], '">';
  echo '<input type="hidden" name="clength" value="', $row[ 'clength' ], '">';
  echo '<input type="hidden" name="cprice" value="', $row[ 'cprice' ], '">';
  echo '<p><input type="submit" value="Join Class" class="buttonsub" onclick="myFunction()" ></p>';
  echo '</form></div>';

} else {
  foreach ( $sql->fetchAll() as $row ) {
    echo '<p><div class="main" style="padding-top:0px;">
  <div class="sideb">
    <div class="header"><i class="fa fa-angle-left" aria-hidden="true"></i><span><span class="month"> </span><span class="year"></span></span><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    <div class="calender">
      <table>
        <thead>
          <tr class="weedays">
            <th data-weekday="sun" data-column="0">Sun</th>
            <th data-weekday="mon" data-column="1">Mon</th>
            <th data-weekday="tue" data-column="2">Tue</th>
            <th data-weekday="wed" data-column="3">Wed</th>
            <th data-weekday="thu" data-column="4">Thu</th>
            <th data-weekday="fri" data-column="5">Fri</th>
            <th data-weekday="sat" data-column="6">Sat</th>
          </tr>
        </thead>
        <tbody>
          <tr class="days" data-row="0">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="1">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="2">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="3">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="4">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="5">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="showDate"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
  </div>
  <div class="right-wrapper">
    <div class="header"><span></span></div>
    <span class="day"></span><span class="month"></span> </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script  src="function.js"></script></p>';
    echo '<div class="cform" style="padding-top:450px;"><form action="course-insert.php" method="post">';
    echo '<p>Class Code: ', $row[ 'cid' ], '</p>';
    echo '<p>Date: ', $row[ 'cday' ], '</p>';
    echo '<p>Time: ', $row[ 'ctime' ], '</p>';
    echo '<p>Length: ', $row[ 'clength' ], '</p>';
    echo '<p>Price: ', $row[ 'cprice' ], '</p>';
  }

  echo '</select></p>';
  echo '<input type="hidden" name="cid" value="', $row[ 'cid' ], '">';
  echo '<input type="hidden" name="cday" value="', $row[ 'cday' ], '">';
  echo '<input type="hidden" name="ctime" value="', $row[ 'ctime' ], '">';
  echo '<input type="hidden" name="clength" value="', $row[ 'clength' ], '">';
  echo '<input type="hidden" name="cprice" value="', $row[ 'cprice' ], '">';
  echo '<p><input type="submit" value="Join Class" class="buttonsub" ></p>';
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
