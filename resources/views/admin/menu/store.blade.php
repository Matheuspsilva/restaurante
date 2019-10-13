@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Inserção de Cardápio</h1>
    <hr>
    <form action="{{route('menu.store')}}" method="post">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control"> --}}
        {{ csrf_field() }}
        <p class="form-group">
            <label for="">Nome do Cardápio</label> <br>
            <input type="text" name="name" id="" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif">
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    {{$errors->first('name')}}
                </span>
            @endif
        </p>
        <p class="form-group">
            <label for="">Preço</label> <br>
            <input type="text" name="price" id="" value="{{old('price')}}" class="form-control @if($errors->has('price')) is-invalid @endif">

            @if($errors->has('price'))
                @foreach($errors->get('price') as $m)
                <span class="invalid-feedback" role="alert">
                    {{$m}}
                </span>
                @endforeach
            @endif
        </p>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">

    </form>
</div>

@endsection




