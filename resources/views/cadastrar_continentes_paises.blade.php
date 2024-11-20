<form action="/criar_continentes_paises" method="POST">
    @csrf

    <h2>Selecione os Continentes:</h2>
    <label for="continentes"> Continentes:</label>
    <select name="continentes" id="continentes">
        @foreach($continentes as $continente)
            <option value="{{ $continente->id }}">{{ $continente->name }}</option>
        @endforeach
    </select>

  <!-- Seleção de País -->
  <label for="paises">País:</label>
    <select name="paises" id="paises">
        @foreach($paises as $pais)
            <option value="{{ $pais->id }}">{{ $pais->name }}</option>
        @endforeach
    </select>

    
    <button type="submit" class="cadastro">Cadastrar</button>
</form>

