@extends('admin.layout.main')
@section('title') Trang chủ
@endsection
@section('content')

<div class="col-7 m-auto">
	<div class="card">
		<div class="card-header text-center font-weight-bold">
			Sửa Thông Tin
		</div>
		<div class="card-body">
			
	{{Form::open(['route'=>['slide.update',$slide->id],'method'=>'put'])}}
	<div class="row ">
		
		<div class="form-group col-6">
			{{ Form::label('link','link : ')}}
			{{ Form::text('link',$slide->link,['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('name')}}</span> -->
		</div>
		<div class="form-group col-6">
			{{ Form::label('url_img','Url img : ')}}
			{{ Form::text('url_img',$slide->url_img,['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('description')}}</span> -->
		</div>	
		<div class="form-group col-6">
			{{ Form::label('display_order','DisPlay Order : ')}}
			{{ Form::text('display_order',$slide->display_order,['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('name')}}</span> -->
		</div>

	</div>
	<div class="form-group">
		{{ Form::submit('Lưu',['class'=>'btn btn-outline-success']) }}
		<a class="btn btn-outline-danger" href="">Quay lại</a>
	</div>
	{{ Form::close() }}
		</div>
	</div>
</div>
@endsection