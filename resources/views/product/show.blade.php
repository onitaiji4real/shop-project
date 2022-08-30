@extends('layouts.app')
@section('title', 'product show')
@section('content')

<h1>product show</h1>
<img width="600" src="{{ $product['imgUrl']}}" alt="">

@endsection

@section('inline_js')
@parent
@endsection