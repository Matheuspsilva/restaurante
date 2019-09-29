<h1>Restaurantes</h1>
<a href="{{route('restaurant.new')}}">Novo</a>
<hr>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($restaurants as $r)
    <tr>
    <td>{{$r->id}}</td>
        <td>{{$r->name}}</td>
        <td>{{$r->created_at}}</td>
        <td>
        <a href="{{route('restaurant.edit', ['restaurant' => $r -> id])}}">Editar</a>
        <a href="{{route('restaurant.remove', ['id' => $r -> id])}}">Excluir</a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
