<form method="post" action="{{ route('products.store') }}">
    @csrf
    <input type="text" name="title">
    <button type="submit">submit</button>
</form>