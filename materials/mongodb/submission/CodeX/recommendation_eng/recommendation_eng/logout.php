<!DOCTYPE html>
<html>

<head>
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            max-width: 400px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            background-color: #fff;
        }

        .card h2 {
            margin-bottom: 20px;
        }

        .card button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Logout</h2>
        <p>Are you sure you want to log out?</p>
        <form action="index.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
</body>

</html>