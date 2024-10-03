<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            text-align: center;
        }

        .login-container h2 {
            color: #4A90E2;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .login-button {
            background-color: #4A90E2;
            color: white;
            border: none;
            padding: 0.75rem 1rem;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #357ABD;
        }

        .support-info {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #4A90E2;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>MAS POS</h2>
        <form action="/login" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <p class="support-info">Call Us: +62 817-1902-092</p>
    </div>
</body>
</html>
