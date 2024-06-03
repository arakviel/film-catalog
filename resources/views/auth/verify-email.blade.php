<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .resend {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Verify Your Email Address</h1>
    <p>Before proceeding, please check your email for a verification link.</p>
    <p>If you did not receive the email,</p>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="button">Click here to request another</button>
    </form>
    @if (session('status') == 'verification-link-sent')
        <div class="resend">
            <p>A new verification link has been sent to the email address you provided during registration.</p>
        </div>
    @endif
    @if (session('message'))
        <div class="resend">
            <p>{{ session('message') }}</p>
        </div>
    @endif
</div>
</body>
</html>
