@extends('admin.layout.main')
@section('title') Trang chủ
@endsection
@section('content')

<div class="col-7 m-auto">
	<div class="card">
		<div class="card-header text-center font-weight-bold">
			Tạo Mới Slide
		</div>
		<div class="card-body">
			
	{{ Form::open(['url' => 'admin/slide', 'method' => 'post']) }}
	<div class="row ">
		 
		<div class="form-group col-6 {{ $errors->has('link') ?'has-error':'' }}">
			{{ Form::label('link','Link : ')}}
			{{ Form::text('link','',['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('link')}}</span>
		</div>
		<div class="form-group col-6 {{ $errors->has('url_img') ?'has-error':'' }}">
			{{ Form::label('url_img','Url img : ')}}
			{{ Form::text('url_img','',['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('url_img')}}</span>
		</div>	
		<div class="form-group col-6 {{ $errors->has('display_order') ?'has-error':'' }}">
			{{ Form::label('display_order','Display Order : ')}}
			{{ Form::text('display_order','',['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('display_order')}}</span>
		</div>
		
		<div class="form-group col-6 ">
			{{ Form::label('created_by','Create_by : ')}}
			{{ Form::text('created_by','',['class'=>'form-control'])}}
			
		</div>
		<div class="form-group col-6 ">
			{{ Form::label('updated_by','Update_by : ')}}
			{{ Form::text('updated_by','',['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('logo')}}</span> -->
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