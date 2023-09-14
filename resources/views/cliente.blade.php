<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body>
        Pedidos dos clientes<br>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ação</th>
                </tr>
            </thead>
        @foreach ($clientes as $value)
        <tbody>
        <tr>
        
           <td> {{$value->nome}}</td><br>
           <td><a href="{{ url{{'clientes/' . $value-> id)}} ">Visualizar</td>
        </tr>
        </tbody>
        @endforeach
</table>
        
    </body>
</html>
