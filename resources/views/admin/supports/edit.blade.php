<h1>Editando Suporte {{ $support->id }}</h1>
<hr>
<a href="{{ route('supports.index') }}">Listagem</a>
<hr>

<x-alert></x-alert>

<hr>
<form action="{{ route('support.update', ['id' => $support->id]) }}" method="post">
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support
    ])
</form>
