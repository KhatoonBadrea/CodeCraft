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

  <select name="category_id" >
    @foreach ($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
        
    @endforeach
  </select>


    <button type="submit"  name='submit'> send </button>

</form>