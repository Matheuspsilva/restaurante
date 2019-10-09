@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edição de Restaurante</h1>
    <hr>

    <form action="{{route('restaurant.update', ['restaurant' => $restaurant->id])}}" method="post">
        {{ csrf_field() }}
        <p class="form-group">
            <label for="">Nome do restaurante</label> <br>
        <input type="text" name="name" id="" value="{{$restaurant->name}}" class="form-control  @if($errors->has('name')) is-invalid @endif">
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
            <label for="">Endereço do restaurante</label> <br>
            <input type="text" name="address" id="" value="{{$restaurant->address}}" class="form-control  @if($errors->has('address')) is-invalid @endif">
            <br>
            @if($errors->has('address'))
                @foreach($errors->get('address') as $n)
                <span class="invalid-feedback" role="alert">
                    {{$n}}
                </span>
                @endforeach
            @endif
        </p>
        <p class="form-group">
            <label for="">Fale sobre o restaurante</label> <br>
            <textarea name="description" id="" cols="30" rows="10" class="form-control  @if($errors->has('address')) is-invalid @endif">{{$restaurant->description}}</textarea>
            <br>
            @if($errors->has('description'))
                @foreach($errors->get('description') as $n)
                <span class="invalid-feedback" role="alert">
                    {{$n}}
                </span>
                @endforeach
            @endif
        </p>

        <input type="submit" value="Atualizar" class="btn btn-success btn-lg">

    </form>
</div>

@endsection

