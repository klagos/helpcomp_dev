@extends('layout')

@section('content')
	<div class="col-sm-8">
		<h2>
			{{ $product->name }}
			<a href="{{ route('products.edit', $product->id)}}" class="btn btn-default float-right">Editar</a>
		</h2>
		<p>
			{{ $product->imagen_url }}
		</p>
	</div>

	<div class="col-sm-4">
		@include('products.fragment.aside')
	</div>
@endsection