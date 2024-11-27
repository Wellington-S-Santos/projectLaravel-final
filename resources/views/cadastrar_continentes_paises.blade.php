<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleCP.css">
    <title>Associar Paises a Continentes</title>
</head>
<body>
    <form action="/criar_continentes_paises" method="POST">
        @csrf

        <h2>Selecione os Continentes:</h2>
        <label for="continentes"> Continentes:</label>
        <select name="continentes" id="continentes">
            @foreach($continentes as $continente)
                <option value="{{ $continente->id }}">{{ $continente->name }}</option>
            @endforeach
        </select>

        <h2>Selecione os Paises:</h2>

        <label for="paises">Paises:</label>
        <select name="paises" id="paises">
            @foreach($paises as $pais)
                <option value="{{ $pais->id }}">{{ $pais->name }}</option>
            @endforeach
        </select>
        <label for="localizacao">Localização</label>
        <input type="text" name="localizacao">


    
    <button type="submit" class="cadastro">Cadastrar</button>
    </form>
    
</body>
</html>


