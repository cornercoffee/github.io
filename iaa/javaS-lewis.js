const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');

  burger.addEventListener('click', () => {
    //Show the menu bar
    nav.classList.toggle('nav-active');

    //Show the links in animation
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = '';
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
      }

    });
    //Burger animation
    burger.classList.toggle('toggle');
  });
}

const cartSlide = () => {
  const iconCart = document.querySelector('.icon-cart');
  const cart = document.querySelector('.shoppingCart-cart');


  iconCart.addEventListener('click', () => {
    //Show the menu bar
    //		document.querySelector(".shoppingCart-cart").style.transform = "translate(0%)"; 
    cart.classList.toggle('shoppingC-active');
    iconCart.classList.toggle('toggle2');

  });

}


navSlide();
cartSlide();
