<h1>Lista de Suportes</h1>
<hr>
<a href="{{ route('supports.create') }}">Criar</a>
<hr>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Body</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach($supports as $support)
            <tr>
                <td>{{ $support['subject'] }}</td>
                <td>{{ $support['status'] }}</td>
                <td>{{ $support['body'] }}</td>
                <td>
                    <a href="{{ route('supports.show', ['id' => $support['id']]) }}">Ver</a> |
                    <a href="{{ route('support.edit', ['id' => $support['id']]) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
