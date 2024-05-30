<!-- resources/views/emails/merchant_confirmation.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de votre inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #666666;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Confirmation de votre inscription</h1>
        </div>
        <div class="content">
            <p>Bonjour</p>
            <p>Merci de vous être inscrit sur notre plateforme. Nous sommes ravis de vous avoir parmi nous.</p>
            <p>Pour accéder à votre compte, veuillez cliquer sur le bouton ci-dessous :</p>
            <a href="http://127.0.0.1:8000/loginClient" class="button">Accéder à mon compte</a>
        </div>
        <div class="footer">
            <p>Cordialement,</p>
            <p>L'équipe PayCash</p>
        </div>
    </div>
</body>
</html>
