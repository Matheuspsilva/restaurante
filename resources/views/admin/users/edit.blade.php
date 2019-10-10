@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edição de Usuário</h1>
    <hr>

    <form action="{{route('user.update', ['user' => $user->id])}}" method="post">
        {{ csrf_field() }}
        <p class="form-group">
            <label for="">Nome do Usuário</label> <br>
        <input type="text" name="name" id="" value="{{$user->name}}" class="form-control  @if($errors->has('name')) is-invalid @endif">
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
            <label for="">Email do Usuário</label> <br>
            <input type="email" name="email" id="" value="{{$user->email}}" class="form-control  @if($errors->has('email')) is-invalid @endif">
            <br>
            @if($errors->has('email'))
                @foreach($errors->get('email') as $n)
                <span class="invalid-feedback" role="alert">
                    {{$n}}
                </span>
                @endforeach
            @endif
        </p>

        <p class="form-group">
            <label for="">Nova Senha</label> <br>
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
            <label for="">Confirme a senha</label> <br>
            <input type="password" name="confirm_password" id="" value="" class="form-control  @if($errors->has('confirm_password')) is-invalid @endif">
            <br>
            @if($errors->has('confirm_password'))
                @foreach($errors->get('confirm_password') as $n)
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

