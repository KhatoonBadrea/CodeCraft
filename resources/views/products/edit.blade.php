<h1>edit a product</h1>

<form action="{{ route('products.update', $product->id) }}" method="post">
    @method('Put')
    @csrf

    <label>title</label>
    <input type=text name='title' value={{$product->title}}> <br><br>
    <label>description</label>
    <input type=text name='description' value="{{ $product->description }}"> <br><br>
    <label>price</label>
    <input type=text name='price' value="{{ $product->price }}"> <br><br>

    <button type="submit"  name='submit'> send </button>
    
</form>

    