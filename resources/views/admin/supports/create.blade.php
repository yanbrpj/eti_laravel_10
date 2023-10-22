<h1>Criar Suporte</h1>
<hr>
<a href="{{ route('supports.index') }}">Listagem</a>
<hr>

<x-alert></x-alert>

<hr>
<form action="{{ route('support.store') }}" method="post">
    @include('admin.supports.partials.form')
</form>Request
