<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .success-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .success-icon {
            font-size: 60px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .total-amount {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .btn-home {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

    <div class="success-container">
        <div class="success-icon">
            &#10004;
        </div>
        <h2>Payment Successful</h2>
        <p class="total-amount">Rp. {{ number_format($total, 0, ',', '.') }}</p>
        <a href="{{ route('home') }}" class="btn btn-home">Back to Home</a>
    </div>

</body>
</html>
