<x-mail::message>
Para: {{ $email->para }}<br>
assunto:{{ $email->assunto }}<br>
conteudo:{{ $email->conteudo }}<br>


The body of your message.



Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
