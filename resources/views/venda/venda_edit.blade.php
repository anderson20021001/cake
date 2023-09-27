<div>
    Formulário de Criação:<br>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form method="POST" action="{{ url('/venda/' . $venda ->id) }}">
        @method('PUT')
        @csrf
        <form>
        <label for="categoria">Escolha uma categoria:</label>

    <select name="categoria_id" id="categoria">
     @foreach($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @if($categoria->id == $venda->categoria_id)
            <option value="{{ $categoria->id }}" selected>{{ $categoria->nome}}</option>
            @else
            <option value="{{ $categoria->id }}"> {{ $categoria->nome}}</option>
            @endif
        @endforeach
    </select>

  <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome" value="{{$venda ->nome}}"><br>

  <label for="fname">Quantidade:</label><br>
  <input type="text" id="fname" name="quantidade" value="{{$venda ->quantidade}}"><br>

  <label for="fname">Preço:</label><br>
  <input type="text" id="fname" name="preco" value="{{$venda ->preco}}" ><br>

  <input type="submit" value="Enviar">

</form>

</div>