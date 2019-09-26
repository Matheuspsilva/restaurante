<h1>Edição de Restaurante</h1>
<hr>

<form action="{{route('restaurant.update', ['restaurant' => $restaurant->id])}}" method="post">
    {{ csrf_field() }}
    <p>
        <label for="">Nome do restaurante</label> <br>
    <input type="text" name="name" id="" value="{{$restaurant->name}}">
    </p>
    <p>
        <label for="">Endereço do restaurante</label> <br>
        <input type="text" name="address" id="" value="{{$restaurant->address}}">
    </p>
    <p>
        <label for="">Fale sobre o restaurante</label> <br>
        <textarea name="description" id="" cols="30" rows="10">{{$restaurant->description}}</textarea>
    </p>

    <input type="submit" value="Cadastrar">

</form>
