<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Cadastro de Paises</title>
</head>
<body>
    <h1>Casdastre o Pais</h1>
    <form action="/criar_paises" method="post">
    @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name">

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao">

        <label for="tamanho">Tamanho:</label>
        <input type="float" name="tamanho">

        <button type="submit" >Cadastrar</button>
    </form>
    
</body>
</html>