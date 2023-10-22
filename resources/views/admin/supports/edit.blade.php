<h1>Editando Suporte {{ $support->id }}</h1>
<hr>
<a href="{{ route('supports.index') }}">Listagem</a>
<hr>
<form action="{{ route('support.update', ['id' => $support->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" class="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Editar</button>
</form>
