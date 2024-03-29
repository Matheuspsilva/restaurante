@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edição de Menu</h1>
    <hr>

    <form action="{{route('menu.update', ['menu' => $menu->id])}}" method="post">
        {{ csrf_field() }}
        <p class="form-group">
            <label for="">Nome do menu</label> <br>
        <input type="text" name="name" id="" value="{{$menu->name}}" class="form-control  @if($errors->has('name')) is-invalid @endif">
        <br>
        @if($errors->has('name'))
        @foreach($errors->get('name') as $n)
        <span class="invalid-feedback" role="alert">
            {{$n}}
        </span>
        @endforeach
        @endif
        </p>
        <p class="form-group">
            <label for="">Preço</label> <br>
            <input type="text" name="price" id="" value="{{$menu->price}}" class="form-control  @if($errors->has('price')) is-invalid @endif">
            <br>
            @if($errors->has('price'))
                @foreach($errors->get('price') as $n)
                <span class="invalid-feedback" role="alert">
                    {{$n}}
                </span>
                @endforeach
            @endif
        </p>

        <p class="form-group">
            <label for="">Restaurante</label>
            <select name="restaurant_id" id="" class="form-control">
                @foreach ($restaurants as $r)
                    <option value="{{$r->id}}"
                    @if ($menu->restaurant_id == $r->id)
                        selected
                    @endif
                    >{{$r->name}}</option>
                @endforeach
            </select>

            @if($errors->has('restaurant_id'))
                @foreach($errors->get('restaurant_id') as $m)
                <span class="invalid-feedback" role="alert">
                    {{$m}}
                </span>
                @endforeach
            @endif
        </p>

        <input type="submit" value="Atualizar" class="btn btn-success btn-lg">

    </form>
</div>

@endsection

