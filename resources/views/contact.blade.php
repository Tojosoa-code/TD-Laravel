<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>

<body>
    <h1>Contact</h1>
    <form method="POST" action="/contact">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name">
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>
