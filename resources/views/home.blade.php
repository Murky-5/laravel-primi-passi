<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>
<style>
    /* Styling for header */
    header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    header a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    header a:hover {
        text-decoration: underline;
    }
</style>
<body>
    <header>
        <div>
            <a href="/artisan">artisan</a>
        </div>
    </header>
    <h1>{{ $hello_world }}</h1>
</body>
</html>