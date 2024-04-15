document.addEventListener("DOMContentLoaded", function () {
  const cartButton = document.querySelector(".cart");
  const cartMenu = document.querySelector(".cart-menu");
  const menuContainer = document.querySelector(".menu-container");
  const cartItems = document.querySelector(".cart-items");
  const cartTotal = document.querySelector(".cart-total");

  // Initially hide the cart menu
  cartMenu.style.display = "none";

  // Toggle cart menu visibility
  cartButton.addEventListener("click", function (event) {
    event.stopPropagation(); // Prevents the click event from bubbling up to the document
    cartMenu.style.display =
      cartMenu.style.display === "none" ? "block" : "none";
  });

  // Close cart menu when clicking anywhere that's not a button or inside the cart menu
  document.addEventListener("click", function (event) {
    let targetElement = event.target; // Element that triggered the event
    let clickedInsideButton = false;
    let clickedInsideCartMenu = false;

    // Check if the clicked element is a descendant of a button
    while (targetElement !== null) {
      if (targetElement === cartMenu) {
        clickedInsideCartMenu = true;
        break;
      }
      if (targetElement.classList.contains("add-to-cart") || targetElement.classList.contains("remove-item")) {
        clickedInsideButton = true;
        break;
      }
      targetElement = targetElement.parentElement; // Move up the DOM hierarchy
    }

    // Close the cart menu only if the click is not inside a button or inside the cart menu
    if (!clickedInsideButton && event.target !== cartButton && !clickedInsideCartMenu) {
      cartMenu.style.display = "none";
    }
  });

  // Function to create a single menu item box
  function createMenuItemBox(item) {
    const menuBox = document.createElement("div");
    menuBox.classList.add("menu-box");

    const img = document.createElement("img");
    img.src = "img/image.png"; // Replace with actual image source
    img.alt = "Placeholder Image";

    const h2 = document.createElement("h2");
    h2.textContent = item.name;

    const p1 = document.createElement("p");
    p1.textContent = item.description;

    const p2 = document.createElement("p");
    p2.classList.add("price");
    p2.textContent = item.price;

    const button = document.createElement("button");
    button.classList.add("add-to-cart");

    const imgAdd = document.createElement("img");
    imgAdd.src = "img/add.png"; // Replace with actual image source
    imgAdd.alt = "Add to Cart";

    button.appendChild(imgAdd);

    button.addEventListener("click", function (event) {
      const itemName = h2.textContent;
      const itemPrice = p2.textContent;
    
      // Create cart item element
      const cartItem = document.createElement("div");
      cartItem.classList.add("cart-item");
      cartItem.textContent = `${itemName} - ${itemPrice}`;
    
      // Create remove button
      const removeButton = document.createElement("button");
      removeButton.classList.add("remove-item");
      removeButton.innerHTML = '<img src="img/remove.png" alt="Remove">';
      removeButton.addEventListener("click", function (event) {
        const cartItem = event.target.closest(".cart-item");
        cartItem.remove();
        // Update total price after removing item
        updateTotalPrice();
      });
    
      // Append remove button to cart item
      cartItem.appendChild(removeButton);
    
      // Add cart item to cart
      cartItems.appendChild(cartItem);
    
      // Update total price
      updateTotalPrice();
    });    

    menuBox.appendChild(img);
    menuBox.appendChild(h2);
    menuBox.appendChild(p1);
    menuBox.appendChild(p2);
    menuBox.appendChild(button);

    return menuBox;
  }

  // Function to generate menu items based on a given number
  function generateMenuItems(numItems) {
    // Clear existing menu items
    menuContainer.innerHTML = "";

    // Generate specified number of menu items with placeholders
    for (let i = 1; i <= numItems; i++) {
      const item = {
        name: "Item " + i,
        description:
          "Description of item " +
          i +
          ". Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        price: (Math.floor(Math.random() * 10) + 1) * 10 + " MDL", // Example random price generation
      };
      const menuBox = createMenuItemBox(item);
      menuContainer.appendChild(menuBox);
    }
  }

  // Function to update total price and adjust position if needed
  function updateTotalPrice() {
    let totalPrice = 0;
    cartItems.querySelectorAll(".cart-item").forEach(function (item) {
      const priceString = item.textContent.split(" - ")[1]; // Extract price from text
      const price = parseFloat(priceString.replace(" MDL", "")); // Convert price string to number
      totalPrice += price;
    });
    cartTotal.textContent = `Total: ${totalPrice.toFixed(2)} MDL`; // Update total price display

    // Move cart total to the bottom of the cart menu
    cartMenu.appendChild(cartTotal);

    // Check if the cart menu scrollbar appears
    const hasScrollbar = cartMenu.scrollHeight > cartMenu.clientHeight;

    // If scrollbar appears, adjust position of cart total
    if (hasScrollbar) {
      cartTotal.style.position = "sticky";
      cartTotal.style.bottom = "0";
      cartTotal.style.left = "0";
      cartTotal.style.zIndex = "1"; // Ensure it overlaps other elements
    } else {
      cartTotal.style.position = "absolute";
      cartTotal.style.bottom = "20px";
      cartTotal.style.left = "20px";
      cartTotal.style.zIndex = "auto"; // Reset z-index
    }
  }

  // Call the function to generate menu items with a specified number (e.g., 10)
  generateMenuItems(10);

  // Add event listener to remove buttons
  cartItems.addEventListener("click", function (event) {
    if (event.target.classList.contains("remove-item")) {
      const item = event.target.closest(".cart-item");
      item.remove();
      // Update total price after removing item
      updateTotalPrice();
    }
  });
});
