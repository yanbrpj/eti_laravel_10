<h1>Detalhe Suporte - ID: {{ $support->id }}</h1>
<hr>
<a href="{{ route('supports.index') }}">Listagem</a>
<hr>
<ul>
    <li>{{ $support->subject }}</li>
    <li>{{ $support->body }}</li>
    <li>{{ $support->status }}</li>
</ul>
