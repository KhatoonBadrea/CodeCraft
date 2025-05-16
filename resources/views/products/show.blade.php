<h1>Details</h1>

<p><strong>title:</strong> {{ $product->title }}</p>
<p><strong>description:</strong> {{ $product->description }}</p>
<p><strong>price:</strong> {{ $product->price }}</p>

<br>
<a href="{{ route('products.index') }}">Back</a>
