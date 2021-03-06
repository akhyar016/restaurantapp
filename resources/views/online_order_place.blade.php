@extends('main')

@section('title', "| Online-Orders ")

@section('content')
    <div class = "page-header container col-xs-12 form-group">	
		<h1 style="text-align:left; display:inline">Food Ordering - </h1><h2 style="text-align:center; display:inline">(Place Your Online Order Here)</h3>	
    </div>
    <div class = "container col-xs-12 form-group">
        @include('_orderSearch')
    </div>
	<div id="result" class = "container form-group col-xs-12">
    
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
					<th>Action</th>
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
					{{ $or->base_price }}
				</td>

				<td>
					{{ $or->total }}
				</td>

				<td>
					<div>						
						<form method="GET" action="{{ route('online.newsaleItem.edit', $or->id) }}" style="display: inline-block;">
							<input type="submit" value="Update" role="button" class="btn btn-warning btn-sm">
						</form>

						<form method="GET" action="{{ route('online.newsale.delete', $or->id) }}" style="display: inline-block;">
							<input type="submit" value="Delete" role="button" class="btn btn-danger btn-sm">
						</form>
					</div>
				</td>

			</tr>
			@endforeach
			
		</table>
	</div>
	<div class="container form-group col-xs-12 ">
		<form method="POST" action="{{ route('online.newsale.save') }}">
            <div class = "form-group col-xs-5">
                @include('_onlineCustomerSearching')
            </div>
			<div class = "form-group col-xs-5">
				<select class = "form-control" name="category_id">
					<option name="category_id" value="1">Home Delivery</option>
					<option name="category_id" value="2">Take-Away</option>
				</select>
			</div>
			<div class = " form-group col-xs-1">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="submit" value="Confirm" class="btn btn-success">
			</div>	
			<div class = "form-group col-xs-1"> 
				<a  href = "{{ route('online.newsale.clear') }}" class="btn btn-danger " role = "button">Cancel</a>
			</div>
		</form>
        <div id="search_result" class = "container form-group col-xs-12"></div>
	</div>
@endif
<br><br>
@endsection

@push('scripts')
<script>
	$(document).ready(function(){
		$('#search_text').keyup(function(){
			var txt = $(this).val();
			if( txt != '') {
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/food-orders/searchOnlinefood",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#result').html(data);
					}
				});

			}
			else {
				$('#result').html('');

				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/food-orders/searchOnlinefood",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#result').html(data);
					}
				});
			}
		});
		$('#search_text').keydown(function(){
			var txt = $(this).val();
			if( txt != '') {
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/food-orders/searchOnlinefood",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#result').html(data);
					}
				});

			}
			else {
				$('#result').html('');
				
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/food-orders/searchOnlinefood",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#result').html(data);
					}
				});
			}
		});
    
        $('#search_customer_text').keyup(function(){
			var txt = $(this).val();
			if( txt != '') {
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/customer/search/online",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#search_result').html(data);
					}
				});

			}
			else {
				$('#search_result').html('');

				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/customer/search/online",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#search_result').html(data);
					}
				});
			}
		});
		$('#search_customer_text').keydown(function(){
			var txt = $(this).val();
			if( txt != '') {
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/customer/search/online",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#search_result').html(data);
					}
				});

			}
			else {
				$('#search_result').html('');
				
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/customer/search/online",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#search_result').html(data);
					}
				});
			}
		});
	});
</script>
@endpush

