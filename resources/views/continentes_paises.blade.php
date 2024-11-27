<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleL.css">
    <title>Associação Continentes e Paises</title>
</head>
<body>
    <a href="/" class="button">Home</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tamanho do País</th>
                <th>Continente</th>
                <th>Tamanho do Continente</th>
                <th>Localização</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($continentesPaises as $continentePais)
                <tr>
                    <td>{{$continentePais->paises->name}}</td>
                    <td>{{$continentePais->paises->tamanho}}</td>
                    <td>{{$continentePais->continentes->name}}</td>
                    <td>{{$continentePais->continentes->tamanho}}</td>
                    <td>{{$continentePais->localizacao}}</td>
                    <td>
                    <form method="POST" action="/deletar_continentes_paises/{{$continentePais->id}}" >
                    @csrf 
                    {{method_field("DELETE")}} 
                     <input type="submit" value="delete" class="button">  
                    
                    </form>        
            
                </td>
                </tr>
            
            @endforeach

        </tbody>
    </table>
</body>
</html>