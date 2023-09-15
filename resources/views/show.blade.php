<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body>
        Pedidos dos clientes<br>
        
        <b>Nome:</b> {{ $produto->nome}}
        
    </body>
</html>
