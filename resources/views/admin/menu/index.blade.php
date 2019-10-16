@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{route('menu.new')}}" class="float-right btn btn-success">Novo</a>
    <h1 class="float-left">Menus</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Restaurante</th>
                <th>Criado em</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($menu as $m)
        <tr>
        <td>{{$m->id}}</td>
            <td>{{$m->name}}</td>
            <td>
                <a href="{{route('restaurant.edit', ['restaurant' => $m->restaurant->id])}}">
                    {{$m->restaurant->name}}
                </a>
            </td>
            <td>{{$m->created_at}}</td>

            <td>{{$m->price}}</td>
            <td>
            <a href="{{route('menu.edit', ['menu' => $m -> id])}}" class="btn btn-primary">Editar</a>
            <a href="{{route('menu.remove', ['id' => $m -> id])}}" class="btn btn-danger">Excluir</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
