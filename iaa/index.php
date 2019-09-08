<head>
<link rel="icon" href="favicon.ico" type="image/x-icon" /></head>
<link rel="stylesheet" href="css/style-lewis.css">
<header class="v-header container">

<div class="fullscreen-video-wrap">
  <video src="css/img/coffee.mp4" muted autoplay="" loop=""> </video>
</div>
<div class="header-overlay"> </div>
<div class="header-content text-md-center"> 

  <div class="shoppingCart-cart">
    <h2 style="border-bottom: 2px solid #333333; padding-bottom: 12px; margin-left: 30px">YOUR CART(22)</h2>
    <div class="productInfo">
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
 
  <?php
  session_start();
  if ( isset( $_SESSION[ 'students' ] ) ) {

    echo '<nav>';
    echo '<ul class="nav-links">';
    echo '<li> <a href="index.php">HOME</a> </li>';
    echo '<li> <a href="product-show.php">PRODUCT</a></li>';
    echo '<li> <a href="course.php">CLASS</a></li>';

    echo '';
    echo '<li><a href="mycourse-show.php">MY COURSE</a></li>';
    echo '<li><a href="logout-input.php">LOGOUT</a></li>';
    echo '<li><a href="inform-input.php">CHANGE INFORMATION</a></li>';
    echo '';
    echo '';
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
    echo '<li> <a href="product-show.php">PRODUCT</a> </li>';
    echo '<li> <a href="course.php">CLASS</a> </li>';
    //echo '<li> <a href="contact-input.php">CONTACT</a> </li>';
    echo '';
    echo '';
    echo '';
    echo '<li><a href="login-input.php">LOGIN</a></li>';
    echo '<li><a href="customer-input.php">REGISTER</a></li>';
    echo '';
    echo '';
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
  <h1>Welcome Everyone</h1>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
  <a class="btn">Find Out More</a> </div>
</header>
<section class="section section-a">
  <div class="container">
    <h2>Section A</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
  </div>
</section>
<div class="parallax"></div>
<section class="section section-a">
  <div class="container">
    <h2>Section A</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, impedit amet minima iste autem cumque et maiores blanditiis doloribus aut dolorum quaerat non est voluptatum, tempore ut dolorem voluptas quod quae accusantium, ex inventore ducimus. Beatae mollitia exercitationem, quam similique, consectetur ratione reprehenderit delectus neque eligendi facere soluta dolor ducimus!</p>
  </div>
</section>
<div class="parallax3"></div>
<section class="section section-b">
  <div class="container">
    <h2>NEW RELEASES</h2>
    <p>Explore our new releases!</p>
    <div class="slideContainer">
      <div class="row">
        <div class="col-md-12 heroSlider-fixed">
          <div class="overlay"> </div>
          <!-- Slider -->
          <div class="slider responsive">
            <div> <img src="http://placehold.it/200x150" alt="" /> </div>
            <div> <img src="http://placehold.it/200x150" alt="" /> </div>
            <div> <img src="http://placehold.it/200x150" alt="" /> </div>
            <div> <img src="http://placehold.it/200x150" alt="" /> </div>
            <div> <img src="http://placehold.it/200x150" alt="" /> </div>
            <div> <img src="http://placehold.it/200x150" alt="" /> </div>
            <div> <img src="http://placehold.it/200x150" alt="" /> </div>
            <div> <img src="http://placehold.it/200x150" alt="" /> </div>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</section>
<div class="parallax2"></div>
<script src="javaS-lewis.js"></script> 
