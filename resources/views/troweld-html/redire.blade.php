<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            justify-content: space-around;
            width: 80%;
            margin-top: -300px;
            height: 200px;
        }
        .box {
            width: 45%;
            padding: 20px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .box h2 {
            margin-bottom: 20px;
        }
        .box a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .box a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>Connexion Artisan</h2>
            <a href="{{ route('login') }}">Se connecter en tant qu'artisan</a>
        </div>
        <div class="box">
            <h2>Connexion Client</h2>
            <a href="{{ route('login2') }}">Se connecter en tant que client</a>
        </div>
    </div>
</body>
</html>
