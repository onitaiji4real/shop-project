@extends('layouts.app')
@section('title', 'products index')
@section('content')


<h1>products index</h1>

<div><a href="{{ route('products.create') }}">Create</a></div>
<hr>


@foreach ($products as $product)
<div>
    <a href="{{ route('products.show', ['product' => $product['id'] ]) }}">
        <img width="400" src="{{ $product['imgUrl'] }}">
    </a>
</div>
<div>
    <a href="{{ route('products.edit', ['product' => $product['id'] ]) }}">edit</a>
</div>

<form method="POST" action="{{ route('products.destroy', ['product' => $product['id'] ]) }}">
    @csrf
    @method('delete')

    <button type="submit">delete</button>
</form>
<hr>
@endforeach

@endsection

@section('inline_js')
@parent
@endsection