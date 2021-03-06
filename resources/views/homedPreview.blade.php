@extends('main')

@section('title', "| Food-Orders ")

@section('content')
    <div class = "container col-xs-12 form-group"><br>
		<h1 style="text-align:left; display:inline">Preview</h1><hr>
		<ul class="nav nav-tabs card-header-tabs" >
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-desert') }}" style="color:white" >Dessert & Ice Cream</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-sides') }}" style="color:white" >Sides</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-pizza') }}" style="color:white" >Pizza</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-curry') }}" style="color:white" >Curry</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-shawarma') }}" style="color:white" >Shawarma</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-wrap') }}" style="color:white" >Wrap</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-burgers') }}" style="color:white" >Burgers</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-grilled') }}" style="color:white" >Grilled</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-salads') }}" style="color:white" > Salads & cold Mezze</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('homed-orders-spdeals') }}" style="color:white" >Special deals</a>
			</li>
			</ul>
	</div>

	@if(count($orderItem))
	<div class = " container col-xs-12 form-group">
		<h2 style="text-align:center; display:inline: float:center"><u>Order Draft</u></h2>
	</div>
	<div class = "container form-group col-xs-12">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>SL</th>
					<th>Food Name</th>
					<th>Quantity</th>
					<th>Base Price</th>
					<th>Total</th>
				</tr>
			</thead>

			@foreach($orderItem as $or)

			<tr>
				<td>
					# 
				</td>

				<td>
					{{ $or->food_name }}
				</td>

				<td>
					{{ $or->quantity }}
				</td>

				<td>
					£ {{ $or->base_price }}
				</td>

				<td>
					£ {{ $or->total }}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<div class="container form-group col-xs-12 ">
		<form method="POST" action="{{ route('homed-confirm-order') }}">
			<div class = "form-group col-xs-4">
				<input type="text" class="form-control" value ="{{ $customerFinal}}"  name="customer_name" placeholder="Please Insert Customer Name">
			</div>
			<div class = "form-group col-xs-4">
				<input type="text" class="form-control" value ="{{ $customerCaller }}"  name="customer_caller_ID" placeholder="Please Insert Customer Caller ID">
			</div>
			<div class = "form-group col-xs-2">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="submit" value="Confirm" class="btn btn-success btn-md">
			</div>	
			<div class = "form-group col-xs-2"> 
				<a  href = "{{ route('homed-order-clear') }}" class="btn btn-danger btn-md" role = "button">Cancel</a>
            </div>

		</form>
	</div>
    @else
        <div class="container form-group">
        <br>
            <h3 style="text-align:center;">No Order Place Yet </h3>
        </div>
@endif
<br><br>
@endsection

@push('scripts')

@endpush

