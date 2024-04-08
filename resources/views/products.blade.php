<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="food, delivery, project" />
    <meta name="description" content="Menu for QuickROUTE" />
    <title>Menu</title>
    <style>
      .header {
        background-color: rgba(20, 20, 20, 1);
        display: flex;
        align-items: center;
      }

      .header h1 {
        margin: 0;
        font-family: "Gilroy-Black", sans-serif;
        font-size: 75px;
        font-weight: bold;
        color: white;
      }

      .cart {
        position: fixed;
        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        border: none;
        cursor: pointer;
        padding: 0;
        border-radius: 50%;
        z-index: 1;
        display: flex;
        background-color: rgba(255, 255, 255, 1);
        transition: background-color 0.3s ease;
        overflow: hidden;
      }

      .cart:hover {
        box-shadow: 0px 0px 10px rgba(128, 128, 128, 0.8); /* Add shadow on hover */
        border-radius: 50%;
      }

      .cart img {
        width: 100%;
        height: auto;
      }

      .cart-menu {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        width: 300px;
        background-color: white;
        z-index: 2;
        overflow-y: auto;
        padding: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.35);
        font-family: "Gilroy-Black", sans-serif;
        display: flex;
        flex-direction: column; /* Arrange items vertically */
      }

      .cart-items {
        flex-grow: 1; /* Allow cart items to grow and take remaining space */
        overflow-y: auto; /* Add scrollbar if needed */
      }

      .cart-menu.visible {
        display: block; /* Show the cart menu when it's visible */
      }

      .cart-item {
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: "Gilroy-Black", sans-serif;
      }

      .cart-item:last-child {
        margin-bottom: 0; /* Remove margin-bottom for the last item */
      }

      .cart-total {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        background-color: black;
        color: white;
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
      }

      body {
        margin: 0;
        padding: 0;
      }

      .menu-header {
        display: flex;
        margin-bottom: 20px;
        margin-right: 0;
        margin-left: 50px;
      }

      h1 {
        font-family: "Gilroy-Black", sans-serif;
        font-size: 100px;
        color: rgba(20, 20, 20, 1);
        margin-top: 20px;
        margin-bottom: 20px;
        text-align: left;
        font-weight: 900;
        padding-left: 20px;
      }

      .menu-container {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start; /* Align items to the start of the flex container */
        justify-content: center; /* Center align menu boxes horizontally */
      }

      .menu-box {
        position: relative;
        width: 300px;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.35);
        margin-bottom: 30px;
      }

      .menu-box:hover {
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5); /* Add shadow on hover */
      }

      .menu-box:hover::before {
        background-color: rgba(0, 0, 0, 0.1); /* Add background color */
      }

      .add-to-cart {
        position: absolute;
        bottom: 20px;
        right: 20px;
        border: none;
        cursor: pointer;
        width: 40px;
        padding: 0;
        border-radius: 50%;
        z-index: 1;
        display: flex;
        background-color: rgba(255, 255, 255, 1);
        transition: background-color 0.3s ease;
        overflow: hidden;
      }

      .add-to-cart:hover {
        background-color: rgba(0, 0, 0, 0.5);
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
      }

      .add-to-cart img {
        width: 100%;
        height: auto;
      }

      .menu-box img {
        width: 100%;
        border-radius: 8px 8px 0 0;
      }

      .menu-box h2,
      p {
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS";
      }

      .price {
        position: relative;
        display: block;
        font-weight: bold;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h1>QuickROUTE</h1>
      <button class="cart">
        <img src="img/cart.png" alt="Cart" />
      </button>
    </div>

    <div class="menu-header">
      <h1>Menu</h1>
    </div>

    <div class="menu-container">
      <!-- Menu Box 1 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 1</h2>
        <p>
          Description of item 1. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">50 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 2 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 2</h2>
        <p>
          Description of item 2. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">55 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 3 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 3</h2>
        <p>
          Description of item 3. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">60 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 4 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 4</h2>
        <p>
          Description of item 4. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">65 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 5 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 5</h2>
        <p>
          Description of item 5. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">70 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 6 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 6</h2>
        <p>
          Description of item 6. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">75 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 7 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 7</h2>
        <p>
          Description of item 7. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">80 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 8 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 8</h2>
        <p>
          Description of item 8. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">85 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 9 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 9</h2>
        <p>
          Description of item 9. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">90 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 10 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 10</h2>
        <p>
          Description of item 10. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">95 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 11 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 11</h2>
        <p>
          Description of item 11. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">100 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 12 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 12</h2>
        <p>
          Description of item 12. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">105 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 13 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 13</h2>
        <p>
          Description of item 13. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">110 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 14 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 14</h2>
        <p>
          Description of item 14. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">115 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 15 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 15</h2>
        <p>
          Description of item 15. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">120 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 16 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 16</h2>
        <p>
          Description of item 16. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">125 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 17 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 17</h2>
        <p>
          Description of item 17. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">130 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 18 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 18</h2>
        <p>
          Description of item 18. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">135 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 19 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 19</h2>
        <p>
          Description of item 19. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">140 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 20 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 20</h2>
        <p>
          Description of item 20. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">145 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 21 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 21</h2>
        <p>
          Description of item 21. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">150 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 22 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 22</h2>
        <p>
          Description of item 22. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">155 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 23 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 23</h2>
        <p>
          Description of item 23. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">160 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 24 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 24</h2>
        <p>
          Description of item 24. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">165 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 25 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 25</h2>
        <p>
          Description of item 25. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">170 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 26 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 26</h2>
        <p>
          Description of item 26. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">175 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 27 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 27</h2>
        <p>
          Description of item 27. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">180 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 28 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 28</h2>
        <p>
          Description of item 28. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">185 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 29 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 29</h2>
        <p>
          Description of item 29. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">190 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Menu Box 30 -->
      <div class="menu-box">
        <img src="img/image.png" alt="Placeholder Image" />
        <h2>Item 30</h2>
        <p>
          Description of item 30. Lorem ipsum dolor sit amet consectetur
          adipisicing elit.
        </p>
        <p class="price">195 MDL</p>
        <button class="add-to-cart">
          <img src="img/add.png" alt="Add to Cart" />
        </button>
      </div>

      <!-- Add more menu boxes as needed -->
    </div>
    <div class="cart-menu">
      <h2>Cart</h2>
      <div class="cart-items">
        <!-- Placeholder elements for cart items -->
        <div class="cart-item">Item 1 - 50 MDL</div>
        <div class="cart-item">Item 2 - 55 MDL</div>
        <div class="cart-item">Item 3 - 60 MDL</div>
      </div>
      <div class="cart-total">Total: 165 MDL</div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const cartButton = document.querySelector(".cart");
        const cartMenu = document.querySelector(".cart-menu");

        // Initially hide the cart menu
        cartMenu.style.display = "none";

        // Toggle cart menu visibility
        cartButton.addEventListener("click", function (event) {
          event.stopPropagation(); // Prevents the click event from bubbling up to the document
          cartMenu.style.display =
            cartMenu.style.display === "none" ? "block" : "none";
        });

        // Close cart menu when clicking outside of it
        document.addEventListener("click", function (event) {
          if (!cartMenu.contains(event.target) && event.target !== cartButton) {
            cartMenu.style.display = "none";
          }
        });
      });
    </script>
  </body>
</html>
