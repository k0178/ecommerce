

function removeFromCart(event, id) {

    //To prevent from reloading after click.
    event.preventDefault();
    
    //Show items inside cart
    let cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

    //Filter items by their unique ID
    cartItems = cartItems.filter(item => item.id !== id);

    //Store remaining items in the sessionStorage
    sessionStorage.setItem('cartItems', JSON.stringify(cartItems));

    //Show remaining items from the cart.
    displayCartItems();
}

function displayCartItems() {
    // Retrieve cart item from session storage
    const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];
    
     // Check if there are any items in the cart
    if (cartItems.length > 0) {
        let displayString = '';
        cartItems.forEach(item => {

            const totalPrice = (item.price * item.quantity).toFixed(2);

            displayString += `
                    <a href="/cart" class="fw-bold text-black text-uppercase">${item.name}</a>
                    <p class="text-danger">$${item.price}</p>
                    <p>Qty: ${item.quantity} </p>
                    <p class="fw-bold">Total: $${totalPrice}</p>
                    <a href="" onclick="removeFromCart(event, ${item.id})" class=" text-danger"><i class='bx bx-trash' ></i></a>
                    <hr>
                `;
        });

         //To be displayed on dropdown of cart icon 
        const cartIcon = document.getElementById('cart-icon-items');
        if (cartIcon) cartIcon.innerHTML = displayString;

        //To be displayed on cart page
        const cartPage = document.getElementById('cart-items');
        if (cartPage) cartPage.innerHTML = displayString;
    } 

    // The same concept but session storage is empty
    else {
        const cartPage = document.getElementById('cart-items');
        if (cartPage) cartPage.innerHTML = '<p>No items in the cart.</p>';

        const cartIcon = document.getElementById('cart-icon-items');
        if (cartIcon) cartIcon.innerHTML = '<p>No items in the cart.</p>';
        
    }
}

function addToCart(id, name, price) {
    let cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];


//     checks the current item id if it exists already inside the cart. 
//    If it exists already the quantity of the item will just change
//   if not, then another item will be added inside the sessionStorage.
// NOTE: Index counting always starts in 0, so if existingItemIndex is 0, it means that it is already inside the cart.
    const existingItemIndex = cartItems.findIndex(item => item.id === id);

    if (existingItemIndex > -1) {
        cartItems[existingItemIndex].quantity += 1;
    } else {
        cartItems.push({
            id: id,
            name: name,
            price: price,
            quantity: 1
        });
    }

    sessionStorage.setItem('cartItems', JSON.stringify(cartItems));
    displayCartItems();
}

document.addEventListener('DOMContentLoaded', () => {
    displayCartItems();
});