// addToCart-menu.js

function addToCart(event, productName, productImage) {
    event.preventDefault();
    const formData = new FormData(event.target);
    const extras = [];
    const removedIngredients = [];
  
    formData.forEach((value, key) => {
      if (value === 'on') {
        if (key.startsWith('extra_')) {
          extras.push(key.replace('extra_', ''));
        } else if (key.startsWith('remove_')) {
          removedIngredients.push(key.replace('remove_', ''));
        }
      }
    });
  
    const selectedSize = formData.get('size');
    const selectedBread = formData.get('breadSelection');
    const cartItem = {
      name: productName,
      image: productImage,
      extras: extras,
      removedIngredients: removedIngredients,
      size: selectedSize,
      bread: selectedBread
    };
    addToCartStorage(cartItem);
    window.location.href = 'cart.php';
  }
  
  function addToCartStorage(item) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(item);
    localStorage.setItem('cart', JSON.stringify(cart));
  }
  