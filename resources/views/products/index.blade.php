<h1>All Products</h1>
<table border='1'>
    <thead>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>price</th>
            <th>Quantity</th>
            <th>Available</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->available}}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}">show</a>
            </td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            </td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        @endforeach
        </tr>
        </tbody>
    </table>
    <br><br>

    <a href=" {{route ('products.create')}}"> add product</a>
       