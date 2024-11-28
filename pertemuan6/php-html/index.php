<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        input[type="email"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .login-container {
                width: 90%;
            }

            h1 {
                font-size: 22px;
            }

            input[type="email"], input[type="password"], button {
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 20px;
            }

            input[type="email"], input[type="password"], button {
                padding: 6px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>
        <form action="./backend/Login.php" method="POST">
             <input type="email" name="email" id="email" placeholder="Email"/>
             <input type="password" name="password" id="password" placeholder="password"/>
             <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="./register.php">Register</a></p>
    </div>
    
</body>
</html>