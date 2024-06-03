<!DOCTYPE html>
<html>
<head>
    <title>Order Shipped</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #dddddd;
        }

        .header h1 {
            margin: 0;
        }

        .content {
            padding: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #dddddd;
            color: #777777;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Your Order Has Been Shipped</h1>
    </div>
    <div class="content">
        <p>Product Name = {{ $productName }}</p>
        <p>Thank you for shopping with us. Your order has been shipped and is on its way!</p>
        <p>We hope you enjoy your purchase. If you have any questions, feel free to contact our support team.</p>
    </div>
    <div class="footer">
        <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
    </div>
</div>
</body>
</html>
