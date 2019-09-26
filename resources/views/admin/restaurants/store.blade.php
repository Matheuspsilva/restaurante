<h1>Inserção de Restaurante</h1>
<hr>

<form action="{{route('restaurant.store')}}" method="post">
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
    {{ csrf_field() }}
    <p>
        <label for="">Nome do restaurante</label> <br>
        <input type="text" name="name" id="">
    </p>
    <p>
        <label for="">Endereço do restaurante</label> <br>
        <input type="text" name="address" id="">
    </p>
    <p>
        <label for="">Fale sobre o restaurante</label> <br>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </p>

    <input type="submit" value="Cadastrar">

</form>
