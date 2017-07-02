@extends('item_main')

@section('title', "| Food-Items ")

@section('content')

    <div class = "page-header">
		<div class = "form-group col-xs-7">
			<h1>Food Items</h1>
		</div>
		<div class = "form-group col-xs-5">
			<br>
			@include('_searching')
		</div>
	</div>
	<div id="result"></div>
	<br>
    <form method="POST" action="{{ route('create') }}">
        <div class="form-group col-xs-4">
			<hr>
            <input type="text" class="form-control" name="name" placeholder="Food Name">
        </div>

        <div class="form-group col-xs-2">
			<hr>
            <input type="text" class="form-control" name="code" placeholder="Menu ID">
        </div>

        <div class="form-group col-xs-2">
			<hr>
            <input type="text" class="form-control" name="stock" placeholder="Available Stock">
        </div>

        <div class="form-group col-xs-2">
			<hr>
            <input type="text" class="form-control" name="base_price" placeholder="Selling Price">
        </div>

        <div class="form-group col-xs-2">
			<hr>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="submit" value="Insert" class="btn btn-primary">

        </div>
    </form>

@if(count($items))
<div class = "container">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Food Name</th>
				<th>Menu ID</th>
				<th>Stock</th>
				<th>Base Price</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th>Actions</th>
			</tr>
		</thead>

		@foreach($items as $items)
	  	<tr>
	  		<td>
	  			{{ $items->name }}
	  		</td>
	  		<td>
	  			{{ $items->code }}
	  		</td>
	  		<td>
	  			{{ $items->stock }}
	  		</td>
	  		<td>
	  			{{ $items->base_price }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($items->created_at)) }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($items->updated_at)) }}
	  		</td>

	  		<td>
		  		<div>
		              <form method="GET" action="{{ route('get.edit', $items->id) }}" style="display: inline-block;">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
		              </form>
		       
		              <form method="GET" action="{{ route('delete', $items->id)}}" style="display: inline-block;">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <input type="submit" value="Delete" role="button" class="btn btn-danger btn-xs">
		              </form>
		        </div>
	        </td>
	  	</tr>
	  	@endforeach
	</table>
</div>
@endif
@endsection

@push('scripts')
<script>
	$(document).ready(function(){
		$('#search_text').keyup(function(){
			var txt = $(this).val();
			if( txt != '') {
				$.ajax({
					url: "/items/searchfood",
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
				$.ajax({
					url: "/items/searchfood",
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
	});
</script>
@endpush

