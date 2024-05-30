<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfert d'argent - Pays Cash</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

header {
    background-color: #0099cc;
    padding: 20px;
    text-align: center;
}

header img {
    width: 100px;
    margin-bottom: 10px;
}

header h1 {
    color: white;
    font-size: 36px;
}

main {
    padding: 20px;
}

form {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}

button {
    background-color: #0099cc;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #007799;
}

footer {
    background-color: #f2f2f2;
    padding: 10px;
    text-align: center;
}

</style>
<body>
    <header>
        <img src="{{asset('./images/cash.jpeg')}}" alt="Logo">

        <h1>Transfert d'argent avec Pay Cash en toute sécurité</h1>
    </header>

    <main>
        <form action="{{route('clients.paiements')}}" method="post">
            @csrf
            <div>
                <label for="compte">Numéro de compte :</label>
                <input type="text" id="compte" name="compte" required>
            </div>

            <div>
                <label for="montant">Montant à transférer :</label>
                <input type="number" id="montant" name="montant" step="0.01" required>
            </div>

            <input type="hidden" name="api_key" value="{{$marchand->api_key}}">

            <button type="submit">Effectuer le transfert</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2023 Pays Cash</p>
    </footer>
</body>
</html>
