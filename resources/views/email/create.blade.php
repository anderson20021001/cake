<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>


    {!! Form::open(['url' => 'email/create']) !!}

     {{ Form::label('para', 'Para:') }}
     {{ Form::text('para') }}<br>

     {{ Form::label('assunto', 'Assunto:') }}
     {{ Form::text('assunto') }}<br>

     {{ Form::label('conteudo', 'Conteúdo:') }}
     {{ Form::text('conteudo') }}<br>

     {{Form::submit('Enviar')}}
    
     {!! Form::close() !!}
        
    </body>
</html>
