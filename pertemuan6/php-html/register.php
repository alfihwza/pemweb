<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
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

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 90%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
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

            input[type="email"],
            input[type="password"],
            input[type="text"],
            button {
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 20px;
            }

            input[type="email"],
            input[type="password"],
            input[type="text"],
            button {
                padding: 6px;
                font-size: 14px;
            }
        }
    </style>
<body>
    <div class="login-container">
        <h1>Register</h1>
        <form action="./backend/register.php" method="post">
            <input type="text" name="name" class="form-control mb-3" placeholder="masukkan nama anda">
            <input type="email" name="email" class="form-control mb-3" placeholder="masukkan email anda">
            <input type="password" name="password" class="form-control mb-3" placeholder="masukkan password anda">
            <input type="password" name="confirm" class="form-control mb-3" placeholder="masukkan konfirmasi password anda">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
        </form>
    </div>
</body>
</html>