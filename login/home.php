<!DOCTYPE html>
<html>
<head>
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logout-form {
            text-align: center;
        }

        .logout-form input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="logout-form">
        <h1>Welcome to the Inventory Management System</h1>

        <form method="POST" action="login.php">
            <input type="submit" name="logout" value="Logout">
        </form>
    </div>
</body>
</html>