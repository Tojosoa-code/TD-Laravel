<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Catalogue' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 30px auto;
        }

        nav a {
            margin-right: 15px;
        }

        .product {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <x-navbar />
    <hr>
    <main>
        {{ $slot }}
    </main>
    <hr>
    <footer>
        Framework PHP -- Laravel
    </footer>
</body>

</html>
