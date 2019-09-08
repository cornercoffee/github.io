<!doctype html>
<html>
<style>
<?php session_start();
include 'css/style-lewis.css';
?>
</style>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body style="background-color: white">
<?php
$pdo = new PDO( 'mysql:host=localhost;dbname=aidb;charset=utf8', 'root', '' );
if ( isset( $_REQUEST[ 'command' ] ) ) {
  switch ( $_REQUEST[ 'command' ] ) {
    case 'Remove':
      $sql = $pdo->prepare( 'delete from cartItem where productID=?' );
      $sql->execute( [ $_REQUEST[ 'productID' ] ] );
      break;
  }
}
?>
<div class="content">
  <div class="bag">YOUR BAG
    <div style="border-bottom: black 2px solid;"></div>
    <?php

    $userID = $_SESSION[ 'students' ][ 'studentid' ];
    $total = 0;
    $sql = $pdo->prepare( 'select productPrice, productImage,productName, productType, productPrice, quantity from cart,cartItem, product where studentid=? and cart.cartID=cartitem.cartID AND cartItem.productID=product.productID' );
    $sql->execute( [ $_SESSION[ 'students' ][ 'studentid' ] ] );


    foreach ( $sql->fetchAll() as $row ) {
      $total += $row[ 'productPrice' ];
      ?>
    <div class="bagItem">
      <div class="cartImg"> <?php echo "<img src='data:image/jpeg;base64," . base64_encode($row['productImage']) . "' width='140' height='140' >";?> </div>
      <div class="cartItemInfo"><?php echo $row['productName'] ?>
        <p><?php echo $row['productType'] ?></p>
        <span class="cartItemPrice">HK$<?php echo $row['productPrice'] ?> x </span> <span class="cartItemQty">
        <input type="number" min="1" max="100000" placeholder="<?php echo $row['quantity'] ?>">
        </span> <br>
        <br>
        <span class="editCart">
        <input type="submit" value="Edit">
        </span> <span class="removeCart">
        <form action="shoppingCart.php" method="post">
          <input type="hidden" name="command" value="Remove">
          <input type="hidden" name="productID" value="<?php $row['productID'] ?>">
          <input type="submit" value="Remove">
        </form>
        </span> </div>
    </div>
    <?php }?>
  </div>
  <div class="rightCart">
    <div class="orderSummary"> ORDER SUMMARY </div>
    <div class="productTotal"> Product total: HK$<?php echo $total ?></div>
    <div class="total"> Total: HK$<?php echo $total ?></div>
    <input type="submit" value="CHECKOUT">
  </div>
</div>
<div class="shoppingCart-cart">
  <h2 style="border-bottom: 2px solid #333333; padding-bottom: 12px; margin-left: 30px">YOUR CART(22)</h2>
  <div class="miniCartproductInfo">
    <div class="miniCartImg"><img src="img/c1.png" alt="" width="70" height="70"></div>
    <div class="productDesc"> Product Name
      <p>Product Type</p>
      <span > <span class="upperMiniCart">
      <input type="button">
      +
      </input>
      <span style="font-size: 13px"></span> </span> 1<span class="lowerMiniCart">
      <input type="button">
      -
      </input>
      </span> <span class="miniCartItemPrice">HK$4999 x 10 </span> </div>
    </span> </div>
  <input type="button" class="viewCart" onclick="location.href='shoppingCart.php';" value="VIEW CART">
</div>
<div class="icon-cart">
  <div class="cart-line-1" style="background-color: white"></div>
  <div class="cart-line-2" style="background-color: white"></div>
  <div class="cart-line-3" style="background-color: white"></div>
  <div class="cart-wheel" style=""></div>
  <div class="cart-wheel2" style=""></div>
</div>
<?php if (isset($_SESSION['user'])) { ?>
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
  <?php
} else {
    ?>
  <nav>
    <ul class="nav-links">
      <li> <a href="index.php">HOME</a> </li>
      <li> <a href="">PRODUCT</a> </li>
      <li> <a href="course.php">CLASS</a> </li>
      <li><a href="mycourse-show.php">MY COURSE</a></li>
      <li><a href="logout-input.php">REGISTER</a></li>
      <li><a href="login-input.php">LOGIN</a></li>
    </ul>
    <div class="burger">
      <div class="navline1"></div>
      <div class="navline2"></div>
      <div class="navline3"></div>
    </div>
  </nav>
  <?php } ?>
</body>
</html>
<script src="javaS-lewis.js"></script>