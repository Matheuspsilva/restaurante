<h1>Edição de Restaurante</h1>
<hr>

<form action="{{route('restaurant.update', ['restaurant' => $restaurant->id])}}" method="post">
    {{ csrf_field() }}
    <p>
        <label for="">Nome do restaurante</label> <br>
    <input type="text" name="name" id="" value="{{$restaurant->name}}">
    <br>
    @if($errors->has('name'))
    @foreach($errors->get('name') as $n)
        {{$n}}
    @endforeach
    @endif
    </p>
    <p>
        <label for="">Endereço do restaurante</label> <br>
        <input type="text" name="address" id="" value="{{$restaurant->address}}">
        <br>
        @if($errors->has('address'))
            @foreach($errors->get('address') as $n)
                {{$n}}
            @endforeach
        @endif
    </p>
    <p>
        <label for="">Fale sobre o restaurante</label> <br>
        <textarea name="description" id="" cols="30" rows="10">{{$restaurant->description}}</textarea>
        <br>
        @if($errors->has('description'))
            @foreach($errors->get('description') as $n)
                {{$n}}
            @endforeach
        @endif
    </p>

    <input type="submit" value="Cadastrar">

</form>
