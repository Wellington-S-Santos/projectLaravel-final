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
        <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tamanho</th>
            <th>Ações</th>
        </tr>
        </thead>
       <tbody>
            @foreach ($paises as $pais)
            <tr>
                <td>{{$pais->name}}</td>
                <td>{{$pais->descricao}}</td>
                <td>{{$pais->tamanho}}</td>
                <td>
                    <form method="POST" action="/deletar_paises/{{$pais->id}}" >
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