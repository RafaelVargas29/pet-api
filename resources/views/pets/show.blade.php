<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Pets</title>
</head>
<body>
    <h1>Seu pet!</h1>
    
    <img class="image" src="{{ $data->url }}" alt=""><br>
    <button><a href="/show">Atualiza pet</a></button>
    
</body>
</html>