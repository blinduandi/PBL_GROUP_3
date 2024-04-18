<!DOCTYPE html>
<html>
<head>
    <title>Checkout Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif; 
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            position: relative;
            width: 80%;
            max-width: 800px; 
            background-color: white;
            margin: 200px 0 0 50px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            border-radius: 10px;
        }

        .container2 {
            position: relative;
            width: 60%;
            max-width: 600px;
            padding: 20px;
            background-color: black;
            margin: -335px 0 0 1000px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            border-radius: 10px;
            color: white; 
        }

        .container2 .details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .separator {
            border-top: 1px solid white;
            margin-bottom: 20px;
        }

        .container2 .details .left {
            flex: 0 0 60%;
        }

        .container2 .details .right {
            flex: 0 0 40%; 
            text-align: right;
        }

        input[type=text] {
            width: calc(50% - 12px); 
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; 
        }

        .col-50 {
            flex: calc(100% - 20px);
            margin-bottom: 20px; 
        }

        .col-33 {
            flex: calc(33% - 6px); 
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

        h2 {
            font-size: 48px;
            margin-top: 0;
            color: white;
            text-align: center;
            background-color: black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>QuickROUTE</h2>
    <div class="container">
        <h3>Livrare</h3>
        <form id="checkoutForm">
            <div class="row">
                <div class="col-50">
                    <input type="text" id="fname" name="firstname" placeholder="Full Name*">
                    <input type="text" id="email" name="email" placeholder="Phone*">
                    <input type="text" id="adr" name="address" placeholder="Address*">
                    <input type="text" id="city" name="city" placeholder="City*">
                </div>

                <div class="col-50">
                    <input type="text" id="cname" name="cardname" placeholder="Name on Card*">
                    <input type="text" id="ccnum" name="cardnumber" placeholder="Credit Card Number*">
                    <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month*">
                    <input type="text" id="expyear" name="expyear" placeholder="Exp Year*">
                    <input type="text" id="cvv" name="cvv" placeholder="CVV*">
                </div>
            </div>
            <input type="submit" value="Continue" class="btn">
        </form>
    </div>
    <div class="container2">
        <div class="details">
            <div class="left">
                <p>Subtotal</p>
                <p>Livrare</p>
            </div>
            <div class="right">
                <p>00 lei</p>
                <p>00 lei</p>
            </div>
        </div>
        <div class="separator"></div>
        <div class="details">
            <div class="left">
                <p>Total</p>
            </div>
            <div class="right">
                <p>00 lei</p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('checkoutForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            
            var formData = {
                fullname: document.getElementById('fname').value,
                phone: document.getElementById('email').value,
                address: document.getElementById('adr').value,
                city: document.getElementById('city').value
            };

            fetch('/order/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                if (response.ok) {
                    console.log('Data sent successfully');
                } else {
                    console.error('Error sending data');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
