<h1>add new product</h1>

<form action="{{route('products.store')}}" method="POST">

    @csrf

    <label>title</label>
    <input type=text name='title'> <br><br>
    <label>description</label>
    <input type=text name='description'> <br><br>
    <label>price</label>
    <input type=text name='price'> <br><br>

    <label>Quantity</label>
    <input type="number" name="quantity"> <br><br>

    {{-- <select name='available'>
        <option value="1">true</option>
        <option value="0">false</option>
    </select> --}}


    <button type="submit"  name='submit'> send </button>

</form>