<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação Continentes e Paises</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tamanho do País</th>
                <th>Continente</th>
                <th>Tamanho do Continente</th>
                <th>Localização</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($continentesPaises as $continentePais)
                <tr>
                    <td>{{$continentePais->paises->name}}</td>
                    <td>{{$continentePais->continentes->name}}</td>
                    <td></td>
                </tr>
            
            @endforeach

        </tbody>
    </table>
</body>
</html>