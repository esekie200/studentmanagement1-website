<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="logout logout-right">
            <a href="index.html" class="btn btn-primary">Go Back</a>
        </div>
    </header>

    <div class="container">
        <h2>Okaigben Students Login</h2>
        <?php
        if (isset($_GET["error"]) && $_GET["error"] === "1") {
            echo '<p class="error-message">Incorrect username or password <span class="error-icon">!</span></p>';
        }
        ?>
        <form method="POST" action="login_process.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-button">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 75%;
            padding: 10px 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-button {
            text-align: center;
            margin-top: 20px;
        }

        .form-button button {
            padding: 10px 30px;
            font-size: 25px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

        .error-icon {
            font-size: 20px;
            vertical-align: middle;
        }

        .header {
            background-color: #007bff;
            padding: 10px 0;
            overflow: hidden;
            height: 70px;
        }

        .logout {
            float: right;
            margin-right: 20px;
            padding-top: 8px;
        }

        .logout a {
            color: #fff;
            font-size: 15px;
        }

        @media screen and (max-width: 480px) {
            .container {
                width: 90%;
            }

            .form-group input {
                width: 100%;
            }
        }
    </style>
</body>
</html>
