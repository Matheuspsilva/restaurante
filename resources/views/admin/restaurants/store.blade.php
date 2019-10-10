@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Inserção de Restaurante</h1>
    <hr>
    <form action="{{route('restaurant.store')}}" method="post">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control"> --}}
        {{ csrf_field() }}
        <p class="form-group">
            <label for="">Nome do restaurante</label> <br>
            <input type="text" name="name" id="" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif">
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    {{$errors->first('name')}}
                </span>
            @endif
        </p>
        <p class="form-group">
            <label for="">Endereço do restaurante</label> <br>
            <input type="text" name="address" id="" value="{{old('address')}}" class="form-control @if($errors->has('address')) is-invalid @endif">

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
            <textarea name="description" id=""  cols="30" rows="10" class="form-control  @if($errors->has('description')) is-invalid @endif">{{old('description')}}</textarea>
            @if($errors->has('description'))
                @foreach($errors->get('description') as $n)
                <span class="invalid-feedback" role="alert">
                    {{$n}}
                </span>
                @endforeach
            @endif
        </p>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">

    </form>
</div>

@endsection




