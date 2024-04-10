<!DOCTYPE html>
<html>
<head>
    <title>Checkout Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif; /* Apply Ubuntu font */
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px; /* Reduced container width */
            padding: 20px;
            background-color: white;
            margin: 50px auto 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            border-radius: 10px;
        }

        input[type=text] {
            width: calc(100% - 24px); /* Adjusted input width */
            margin-bottom: 10px; /* Reduced margin bottom */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        label {
            margin-bottom: 5px;
            display: block;
            font-weight: bold;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -10px; /* Adjusted margin */
        }

        .col-50 {
            flex: 50%;
            padding: 10px; /* Adjusted padding */
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* Reduced font size */
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

        h2 {
            font-size: 48px; /* Increased heading size */
            margin-top: 0;
            color: white; /* Change text color to white */
            text-align: center; /* Center align the text */
            background-color: black; /* Add background color */
            padding: 10px; /* Add padding */
        }
    </style>
</head>
<body>
    <h2>QuickROUTE</h2>
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
