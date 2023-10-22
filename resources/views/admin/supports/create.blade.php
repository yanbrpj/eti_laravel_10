<h1>Criar Suporte</h1>
<hr>
<a href="{{ route('supports.index') }}">Listagem</a>
<hr>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<hr>
<form action="{{ route('support.store') }}" method="post">
    @csrf
    <input type="text" class="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ old('body') }}</textarea>
    <button type="submit">Criar</button>
</form>Request
