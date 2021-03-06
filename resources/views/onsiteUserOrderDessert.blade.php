@extends('usermain')

@section('title', "| Onsite-Orders ")

@section('content')
<div class="container">
<div class = "page-header container col-xs-12 form-group">
	<div class = "col-xs-10">
		<h1 style="text-align:center; display:inline">Place Onsite Orders</h1>
	</div>
	<div class = "col-xs-2"  >
		<a href= "{{ route('onsite-orders-preview') }}" class = "btn btn-md btn-primary" role= "button" >Preview</a>
	</div>
	</div>

	<div id="result" class = "container form-group col-xs-12">

	</div>
    <div class="card text-center">
        <div class="card-header">
			<ul class="nav nav-tabs card-header-tabs" >
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-drinks') }}" style="color:white" >Drinks</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-desert') }}" style="color:white" >Dessert & Ice Cream</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-sides') }}" style="color:white" >Sides</a>
			</li>

			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-pizza') }}" style="color:white" >Pizza</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-curry') }}" style="color:white" >Curry</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-shawarma') }}" style="color:white" >Shawarma</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-wrap') }}" style="color:white" >Wrap</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-burgers') }}" style="color:white" >Burgers</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-grilled') }}" style="color:white" >Grilled</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-salads') }}" style="color:white" > Salads & cold Mezze</a>
			</li>
			<li class="nav-item">
				<a class="TItem" href="{{ route('onsite-orders-spdeals') }}" style="color:white" >Special deals</a>
			</li>
			</ul>
        </div>
		
        <div class="container card-block">
		
			<h3 align="left"><u>Cakes</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-12">
					<div class="card">
						
						<div class="card-block">
						<h4 class="card-title">Cake</h4>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "cake" value="1">White Fruits</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "cake" value="2">Choco Choco Cream</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "cake" value="3">Tarte Strawberry</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "cake" value="4">Termeso</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "cake" value="5">Chocolate Fudge Cake</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "cake" value="6">Cheesecake</label>
                            </div><br>
                            <a  class="btn btn-success" id="add" value="A"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                            <a  class="btn btn-danger" id="minus" value="A"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>

		</div>

        <div class="container card-block">

			<h3 align="left"><u>Ice-Creams</u></h3><br/>
			<div class="row-xs-12" >

				<div class="col-xs-8">
					<div class="card">
					
						<div class="card-block">
							<h4 class="card-title">Ice Creams</h4>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "ice-creams" value="1">Chocolate IceCream</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "ice-creams" value="2"> Banana Funnel Ice-Cream </label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "ice-creams" value="3">Kiwi Ice-Cream</label>
                            </div>
                            <div class="checkbox-inline">
                                <label><input type="checkbox" name = "ice-creams" value="4">Venilla Ice-Cream</label>
                            </div>
                            <br>
                            <a  class="btn btn-success" id="add" value="B"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                            <a  class="btn btn-danger" id="minus" value="B"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Ice-Cream Fruits Salad </h4>
							<a class="btn btn-success" id="add" value="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
							<a class="btn btn-danger" id="minus" value="3"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>

			</div>

		</div>


		
    </div>
</div>

@endsection

@push('scripts')
<script>
	$(document).ready(function(){
		$('a').click(function(){
			var id = $(this).attr('id');
			var val = $(this).attr('value');
			if( id == "add"){
				//alert(id+" "+val);
				
				if(val == 'A'){
					var favorite = [];
					var toppings="";
					var cake = ["White","Choco","Tarte","Termeso","Chocolate","Chesse"];
					$.each($("input[name='cake']:checked"), function(){           
						favorite.push($(this).val());
						toppings+=(cake[$(this).val() -1 ]+" ");
					});
					toppings+="Cake";
					//alert(toppings);
					if(favorite.length==0)
						alert("Select Checkbox Properly !!");
					else{
						//alert(favorite.length);
						$.ajaxSetup({ 
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: "/onsite-orders/add-cake",
							method: "POST",
							data: {
								item:val,
								topping:toppings
								},
							dataType: "text",
							success: function(data){
								console.log(data);
							}
						});
					}
					
				}
				else if(val=='B' || val==3){
					var favorite = [];
					var toppings="";
					var ice = ["Chocolate","Banana","Kiwi","Venilla"];
					$.each($("input[name='ice-creams']:checked"), function(){            
						favorite.push($(this).val());
						toppings+=(ice[$(this).val() -1 ]+" ");

					});
					toppings+="Ice Creams";
					if(favorite.length==0 && val=='B')
						alert("Select Checkbox Properly !!");
					else{
						//alert(favorite.length);
						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: "/onsite-orders/add-cake",
							method: "POST",
							data: {
								item:val,
								topping:toppings
								},
							dataType: "text",
							success: function(data){
								console.log(data);
							}
						});
					}
					
				}
			}
			else if( id == "minus"){
				//alert(id+" "+val);
				if(val == 'A'){
					var favorite = [];
					var toppings="";
					var cake = ["White","Choco","Tarte","Termeso","Chocolate","Chesse"];
					$.each($("input[name='cake']:checked"), function(){           
						favorite.push($(this).val());
						toppings+=(cake[$(this).val() -1 ]+" ");
					});
					toppings+="Cake";
					//alert(toppings);
					if(favorite.length==0)
						alert("Select Checkbox Properly !!");
					else{
						//alert(favorite.length);
						$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: "/onsite-orders/delete-cake",
							method: "POST",
							data: {
								item:val,
								topping:toppings
								},
							dataType: "text",
							success: function(data){
								console.log(data);
							}
						});
					}
					
				}
				else if(val=='B' || val==3){
					var favorite = [];
					var toppings="";
					var ice = ["Chocolate","Banana","Kiwi","Venilla"];
					$.each($("input[name='ice-creams']:checked"), function(){            
						favorite.push($(this).val());
						toppings+=(ice[$(this).val() -1 ]+" ");

					});
					toppings+="Ice Creams";
					if(favorite.length==0 && val=='B')
						alert("Select Checkbox Properly !!");
					else{
						//alert(favorite.length);
						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							url: "/onsite-orders/delete-cake",
							method: "POST",
							data: {
								item:val,
								topping:toppings
								},
							dataType: "text",
							success: function(data){
								console.log(data);
							}
						});
					}
					
				}
			}
		});

	});
</script>
@endpush

