document.addEventListener('DOMContentLoaded', function() {
    updateCart();
  });
  function updateCart() {
    const cartList = document.getElementById('cart-list');
    const cartTotalElement = document.getElementById('cart-total');
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartList.innerHTML = ''; 
    cart.forEach((item, index) => {
      const listItem = document.createElement('li');
      listItem.innerHTML = `
      <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px;">
      <strong>${item.name}</strong>
      <br>
      <strong>ADD: </strong> ${item.extras.join(', ')}
      <br>
      <strong>REMOVE: </strong> ${item.removedIngredients.join(', ')}
      <br>
      <strong>Size: </strong> ${item.size} 
      <br>
      <strong>Bread: </strong> ${item.bread}
      <br>
      <button onclick="removeItem(${index})">Remove</button>
      <hr>
      `;
      cartList.appendChild(listItem);
    });
    const cartTotal = cart.length;
    cartTotalElement.textContent = `Cart Total: ${cartTotal} items`;
  }
  
  function removeItem(index) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
  }

  