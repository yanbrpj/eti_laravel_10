<h1>Criar Suporte</h1>
<hr>
<a href="{{ route('supports.index') }}">Listagem</a>
<hr>
<form action="{{ route('support.store') }}" method="post">
    @csrf
    <input type="text" class="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Criar</button>
</form>
