<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleL.css">
    <title>Continentes</title>
</head>
<body>
    <a href="/" class="button">Home</a>
    <table>
        
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tamanho</th>
            <th>Ações</th>
        </tr>
        
            @foreach ($continentes as $continente)
            <tr>
                <td>{{$continente->name}}</td>
                <td>{{$continente->descricao}}</td>
                <td>{{$continente->tamanho}}</td>
                <td>
                    <form method="POST" action="/deletar_continentes/{{$continente->id}}" >
                    @csrf 
                    {{method_field("DELETE")}} 
                     <input type="submit" value="delete" class="button">  
                    
                    </form>        
            
                </td>
            </tr>
          @endforeach
     
   
</body>
</html>