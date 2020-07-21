@extends('admin.layout.main')
@section('title','Product Detail')
@section('content')
<div class="page-header">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="">Admin</a></li>
		<li class="breadcrumb-item active" >Product Details</li>
	</ol>
</div>
<div class="row ml-1 col-md-12">
	@if (Session::has('message'))
	<p class="alert alert-success notification">{{ Session::get('message')}}</p> 
	@elseif(Session::has('err'))    
	<p class="alert alert-danger notification">{{ Session::get('err')}}</p>
	@endif
</div>
<div class="card">
	<div class="card-body">
		</div>
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th >#</th>
					<th >Name</th>
					<th >Product ID</th>
					<th>Size</th>
					<th>Color</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach($product_details as $key => $product_detail)
					<tr>
						<td >{{ ++$key }}</td>
						<td >{{ $product_detail->product->name }}</td>
						<td >{{ $product_detail->product_id }}</td>
						<td >{{ $product_detail->size }}</td>
						<td >{{ $product_detail->color }}</td>
						</td>
					</tr>
					@endforeach
				</tr>
			</tbody>
				
			
		</table>
	</div>
</div>
@endsection