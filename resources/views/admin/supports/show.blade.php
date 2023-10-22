<h1>Detalhe Suporte - ID: {{ $support->id }}</h1>
<hr>
<a href="{{ route('supports.index') }}">Listagem</a>
<hr>
<ul>
    <li>{{ $support->subject }}</li>
    <li>{{ $support->body }}</li>
    <li>{{ $support->status }}</li>
</ul>
<hr>
<a href="{{ route('support.edit', ['id' => $support->id]) }}">Editar Suporte</a>
<hr>
<form action="{{ route('support.destroy', ['id' => $support->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
