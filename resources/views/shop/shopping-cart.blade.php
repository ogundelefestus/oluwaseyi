@extends('layouts.master')

@section('title')
   Laravel Shopping Cart
@endsection

@section('content')

@if(Session::has('cart'))
<br>
<br>
<br>
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offeset-3 col-sm-offset-3">

<ul class="list-group">
@foreach($products as $product)

<li class="list-group-item">

<span class="badge">{{$product['qty']}}</span>
<strong>{{$product['item']['title']}}</strong>
<span class="label label-success">${{$product['price']}}</span>
<div class="btn-group">

<button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action<span class="caret"></span></button>
<ul class="dropdown-menu">

<li><a href="#">Reduce by 1</a></li>
<li><a href="#">Reduce All</a></li>


</ul>

</div>

	</li>
	@endforeach

</ul>
	</div>
</div>
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offeset-3 col-sm-offset-3">
	<strong>Total:${{$totalPrice}}</strong>


</div>
</div>
<hr>
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offeset-3 col-sm-offset-3">
	<a  href="{{ route('checkout')}}" class="btn btn-success">Checkout</a>


</div>
</div>

@else

<div class="row">
<div class="col-sm-6 col-md-6 col-md-offeset-3 col-sm-offset-3">
	<button type="button" class="btn btn-success">No Items in Cart!</button>


</div>
</div>

@endif
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>



@endsection