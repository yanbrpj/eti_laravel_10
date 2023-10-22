<h1>Lista de Suportes</h1>

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
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>AÇÔES</td>
            </tr>
        @endforeach
    </tbody>
</table>
