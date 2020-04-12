@extends('admin.layout.main')
@section('title') Trang chủ
@endsection
@section('content')

<div class="col-7 m-auto">
	
	<div class="card">
		<div class="card-header text-center font-weight-bold">
			Tạo Mới About
		</div>
		<div class="card-body">
			
	{{ Form::open(['url' => 'admin/about', 'method' => 'post']) }}
	<div class="row ">
		 
		<div class="form-group col-6 {{ $errors->has('link') ?'has-error':'' }}">
			{{ Form::label('title','Title : ')}}
			{{ Form::text('title','',['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('link')}}</span>
		</div>
		<div class="form-group col-6 {{ $errors->has('phone') ?'has-error':'' }}">
			{{ Form::label('phone','Số điện thoại : ')}}
			{{ Form::text('phone','',['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('phone')}}</span>
		</div>	
		<div class="form-group col-6 {{ $errors->has('content') ?'has-error':'' }}">
			{{ Form::label('content','Nội dung : ')}}
			{{ Form::text('content','',['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('content')}}</span>
		</div>
		<div class="form-group col-6 {{ $errors->has('email') ?'has-error':'' }}">
			{{ Form::label('email','Email : ')}}
			{{ Form::text('email','',['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('email')}}</span>
		</div>
		<div class="form-group col-6 ">
			{{Form::label('Logo:','',['class'=>'font-weight-bold'])}}
			{{Form::file('logo',null,['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('logo')}}</span>
		</div>

		<div class="form-group col-6 ">
			{{ Form::label('created_by','Create_by : ')}}
			{{ Form::text('created_by','',['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('logo')}}</span> -->
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