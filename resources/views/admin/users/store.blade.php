@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Inserção de Usuário</h1>
    <hr>
    <form action="{{route('user.store')}}" method="post">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control"> --}}
        {{ csrf_field() }}
        <p class="form-group">
            <label for="">Nome do Usuário</label> <br>
            <input type="text" name="name" id="" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif">
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    {{$errors->first('name')}}
                </span>
            @endif
        </p>
        <p class="form-group">
            <label for="">Email do Usuário</label> <br>
            <input type="text" name="email" id="" value="{{old('email')}}" class="form-control @if($errors->has('email')) is-invalid @endif">

            @if($errors->has('email'))
                @foreach($errors->get('email') as $n)
                <span class="invalid-feedback" role="alert">
                    {{$n}}
                </span>
                @endforeach
            @endif
        </p>
        <p class="form-group">
            <label for="">Senha</label> <br>
            <input type="password" name="password" id="" value="" class="form-control  @if($errors->has('password')) is-invalid @endif">
            <br>
            @if($errors->has('password'))
                @foreach($errors->get('password') as $n)
                <span class="invalid-feedback" role="alert">
                    {{$n}}
                </span>
                @endforeach
            @endif
        </p>

        <p class="form-group">
            <label for="">Confirmar senha</label> <br>
            <input type="password" name="password_confirmation" id="" value="" class="form-control  @if($errors->has('password_confirmation')) is-invalid @endif">
            <br>
            @if($errors->has('password_confirmation'))
                @foreach($errors->get('password_confirmation') as $n)
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




