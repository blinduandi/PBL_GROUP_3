<!DOCTYPE html>
<html>
<head>
    <title>Checkout Page</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 600px;
            padding: 40px;
            background-color: white;
            margin: auto;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            border-radius: 10px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Ensure padding and border are included in width */
        }

        label {
            margin-bottom: 5px;
            display: block;
            font-weight: bold;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-50 {
            flex: 50%;
            padding: 0 20px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Checkout Form</h2>
    <div class="container">
        <form action="/submit_checkout_form">
            <div class="row">
                <div class="col-50">
                    <h3>Delivery</h3>
                    <label for="fname">Full Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="john@example.com">
                    <label for="adr">Address</label>
                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="New York">
                </div>

                <div class="col-50">
                    <h3>Payment</h3>
                    <label for="cname">Name on Card</label>
                    <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                    <label for="ccnum">Credit card number</label>
                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                    <label for="expmonth">Exp Month</label>
                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" placeholder="2023">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
            </div>
            <input type="submit" value="Continue to checkout" class="btn">
        </form>
    </div>
</body>
</html>

