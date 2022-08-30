<form method="POST" action="{{ route('products.update', ['product' => $product['id'] ]) }}">
    @csrf
    @method('Patch')
    <input type="text" name="title">
    <button type="submit">submit</button>
</form>