<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Marchands</title>
    <link rel="stylesheet" href="style.css">
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
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;
        max-width: 400px;
    }

    .login-container img {
        width: 100px;
        margin-bottom: 20px;
    }

    .login-container h1 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .login-container form {
        display: flex;
        flex-direction: column;
    }

    .login-container label {
        margin-bottom: 5px;
        text-align: left;
        color: #666;
    }

    .login-container input[type="email"],
    .login-container input[type="password"] {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-container button {
        padding: 10px;
        background-color: #0099cc;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-container button:hover {
        background-color: #007799;
    }

    .login-container .register-link {
        margin-top: 20px;
        display: block;
        color: #0099cc;
        text-decoration: none;
    }

    .login-container .register-link:hover {
        text-decoration: underline;
    }
</style>
<body>
    <div class="login-container">
        <img src="./images/cash.jpeg" alt="Logo">

        <h1>Connexion Marchand Bienvenue</h1>
        <form action="{{route('clients.doLogin')}}" method="POST">
            @csrf
            <div>
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
